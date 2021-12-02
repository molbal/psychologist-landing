<?php

namespace App\Http\Controllers;

use App\Models\Headline;
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

        return view('home', array_merge([], $params));
    }
}
