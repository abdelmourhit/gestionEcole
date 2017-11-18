<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Pparent;

class selectParentController extends Controller
{
    public function index(){
        $listeParent= Pparent::all();
        return view('selectionParent', ['pparents'=> $listeParent]);
    }
}
