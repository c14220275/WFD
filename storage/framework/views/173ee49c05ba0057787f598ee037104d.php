<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container my-4 mx-auto">

<h1 class="text-2xl font-bold"><?php echo e($car->car_id); ?></h1>
<p> <span class="font-bold">car model : </span> <?php echo e($car->car_model); ?></p>
<p> <span class="font-bold">car year : </span><?php echo e($car->year); ?> </p>
<p> <span class="font-bold">car status : </span><?php echo e($car->status); ?> </p>
<p> <span class="font-bold">car number plate : </span> <?php echo e($car->number_plate); ?></p>

<p> <span class="font-bold">car price</span><?php echo e($car->price); ?> </p>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add-car')): ?>
        <p> <span class="font-bold">car no rangka : </span> <?php echo e($car->no_rangka); ?></p>
    <?php if($car->currentUser): ?>

        <p> <span class="font-bold">name of current rental : </span><?php echo e($car->currentUser->first_name); ?> <?php echo e($car->currentUser->last_name); ?> </p>


    <?php else: ?>

        <p> <span class="font-bold">car current rental</span>None </p>
    <?php endif; ?>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-car')): ?>
        <div class="py-3">

        <form  action="<?php echo e(route('car.delete', $car->car_id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this car ? ');" style="display: inline" >
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>

            <button type="submit" class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-700">
                Delete Car
            </button>
        </form>
        </div>
    <?php endif; ?>
    <img src="<?php echo e(asset('storage/' . $car->img)); ?>" alt="<?php echo e($car->car_model); ?> Image" class="w-full h-auto">

</div>

<?php echo $__env->make('base.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projectWFD\resources\views/cars/car.blade.php ENDPATH**/ ?>