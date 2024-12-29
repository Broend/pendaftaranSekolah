<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact.index');
    }
    public function contactAction(Request $request)
    {
        $val = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'user_id' => 'required',
            'message' => 'required'
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email harus valid',
            'user_id.required' => 'User ID harus diisi',
            'message.required' => 'Pesan harus diisi'
        ]);

        Contact::create($val);
        toastr()->success('Pesan berhasil dikirim');
        return redirect()->route('contact');
    }
}
