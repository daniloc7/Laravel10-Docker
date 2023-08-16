<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        // $support = new Support();
        $supports = Support::all(); //retorna uma collection, (praticamente um array)
        // dd($supports);
        return view('admin/supports/index', compact('supports')); //Faz a mesma coisa que a linha de baixo, só muda a sintaxe 
        // return view('admin/supports/index', ['supports' => $supports]); //passa um array chamado 'supports' com os dados de $supports para a view
        //index
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support)
    {
        // dd($request->all());
        $data = $request->all();
        $data['status'] = 'a';

        $support->create($data);
        // Support::create($data);
    }
}
