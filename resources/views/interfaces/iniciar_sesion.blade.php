<x-plantilla>
    <div class="container w-50 p-5">
        <div class="row shadow p-3 mb-5 rounded"  style="background-color:#ffffff;">
            <h1 class="d-flex justify-content-center p-3">Inicio de sesión</h1>
            <form action="/login" method="POST" class="">
                @csrf
                <div class="mx-auto col-md-8">
                    <label id="icon" for="email"><i class="icon-envelope"></i></label>
                    <label for="email" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email')}}">
                </div>
                <div class="mx-auto col-md-8">
                    <label id="icon" for="password"><i class="icon-shield"></i></label>
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" value="{{ old('password')}}">
                </div>
                <div class="form-check mx-auto col-md-8 p-4">
                    <label for="remember_me" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                        <span class="">Recordar contraseña</span>
                    </label>
                </div>
                <div class="container w-75 d-flex justify-content-end p-3">
                    <div class="p-4">
                        <a class="nav-link link-info" href="/forgot-password">
                            Olvidé mi contraseña
                        </a>
                    </div>
                    <div class="p-4">
                        <button type="submit" class="btn btn-dark">Iniciar sesión</button>
                    </div>
                </div>
            </form>
        </div>    
    </div>
</x-plantilla>


{{-- 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="bBFJiKOtsyenE46ZI0r0OgdrYQonGXupJaVne0Qx">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&amp;display=swap">

    <!-- Scripts -->
    <link rel="stylesheet" href="http://dsa.test/build/assets/app.31f4094f.css"><script type="module" src="http://dsa.test/build/assets/app.2896b7a8.js"></script>
</head>
<body>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                <svg class="w-16 h-16" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"></path>
                    <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"></path>
                </svg>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="http://dsa.test/login">
                    <input type="hidden" name="_token" value="bBFJiKOtsyenE46ZI0r0OgdrYQonGXupJaVne0Qx">
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Email
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required" autofocus="autofocus">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            Password
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="current-password">
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="remember_me" name="remember">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="http://dsa.test/forgot-password">
                            Forgot your password?
                        </a>
            
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Log in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html> --}}