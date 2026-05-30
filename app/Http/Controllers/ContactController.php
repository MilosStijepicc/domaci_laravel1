<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function getAllContacts()
    {
        $allContacts = ContactModel::all();
        return view('allContacts', compact('allContacts'));
    }
    public function sendContact(Request $request)
    {
        $request->validate([
            "email" => "required",
            "subject" => "required|string",
            "description" => "required|string|min:5"
        ]);

        ContactModel::create([
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->description
        ]);

        return redirect("/shop");
    }
    public function deleteContact($contact)
    {
        $singleContact = ContactModel::where(['id' => $contact])->first();

        if($singleContact == null)
        {
            die("OVAJ KONTAKT NE POSTOJI!");
        }
        $singleContact->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $contact = ContactModel::findOrFail($id);

        return view('edit-contact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = ContactModel::findOrFail($id);

        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->route('allContacts');
    }
}
