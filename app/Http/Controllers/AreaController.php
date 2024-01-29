<?php

namespace App\Http\Controllers;

use App\Http\Requests\AreaRequest;
use App\Models\Area;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class AreaController extends Controller
{
    public function index():View
    {
        $areas = Area::all();
        return view('area.index', compact('areas'));
    }

    public function create():View
    {
        return view('area.create');
    }

    public function store(AreaRequest $request):RedirectResponse
    {
        Area::create($request->all());
        return redirect()->route('area.index');
    }


    public function edit(Area $area):View
    {
        return view('area.edit', compact('area'));
    }

    public function update(AreaRequest $request, Area $area):RedirectResponse
    {
        $area->update($request->all());
        return redirect()->route('area.index');
    }

    public function show(Area $area):View
    {
        return view('area.show', compact('area'));
    }

    public function destroy( Area $area):RedirectResponse
    {
        $area->delete();
        return redirect()->route('area.index');
    }
}
