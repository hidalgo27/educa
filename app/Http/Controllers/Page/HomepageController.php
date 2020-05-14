<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return(view('page.home'));
    }
    public function cursos(){
        return(view('page.cursos'));
    }
    public function clases(){
        return(view('page.clases'));
    }
    public function video(){
        return(view('page.video'));
    }
    public function video_list(){
        return view('page.videoList');
    }
}
