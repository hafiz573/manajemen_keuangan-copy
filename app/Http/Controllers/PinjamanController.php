<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nasabah;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $pinjaman = Pinjaman::with('nasabah')->get();
        return view('pages.pinjaman.pinjaman',compact('pinjaman'));
    }

    public function create (){
        $nasabah=Nasabah::all();
        return view('pages.pinjaman.tambah-pinjaman',compact('nasabah'));
    }

    public function store(Request $request){
        Pinjaman::create($request->all());
        return redirect()->route('pinjaman.index');
    }

    public function edit(string $id){
        $nasabah=Nasabah::all();
        $pinjaman=Pinjaman::findOrFail($id);
        return view('pages.pinjaman.edit-pinjaman',compact('pinjaman'));
    }

    public function update(Request $request, string $id){
        $pinjaman=Pinjaman::findOrFail($id);
        $pinjaman->update($request->all());
        return redirect()->route('pinjaman.index');
    }

    public function destroy(string $id){
        $pinjaman=Pinjaman::findOrFail($id);
        $pinjaman->delete();
        return redirect()->route('pinjaman.index');
    }
}
