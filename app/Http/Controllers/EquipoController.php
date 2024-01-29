<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipoRequest;
use Illuminate\Http\Request;
use App\Models\equipo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class EquipoController extends Controller
{
    public function index():View
    {
        $equipos = equipo::all();
        return view('equipo.index', compact('equipos'));

    }

    public function create():View
    {
        return view('equipo.create');
    }

    public function store(EquipoRequest $request):RedirectResponse
    {
        equipo::create($request->all());
        return redirect()->route('equipo.index');
    }

    public function edit(equipo $equipo):View
    {
        return view('equipo.edit', compact('equipo'));
    }

    public function update(EquipoRequest $request, equipo $equipo):RedirectResponse
    {
        $equipo->update($request->all());
        return redirect()->route('equipo.index');
    }

    public function destroy( equipo $equipo):RedirectResponse
    {
        $equipo->delete();
        return redirect()->route('equipo.index');
    }
}
