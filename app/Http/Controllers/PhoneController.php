<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        $phone=Phone::get();
       return $phone;
    //    return view('users.index',compact('users'));

    }
}
