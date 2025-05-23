<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function resume()
    {
        return view('resume');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simulate email (configure .env for real sending)
        // Mail::to('kenwayhappi@gmail.com')->send(new \App\Mail\ContactMail($validated));

        return redirect()->route('contact')->with('success', 'Votre message a été envoyé !');
    }

    public function downloadCv()
    {
        $file = public_path('storage/cv/happi-mathis-cv.pdf');
        if (file_exists($file)) {
            return response()->download($file, 'Happi_Mathis_CV.pdf');
        }
        return redirect()->back()->with('error', 'CV non disponible.');
    }
}
