<?php

namespace App\Http\Controllers\Auth;

use App;
use App\Http\Controllers\Controller;
use ayoubgr;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{

    use ResetsPasswords;

    protected $redirectTo = 'admin/';

    public function __construct()
    {
        App::setLocale(ayoubgr::get('language'));
        $this->middleware('guest');
    }
}
