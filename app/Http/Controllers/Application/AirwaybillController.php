<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengiriman;

class AirwaybillController extends Controller
{
    public function index()
    {
        $pengiriman = Pengiriman::orderBy('id_pengiriman', 'desc')->take(300)->get();
        return view('application.airwaybill', compact('pengiriman'));
    }
}
