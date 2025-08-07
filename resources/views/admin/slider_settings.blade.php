@extends('amaster')

@section('main_content')
<div class="p-4">
    <div class="rounded-lg pb-4">
        <div class="container-fluid p-0 z-50 flex flex-wrap justify-center w-full h-auto">
            <div class="w-full flex flex-col lg:flex-row justify-between p-2 border-b-2 border-gray-200 gap-4">
                <div class="text-3xl text-start font-medium mt-1">
                    <span>Slider Settings</span>
                </div>
            </div>
            <div class="w-full mt-6">
                <div class="bg-white rounded-lg shadow-sm border-2 border-gray-200 p-6 max-w-2xl mx-auto">
                    <h2 class="text-2xl font-bold mb-6">Add New Slider</h2>
                    <form method="POST" action="{{ route('admin.sliders.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Slider Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="w-full border rounded px-3 py-2">
                            @error('title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Slider Image</label>
                            <input type="file" name="image" value="{{ old('image') }}" class="w-full border rounded px-3 py-2">
                            @error('image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add Slider</button>
                    </form>
                    {{-- @if(session('success'))
                        <div class="mt-4 text-green-600 font-semibold">{{ session('success') }}</div>
                    @endif --}}
                    <hr class="my-6">
                    <h3 class="text-xl font-semibold mb-4">Existing Sliders</h3>
                    <div class="space-y-4">
                        @foreach($sliders as $slider)
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border-gray-100">
                            <div class="flex items-center gap-4">
                                <img src="{{ $slider->image_url }}" alt="Slider Image" class="w-20 h-20 object-cover rounded border-2 border-gray-200 shadow">
                                <div>
                                    <form method="POST" action="{{ route('admin.sliders.update', $slider->id) }}" class="flex flex-col gap-2">
                                        @csrf
                                        <input type="text" name="title" value="Demo" class="border rounded px-2 py-1 w-full mb-2">
                                        @error('title')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                        {{-- <input type="text" name="image_url" value="{{ old('image_url', $slider->image_url) }}" class="border rounded px-2 py-1 w-full mb-2" required>
                                        @error('image_url')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror --}}
                                        <div class="flex gap-2">
                                            <button type="submit" class="bg-green-500 text-white px-2 py-1 rounded">Update</button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.sliders.delete', $slider->id) }}" class="inline">
                                        @csrf
                                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                    </form>
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
@endsection
