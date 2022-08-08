<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\Headline;
use App\Models\Program;
use App\Models\Publication;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {

        $params = [];
        foreach (['about_me'] as $fetch) {
            $params[$fetch] = Headline::text($fetch);
        }

        $publications = Publication::orderByDesc('year')->get();
        return view('about_me', array_merge([
            'publications' => $publications
        ], $params));
    }

    public function gallery() {
        return view('gallery',[
            'gallery' => GalleryImage::paginate()
        ]);
    }
}
