@extends("layout.app")

@section("body")
<div class="flex h-lvh overvlow-hiden bg-gray-200">
    <aside class="w-xs overflow-y-auto h-full bg-white flex flex-col">
        <header class="border-b border-gray-300 p-6 flex gap-4 items-center">
            <img src="{{ asset("assets/images/logo.png") }}" alt="" class="w-[42px]">
            <div class="">
                <label class="text-lg font-semibold">VanStore</label>
                <p class="text-xs">admin@gmail.com</p>
            </div>
        </header>

        <div class="p-6 flex-1">
            <div class="flex flex-col gap-2">
                <a href="{{ route("admin.dashboard") }}" class="rounded-full py-2 px-4 flex items-center font-medium {{ request()->routeIs("admin.dashboard") ? "bg-blue-600 text-white hover:bg-blue-700" : "hover:bg-blue-100"}}">
                    <label class="w-[36px]">
                        <i class="fa-solid fa-house"></i>
                    </label>
                    Dashboard
                </a>
                <a href="{{ route("admin.order") }}" class="rounded-full py-2 px-4 flex items-center font-medium {{ request()->routeIs("admin.order") ? "bg-blue-600 text-white hover:bg-blue-700" : "hover:bg-blue-100" }}">
                    <label class="w-[36px]">
                        <i class="fa-solid fa-cart-plus"></i>
                    </label>
                    Order
                </a>
                <a href="{{ route("admin.menu") }}" class="rounded-full py-2 px-4 flex items-center font-medium {{ request()->routeIs("admin.menu") ? "bg-blue-600 text-white hover:bg-blue-700" : "hover:bg-blue-100" }}">
                    <label class="w-[36px]">
                        <i class="fa-solid fa-clipboard"></i> </label>
                    Menu
                </a>
                <a href="{{ route("admin.user") }}" class="rounded-full py-2 px-4 flex items-center font-medium {{ request()->routeIs("admin.user") ? "bg-blue-600 text-white hover:bg-blue-700" : "hover:bg-blue-100" }}">
                    <label class="w-[36px]">
                        <i class="fa-solid fa-user"></i> </label>
                    Pengguna
                </a>
                <a href="{{ route("admin.seller") }}" class="rounded-full py-2 px-4 flex items-center font-medium {{ request()->routeIs("admin.seller") ? "bg-blue-600 text-white hover:bg-blue-700" : "hover:bg-blue-100" }}">
                    <label class="w-[36px]">
                        <i class="fa-solid fa-user-tie"></i> </label>
                    Penjual
                </a>
                <a href="{{ route("admin.comment") }}" class="rounded-full py-2 px-4 flex items-center font-medium {{ request()->routeIs("admin.comment") ? "bg-blue-600 text-white hover:bg-blue-700" : "hover:bg-blue-100" }}">
                    <label class="w-[36px]">
                        <i class="fa-solid fa-comment"></i> </label>
                    Komentar
                </a>
                <a href="{{ route("admin.history") }}" class="rounded-full py-2 px-4 flex items-center font-medium {{ request()->routeIs("admin.history") ? "bg-blue-600 text-white hover:bg-blue-700" : "hover:bg-blue-100" }}">
                    <label class="w-[36px]">
                        <i class="fa-solid fa-clock-rotate-left"></i> </label>
                    Riwayat
                </a>
            </div>
        </div>

        <div class="p-6 border-t border-gray-300">
            <a href="{{ route("logout") }}" class="rounded-lg py-2 px-4 flex items-center font-medium text-black bg-gray-200 hover:bg-gray-300 duration-150 ease-in-out">
                <label class="w-[36px]">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </label>
                Logout
            </a>
        </div>
    </aside>

    <main class="w-full overflow-y-auto">
        @yield("content")
    </main>
</div>
@endsection