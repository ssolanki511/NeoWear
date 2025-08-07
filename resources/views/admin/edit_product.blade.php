@extends('amaster')
@section('main_content')
    <div class="container mx-auto p-4 max-w-2xl">
        <div id="add_product-modal" tabindex="-1"
            class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full backdrop-blur-sm bg-gray-900/30">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm border-2 border-gray-200">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Edit Product Details
                        </h3>
                        <button onclick="close_add_product_modal()" id="close-add-product-modal" type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <form action="{{ route('edit_product') }}" method="post" id="add_product_form" enctype="multipart/form-data" class="product-form p-4 md:p-5">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-1 md:grid-cols-2">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                <input type="text" name="pn" value="{{ old('pn') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                    placeholder="Enter Name">
                                    @error('pn')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div>
                                <label for="pqty" class="block mb-2 text-sm font-medium text-gray-900">Quantity</label>
                                <input type="text" name="pqty" value="{{ old('pqty') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                    placeholder="Quantity">
                                    @error('pqty')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div>
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                                <input type="number" name="price" value="{{ old('price') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                    placeholder="₹">
                                    @error('price')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div>
                                <label for="p_offer" class="block mb-2 text-sm font-medium text-gray-900">Offer</label>
                                <input type="number" name="p_offer" value="{{ old('p_offer') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                    placeholder="Offer">
                                    @error('p_offer')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div>
                                <label for="mydropdown"
                                    class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                                <select id="dropdown" name="options" value="{{ old('options') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full py-2.5 text-start px-2">
                                    <option>Wearables</option>
                                    <option>Audio</option>
                                    <option>Accessories</option>
                                </select>
                                @error('options')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="img_file" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                                <input
                                    class="block w-full px-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer py-2.5 bg-gray-50"
                                    id="img_file" name="img_file" type="file" value="{{ old('img_file') }}">
                                    @error('img_file')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="md:col-span-2">
                                <label for="product_dis" class="block mb-2 text-sm font-medium text-gray-900">Product
                                    Description</label>
                                <textarea id="product_dis" name="product_dis" value="{{ old('product_dis') }}" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300"
                                    placeholder="Write product description here"></textarea>
                                    @error('product_dis')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Edit Product
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function close_add_product_modal() {
                window.location.href = "{{ route('products') }}";
            }
        </script>
    </div>
@endsection