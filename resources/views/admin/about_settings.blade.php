@extends('amaster')

@section('main_content')
<div class="p-4">
    <div class="rounded-lg pb-4">
        <div class="container-fluid p-0 z-50 flex flex-wrap justify-center w-full h-auto">
            <div class="w-full flex flex-col lg:flex-row justify-between p-2 border-b-2 border-gray-200 gap-4">
                <div class="text-3xl text-start font-medium mt-1">
                    <span>About Settings</span>
                </div>
            </div>
            <div class="w-full mt-6">
                <div class="bg-white rounded-lg shadow-sm border-2 border-gray-200 p-6 max-w-2xl mx-auto">
                    <h2 class="text-2xl font-bold mb-6">Edit About Information</h2>
                    <form method="POST" action="{{ route('admin.about.update') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">About Title</label>
                            <input type="text" name="title" value="{{ old('title', $about->title ?? '') }}" class="w-full border rounded px-3 py-2">
                            @error('title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">About Description</label>
                            <textarea name="description" class="w-full border rounded px-3 py-2" rows="4">{{ old('description', $about->description ?? '') }}</textarea>
                            @error('description')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
                    </form>
                    {{-- @if(session('success'))
                        <div class="mt-4 text-green-600 font-semibold">{{ session('success') }}</div>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
