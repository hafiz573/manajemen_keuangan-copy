<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function index()
    {
        $admin= User::all();
        return view('pages.admin.pages-admin',compact('admin'));
    }

    public function create()
    {
        $admin=User::all();
        return view('pages.admin.tambah-admin',compact('admin'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:admin,user',
        ]);

        $user = new User ();
        $user->name = $request->name;
        $user->email =$request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('admin.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $admin=User::findOrFail($id);
        return view('pages.admin.edit-admin',compact('admin'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6|confirmed',
            'role' => 'required|in:admin,user',
        ]);

        $admin = User::findOrFail($id);

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->role = $request->role;

        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->route('admin.index')->with('sucess', 'Data penggunaan berhasil diperbarui');

    }

    public function destroy(string $id)
    {
        $admin=User::findOrFail($id);
        $admin->delete();
        return redirect()->route('admin.index');
    }
}
