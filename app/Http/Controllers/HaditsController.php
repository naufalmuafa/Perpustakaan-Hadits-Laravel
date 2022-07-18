<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hadits;

class HaditsController extends Controller {
    function list() {
        return Hadits::all();
    }

    function cariHadits($key) {
        return Hadits::WHERE('terjemah', 'Like', "%$key%")->get();
    }
    
}