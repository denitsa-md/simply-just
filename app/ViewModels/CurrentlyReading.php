<?php

namespace App\ViewModels;

use App\DTOs\CurrentlyReadingShelf;
use Illuminate\Support\Facades\Http;
use Statamic\View\ViewModel;

class CurrentlyReading extends ViewModel
{
    const CURRENTLY_READING_URL = 'https://www.goodreads.com/review/list/12825719.xml?key=oD1B4DpE9XHMus1pS0Q8g&shelf=currently-reading&v2';

    public function data():array
    {
        try {
            $response = Http::get(self::CURRENTLY_READING_URL);

            $currentlyReading = (new CurrentlyReadingShelf($response->body()))->getBooksAsArrays();
        } catch (\Exception $exception) {
            $currentlyReading = [];
        }

        return [
            'books' => $currentlyReading,
        ];
    }
}
