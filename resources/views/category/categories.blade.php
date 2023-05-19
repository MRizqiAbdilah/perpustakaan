@extends('layouts.app')

@section('content')
    <h1 class="text-2xl text-blue-500 px-10 py-5">{{ $title }}</h1>
    @can('admin')
    <div class="flex justify-center mb-3">
        <a href="/categories/create" class="py-3 px-2 bg-sky-400 rounded-xl">
            Tambah Kategori
        </a>
    </div>
    @endcan
    <div class="w-full flex flex-wrap justify-center gap-5">
        @foreach ($categories as $category)
            <div
                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $category->name }}
                    </h5>
                </a>
                <a href="/books?category={{ $category->slug }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Detail
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        @endforeach
    </div>
@endsection
