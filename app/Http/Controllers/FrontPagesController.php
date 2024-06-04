<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Hash;

class FrontPagesController extends Controller
{
    public function index() {
        return view('frontend/index');
    }

    public function booking() {
        return view('frontend/index1');
    }

    public function add(Request $req)
    {
        $data = new Booking();
    
        $data->userName = $req->input('UserName');
        $data->password = Hash::make($req->Password);;
        $data->fullName = $req->input('FullName');
        $data->city = $req->input('City');
        $gender = null;

        if ($req->has('gender_male')) {
            $gender = 'male';
        } elseif ($req->has('gender_female')) {
            $gender = 'female';
        } elseif ($req->has('gender_other')) {
            $gender = 'other';
        }
        $data->gender = $gender;
        $data->country = $req->input('Country');
    
        $data->save();
    
        return redirect('/')->with('success', 'Record added successfully');
    }
}
