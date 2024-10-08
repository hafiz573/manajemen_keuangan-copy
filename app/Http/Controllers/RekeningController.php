<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nasabah;
use App\Models\Rekening;
use App\Models\rekening as ModelsRekening;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    public function index(){
        $rekening=Rekening::with('nasabah')->get();
        return view('pages.rekening.page-rekening',compact('rekening'));
    }

    public function create() {
        $nasabah = Nasabah::all();
        return view('pages.rekening.tambah-rekening',compact('nasabah'));
    }

    public function store(Request $request) {
        Rekening::create($request->all());
        return redirect ()->route ('rekening.index');
    }

    public function edit($id) {
        $rekening=Rekening::findOrFail($id);
        return view('pages.rekening.edit-rekening',compact('rekening'));
    }

    public function update(Request $request, string $id) {
        $rekening=Rekening::findOrFail($id);
        $rekening->update($request->all());
        return redirect()->route('rekening.index');
    }

    public function destroy(string $id) {
        $rekening=Rekening::findOrFail($id);
        $rekening->delete();
        return redirect()->route('rekening.index');
    }
}
