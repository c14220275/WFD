@vite('resources/css/app.css')
@extends('base.base')
@section('content')
@include('components.navbar')
@if(session('success'))
    <div class="alert alert-success text-green-700 border border-green-300 bg-green-50 p-5 rounded">
        {{ session('success') }}
    </div>
@endif
<div class="min-h-screen bg-white bg-center items-center justify-center sm:py-12"
style="background-image: url('{{ asset('https://media.cntraveler.com/photos/5727640996cb06c13a979153/16:9/w_2560%2Cc_limit/GettyImages-161842456.jpg') }}'); background-size: cover; background-position: center center;">
<div class="ml-20">
<x-searchfilter />
</div>
    <div class="pl-28">
    @can('add-car')
        <a href="{{route('car.create')}}"  class="inline-block rounded bg-primary pl-5 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" >Add New Car</a>
    @endcan

    </div>
<div class="container my-4 mx-auto grid grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($cars as $car)
        <div class="bg-gray-300 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl car-card">
            <h1 class="text-slate-900 mt-5 font-medium car-model">Car Model : {{$car['car_model']}}</h1>
            <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-year">Car Year : {{$car['year']}}</h3>
            <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-status">Car Status :  {{$car['status']}}</h3>
            <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-status">Car Rental Price :  {{$car['price']}}</h3>
            @can('add-car')

            @if ($car->currentUser)
                <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-rental">Current Car Rental  :  {{$car->currentUser->first_name}}  {{$car->currentUser->last_name}}</h3>
            @else
                <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-rental">Current Car Rental  :  None</h3>
            @endif
            @endcan
            <img src="{{ asset('storage/' . $car->img) }}" alt="{{ $car->car_model }} Image" class="w-full max-h-48 ">
            <div class="mt-10 flex items-center justify-center">
                <a href="/cars/view/{{$car['car_id']}}" class="rounded-md bg-indigo-600 px-3 py-3 mr-5 text-sm font-semibold hover:bg-indigo-400 text-black">Detail</a>
                @can('edit-car')
                <a href="{{route('car.edit',$car->car_id)}}" class="rounded-md bg-indigo-600 px-3 py-3 text-sm font-semibold hover:bg-indigo-400 text-black">Edit</a>
                @endcan
            </div>
        </div>
    @endforeach
</div>>

