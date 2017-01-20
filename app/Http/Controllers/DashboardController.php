<?php
/**
 * Created by PhpStorm.
 * User: Sugito
 * Date: 1/20/2017
 * Time: 9:11 AM
 */

namespace App\Http\Controllers;


class DashboardController
{
    public function index()
    {
        return view('dashboard');
    }
}