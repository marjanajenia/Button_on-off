<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Button;

class ButtonController extends Controller
{
    public function index(){
        return view('backend.pages.button.index');
    }
}
