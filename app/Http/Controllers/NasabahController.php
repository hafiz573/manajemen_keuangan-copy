<?php


namespace App\Http\Controllers;
use App\Models\Nasabah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nasabah = Nasabah::all();
        return view('pages.nasabah.page-nasabah', compact('nasabah'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.nasabah.tambah-nasabah');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Nasabah::create($request->all());
        return redirect()->route('nasabah.index');
    }
    /**
     * Display the specified resource.
     */




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nasabah=Nasabah::findOrFail($id);
        return view('pages.nasabah.edit-nasabah',compact('nasabah'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nasabah=Nasabah::findOrFail($id);
        $nasabah->update($request->all());
        return redirect()->route('nasabah.index');


    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nasabah=Nasabah::findOrFail($id);
        $nasabah->delete();
        return redirect()->route('nasabah.index');
    }
}
