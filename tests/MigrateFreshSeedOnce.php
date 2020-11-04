<?php

namespace Tests;

use Illuminate\Support\Facades\Artisan;

trait MigrateFreshSeedOnce {
  /**
   * If true, setup has run at least once.
   * @var boolean
   */
  protected static $setUpHasRunOnce = false;

  /**
   * SetUp a fresh database test environment
   *
   * @return void
   */
  protected function setUp(): void
  {
    parent::setUp();

    if (!static::$setUpHasRunOnce) {
      Artisan::call('migrate:fresh');
      Artisan::call('db:seed', ['--class' => 'TestEnvironmentSeeder']);

      static::$setUpHasRunOnce = true;
    }
  }
}
