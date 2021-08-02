<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index() {

        $contact = Contact::simplePaginate(10);

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

        return redirect('/contactos')->with('alert', 'Deleted!');
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
