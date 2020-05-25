<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CCustomer extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    function index()
    {
        return view('modules.customer.index');
    }

    function create()
    {

    }

    function show()
    {
        $id = $this->request->id;
        return view('modules.customer.show', compact('id'));
    }

    function edit()
    {
        $id = $this->request->id;
        return view('modules.customer.edit', compact('id'));
    }

    function update()
    {
        $id = $this->request->id;
        $name = $this->request->name;
        $phoneNumber = $this->request->phoneNUmber;
        $email = $this->request->email;

        return view('modules.customer.update', compact(['id', 'name', 'phoneNumber', 'email']));
    }
}
