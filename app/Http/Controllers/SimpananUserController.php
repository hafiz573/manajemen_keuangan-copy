<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nasabah;
use App\Models\Simpanan;
use Illuminate\Http\Request;

class SimpananUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $simpanan = Simpanan::with('nasabah')->get();
        return view('pageUser.simpanan.simpanan',compact('simpanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nasabah=Nasabah::all();
        return view('pageUser.simpnana.tambah-simpanan',compact('nasabah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Simpanan::create($request->all());
        return redirect()->route('simpnanauser.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nasabah=Nasabah::all();
        $simpanan=Simpanan::findOrFail($id);
        return view('pageUser.simpanan.edit-simpanan',compact('simpanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $simpanan=Simpanan::findOrFail($id);
        $simpanan->update($request->all());
        return redirect()->route('simpananuser.index');
    }
}
