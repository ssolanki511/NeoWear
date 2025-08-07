@extends('amaster')

@section('main_content')
<div class="p-4">
    <div class="rounded-lg pb-4">
        <div class="container-fluid p-0 z-50 flex flex-wrap justify-center w-full h-auto">
            <div class="w-full flex flex-col lg:flex-row justify-between p-2 border-b-2 border-gray-200 gap-4">
                <div class="text-3xl text-start font-medium mt-1">
                    <span>Contact Settings</span>
                </div>
            </div>
            <div class="w-full mt-6">
                <div class="bg-white rounded-lg shadow-sm border-2 border-gray-200 p-6 max-w-2xl mx-auto">
                    <h2 class="text-2xl font-bold mb-6">Edit Contact Information</h2>
                    <form method="POST" action="{{ route('admin.contact.update') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Contact Email</label>
                            <input type="email" name="email" value="{{ old('email', $contact->email ?? '') }}" class="w-full border rounded px-3 py-2">
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Contact Phone</label>
                            <input type="text" name="phone" value="{{ old('phone', $contact->phone ?? '') }}" class="w-full border rounded px-3 py-2">
                            @error('phone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
                    </form>
                    @if(session('success'))
                        <div class="mt-4 text-green-600 font-semibold">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection