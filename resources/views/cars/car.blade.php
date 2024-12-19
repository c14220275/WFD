@vite('resources/css/app.css')
@extends('base.base')
@include('components.navbar')
<div class="container my-4 mx-auto">

<h1 class="text-2xl font-bold">{{$car->car_id}}</h1>
<p> <span class="font-bold">car model : </span> {{$car->car_model}}</p>
<p> <span class="font-bold">car year : </span>{{$car->year}} </p>
<p> <span class="font-bold">car status : </span>{{$car->status}} </p>
<p> <span class="font-bold">car number plate : </span> {{$car->number_plate}}</p>

<p> <span class="font-bold">car price</span>{{$car->price}} </p>
    @can('add-car')
        <p> <span class="font-bold">car no rangka : </span> {{$car->no_rangka}}</p>
    @if ($car->currentUser)

        <p> <span class="font-bold">name of current rental : </span>{{$car->currentUser->first_name}} {{$car->currentUser->last_name}} </p>


    @else

        <p> <span class="font-bold">car current rental</span>None </p>
    @endif
    @endcan

    @can('delete-car')
        <div class="py-3">

        <form  action="{{ route('car.delete', $car->car_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this car ? ');" style="display: inline" >
            @csrf
            @method('delete')

            <button type="submit" class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-700">
                Delete Car
            </button>
        </form>
        </div>
    @endcan
    <img src="{{ asset('storage/' . $car->img) }}" alt="{{ $car->car_model }} Image" class="w-full h-auto">

</div>
