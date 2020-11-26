<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentsRequest;
use App\Models\Banca;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DocumentsController extends Controller
{
  /**
   * Returns the index view of the Documents
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $documents = Documento::orderByDesc('updated_at')->paginate(10);

    return view('professor.documents.index', ['documents' => $documents]);
  }

  /**
   * Show the document data to the professor
   *
   * @param int $id The board ID
   * @param string $documentId The document ID
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function show($id, $documentId) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.documents.not-a-professor')
        ],
      ], 403);
    }

    $document = $board->getDocumentById($documentId);
    if (empty($document)) {
      return response()->json([
        'errors' => [
          'documentNotFound' => __('messages.data.documents.not-found')
        ],
      ], 404);
    }

    return response()->json([
      'name' => $document->nome,
      'date' => $document->data
    ]);
  }

  /**
	 * Destroy a Document by given id
	 *
	 * @param mixed $id The document id
   *
   * @return array
	 */
  public function destroy($id) {
    try {
      $document = Documento::find($id);
      $documentPath = 'documents/' . $document->board->id . '/' . $document->nome_arquivo_salvo;
      $document->delete();

      Storage::delete($documentPath);

      return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a Document
   *
   * @param mixed $id The id of the Document to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($id) {
    $document = Documento::find($id);

    return view('professor.documents.edit', ['document' => $document]);
  }

  /**
	 * Updates the Document and redirects to index route
	 *
   * @param mixed $id The document id
	 * @param Request $request Request
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update($id, Request $request) {
    // Validating request manually
    $rules = (new DocumentsRequest)->rules();
    $neededRules = [
      'nome' => $rules['nome'],
      'data' => $rules['data']
    ];

    if ($request->expectsJson()) {
      $requestPayload = $request->json();
      $documentData = [
        'nome' => $requestPayload->get('name'),
        'data' => $requestPayload->get('date')
      ];
    } else {
      $documentData = [
        'nome' => $request->input('name'),
        'data' => $request->input('date')
      ];
    }

    $validator = Validator::make($documentData, $neededRules);
    if ($validator->fails()) {
      if ($request->expectsJson()) {
        return response()->json([
          'errors' => [
            'invalidData' => $validator->errors()->first()
          ]
        ], 400);
      }

      return redirect()->back()->withErrors($validator->errors());
    }

    // Updating...
    Documento::find($id)->update($documentData);

    if ($request->expectsJson()) {
      return response()->json();
    }

    return redirect()->route('professor.documents.index');
  }

  /**
   * Creates a document
   *
   * @param int $id The board id
   * @param Request $request Request
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function create($id, Request $request) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.documents.not-a-professor')
        ],
      ], 403);
    }

    $file = $request->file('file');
    $documentData = [
      'nome' => $request->input('name'),
      'data' => $request->input('date'),
      'nome_arquivo' => $file->getClientOriginalName(),
      'nome_arquivo_salvo' => $file->hashName(),
      'tamanho_arquivo' => $file->getSize(),
      'banca_id' => $board->id,
      'membro_banca_id' => Auth::id()
    ];

    try {
      // Documents validation
      $rules = (new DocumentsRequest)->rules();
      $validator = Validator::make($documentData, $rules);

      // Validating
      if ($validator->fails()) {
        throw new \Exception($validator->errors()->first(), 400);
      }

      // Registering documento to the board
      $created = Documento::create($documentData);

      // Store the file
      Storage::putFile('documents/' . $board->id, $file);
    } catch (\Exception $e) {
      if ($e->getCode() === 400) {
        return response()->json([
          'errors' => [
            'invalidData' => $e->getMessage()
          ]
        ], $e->getCode());
      }

      return response()->json([
        'errors' => [
          'unexpected' => __('messages.errors.unexpected'),
        ]
      ], 500);
    }

    return response()->json([ 'document_id' => $created->id ]);
  }
}

