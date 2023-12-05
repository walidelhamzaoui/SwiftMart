<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardEditorController extends Controller
{
    public function index(){
        return view('user.editor.dashboard');
    }
}
