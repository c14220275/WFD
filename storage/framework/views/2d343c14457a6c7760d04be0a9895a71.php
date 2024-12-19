<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(session('success')): ?>
    <div class="alert alert-success text-green-700 border border-green-300 bg-green-50 p-5 rounded">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<div class="min-h-screen bg-white bg-center items-center justify-center sm:py-12"
style="background-image: url('<?php echo e(asset('https://media.cntraveler.com/photos/5727640996cb06c13a979153/16:9/w_2560%2Cc_limit/GettyImages-161842456.jpg')); ?>'); background-size: cover; background-position: center center;">
<div class="ml-20">
<?php if (isset($component)) { $__componentOriginal54868437e25a04b536a56ad56f5f8ba4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54868437e25a04b536a56ad56f5f8ba4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.searchfilter','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('searchfilter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54868437e25a04b536a56ad56f5f8ba4)): ?>
<?php $attributes = $__attributesOriginal54868437e25a04b536a56ad56f5f8ba4; ?>
<?php unset($__attributesOriginal54868437e25a04b536a56ad56f5f8ba4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54868437e25a04b536a56ad56f5f8ba4)): ?>
<?php $component = $__componentOriginal54868437e25a04b536a56ad56f5f8ba4; ?>
<?php unset($__componentOriginal54868437e25a04b536a56ad56f5f8ba4); ?>
<?php endif; ?>
</div>
    <div class="pl-28">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add-car')): ?>
        <a href="<?php echo e(route('car.create')); ?>"  class="inline-block rounded bg-primary pl-5 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" >Add New Car</a>
    <?php endif; ?>

    </div>
<div class="container my-4 mx-auto grid grid-cols-2 md:grid-cols-3 gap-4">
    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-gray-300 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl car-card">
            <h1 class="text-slate-900 mt-5 font-medium car-model">Car Model : <?php echo e($car['car_model']); ?></h1>
            <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-year">Car Year : <?php echo e($car['year']); ?></h3>
            <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-status">Car Status :  <?php echo e($car['status']); ?></h3>
            <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-status">Car Rental Price :  <?php echo e($car['price']); ?></h3>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add-car')): ?>

            <?php if($car->currentUser): ?>
                <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-rental">Current Car Rental  :  <?php echo e($car->currentUser->first_name); ?>  <?php echo e($car->currentUser->last_name); ?></h3>
            <?php else: ?>
                <h3 class="text-slate-900 dark:text-black text-small font-medium tracking-tight car-rental">Current Car Rental  :  None</h3>
            <?php endif; ?>
            <?php endif; ?>
            <img src="<?php echo e(asset('storage/' . $car->img)); ?>" alt="<?php echo e($car->car_model); ?> Image" class="w-full max-h-48 ">
            <div class="mt-10 flex items-center justify-center">
                <a href="/cars/view/<?php echo e($car['car_id']); ?>" class="rounded-md bg-indigo-600 px-3 py-3 mr-5 text-sm font-semibold hover:bg-indigo-400 text-black">Detail</a>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-car')): ?>
                <a href="<?php echo e(route('car.edit',$car->car_id)); ?>" class="rounded-md bg-indigo-600 px-3 py-3 text-sm font-semibold hover:bg-indigo-400 text-black">Edit</a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>>


<?php echo $__env->make('base.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projectWFD\resources\views/cars/cars.blade.php ENDPATH**/ ?>