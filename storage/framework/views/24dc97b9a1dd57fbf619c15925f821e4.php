<nav class="bg-blue-600 text-black py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="<?php echo e(route('cars.index')); ?>" class="text-xl font-bold">
            <div class="flex justify-center">
                <!-- Image with auto width and full height relative to navbar -->
                <img src="<?php echo e(asset('https://api.logo.com/api/v2/images?design=lg_0r6pA8HsfMxrpPfBOC&u=849384e708717b4269adfcf45ced7cec1120fe407e801856a593285bcc722300&width=500&height=400&margins=100&fit=contain&format=webp&quality=60&tightBounds=true')); ?>" alt="Your Logo" class="h-24 w-28">
            </div>
        </a>
        <ul class="flex space-x-8">
            <li><a href="<?php echo e(route('cars.index')); ?>" class="hover:underline">Cars</a></li>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('navbar-auth')): ?> <!-- Check if user is ADMIN -->
                <li><a href="<?php echo e(route('carstatus.index')); ?>" class="hover:underline">Car Status</a></li>
                <li><a href="<?php echo e(route('car.create')); ?>" class="hover:underline">Add Car</a></li>
            <?php endif; ?>

            <li><a href="<?php echo e(route('profile.edit')); ?>" class="hover:underline">Profile</a></li>

            <!-- Logout -->
            <?php if(auth()->guard()->check()): ?>
                <li>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="hover:underline text-red-500">Logout</button>
                    </form>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<?php /**PATH C:\laragon\www\projectWFD\resources\views/components/navbar.blade.php ENDPATH**/ ?>