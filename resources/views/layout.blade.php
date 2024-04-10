<!-- component -->
<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="flex flex-col h-screen bg-gray-100">

        <nav>
            <!-- Barra de navegación superior -->
            <div class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <!-- Mostrado en todos los dispositivos -->
                        <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="Logo"
                            class="w-28 h-18 mr-2">
                        <h2 class="font-bold text-xl text-black">Student Managemenet</h2>
                    </div>
                    <div class="md:hidden flex items-center">
                        <!-- Se muestra solo en dispositivos pequeños -->
                        <button id="menuBtn">
                            <i class="fas fa-bars text-gray-500 text-lg"></i> <!-- Ícono de menú -->
                        </button>
                    </div>
                </div>

                <!-- Ícono de Notificación y Perfil -->
                <div class="space-x-5">
                    <button>
                        <i class="fas fa-bell text-gray-500 text-lg"></i>
                    </button>
                    <!-- Botón de Perfil -->
                    <button>
                        <i class="fas fa-user text-gray-500 text-lg"></i>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <div class="flex-1 flex flex-wrap">
            <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
            <div class="p-2 bg-white w-full md:w-60 flex flex-col md:flex hidden" id="sideNav">
                <nav>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{ url('/') }}">
                        <i class="fas fa-home mr-2"></i>Dashboard
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{ url('/students') }}">
                        <i class="fas fa-file-alt mr-2"></i>Student
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{ url('/teachers') }}">
                        <i class="fas fa-users mr-2"></i>Teacher
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{ url('/courses') }}">
                        <i class="fas fa-store mr-2"></i>Courses
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{ url('/batches') }}">
                        <i class="fas fa-exchange-alt mr-2"></i>Batches
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{ url('/enrollments') }}">
                        <i class="fa-regular fa-credit-card mr-2"></i>Enrollment
                    </a>
                    <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white"
                        href="{{ url('/payments') }}">
                        <i class="fa-regular fa-credit-card mr-2"></i>Payment
                    </a>
                </nav>

                <!-- Ítem de Cerrar Sesión -->
                <a class="block text-gray-500 py-2.5 px-4 my-2 rounded transition duration-200 hover:bg-gradient-to-r hover:from-cyan-500 hover:to-cyan-500 hover:text-white mt-auto"
                    href="#">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </a>

                <!-- Señalador de ubicación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>

                <!-- Copyright al final de la navegación lateral -->
                <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright @DocXy!2024</p>

            </div>

            <!-- Área de contenido principal -->
            <div class="flex-1 p-4 w-full md:w-1/2">
                <!-- Campo de búsqueda -->
                <div class="relative max-w-md w-full">
                    <div class="absolute top-1 left-2 inline-flex items-center p-2">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                    <input
                        class="w-full h-10 pl-10 pr-4 py-1 text-base placeholder-gray-500 border rounded-full focus:shadow-outline"
                        type="search" placeholder="Buscar...">
                </div>






                <div class="mt-8 p-4  rounded-lg">
                    <div class=" p-4 rounded-md mt-4">
                        @yield('content')

                    </div>
                </div>




            </div>

        </div>
    </div>
    </div>

    <!-- Script para las gráficas -->
    <script>
    // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
    const menuBtn = document.getElementById('menuBtn');
    const sideNav = document.getElementById('sideNav');

    menuBtn.addEventListener('click', () => {
        sideNav.classList.toggle(
            'hidden'); // Agrega o quita la clase 'hidden' para mostrar u ocultar la navegación lateral
    });
    </script>
</body>

</html>