<?php

namespace App\Http\Controllers;

use App\Http\Requests\PcRequest;
use App\Models\Pc;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PcController extends Controller
{
    public function index():View
    {
        $pcs = Pc::all();
        return view('pc.index', compact('pcs'));
    }

    public function create():View
    {
        return view('pc.create');
    }


    public function store(PcRequest $request):RedirectResponse
    {
        Pc::create($request->all());
        return redirect()->route('pc.index');
    }

    public function edit(Pc $pcs):View
    {
        return view('pc.edit', compact('pc'));
    }
    
    public function show(Pc $pcs):View
    {
        return view('pc.show', compact('pc'));
    }

    public function update(PcRequest $request, Pc $pcs):RedirectResponse
    {
        $pcs->update($request->all());
        return redirect()->route('pc.index');
    }

    

    public function destroy( Pc $pcs):RedirectResponse
    {
        $pcs->delete();
        return redirect()->route('pc.index');
    }
}
