<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan</title>
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

        .bantuan {
            padding-left: 300px;
            padding-right: 80px;
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

    <div class="content-container">
        <div class="welcome">
            <h1 class="font-normal text-20 my-6 md:pt-1 text-white">Bantuan
            </h1>
        </div>
    </div>

    <!--bantuan-->
    <div class="bantuan md:pt-4">
        <div class="bg-white rounded-lg shadow-lg p-4">

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="helpText">Tuliskan keluhan Anda dan bantu kami
                    untuk terus berkembang!</label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="helpText" rows="6" placeholder="Tuliskan pertanyaan atau keluhan Anda"></textarea>
            </div>
            <div class="flex justify-end">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-40">
                    Kirim
                </button>
            </div>
        </div>
    </div>



</body>

</html>