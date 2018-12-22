<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 13.12.18
 * Time: 20:25
 */

namespace App\Http\Controllers;


class HomeController
{
    public function index()
    {
        return view('site.home');
    }
}

