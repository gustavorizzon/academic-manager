<?php

namespace App\Http\Controllers\AllMembers;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
  /**
   * Downloads the requested file if the professor has the sufficient rights
   *
   * @param int $id The document id
   */
  public function download($id) {
    $document = Documento::find($id);

    if (empty($document)) {
      return response('', 404);
    }

    if (Gate::denies('download-document', $document)) {
      return response('', 401);
    }

    return Storage::download(
      'documents/' . $document->banca_id . '/' . $document->nome_arquivo_salvo,
      $document->nome_arquivo
    );
  }
}
