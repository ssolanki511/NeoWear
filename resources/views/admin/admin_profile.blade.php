@extends('amaster')
@section('main_content')
    <div class="p-4">
        <div class="rounded-lg pb-4">
            <div class="container-fluid p-0 z-50 flex flex-wrap justify-center w-full h-auto">
                <div class="w-full flex flex-col lg:flex-row justify-between p-2 border-b-2 border-gray-200 gap-4">
                    <div class="text-3xl text-start font-medium mt-1">
                        <span>Admin Profile</span>
                    </div>
                    <div class="flex gap-3">
                        <button onclick="window.location.href='{{ url('edit_profile') }}'" type="button"
                            class="text-blue-600 font-semibold text-sm h-10 mt-1 px-3 bg-transparent border-none hover:underline focus:outline-none transition-all w-full lg:w-auto">
                            <span>Edit Profile</span>
                        </button>
                        <button onclick="window.location.href='{{ url('change_password') }}'" type="button"
                            class="text-yellow-600 font-semibold text-sm h-10 mt-1 px-3 bg-transparent border-none hover:underline focus:outline-none transition-all w-full lg:w-auto">
                            <span>Change Password</span>
                        </button>
                        <form action="#" method="POST" class="inline">
                            @csrf
                            <button type="button"
                                class="text-red-600 font-semibold text-sm h-10 mt-1 px-3 bg-transparent border-none hover:underline focus:outline-none transition-all w-full lg:w-auto">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>

                <div class="w-full mt-6">
                    <!-- Vertical Profile Card -->
                    <div class="bg-white rounded-lg shadow-sm border-2 border-gray-200 p-6 max-w-2xl mx-auto">
                        <!-- Profile Image Section -->
                        <div class="text-start mb-6 flex justify-around">
                            <div class="relative inline-block">
                                <img src="https://demos.creative-tim.com/corporate-ui-dashboard-pro/assets/img/kam-idris-_HqHX3LBN18-unsplash.jpg"
                                    alt="Admin Profile"
                                    class="w-32 h-32 object-cover rounded-full border-4 border-gray-200 shadow-lg" />
                                {{-- <div class="absolute bottom-2 right-2">
                                    <div class="w-8 h-8 bg-green-500 rounded-full border-2 border-white flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="flex flex-col">
                                <h2 class="text-2xl font-bold text-gray-900 mt-4">Jayesh</h2>
                                <p class="text-gray-600">Administrator</p>
                                <p class="text-sm text-gray-500 mt-1">jay.54@neowear.com</p>
                            </div>
                        </div>

                        <!-- Profile Details Section -->
                        <div class="border-t border-gray-200 pt-6">
                            {{-- <h3 class="text-lg font-semibold text-gray-900 mb-6">Profile Information</h3> --}}

                            <div class="space-y-4">
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border-gray-100">
                                    <label class="block text-sm font-medium text-gray-700 mb-1 sm:mb-0">Username</label>
                                    <p class="text-gray-900 font-medium">jayesh</p>
                                </div>
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border-gray-100">
                                    <label class="block text-sm font-medium text-gray-700 mb-1 sm:mb-0">Email
                                        Address</label>
                                    <p class="text-gray-900 font-medium">jay.54@neowear.com</p>
                                </div>
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border-gray-100">
                                    <label class="block text-sm font-medium text-gray-700 mb-1 sm:mb-0">Role</label>
                                    <p class="text-gray-900 font-medium">Administrator</p>
                                </div>
                                <div
                                    class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 border-b border-gray-100">
                                    <label class="block text-sm font-medium text-gray-700 mb-1 sm:mb-0">Status</label>
                                    <span
                                        class="px-3 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
