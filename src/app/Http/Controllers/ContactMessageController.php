<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10|max:1000',
        ], [
            'name.required' => 'Nama harus diisi.',
            'name.max' => 'Nama maksimal 255 karakter.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email maksimal 255 karakter.',
            'message.required' => 'Pesan harus diisi.',
            'message.min' => 'Pesan minimal 10 karakter.',
            'message.max' => 'Pesan maksimal 1000 karakter.',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Pesan berhasil dikirim. Terima kasih!');
    }
}

