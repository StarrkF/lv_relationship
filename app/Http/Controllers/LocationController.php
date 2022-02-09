<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function get()
    {
       dd(Location::get(),DB::table('countries')->get());
    }
}
