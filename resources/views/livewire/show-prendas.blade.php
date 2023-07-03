<div>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Nuestros productos</h2>

            <div class="mt-2">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" wire:model="search"
                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                        placeholder="Buscar">
                </div>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($prendas as $prenda)
                    <div class="group relative">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            @foreach ($prenda->archivos as $archivo)
                                @if ($loop->iteration == 1)
                                    <img src="{{ \Storage::url($archivo->ubicacion) }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full" alt="">
                                @endif
                            @endforeach
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $prenda->nombre }}
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    @foreach ($prenda->colors as $color)
                                        {{ $color->nombre }}, 
                                    @endforeach
                                </p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">${{ $prenda->precio }}</p>
                        </div>
                    </div>
                @endforeach

                @if (!$prendas->count())
                    <h1 class="text-2xl tracking-tight text-gray-900 align-content:center">No hay resultados</h1>
                @endif
            </div>
        </div>
    </div>
</div>
