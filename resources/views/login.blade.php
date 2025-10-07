@extends("layout.app")

@section("body")

<div class="bg-indigo-100 w-full h-lvh flex items-center justify-center">
    <div class="bg-white w-[1000px] h-[480px] relative rounded-3xl shadow-xl">

        <div id="nav" style="width: 50%;" class="transition-all duration-800 ease-in-out absolute right-0 top-0 h-full bg-gradient-to-t from-blue-600 to-indigo-400 rounded-3xl z-1">
            <div class="h-full w-full flex flex-col justify-center gap-6 p-14 bg-[url({{ asset("assets/images/circle.png") }})] bg-no-repeat bg-contain bg-right">
                <p id="navtTitle" class="text-3xl font-semibold text-white">Selamat Datang Kembali</p>
                <p id="navtDesk" class="text-white">Belum punya akun? Silahkan buat akun</p>
                <div class="">
                    <button id="navBtn" class="border-2 border-white py-2 px-3 rounded-full text-white cursor-pointer">Buat akun</button>
                </div>
            </div>
        </div>

        <div id="formWrapper" class="w-full h-full items-center flex justify-start">
            <form id="signIn" action="{{ route("auth.verify") }}" method="POST" style="width: 50%;" class="flex flex-col justify-center h-full p-14 text-justify">
                @csrf
                <p class="text-2xl font-medium text-center">Masuk</p>
                <div class="my-8 flex flex-col gap-4">
                    <div class="flex flex-col gap-1 w-full">
                        <label for="email" class="font-medium">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukan Email" class="w-full bg-gray-100 py-2 px-3 rounded-lg" required>
                    </div>
                    <div class="flex flex-col gap-1 w-full">
                        <label for="password" class="font-medium">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukan Password" class="w-full bg-gray-100 py-2 px-3 rounded-lg" required>
                    </div>
                </div>
                <button type="submit" class="w-full text-center py-2 font-semibold rounded-lg text-white bg-gradient-to-t from-blue-600 to-indigo-400">Login</button>
            </form>
            
            <form id="signUp" action="" method="POST" class="hidden h-full w-1/2 p-14 text-justify">
                <p class="text-2xl font-medium text-center">Daftar</p>
                <div class="my-8 flex flex-col gap-4">
                    <div class="flex flex-col gap-1 w-full">
                        <label for="usernameSignUp" class="font-medium">Username</label>
                        <input type="text" name="username" id="usernameSignUp" placeholder="Masukan Username" class="w-full bg-gray-100 py-2 px-3 rounded-lg">
                    </div>
                    <div class="flex flex-col gap-1 w-full">
                        <label for="emailSignUp" class="font-medium">Email</label>
                        <input type="email" name="email" id="emailSignUp" placeholder="Masukan Email" class="w-full bg-gray-100 py-2 px-3 rounded-lg">
                    </div>
                    <div class="flex flex-col gap-1 w-full">
                        <label for="passwordSignUp" class="font-medium">Password</label>
                        <input type="password" name="password" id="passwordSignUp" placeholder="Masukan Password" class="w-full bg-gray-100 py-2 px-3 rounded-lg">
                    </div>
                </div>
                <button class="w-full text-center py-2 font-semibold rounded-lg text-white bg-gradient-to-t from-blue-600 to-indigo-400">Login</button>
            </form>
        </div>
    </div>
</div>

<script>
    let nav = document.getElementById("nav")
    let navtTitle = document.getElementById("navtTitle")
    let navtDesk = document.getElementById("navtDesk")
    let navBtn = document.getElementById("navBtn")

    let signIn = document.getElementById("signIn")
    let signUp = document.getElementById("signUp")
    let formWrapper = document.getElementById("formWrapper")

    let login = true;

    navBtn.addEventListener("click", () => {
        if (login == true) {
            login = false

            nav.style.width = "100%"

            setTimeout(() => {
                navtTitle.textContent = "Selamat Datang"
                navtDesk.textContent = "Sudah punya akun? Silahkan masuk"
                navBtn.textContent = "Masuk"

                signIn.classList.add("hidden")
                signUp.classList.remove("hidden")

                nav.style.width = "50%"
                nav.classList.remove("right-0")
                nav.classList.add("left-0")

                formWrapper.classList.remove("justify-start")
                formWrapper.classList.add("justify-end")
            }, 800)
        } else {
            login = true

            nav.style.width = "100%"

            setTimeout(() => {
                navtTitle.textContent = "Selamat Datang Kembali"
                navtDesk.textContent = "Belum punya akun? Silahkan buat akun"
                navBtn.textContent = "Buat akun"

                signIn.classList.remove("hidden")
                signUp.classList.add("hidden")

                nav.style.width = "50%"

                nav.classList.remove("left-0")
                nav.classList.add("right-0")

                formWrapper.classList.remove("justify-end")
                formWrapper.classList.add("justify-start")
            }, 700)
        }
    })
</script>
@endsection