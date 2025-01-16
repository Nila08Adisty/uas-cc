<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller



{
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('home');
            //return 'Login berhasil';
        }

        return back()->withErrors([
            'username' => 'Salah kombinasi username dan password'
        ]);
    }

    public function login()
    {
        $title = 'Login'; 
        return view('user.login', compact('title'));
    }

    public function index()
    {
        $title = 'Data User';
        $levels = ['Admin', 'User'];
        $users = User::all();
        return view('user.index', compact('title', 'users', 'levels'));
    }

    public function password()
    {
        $title = 'Ubah Password';
        return view('user.password', compact('title'));
    }
    public function passwordAction(Request $request)
    {
        $request->validate([
            'pass1' => 'required',
            'pass2' => 'required',
            'pass3' => 'required',
        ]);

        if (!Hash::check($request->pass1, Auth::user()->password)) {
            return back()->withErrors(['pass1' => 'Password lama salah']);
        }

        if ($request->pass2 != $request->pass3) {
            return back()->withErrors(['pass2' => 'Password baru dan konfirmasi password baru harus sama']);
        }

        User::where('id_user', Auth::id())->update([
            'password' => Hash::make($request->pass2)
        ]);

        return redirect()->route('user.password')->with(['message' => 'Password berhasil diubah!']);
    }
    public function create()
    {
        $title = 'Tambah User';
        $levels = ['Admin', 'User'];
        $users = User::orderBy('nama_user')->get();
        return view('user.create', compact('title', 'users', 'levels'));
    }
    public function edit(User $user)
    {
        $title = 'Ubah User';
        $levels = ['Admin', 'User'];
        $users = User::orderBy('nama_user')->get();
        return view('user.edit', compact('title', 'user', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        $request->validate([
            'nama_user' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required',
            'level' => 'required',
            'email' => 'required',
        ]);
        if (User::where('username', $request->username)->where('id_user', '<>', $user->id_user)->first())
            return back()->withErrors(['username' => 'Username telah terdaftar!']);
        $user->nama_user = $request->nama_user;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->telp = $request->telp;
        $user->level = $request->level;
        $user->email = $request->email;
        if ($request->password)
            $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index')->with(['message' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with(['message' => 'Data Berhasil Dihapus']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_user' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required',
            'level' => 'required',
            'email' => 'required',
        ]);
        if (User::where('username', $request->username)->first())
            return back()->withErrors(['username' => 'Username telah terdaftar!']);

        $user = new User($request->all());

        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index')->with(['message' => 'Data berhasil ditambah']);
    }
};
