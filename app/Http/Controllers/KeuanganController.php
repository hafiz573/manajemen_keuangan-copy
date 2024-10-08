<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
use App\Models\Keuangan;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keuangan=Keuangan::all();
        return view('pages.keuangan.page-keuangan', compact('keuangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $keuangan=Keuangan::all();
        return view('pages.keuangan.tambah-keuangan', compact('keuangan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Keuangan::create($request->all());
        return redirect()->route('keuangan.index');
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
        $keuangan=Keuangan::findOrFail($id);
        return view('pages.keuangan.edit-keuangan',compact('keuangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $keuangan=Keuangan::findOrFail($id);
        $keuangan->update($request->all());
        return redirect()->route('keuangan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keuangan=Keuangan::findOrFail($id);
        $keuangan->delete();
        return redirect()->route('keuangan.index');
    }
}
