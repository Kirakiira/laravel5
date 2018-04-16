<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Socialite;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the Github authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        //$user->token;
    }
}
