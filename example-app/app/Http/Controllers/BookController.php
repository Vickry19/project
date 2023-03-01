<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BookController extends Controller
{
    public function index(){
        return view('book');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'',
            'email'=>'',
            'phone'=>'',
            'address'=>'',
            'arrivals'=>'',
        ]);

        User::create($validated);
        return back();
    }
}
