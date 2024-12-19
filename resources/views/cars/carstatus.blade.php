@vite('resources/css/app.css')
@extends('base.base')
@include('components.navbar')
@section('content')


<x-searchfilter />

    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Car Management</h1>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-3 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-200 text-red-800 p-3 rounded-md mb-4">
                {{ session('error') }}
            </div>
        @endif

        <table class="table-fixed w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Model</th>
                    <th class="border border-gray-300 px-4 py-2">Year</th>
                    <th class="border border-gray-300 px-4 py-2">Status</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
            </table>
                @foreach ($cars as $car)
                    <tr>
                        <table class="bg-white table-fixed w-full border-collapse border border-gray-300 car-card">
                        <td class="border border-gray-300 px-4 py-2 car-model">{{ $car->car_model }}</td>
                        <td class="border border-gray-300 px-4 py-2 car-year">{{ $car->year }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <span class="{{ $car->status === 'available' ? 'text-green-600' : 'text-red-600' }}">
                                {{ ucfirst($car->status) }}
                            </span>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            @if ($car->status === 'available')
                                <form action="{{ route('cars.checkOut', $car->car_id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                        Check-Out (Not Available)
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('cars.checkIn', $car->car_id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
                                        Check-In (Available)
                                    </button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
@endsection
