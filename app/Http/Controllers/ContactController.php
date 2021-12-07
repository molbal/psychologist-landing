<?php

namespace App\Http\Controllers;

use App\Models\Headline;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {

        $params = [];
        foreach (['contact_phone', 'contact_email'] as $fetch) {
            $params[$fetch] = Headline::text($fetch);
        }

        return view('contact', array_merge([], $params));
    }
}
