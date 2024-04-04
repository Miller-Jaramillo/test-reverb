<div>

    @if (session()->has('message'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('message') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-6 w-6 text-green-500" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M2.293 7.293a1 1 0 0 1 1.414-1.414L10 14.586l6.293-6.293a1 1 0 1 1 1.414 1.414l-7 7a1 1 0 0 1-1.414 0l-7-7a1 1 0 0 1 0-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </span>
    </div>
@endif

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-pink-300 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="text-center pb-2">
                    Crear Post
                </div>


            </div>
        </div>
    </div>

    <x-card-post class="mt-2">


        <div class=" px-4">

            <div class="col-span-1">
                <div>
                    <x-label for="title" :value="__('Titulo')" />
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                        wire:model="title" required autofocus autocomplete="title" />
                </div>

                <div>
                    <x-label for="description" :value="__('Descripcion')" />
                    <x-input id="description" class="block mt-1 w-full" type="text" name="description"
                        wire:model="description" required autofocus autocomplete="description" />
                </div>


            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-button wire:click="submitForm" class="ms-4">
                {{ __('Registrar') }}
            </x-button>
        </div>


    </x-card-post>








</div>
