<?php

namespace Tests\Unit;

use App\Models\MembroInstituicao;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class MembersTest extends TestCase
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
   * Test if at least one professor exists
   *
   * @return void
   */
  public function testAtLeastOneProfessorMemberExists() {
    $this->assertDatabaseHas(
      'membros_instituicao',
      [ 'tipo_membro' => MembroInstituicao::PROFESSOR ]
    );
  }

  /**
   * Test if at least one student exists
   *
   * @return void
   */
  public function testAtLeastOneStudentMemberExists() {
    $this->assertDatabaseHas(
      'membros_instituicao',
      [ 'tipo_membro' => MembroInstituicao::STUDENT ]
    );
  }

  /**
   * Test if at least one coordinator exists
   *
   * @return void
   */
  public function testAtLeastOneCoordinatorMemberExists() {
    $this->assertDatabaseHas(
      'membros_instituicao',
      [ 'tipo_membro' => MembroInstituicao::COORDINATOR ]
    );
  }

  /**
   * Test if at least one admin member exists
   *
   * @return void
   */
  public function testAtLeastOneAdminMemberExists() {
    $this->assertDatabaseHas(
      'membros_instituicao',
      [ 'tipo_membro' => MembroInstituicao::ADMIN ]
    );
  }
}
