<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganUserController extends Controller
{
    public function index()
{

    $keuangan=Keuangan::all();
    return view('pageUser.keuangan.page-keuangan',compact('keuangan'));
}

public function create()
{
    $keuangan=Keuangan::all();
    return view('pageUser.keuangan.tambah-keuangan',compact('keuangan'));

}

public function store(Request $request)
{
keuangan::create($request->all());
return redirect()->route('keuanganuser.index');
}


public function edit(string $id)

{
$keuangan=Keuangan::findOrFail($id);
return view('pageUser.keuagan.edit-keuanga',compact('keuangan'));


}

public function update(Request $request, string $id)
{

$keuangan=Keuangan::findOrFail($id);
$keuangan->update($request->all());
return redirect()->route('keuangan.index');
}

}
