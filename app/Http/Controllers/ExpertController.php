<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        $pages  = DB::table('list_experts')->where('name', 'Панченко Володимир')->all();

        echo $pages->prof;

        //$pages = DB::table('list_experts')->get();

        //return view('sites.list', ['pages' => $pages]);
    }
}
