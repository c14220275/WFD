<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>


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

    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Car Management</h1>

        <?php if(session('success')): ?>
            <div class="bg-green-200 text-green-800 p-3 rounded-md mb-4">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="bg-red-200 text-red-800 p-3 rounded-md mb-4">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

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
                <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <table class="bg-white table-fixed w-full border-collapse border border-gray-300 car-card">
                        <td class="border border-gray-300 px-4 py-2 car-model"><?php echo e($car->car_model); ?></td>
                        <td class="border border-gray-300 px-4 py-2 car-year"><?php echo e($car->year); ?></td>
                        <td class="border border-gray-300 px-4 py-2">
                            <span class="<?php echo e($car->status === 'available' ? 'text-green-600' : 'text-red-600'); ?>">
                                <?php echo e(ucfirst($car->status)); ?>

                            </span>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <?php if($car->status === 'available'): ?>
                                <form action="<?php echo e(route('cars.checkOut', $car->car_id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                        Check-Out (Not Available)
                                    </button>
                                </form>
                            <?php else: ?>
                                <form action="<?php echo e(route('cars.checkIn', $car->car_id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                    <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
                                        Check-In (Available)
                                    </button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projectWFD\resources\views/cars/carstatus.blade.php ENDPATH**/ ?>