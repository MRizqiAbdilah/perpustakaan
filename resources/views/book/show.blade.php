@extends('layouts.app')

@section('content')
    <h1 class="text-2xl text-blue-500 px-10 py-5">Post</h1>
    <div class="w-full flex flex-wrap justify-center gap-5">
        <div class="max-w-4xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-end gap-3">
                <a href="/books/" class="icon-btn bg-blue-300">
                    Kembali
                </a>
                <a href="/books/{{ $post->slug }}/edit" class="icon-btn bg-green-300">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <form action="/books/{{ $post->slug }}" method="post" class="icon-btn bg-red-300">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                </form>
            </div>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
            @else
                <div class="w-full h-[250px] mr-4 my-5 bg-slate-300">
                    <h1 class="text-center text-5xl font-bold text-neutral-500">Cover Buku</h1>
                </div>
            @endif
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                <p>By <a href="/books?user={{ $post->user->username }}">{{ $post->user->name }}</a> in <a
                        href="/books?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{!! $post->description !!}</p>
            <div class="grid grid-cols-2 gap-1 text-center mt-4 mb-4 text-xl">
                <h4> Author : <br> {{ $post->author }}</h4>
                <h4> Publisher : <br> {{ $post->publisher }}</h4>
            </div>
            <a href="/books"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Kembali
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </div>
@endsection
