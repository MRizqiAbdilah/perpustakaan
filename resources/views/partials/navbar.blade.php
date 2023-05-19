<div class="w-full bg-slate-700">
    <div class="flex flex-row items-center py-[10px]">
        <div class="w-1/12 flex justify-center items-center">
            <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-teal-400 bg-clip-text text-transparent">Logo
            </h1>
        </div>
        <div class="w-11/12">
            <div class="flex justify-end gap-12 mx-10 text-white">
                <a href="/books" class="menu-list {{ Request::is('books*') ? 'active' : '' }}">Book</a>
                <a href="/categories" class="menu-list {{ Request::is('categories*') ? 'active' : '' }}">Category</a>
                <a href="/peminjaman" class="menu-list {{ Request::is('peminjaman*') ? 'active' : '' }}">Peminjaman</a>
                <a href="/pengembalian" class="menu-list {{ Request::is('pengembalian*') ? 'active' : '' }}">Pengembalian</a>
                <a href="/member" class="menu-list {{ Request::is('member*') ? 'active' : '' }}">Member</a>
                <a href="/users" class="menu-list {{ Request::is('users*') ? 'active' : '' }}">Users</a>
                @can('anggota')
                <a href="/laporan" class="menu-list {{ Request::is('laporan*') ? 'active' : '' }}">Laporan</a>
                @endcan
                @auth
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="menu-list text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">{{ auth()->user()->name }}<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                        out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="/login"
                        class="menu-list menu-btn {{ Request::is('login*') ? 'active' : '' }}">Login</a>
                @endauth
            </div>
        </div>
    </div>
</div>
