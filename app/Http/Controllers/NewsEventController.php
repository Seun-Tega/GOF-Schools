<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use App\Http\Requests\StoreNewsEventRequest;
use App\Http\Requests\UpdateNewsEventRequest;

class NewsEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.news.index');
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
    public function store(StoreNewsEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsEvent $newsEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsEvent $newsEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsEventRequest $request, NewsEvent $newsEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsEvent $newsEvent)
    {
        //
    }
}
