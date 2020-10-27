<?php

namespace Tests\Unit;

use App\Models\MembroInstituicao;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminMemberTest extends TestCase
{
  /**
   * Test if the admin user is an Admin by its type
   *
   * @return void
   */
  public function testIfAdminUserIsAdmin()
  {
    $mi = MembroInstituicao::where('login', 'admin')->first();

    $this->assertTrue(
      ($mi->tipo_membro == MembroInstituicao::ADMIN),
      "Admin account should have 'tipo_membro' attribute set as: " . MembroInstituicao::ADMIN
    );
  }

  /**
   * Test if the admin user password is actualy the string
   * "admin" as default specified in the seeder.
   *
   * @return void
   */
  public function testIfAdminUserPasswordIsAdmin()
  {
    $mi = MembroInstituicao::where('login', 'admin')->first();

    $this->assertTrue(
      Hash::check('admin', $mi->senha),
      "Admin account should have the password 'admin' by default."
    );
  }
}
