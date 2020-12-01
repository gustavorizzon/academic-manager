<?php

namespace Tests\Unit;

use App\Models\Banca;
use App\Models\Frequencia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class BoardTest extends TestCase
{
  protected function setUp(): void {
    parent::setUp();

    DB::beginTransaction();
  }

  protected function tearDown(): void
  {
    parent::tearDown();

    DB::rollBack();
  }

  /**
   * A basic unit test example.
   *
   * @return void
   */
  public function testBoardHasNextClass()
  {
    $now = Carbon::now()->toDateString();

    $board = Banca::all()->random()->first();
    $frequency = Frequencia::create([
      'data' => $now,
      'resumo_aula' => 'Lorem ipsum.',
      'banca_id' => $board->id
    ]);

    $this->assertTrue($board->hasNextClass());
    $this->assertTrue($board->getNextClass()->data === $now);
  }
}
