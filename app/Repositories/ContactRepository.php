<?php

namespace App\Repositories;

use App\Models\ContactModel;

class ContactRepository
{

    private $contactModel;


    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }


    public function getAll()
    {
        return $this->contactModel->all();
    }


    public function create($request)
    {
        return $this->contactModel->create([
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->description
        ]);
    }


    public function getById($id)
    {
        return $this->contactModel->find($id);
    }


    public function delete($contact)
    {
        return $contact->delete();
    }


    public function update($contact, $request)
    {
        $contact->update([
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message
        ]);
    }

}
