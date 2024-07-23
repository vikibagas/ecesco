<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengiriman;

class BookingController extends Controller
{
    public function index()
    {
        $pengiriman = Pengiriman::where('status', 1)->orderBy('id_pengiriman', 'desc')->take(120)->get();
        return view('application.booking', compact('pengiriman'));
    }
}
