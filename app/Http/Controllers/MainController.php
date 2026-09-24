<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MainController extends Controller
{
    public function index()
    {
        $path = public_path('articles.json');
        
        $articles = [];
        if (File::exists($path)) {
            $json = File::get($path);
            $articles = json_decode($json, true);
        }

        return view('pages.welcome', ['news' => $articles]);
    }

    public function gallery($id)
    {
        $path = public_path('articles.json');
        $articleItem = null;

        if (File::exists($path)) {
            $json = File::get($path);
            $articles = json_decode($json, true);
            
            // Берем статью по числовому индексу массива ($id)
            $articleItem = $articles[$id] ?? null;
        }

        return view('pages.gallery', ['newsItem' => $articleItem]);
    }
}