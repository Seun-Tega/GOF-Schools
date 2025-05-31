<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $student = Student::count();


        $events = NewsEvent::where('type', 'events')->count();
        $news = NewsEvent::where('type', 'news')->count();
        $nigeria = NewsEvent::where('location', 'nigeria')->count();
        $cote =   $news = NewsEvent::where('location', 'cote')->count();

        return view('admin.dashboard', compact('student', 'events', 'news', 'nigeria', 'cote'));
    }
}
