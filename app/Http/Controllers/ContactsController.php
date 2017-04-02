<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contact");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate(request(),[
                'name'=>'required|max:100',
                'email'=>'required|max:200',
                'subject'=>'max:200',
                'message'=>'required|max:500'
            ]);
            \App\Contact::create(request(['name','email','subject','message']));
           return redirect("/contact?success=1");
    }
}
