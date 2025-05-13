@extends('layout')
@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <p class="text-center font-bold mb-3 text-2xl">Login</p>
            <div class="mb-4">
                <input class="w-full py-2 px-4 border border-gray-300 rounded-lg outline-none" 
                       type="text" name="Username" placeholder="Enter Username" required>
            </div>
            <div class="mb-4">
                <input class="w-full py-2 px-4 border border-gray-300 rounded-lg outline-none" 
                       type="password" name="Password" placeholder="Enter Password" required>
            </div>
            <div>
                <input class="w-full py-2 px-4 bg-blue-500 text-white rounded-lg cursor-pointer hover:bg-blue-600" 
                    type="submit" value="Login">
            </div>
        </form>
    </div>
@endsection