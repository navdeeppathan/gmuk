<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    // ✅ List all messages
    public function index()
    {
        $messages = ContactMessage::latest()->get();
        return view('admin.contact.index', compact('messages'));
    }

    // ✅ Store (for frontend form)
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact=ContactMessage::create($request->all());
            // Send mail to Admin
        Mail::to('Admin@thegmauk.org')
            ->send(new ContactMessageMail($contact, 'admin'));

        // Send mail to User
        Mail::to($contact->email)
            ->send(new ContactMessageMail($contact, 'user'));


        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }

    // ✅ Delete message
    public function destroy($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Message deleted');
    }
}