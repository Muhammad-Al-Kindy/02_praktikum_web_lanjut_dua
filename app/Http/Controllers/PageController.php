<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }
    public function about(){
        echo "NIM\t\t:2141762057<br>Nama\t\t:Muhammad Al Kindy";
    }
    public function articles($id){
        echo "Halaman Artikel dengan Id ".$id;
    }
}