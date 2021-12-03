<?php

namespace App\Http\Controllers;

use App\Models\Headline;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{

    /**
     * Serves the homepage.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {

        $params = [];
        foreach (['about_guests'] as $fetch) {
            $params[$fetch] = Headline::text($fetch);
        }

        return view('programs', array_merge([
            'programs' => Program::listVisible()
        ], $params));
    }

    public function get($id, $name) {
        $program = Program::whereId($id)->firstOrFail();

        return view('program', [
           'program' => $program
        ]);
    }
}
