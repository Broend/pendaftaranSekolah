@extends('base')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-800">Register</h2>

            <form class="space-y-4" method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Student Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-2 mt-1 text-gray-900 bg-gray-100 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 mt-1 text-gray-900 bg-gray-100 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 mt-1 text-gray-900 bg-gray-100 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <button type="submit"
                    class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Register</button>
            </form>
        </div>
    </div>
@endsection
