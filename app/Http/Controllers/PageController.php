<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "NIM\t\t:2141762057<br>Nama\t\t:Muhammad Al Kindy";
    }
    public function articles($id){
        return "Halaman Artikel dengan Id ".$id;
    }
}
