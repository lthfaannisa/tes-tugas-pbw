<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')


    <!-- Tailwind -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/feather-icons/dist/feather.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        body {
            background-color: #EAEAEA;
        }

        .content-container {
            position: relative;
            z-index: 2;
            /* tambahkan padding-left atau margin-left yang sama dengan lebar sidebar agar konten tidak tertutup oleh sidebar */
            padding-left: 300px;
        }

        .content-container .welcome {
            background-color: #B8B99F;
            padding: 0px 20px;
            padding-top: 0px;
            margin-top: 23px;
            width: 900px;
            height: 35px;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;

        }

        .content-container .jumlah {
            color: #A3A47F;

        }

        .sidebar {
            background-color: #ffffff;
            width: 230px;
            height: 90vh;
            position: absolute;
            top: 90px;
            left: 30px;
            z-index: 999;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .sidebar .sidebar-menu {
            padding: 20px;
            margin-top: 5px;
        }

        .sidebar .sidebar-menu a {
            display: block;
            color: #000000;
            padding: 10px 20px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        .sidebar .sidebar-menu a:hover {

            color: #1c6bbf;
        }

        .kotak {
            padding-left: 300px;
            padding-right: 77px;

        }

        .card {
            padding-left: 300px;
            padding-right: 77px;
            color: #A3A47F;

        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="shadow-lg" style="background-color: #A3A47F;">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo and Title -->
                <div class="flex items-center">
                    <img class="w-16 h-11 mr-2" src="image/logo-removebg-preview.png" alt="Logo">
                    <div>
                        <div class="text-sm font-bold text-white">SIMBA</div>
                        <div class="text-xs font-semibold text-white">Sistem Informasi Biodata Alumni</div>
                    </div>
                </div>
                <!-- Profile Menu -->
                <div class="flex items-center">
                    <span class="text-sm text-white mr-2">Hi, User</span>
                    <i class="fas fa-user text-white"></i>
                </div>
            </div>
        </div>
    </header>

    <!--sidebar-->
    <div class="sidebar">

        <ul class="sidebar-menu mt-0">
            <li class="px-2 pt-0">
                <a href="#" class="flex items-center mb-2">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="px-2 mb-3">
                <span class="text-gray-500 font-semibold">Menu</span>
            </li>
            <li class="px-2">
                <a href="#" class="flex items-center mb-4">
                    <i class="fas fa-user mr-3"></i>
                    <span>Profil</span>
                </a>
            </li>
            <li class="px-2">
                <a href="#" class="flex items-center  mb-4">
                    <i class="fas fa-users mr-2"></i>
                    <span>Data Alumni</span>
                </a>
            </li>
            <li class="px-2">
                <a href="#" class="flex items-center  mb-4">
                    <i class="fas fa-briefcase mr-3"></i>
                    <span>Lowongan</span>
                </a>
            </li>
            <li class="px-2">
                <a href="#" class="flex items-center  mb-4">
                    <i class="fas fa-question-circle mr-3"></i>
                    <span>Bantuan</span>
                </a>
            </li>
            <li class="px-2">
                <a href="#" class="flex items-center  mb-4">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    <span>Keluar</span>
                </a>
            </li>
        </ul>
    </div>

    <!--Content-->

    <div class="content-container">
        <div class="welcome">
            <h1 class="font-normal text-20 my-6 md:pt-1 text-white">Data Statistik Lulusan Informatika Universitas
                Syiah
                Kuala
            </h1>
        </div>
        <div class="jumlah flex-auto">
            <p class=" font-bold mb-2 -my-5 text-5xl" style="padding-left: 400px;"><br>234</p>
            <p class=" font-bold text-xs uppercase" style="color: #B8B99F; padding-left: 400px;">Total Alumni</p>
        </div>
    </div>

    <div class="kotak">
        <div class="flex justify-between mt-4">
            <div class="w-1/4 h-20 px-2 py-1  rounded-lg shadow-md"
                style="border: 2px solid black; position: relative;">
                <div class="text-sm font-bold text-black uppercase" style="display: inline-block;">DATA MINING <i
                        class="fas fa-chart-bar" style="position: absolute; right: 0;"></i></div>
                <div class="text-3xl font-bold mt-2 text-black">15</div>
            </div>

            <div class="w-1/4 h-20 px-2 py-1  rounded-lg shadow-md ml-2"
                style="border: 2px solid black; position: relative;">
                <div class="text-sm font-bold text-black uppercase" style="display: inline-block;">RPL <i
                        class="fas fa-chart-bar" style="position: absolute; right: 1;"></i></div>
                <div class="text-3xl font-bold mt-2 text-black">20</div>

            </div>

            <div class="w-1/4 h-20 px-2 py-1  rounded-lg shadow-md ml-2"
                style="border: 2px solid black; position: relative;">
                <div class="text-sm font-bold text-black uppercase" style="display: inline-block;">Jaringan <i
                        class="fas fa-chart-bar" style="position: absolute; right: 0;"></i></div>
                <div class="text-3xl font-bold mt-2 text-black">10</div>

            </div>

            <div class="w-1/4 h-20 px-2 py-1  rounded-lg shadow-md ml-2"
                style="border: 2px solid black; position: relative;">
                <div class="text-sm font-bold text-black uppercase" style="display: inline-block;">GIS <i
                        class="fas fa-chart-bar" style="position: absolute; right: 1;"></i></div>
                <div class="text-3xl font-bold mt-2 text-black">36</div>

            </div>


        </div>
    </div>
    <br>

    <!--card grafik-->

    <div class="card mt-4">
        <div class="flex">

            <div class="grafik bg-white rounded-lg flex items-center">

                <div class="w-1/4 p-4">
                    <p class="text-center font-bold mb-2">Jumlah Alumni</p>
                    <img src="image/vektor.jpeg" alt="Random Image" class="rounded-lg shadow-md">
                </div>

                <div class="w-3/4 p-4">
                    <p class="text-sm font-medium text-gray-800">Berikut ini merupakan statistik data jumlah alumni dari
                        Prodi Informatika FMIPA USK yang ditinjau berdasarkan bidang minat alumni</p>
                </div>
            </div>
        </div>
    </div>



    <div class="card mt-4 flex max-w-8xl">
        <div class="grafik bg-white rounded-lg flex items-center">
            <div class="w-3/4 p-4">
                <p class="text-black font-medium text-sm">Berikut ini merupakan statistik data jumlah alumni dari Prodi
                    Informatika FMIPA
                    USK
                    yang ditinjau berdasarkan tahun kelulusan mulai dari tahun 2013 s.d. 2020</p>
            </div>
            <div class="w-1/4 p-4">
                <p class="text-center font-bold mb-2">Jumlah Alumni</p>
                <img src="image/vektor.jpeg" alt="placeholder" style="max-width: 100%;">
            </div>

        </div>

    </div>
    <br>





</body>

</html>