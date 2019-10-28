<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionsController extends Controller
{
    public function index(){
        $sections = Section::all();
        return view('sections.index',compact('sections'));
    }
    public function create(){
        return view('sections.create');
    }
    public function storeSection(){
        $section = new Section();
        $section->name = request('name');
        $section->content = request('content');
        $section->type = request('type');
        $section->page_id = 1;
        $section->save();
        return redirect('/sections');
    }
}
