<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
  /**
   * Test a login flow using the admin user
   *
   * @return void
   */
  public function testAdminLoginAndAfterPath() {
    $this->browse(function (Browser $browser) {
      return  $browser->visit('/login')
                      ->type('login', 'admin')
                      ->type('password', 'admin')
                      ->press(__('login.form.submit'))
                      ->assertPathIs('/admin')
                      ->logout();
    });
  }

  /**
   * Test login flow for the coordinator user
   *
   * @return void
   */
  public function testCoordinatorLoginAndAfterPath() {
    // Performing the test
    $this->browse(function (Browser $browser) {
      return  $browser->visit('/login')
                      ->type('login', 'coordinator')
                      ->type('password', 'coordinator')
                      ->press(__('login.form.submit'))
                      ->assertPathIs('/coordinator')
                      ->logout();
    });
  }

  /**
   * Test login flow for the professor user
   *
   * @return void
   */
  public function testProfessorLoginAndAfterPath() {
    // Performing the test
    $this->browse(function (Browser $browser) {
      return  $browser->visit('/login')
                      ->type('login', 'professor')
                      ->type('password', 'professor')
                      ->press(__('login.form.submit'))
                      ->assertPathIs('/professor')
                      ->logout();
    });
  }

  /**
   * Test login flow for the student user
   *
   * @return void
   */
  public function testStudentLoginAndAfterPath() {
    // Performing the test
    $this->browse(function (Browser $browser) {
      return  $browser->visit('/login')
                      ->type('login', 'student')
                      ->type('password', 'student')
                      ->press(__('login.form.submit'))
                      ->assertPathIs('/student')
                      ->logout();
    });
  }
}
