<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function products(){
        return "<h3>berikut adalah link untuk daftar produk<h3> <br>
                <a href=https://www.educastudio.com/category/marbel-edu-games>Product 1</a> <br>
                <a href=https://www.educastudio.com/category/riri-story-books>Product 2</a>";
    }
}
