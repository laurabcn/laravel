<?php

class AuthController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function getLogin(){
		return View::make("auth.login");
	}
}
