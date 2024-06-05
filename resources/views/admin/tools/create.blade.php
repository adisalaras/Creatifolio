<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="py-5 bg-red-500 text-white font-bold">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('admin.tools.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="flex flex-col gap-y-5">
                        <h3>Tambah Tools</h3>
                        <div class="flex flex-col gap-y-2">
                            <h3>Name</h3>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <h3>Tagline</h3>
                            <input type="text" id="tagline" name="tagline">
                        </div>
                        <div class="flex flex-col gap-y-2">
                            <h3>Logo</h3>
                            <input type="file" id="logo" name="logo">
                        </div>
                        
                        <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">Upload Tool</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
