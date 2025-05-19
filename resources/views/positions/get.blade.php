@extends('layout')
@section('content')
    <div class="flex items-center justify-center bg-gray-100 mb-30">
        <table class="min-w-full  bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Position Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($positions as $position)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $position->PostName }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('pdf') }} ">Print</a>
@endsection