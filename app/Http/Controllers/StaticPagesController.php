<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/16
 * Time: 19:13
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StaticPagesController extends Controller
{
    public function home(){
        return view('static_pages/home');
    }

    public function help(){
        return view('static_pages/help');
    }
    public function about(){
        return view('static_pages/about');
    }
}