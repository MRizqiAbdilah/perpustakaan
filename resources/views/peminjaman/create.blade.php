@extends('layouts.app')

@section('content')
    <div class="w-full h-[91vh] flex justify-center mt-5">
        <form action="/peminjaman" method="post">
            @csrf
            <h1 class="text-2xl font-bold my-4 text-center">Tambah Peminjaman</h1>
            <div class="form">
                <label for="post_id">Title Buku</label>
                <select id="post_id" name="post_id">
                    @foreach ($posts as $post)
                        @if (old('post_id' == $post->id))
                            <option value="{{ $post->id }}" selected>{{ $post->title }}</option>
                        @else
                            <option value="{{ $post->id }}">{{ $post->title }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form">
                <label for="member_id">Nama Peminjam</label>
                <select id="member_id" name="member_id">
                    @foreach ($members as $member)
                        @if (old('member_id' == $member->name))
                            <option value="{{ $member->id }}" selected>{{ $member->name }}</option>
                        @else
                            <option value="{{ $member->id }}">{{ $member->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form">
                <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                <input type="date" name="tanggal_peminjaman" id="tanggal_peminjaman">
            </div>
            <div class="form">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" name="tanggal_kembali" id="tanggal_kembali">
            </div>
            <div class="form my-5">
                <button type="submit" class=" bg-slate-400 text-center w-full h-12 rounded-xl">Tambah Peminjaman</button>
            </div>
        </form>
    </div>
@endsection
{{-- name, username, email, password --}}
