<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use Spatie\Image\Image;

class IndexController extends Controller
{
    public function index()
    {
        return Image::load('example.jpg')
            ->optimize()
            ->save('def/def.jpg');
    }

    public function openAI()
    {
        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => 'Hello!'],
            ],
        ]);

        echo $result->choices[0]->message->content; // Hello! How can I assist you today?
    }
}
