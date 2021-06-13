<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Dosen;
use App\Models\MataKuliah;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'level' => 'required',
        ]);

            User::create([
                'name' => $request->name,
                'level' => $request->level,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        return redirect()->back()->with('success', 'Berhasil menambahkan user baru!');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        User::destroy($id);
        return redirect('/users')->with('toast_error', 'Data berhasil dihapus!');
    }
    
}
