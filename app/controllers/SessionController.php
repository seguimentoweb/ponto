<?php

class SessionController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('session.login');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::attempt(Input::only('email', 'password'))) {
			return Redirect::intended('/')->with('alert', Array('type'=>'success', 'message'=>'Seja bem vindo.'));
		}

		return Redirect::back()->withInput()->with('alert', Array('type'=>'danger', 'message'=>'Usuário e/ou senha incorretos.'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::to('/login');
	}


}
