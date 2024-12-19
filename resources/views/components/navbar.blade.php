<nav class="bg-blue-600 text-black py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('cars.index') }}" class="text-xl font-bold">
            <div class="flex justify-center">
                <!-- Image with auto width and full height relative to navbar -->
                <img src="{{ asset('https://api.logo.com/api/v2/images?design=lg_0r6pA8HsfMxrpPfBOC&u=849384e708717b4269adfcf45ced7cec1120fe407e801856a593285bcc722300&width=500&height=400&margins=100&fit=contain&format=webp&quality=60&tightBounds=true') }}" alt="Your Logo" class="h-24 w-28">
            </div>
        </a>
        <ul class="flex space-x-8">
            <li><a href="{{ route('cars.index') }}" class="hover:underline">Cars</a></li>

            @can ('navbar-auth') <!-- Check if user is ADMIN -->
                <li><a href="{{ route('carstatus.index') }}" class="hover:underline">Car Status</a></li>
                <li><a href="{{ route('car.create') }}" class="hover:underline">Add Car</a></li>
            @endcan

            <li><a href="{{ route('profile.edit') }}" class="hover:underline">Profile</a></li>

            <!-- Logout -->
            @auth
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hover:underline text-red-500">Logout</button>
                    </form>
                </li>
            @endauth
        </ul>
    </div>
</nav>
