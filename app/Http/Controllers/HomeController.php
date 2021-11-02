<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Contacto;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pacientes = Paciente::all()->count();

        $citas = Cita::all()->count();
        
        $personal = User::all()->count();

        $contactos = Contacto::limit(6)->latest()->get();

        $contacto_contador = Contacto::all()->count();

        return view('dashboard', compact('pacientes', 'citas', 'personal', 'contactos', 'contacto_contador'));
    }
    
}
