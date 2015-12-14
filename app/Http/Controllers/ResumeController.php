<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ResumeController extends Controller
{
    public function index()
    {
        return view('resume.index');
    }
}
