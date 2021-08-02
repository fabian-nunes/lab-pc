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

    public function store() {

        $name = \request('cName');
        $number = \request('cNumber');

        if ($name != "" && $number != "" && strlen($number) == 9) {
            $contact = new Contact();
            $contact->nome = $name;
            $contact->numero = $number;
            $contact->save();
        }

        return redirect('/contactos');
    }

    public function destroy() {
        $id = \request('idC');
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect('/contactos');
    }

    public function update() {
        $id = \request('idC');
        $contact = Contact::findOrFail($id);

        $name = \request('cNameE');
        $number = \request('cNumberE');

        if ($name != "" && $number != "" && strlen($number) == 9) {
            $contact->nome = $name;
            $contact->numero = $number;
            $contact->save();
        }
        return redirect('/contactos');
    }
}
