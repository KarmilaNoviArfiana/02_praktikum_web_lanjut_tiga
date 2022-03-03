<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program(){
        return "<h3>berikut adalah link untuk daftar program<h3> <br>
                <a href=https://www.educastudio.com/program/karir>Program 1</a> <br>
                <a href=https://www.educastudio.com/program/magang>Program 2</a>";
    }
}
