<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.contact');
    }

    public function send(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc', 'max:180'],
						'crop_type' => ['required', 'in:Reprocann,ONG,I+D'],
						'phone' => ['nullable', 'string', 'max:40'],
            'reason'  => ['required', 'in:Compras,Asesoramiento,Servicios para ONGs e I+D'],
            'subject' => ['required', 'string', 'max:160'],
            'message' => ['required', 'string', 'max:4000'],
            'honeypot' => ['nullable', 'size:0'], // anti-spam
        ], [
            'required' => 'Este campo es obligatorio.',
            'email' => 'Debe ser un email válido.',
            'max' => 'Demasiado largo.',
            'in'  => 'Opción no válida.',
        ]);

        // Honeypot: si vino con algo, fingimos éxito y descartamos.
        if (!empty($data['honeypot'] ?? null)) {
            return redirect()->route('contact.show')->with('status', 'ok');
        }

			try {
				$viewData = $data;
				$viewData['body'] = $data['message'];
				unset($viewData['message'], $viewData['honeypot']);

				Mail::send('emails.contact', $viewData, function ($message) use ($data) {
					$message->to(config('mail.from.address'))
						->subject($data['name'] . ' te contactó por ' . $data['reason'])
						->replyTo($data['email'], $data['name']);
				});
        } catch (\Throwable $e) {
            Log::error('Error enviando contacto', ['exception' => $e]);
            return back()->withInput()->with('status', 'error');
        }

        return redirect()->route('contact.show')->with('status', 'ok');
    }
}
