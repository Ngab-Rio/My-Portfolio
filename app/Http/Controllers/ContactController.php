<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request){
        Contact::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/#contact')->with('success', 'Pesanmu Terkirim');
    }
}
