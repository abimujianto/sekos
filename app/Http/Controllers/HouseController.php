<?php

namespace App\Http\Controllers;

use App\Models\House ;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index(){
        $house = House::all();
        return view('kelola.vkelola', compact(['house']));
    }

}
