<x-plantilla>
    <div class="container w-50 p-5">
        <div class="row shadow p-3 mb-5 rounded"  style="background-color:#ffffff;">
            <h1 class="d-flex justify-content-center p-3">Registro</h1>
            <form action="/register" method="POST" class="">
                @csrf
                <div class="mx-auto col-md-8">
                    <label id="icon" for="name"><i class="icon-user"></i></label>
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}">
                </div>
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
                <div class="mx-auto col-md-8">
                    <label id="icon" for="password_confirmation"><i class="icon-shield"></i></label>
                    <label for="password_confirmation" class="form-label">Confirma contraseña</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation')}}">
                </div>
                <div class="container w-75 d-flex justify-content-end p-3">
                    <div class="p-4">
                        <a class="nav-link link-info" href="/iniciar_sesion">
                            ¿Ya estás registrado?
                        </a>
                    </div>
                    <div class="p-4">
                        <button type="submit" class="btn btn-dark">Registrar</button>
                    </div>
                </div>
            </form>
        </div>    
    </div>
</x-plantilla>

    {{-- <div class="font-sans text-gray-900 antialiased">
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
                <form method="POST" action="http://dsa.test/register">
                    <input type="hidden" name="_token" value="5K4WnJSPGfEUSXSsuR6ESrK0DcsVmmBpYGniphPA">
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="name">
                            Name
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="name" type="text" name="name" required="required" autofocus="autofocus" autocomplete="name">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Email
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            Password
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="new-password">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
                            Confirm Password
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password_confirmation" type="password" name="password_confirmation" required="required" autocomplete="new-password">
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="http://dsa.test/login">
                            Already registered?
                        </a>

                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}