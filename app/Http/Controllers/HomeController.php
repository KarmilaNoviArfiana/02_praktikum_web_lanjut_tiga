<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return "<h2>Selamat Datang<h2> <br>
                <h3>ini adalah halaman home<h3>";
    }
}
