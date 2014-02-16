<?php

class UsersController extends BaseController {

	/**
	 * User Repository
	 *
	 * @var User
	 */
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function connexion()
	{
        $credentials = array(
            'name' =>  Input::get('name'),
            'password' =>  Input::get('password'));

        if( Input::get('remember') ){
	      	if ( Auth::attempt($credentials, true)){
	      		return Redirect::route('home')
	      			->with('flash_notice', 'Votre connexion s\'est effectuée avec succes.');
 
	        }else{
	            return Redirect::route('login')
			        ->with('flash_error', 'Votre combinaison nom/mot-de-passe est incorrecte.')
			        ->withInput();
	        }
	    }else{
	     	if ( Auth::attempt($credentials) ) {
            	return Redirect::route('home')
            		->with('flash_notice', 'Votre connexion s\'est effectuée avec succes.');
 
	        }else{
	            return Redirect::route('login')
			        ->with('flash_error', 'Votre combinaison nom/mot-de-passe est incorrecte.')
			        ->withInput();
	        }
	    }
	}

	public function logout()
	{
        Auth::logout();
        return Redirect::route('home')
        	->with('flash_notice', 'Votre déconnection est un succes.');
	}

}
