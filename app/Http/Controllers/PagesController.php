<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    public function index(){
        $pages = Page::all();
        return view('pages.index',compact('pages'));
    }
    public function page($name){
        return view('pages.page',compact('name'));
    }
    public function create(){
        return view('pages.create');
    }
    public function storePage(){
        $page = new Page();
        $page->name = request('name');
        $page->save();
        return redirect('/pages');
    }
}
