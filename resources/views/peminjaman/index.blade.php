@extends('layouts.app')

@section('content')
    <h1 class="text-2xl text-blue-500 px-10 py-5"> {{ $title }} </h1>
    <div class="flex justify-center mb-3">
        <a href="/peminjaman/create" class="py-3 px-2 bg-sky-400 rounded-xl">
            Peminjaman Buku
        </a>
    </div>
    <div class="w-full flex flex-wrap justify-center gap-5">
        @foreach ($peminjaman as $p)
            <div
                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="/books?user={{ $p->user }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Id Peminjam : {{ $p->member_id}}</h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Judul Buku : {{ $p->post->title}}</h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kategori : {{ $p->post->category->name}}</h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Admin/Petugas : {{ $p->post->user->name}}</h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tanggal Peminjaman : {{ $p->tanggal_peminjaman}}</h5>
                </a>
            </div>
        @endforeach
    </div>
@endsection
