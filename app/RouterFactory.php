<?php

namespace App;

use Nette,
	 Nette\Application\Routers\RouteList,
	 Nette\Application\Routers\Route;

class RouterFactory {

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter() {
		$router = new RouteList();
		$router[] = new Route('kurzy', 'Web:kurzyAstroKonstelace', Route::ONE_WAY);
		$router[] = new Route('poradenstvi-terapie', 'Web:energieKranioterapie', Route::ONE_WAY);
		$router[] = new Route('kurz-astrologie', 'Web:astroPoradenstvi', Route::ONE_WAY);
		$router[] = new Route('[<action>]', 'Web:amarhea');
		return $router;
	}

}
