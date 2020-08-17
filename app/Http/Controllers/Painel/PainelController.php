<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class PainelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $request;
    public $usuarios;
     
    public function __construct(Request $request, User $usuarios)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->usuarios = $usuarios;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('Painel.index', compact("user"));
    }
    public function viewUsuarios()
    {
        $user = auth()->user();

        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];
        $usuarios = $this->usuarios->all();
        
        return view('Painel.Usuarios.index', compact("user", "urlAtual", "usuarios"));
    }
    public function viewCreate()
    {
        $user = auth()->user();

        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];
        $usuarios = $this->usuarios->all();
        
        return view('Painel.Usuarios.create', compact("user", "urlAtual", "usuarios"));
    }
    public function viewStore(Request $request)
    {
        $store = User::create($request->all());
        if ($store)
            return redirect()->route('Painel.Usuarios.index')->with('success', 'Usuário cadastrado com sucesso!');
            
        return redirect()->back()->with('error', 'Houve ao cadastrar o usuário!'); 
    }
}