<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactUsMailable;
use Illuminate\Support\Facades\Mail;

class contactUsController extends Controller
{
    public function index(){
        return view('contactUs.index');
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'mail' => 'required|email',
            'mensaje' => 'required'
        ]);

        $correo = new contactUsMailable($request->all());

        Mail::to('migueportillo16@gmail.com')->send($correo);

        return redirect()->route('contactUs.index')->with('info', 'Mensaje enviado con exito!'); 
    }
}
