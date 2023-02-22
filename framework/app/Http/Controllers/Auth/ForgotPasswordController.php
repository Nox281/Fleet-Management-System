<?php

namespace App\Http\Controllers\Auth;

use App;
use App\Http\Controllers\Controller;
use ayoubgr;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;

    public function __construct()
    {
        App::setLocale(ayoubgr::get('language'));
        $this->middleware('guest');
    }
}
