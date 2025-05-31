<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use App\Http\Requests\StoreNewsEventRequest;
use App\Http\Requests\UpdateNewsEventRequest;
use App\services\Helper;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class NewsEventController extends Controller
{   
    

    public function __construct(public Helper $helper)
    {   
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsEvents = NewsEvent::all();
        return view('admin.news.index', compact('newsEvents'));
    }



    public function getAllNews()
    {
        
       $newsEvents = $this->helper->filterNews();

        return response()->json([
            'newsEvents' => $newsEvents,
        ], 200);


    }


    public function getFullNews(NewsEvent $newsEvent)
    {
        $otherNews =  $this->helper->getNews();

        return view('pages.news', compact('newsEvent', 'otherNews'));
    }

    public function filter($currentType)
    {
   

        $newsEvents = $this->helper->filterNews($currentType);

        return response()->json([
            'newsEvents' => $newsEvents

        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(NewsEvent $news) {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsEventRequest $request)
    {
        $fileName = $this->handleFileUpload($request, 'photo');

        $news = NewsEvent::create([
            'title' => $request->title,
            'type' => $request->type,
            'location' => $request->location,
            'event_date' => $request->event_date ?? null,
            'event_time' => $request->event_time ?? null,
            'event_venue' => $request->event_venue ?? null,
            'news_content' =>  $request->news_content ?? null,
            'photo' =>  $fileName

        ]);

        if (!$news) {
            ToastMagic::error('Error occured while creating news/events');
            return back();
        }

        ToastMagic::success('News/events created successfully');
        return back();
    }


    public function handleFileUpload(Request $request, string $field): ?string
    {
        if (!$request->hasFile($field)) {
            Log::error(message: "File upload failed: No file received for field '{$field}'");
            return null;
        }

        $uploadedFile = $request->file($field);
        $rad = mt_rand(1000, 9999);

        $fileName = md5($uploadedFile->getClientOriginalName()) . $rad . '.' . $uploadedFile->getClientOriginalExtension();

        //  $filePath =  $uploadedFile->storeAs('uploads', $fileName, 'public');

        $filePath = $uploadedFile->move(public_path('uploads'), $fileName);


        if (!$filePath) {
            Log::error(message: "File upload failed: Unable to store file '{$fileName}'");
            return null;
        }

        return  $fileName;
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
    public function edit(NewsEvent  $newsEvent)
    {
        return view('admin.news.edit', compact('newsEvent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreNewsEventRequest $request, NewsEvent $newsEvent)
    {
        $fileName = $this->handleFileUpload($request, 'photo');

        $newsEventData = $newsEvent->update([
            'title' => $request->title,
            'type' => $request->type,
            'location' => $request->location,
            'event_date' => $request->event_date ?? null,
            'event_time' => $request->event_time ?? null,
            'event_venue' => $request->event_venue ?? null,
            'news_content' =>  $request->news_content ?? null,
            'photo' =>  $fileName

        ]);
        if (!$newsEventData) {
            ToastMagic::error('Error occured while updating news/events');
            return back();
        }

        ToastMagic::success('News/events updated successfully');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsEvent $newsEvent)
    {
        if ($newsEvent->delete()) {
            ToastMagic::success('News/events deleted successfully');
            return back();
        };

        ToastMagic::error('Unable to delete news/events');
        return back();
    }
}
