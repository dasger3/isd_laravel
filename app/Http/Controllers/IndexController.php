<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Article_expert;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $users = DB::table('article_experts')->paginate(6);
        $users = Article_expert::orderBy('created_at', 'desc')->get();
        return view('sites.index', ['users' => $users]);
    }
}
