<?php

namespace App\Http\Controllers;

use App\Models\Headline;
use App\Models\Program;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LandingController extends Controller
{

    /**
     * Serves the homepage.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {

        $params = [];
        foreach (['home_title', 'home_subtitle'] as $fetch) {
            $params[$fetch] = Headline::text($fetch);
        }

        $publications = Publication::orderByDesc('year')->limit(3)->get();
        return view('home', array_merge([
            'publications' => $publications,
            'programs' => Program::listVisible()->pluck('name')->implode(', ')
        ], $params));
    }
}
