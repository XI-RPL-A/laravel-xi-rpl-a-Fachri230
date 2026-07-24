<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
         return 'NIM : 26001/2202.063 <br>
          Nama : Fachri Gemink <br>
          Kelas : 2RPLA';
    }
}
