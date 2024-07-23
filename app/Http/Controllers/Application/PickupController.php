<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengiriman;

class PickupController extends Controller
{
    public function index()
    {
        $pengiriman = Pengiriman::where('status','=', '1')
                                ->where('status','!=','7')
                                ->where('pickup','!=','y')
                                ->orderBy('id_pengiriman', 'desc')
                                ->take(120)
                                ->get();
        return view('application.pickup', compact('pengiriman'));
    }
}
