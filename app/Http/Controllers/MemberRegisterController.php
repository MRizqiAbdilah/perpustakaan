<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;

class MemberRegisterController extends Controller
{
    public function index()
    {
        return view('member.index', [
            'title' => 'Anggota',
            'members' => Member::all()
        ]);
    }

    public function create()
    {
        return view('member.create', [
            "title" => "Registrasi Anggota",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:50'],
            'username' => ['required', 'min:5', 'max:50', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:50'],
            'role' => ['required']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        Member::create($validatedData);

        return redirect('/member')->with('success', 'Registration Successfull! Please Login');
    }

    public function store2(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:50'],
            'username' => ['required', 'min:5', 'max:50', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:50'],
            'role' => ['required']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/member')->with('success', 'Registration Successfull! Please Login');
    }
}
