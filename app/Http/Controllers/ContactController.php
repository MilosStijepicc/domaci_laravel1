<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    private $contactRepo;

    public function __construct()
    {
        $this->contactRepo = new ContactRepository();
    }


    public function index()
    {
        return view('contact');
    }


    public function getAllContacts()
    {
        $allContacts = $this->contactRepo->getAll();

        return view('allContacts', compact('allContacts'));
    }


    public function sendContact(SaveContactRequest $request)
    {
        $this->contactRepo->create($request);

        return redirect("/shop");
    }


    public function deleteContact($contact)
    {
        $singleContact = $this->contactRepo->getById($contact);

        if($singleContact == null)
        {
            die("OVAJ KONTAKT NE POSTOJI!");
        }

        $this->contactRepo->delete($singleContact);

        return redirect()->back();
    }

    public function edit($id)
    {
        $contact = $this->contactRepo->getById($id);

        return view('edit-contact', compact('contact'));
    }

    public function update(UpdateContactRequest $request, $id)
    {
        $contact = $this->contactRepo->getById($id);

        $this->contactRepo->update($contact, $request);

        return redirect()->route('allContacts');
    }

}
