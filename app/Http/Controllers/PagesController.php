<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class PagesController extends Controller
{
    public function index() {
        $booking = Booking::all();
        return view('admin/index', compact('booking'));
    }

    public function delete($id){
        Booking::find($id)->delete();
        return redirect('/admin')->with('success', 'The record delete Successfully!');
    }
}
