<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('homepage');
    }

    public function train_list(){
        $trains = Train::all();
        return view('trainsListPage', compact('trains'));
    }
}
