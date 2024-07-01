<div>
    <div class="flex h-full min-h-screen">
        <div class="flex flex-col h-full py-8 bg-white border-r" style="width: 300px;height: auto">
            <h2 class="text-3xl font-semibold text-center text-gray-800">Laravel Store</h2>
            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav>
                    <label class="flex items-center px-4 py-2 mt-5 text-gray-600 bg-gray-200 rounded-md" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L2 7v13c0 .55.45 1 1 1h18c.55 0 1-.45 1-1V7L12 2z" fill="currentColor"/>
                        </svg>
                        <span class="mx-4 font-medium">Marcas</span>
                    </label>
                    <div class="mt-2 ml-2">
                        @foreach($this->brands as $brand)
                            <div class="mt-2 ml-2">
                                    <label class="block">
                                        <input wire:model.live="selectedBrands"
                                               value="{{(int) $brand->id}}"
                                               id="selectedBrands-{{$loop->index}}"
                                               type="checkbox"
                                               class="form-checkbox h-5 w-5
                                                text-gray-600">
                                        <span class="ml-2 text-gray-700">{{ $brand->nombre }}</span>
                                    </label>
                            </div>
                        @endforeach
                    </div>
                </nav>
            </div>
        </div>
        <div class="flex-1">
            <form class="w-full max-w-lg mt-5 mx-auto flex items-center">
                <div class="flex items-center w-full">
                    <div class="w-full md:w-2/3 px-5">
                        <input
                            wire:model.live="buscar"
                            class="appearance-none block w-full md:w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name" type="text" placeholder="Escribe el nombre del producto, precio o marca">
                        <p class="text-red-500 text-xs italic"></p>
                    </div>
                </div>
            </form>
            <form>
                <div class="flex justify-end mt-5">
                    <div class="w-1/4 md:w-1/3 px-5 text-right">
                        <select wire:model.live="itemsPerPage"
                                class="block appearance-none w-9 md:w-auto bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                            <option value="2">2 registros</option>
                            <option value="5">5 registros</option>
                            <option value="12">12 registros</option>
                            <option value="25">25 registros</option>
                            <option value="50">50 registros</option>
                            <option value="100">100 registros</option>
                        </select>
                    </div>
                </div>
            </form>

            <div class="flex mt-8">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach($this->products as $product)
                            <div class="w-full sm:w-full md:w-full px-2 mb-4">
                                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                                    <img src="{{'photo.png'}}" alt="Product"
                                         class="object-cover w-full h-72 md:h-72">
                                    <div class="p-4">
                                        <h2 class="font-semibold text-lg">{{$product->nombre}}</h2>
                                        <p class="text-gray-600 mt-2">{{$product->descripcion}}</p>
                                        <div class="text-lg text-slate-300 font-semibold text-gray-500">
                                            {{'$'.number_format($product->precio, 2, '.', ',')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

