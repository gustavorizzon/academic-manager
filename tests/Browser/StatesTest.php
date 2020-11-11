<?php

namespace Tests\Browser;

use App\Models\MembroInstituicao;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StatesTest extends DuskTestCase
{
  private $authUser;
  private $newStateName = 'A New Test State';
  private $editedStateName = 'A Edited Test State';

  protected function setUp(): void
  {
    parent::setUp();

    $this->authUser = MembroInstituicao::where('login', 'admin')->first();

    $this->browse(function (Browser $browser) {
      $browser->loginAs($this->authUser);
    });
  }

  /**
   * Create a new state
   *
   * @return void
   */
  public function testCreateState()
  {
    $this->browse(function (Browser $browser) {
      $browser->assertAuthenticatedAs($this->authUser)
              ->visit('/admin')
              ->clickLink(__('States'))
              ->clickLink(__('New'))
              ->type('nome', $this->newStateName)
              ->type('uf', 'TS')
              ->clickLink(__('Create!'), 'button')
              ->assertSee($this->newStateName);
    });
  }

  /**
   * Editing the new State
   *
   * @return void
   */
  public function testEditState() {
    $this->browse(function (Browser $browser) {
      // Finding the entry and entering edit mode
      $browser->assertAuthenticatedAs($this->authUser)
              ->visit('/admin')
              ->clickLink(__('States'))
              ->script([
                "$(\"td:contains('{$this->newStateName}')\").parent('tr').find(\"a[title='" . __('Edit') . "']\").get(0).click();"
              ]);

      // Editing the information and saving
      $browser->type('nome', $this->editedStateName)
              ->clickLink(__('Save!'), 'button')
              ->assertSee($this->editedStateName);
    });
  }
}
