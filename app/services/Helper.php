<?php

namespace App\services;

use App\Models\NewsEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class Helper
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }


    public function getNews()
    {
        $newsEvents = NewsEvent::inRandomOrder()->take(3)->get()->map(function ($newsEvent) {

            $newsEvent->news_content = Str::limit($newsEvent->news_content, 100);
            return $newsEvent;
        });


        return $newsEvents;
    }





    public function filterNews($currentType = null)
    {
        $query = NewsEvent::query();

        if ($currentType !== null && $currentType !== 'all') {
            $query->where('location', $currentType);
        }

        // Choose either random order or specific column order
        $query->inRandomOrder();

        $newsEvents = $query->paginate(6);

        // Truncate the news_content after pagination
        $newsEvents->getCollection()->transform(function ($newsEvent) {
            $newsEvent->news_content = Str::limit($newsEvent->news_content, 100);
            return $newsEvent;
        });

    

        return $newsEvents;
    }
}
