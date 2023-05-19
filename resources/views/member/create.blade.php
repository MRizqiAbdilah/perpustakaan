@extends('layouts.app')

@section('content')
    <div class="w-full h-[91vh] flex justify-center mt-5">
        <form action="/member" method="post">
            @csrf
            <h1 class="text-2xl font-bold my-4 text-center">Tambah Anggota</h1>
            <div class="form">
                <input type="text" name="name" id="name" placeholder="Masukkan nama anda..." class="input-form"
                    value="{{ old('name') }}">
                <label for="name"></label>
                @error('name')
                    <div class="text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 mt-[-8px]"
                        role="alert">
                        <span class="font-medium">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <input type="text" name="username" id="username" placeholder="Masukkan username anda..."
                    class="input-form" value="{{ old('username') }}">
                <label for="username"></label>
                @error('username')
                    <div class="text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 mt-[-8px]"
                        role="alert">
                        <span class="font-medium">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <input type="text" name="email" id="email" placeholder="Masukkan email anda..." class="input-form"
                    value="{{ old('email') }}">
                <label for="email"></label>
                @error('email')
                    <div class="text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 mt-[-8px]"
                        role="alert">
                        <span class="font-medium">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <input type="password" name="password" id="password" placeholder="Masukkan password anda..."
                    class="input-form">
                <label for="password"></label>
            </div>
            <div class="form">
                <select id="role" name="role">
                        <option value="anggota">anggota</option>
                </select>
            </div>
            <div class="form my-5">
                <button type="submit" class=" bg-slate-400 text-center w-full h-12 rounded-xl">Tambah Anggota</button>
            </div>
        </form>
    </div>
@endsection
{{-- name, username, email, password --}}
