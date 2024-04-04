<div  wire:poll.2s>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post View') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-pink-300 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <div class="text-center">
                    Post
                </div>


            </div>


        </div>
    </div>


    @foreach ($posts as $post)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-2">
            <div class="bg-indigo-300 dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg py-5 px-5">


                <div>
                    <label> Titulo </label>
                    <p>{{ $post->title }}</p>
                </div>

                <div class="mt-2">
                    <label> Descripcion </label>
                    <p>{{ $post->description }}</p>
                </div>

            </div>

        </div>
    @endforeach





</div>
