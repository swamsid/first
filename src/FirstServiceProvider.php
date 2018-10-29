<?php

namespace Swamsid\First;

use Illuminate\Support\ServiceProvider;

class FirstServiceProvider extends ServiceProvider {
	public function boot() {
		$this->loadRoutesFrom(__DIR__.'/Routes/web.php');
	}

	public function register() {

	}
}