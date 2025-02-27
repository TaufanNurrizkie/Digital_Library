<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $topbooks = Book::latest()->get()->all();
        return view('homepage', compact('topbooks'));
    }
}
