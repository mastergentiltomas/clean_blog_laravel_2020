<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
  public function show(int $id = 1){
    $pages = Page::find($id);
    return view('pages.show', compact('pages'));
}
}
