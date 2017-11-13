<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use App\Http\Requests\ContactFormRequest;
use App\Events\ContactSubmitted;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactMessages = ContactMessage::all();
        return view('contact-message.index', compact('contactMessages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {
        $contactMessage = ContactMessage::create($request->all());

        event(new ContactSubmitted($contactMessage));

        return response()->json(['success' => $contactMessage !== null]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactMessage  $contactMessage
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMessage $contactMessage)
    {
        return view('contact-message.show', compact('contactMessage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactMessage  $contactMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMessage $contactMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactMessage  $contactMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMessage $contactMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactMessage  $contactMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMessage $contactMessage)
    {
        //
    }
}
