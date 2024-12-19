@extends('base.base2')

<x-auth-session-status class="mb-4" :status="session('status')" />
 <form method="POST" action="{{ route('register') }}"class="m-0 p-0">
        @csrf
<!-- component -->
<div class="min-h-screen bg-white bg-center flex items-center justify-center sm:py-12"
style="background-image: url('{{ asset('https://media.istockphoto.com/id/1293195643/vector/vector-illustration-of-a-red-car-moving-along-the-ocean-mountain-road.jpg?s=612x612&w=0&k=20&c=VsoxZBmqnNemBLxz_F7gSWZc7_lWzpiuxFa1xOUN9d8=') }}'); background-size: cover; background-position: center center;">

    <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">

      <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
        <div class="px-5 py-7">
            <div class="flex justify-center mb-5">
                <img src="{{ asset('https://api.logo.com/api/v2/images?design=lg_0r6pA8HsfMxrpPfBOC&u=849384e708717b4269adfcf45ced7cec1120fe407e801856a593285bcc722300&width=500&height=400&margins=100&fit=contain&format=webp&quality=60&tightBounds=true') }}" alt="Your Logo" class="w-50 h-50">
            </div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />



                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
                </div>
                </div>
        </div>

      </div>

    </div>
  </div>






