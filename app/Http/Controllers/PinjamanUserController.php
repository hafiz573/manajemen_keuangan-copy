<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nasabah;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class PinjamanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjaman=Pinjaman::with('nasabah')->get();
        return view('pageUser.pinjaman.pinjaman',compact('pinjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nasabah=Nasabah::all();
        return view('pageUser.pinjaman.tambah-pinjaman',compact('nasabah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pinjaman::create($request->all());
        return redirect()->route('pinjamanuser.index');
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
        $pinjaman=Pinjaman::findOrFail($id);
        return view('pageUser.pinjaman.edit-pinjaman',compact('pinjaman','nasabah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pinjaman=Pinjaman::findOrFail($id);
        $pinjaman->update($request->all());
        return redirect()->route('pinjamanuser.index');
    }
}
