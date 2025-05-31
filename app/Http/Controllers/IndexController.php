<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use App\services\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class IndexController extends Controller
{   
    public function __construct(public Helper $helper)
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $newsEvents = $this->helper->getNews();

       Log::info($newsEvents);
       return view('index', compact('newsEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
