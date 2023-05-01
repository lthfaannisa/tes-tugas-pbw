<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')


    <!-- Tailwind -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="flex flex-1 bg-gray-100 bg-no-repeat bg-cover justify-center items-center"
            style="background-image: url('image/mipa.jpg')">
            <div class="container mx-auto">
                <div class="flex justify-center px-6 my-12">
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <div class="w-full h-auto hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                            style="background-color: #A3A47F;">
                            <div class="flex items-center justify-center w-full h-full">
                                <div class="text-white font-bold text-2xl flex flex-col items-center justify-center ">
                                    <img src="image/logo-removebg-preview.png" alt="Logo" class="w-26 h-28 mx-10">
                                    <div class="text-2xl font-bold content-center">SIMBA</div>

                                    <div class="text-sm font-semibold">Sistem Informasi Biodata Alumni</div>

                                    <div class="text-sm font-semibold">Universitas Syiah Kuala</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="pt-4 text-2xl text-center">Silahkan login untuk masuk</h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST">
                                <div class="mb-4 relative">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                                        <i class="far fa-user absolute left-3 top-10"></i>
                                        NIP/NPM
                                    </label>
                                    <input
                                        class="w-full px-10 py-2 text-sm leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                        id="username" name="username" type="text" placeholder="Masukkan username anda">
                                </div>
                                <div class="mb-6 relative">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                        <i class="fas fa-lock absolute left-3 top-10"></i>
                                        Password
                                    </label>
                                    <input
                                        class="w-full px-10 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                                        id="password" name="password" type="password"
                                        placeholder="Masukkan password anda">
                                </div>
                                <div class="mb-6 text-center">
                                    <button
                                        class="w-full px-4 py-2 font-bold text-white rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                        style="background-color: #A3A47F;" type="button">
                                        Masuk
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>