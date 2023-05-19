@extends('layouts.app')

@section('content')
    @if (session()->has('success'))
        <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif
    <div class="w-full h-[91vh] flex justify-center mt-5">
        <form action="/categories" method="post">
            @csrf
            <h1 class="text-2xl font-bold my-4 text-center">Tambah Kategori</h1>
            <div class="form">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="input-form" value="{{ old('name') }}"
                    autofocus>
                @error('name')
                    <div class="text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 mt-[-8px]"
                        role="alert">
                        <span class="font-medium">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="input-form text-gray-900 bg-gray-50"
                    value="{{ old('slug') }}" >
                @error('slug')
                    <div class="text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 mt-[-8px]"
                        role="alert">
                        <span class="font-medium">{{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form flex justify-center my-5">
                <button type="submit" class=" bg-slate-400 text-center w-64 h-12 rounded-xl">Tambah Kategori</button>
            </div>
        </form>
    </div>
@endsection
