<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        $first = request('start');
        $last  = request('last');

        if ($first == null) {
            $first = 1;
            $last = 10;
        }

        $contact = Contact::where([
            ['id', '>=', $first]
        ])->take(10)->get();

        return view('contacts', ['contacts' => $contact]);
    }
}
