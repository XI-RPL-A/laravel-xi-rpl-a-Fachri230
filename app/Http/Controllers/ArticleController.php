<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles ($id) {
        echo "Ini Merupakan Halaman Artikel Dengan ID ". $id;
    }
}
