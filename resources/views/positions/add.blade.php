@extends('layout')
@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <form method="POST" action="{{ route('position.store') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <p>Add positions</p>
            <div class="mb-4">
                <input class="w-full py-2 px-4 border border-gray-300 rounded-lg outline-none" 
                       type="text" name="PostName" placeholder="Enter Position" required>
            </div>
            <input class="w-full py-2 px-4 bg-blue-500 text-white rounded-lg cursor-pointer hover:bg-blue-600" type="submit" value="Login">
        </form>
    </div>
@endsection