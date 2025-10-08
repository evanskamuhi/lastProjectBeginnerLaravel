@extends("layout.admin-layout")

@section("content")

    <div class="p-6">
        <div class="pb-6">
            <h1 class="text-2xl font-medium">List Menu Product</h1>
        </div>
        <div class="bg-white p-6 rounded-xl">
            <div class="flex justify-between border-b border-gray-300 pb-6">
                <form action="" class="relative items-center">
                    <input type="text" name="search" class="text-sm border border-gray-300 px-3 py-2 rounded-lg pe-10 focus:outline-1 outline-gray-600" placeholder="Search ...">
                    <button class="text-gray-600 absolute right-3 top-2"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <button class="text-sm py-2 px-2 rounded-lg font-medium text-white bg-blue-600"><i class="fa-solid fa-plus"></i> Add Product</button>
            </div>

            <div class="flex py-6">
                <table class="w-full text-sm">
                    <thead class="bg-gray-100 text-gray-500">
                        <tr>
                            <th class="font-normal py-3 px-2 w-[34px]"></th>
                            <th class="font-normal py-3 px-2 text-left w-[36px]">Image</th>
                            <th class="font-normal py-3 px-2 text-left">Product</th>
                            <th class="font-normal py-3 px-2 text-left">Id Number</th>
                            <th class="font-normal py-3 px-2 text-left">Price</th>
                            <th class="font-normal py-3 px-2 text-left">Stock</th>
                            <th class="font-normal py-3 px-2 w-[50px]"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-300">
                            <td class="text-center py-3 px-2">
                                <input type="checkbox" name="" id="">
                            </td>
                            <td class="py-3 px-2"><img src="{{ asset("assets/images/example.jpg") }}" alt="" class="w-[32px]"></td>
                            <td class="py-3 px-2">Mie ayam</td>
                            <td class="py-3 px-2">001231</td>
                            <td class="py-3 px-2">Rp. 10.000</td>
                            <td class="py-3 px-2">235</td>
                            <td class="py-3 px-2">
                                <button class="text-lg"><i class="fa-solid fa-angle-down"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection