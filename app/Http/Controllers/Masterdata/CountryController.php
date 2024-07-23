<?php

namespace App\Http\Controllers\Masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masterdata\Country;

class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::all();
        return view('masterdata.country', compact('countries'));
    }
}
