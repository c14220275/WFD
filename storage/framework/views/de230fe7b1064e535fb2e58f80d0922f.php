<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container my-4 mx-auto p-8 rounded border border-gray-200">
        <h1 class="font-medium text-3xl">Add New Car</h1>
        <p class="text-gray-600 mt-6">Please enter the details for the new car. Ensure all fields are filled correctly.</p>

        <form action="<?php echo e(route('car.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="mt-8 space-y-6">

                <div>
                    <label for="car_model" class="text-sm text-gray-700 block mb-1 font-medium">Car Model</label>
                    <input type="text" name="car_model" id="car_model" value="<?php echo e(old('car_model')); ?>" placeholder="Input Car Model"
                           class="bg-gray-500 text-white border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" required>
                    <?php $__errorArgs = ['car_model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="border border-red-500 text-red-500 text-xs italic"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div>
                    <label for="year" class="text-sm text-gray-700 block mb-1 font-medium">Car Year</label>
                    <input type="number" name="year" id="year" min="1900" max="2999" value="<?php echo e(old('year')); ?>" placeholder="Input Car Year"
                           class="bg-gray-500 border text-white border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" required>
                    <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="border border-red-500 text-red-500 text-xs italic"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div>
                    <label for="number_plate" class="text-sm text-white  block mb-1 font-medium">Car Number Plate</label>
                    <input type="text" name="number_plate" id="number_plate" value="<?php echo e(old('number_plate')); ?>" placeholder="Input Car Number Plate"
                           class="bg-gray-500 text-white border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" required>
                    <?php $__errorArgs = ['number_plate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="border border-red-500 text-red-500 text-xs italic"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div>
                    <label for="price" class="text-sm text-white block mb-1 font-medium">Car Price</label>
                    <input type="text" name="price" id="price" value="<?php echo e(old('price')); ?>" placeholder="Input Price"
                           class="bg-gray-500 text-white border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 w-full" required>
                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="border border-red-500 text-red-500 text-xs italic"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div>
                    <label for="no_rangka" class="text-sm text-white block mb-1 font-medium">Nomor Rangka</label>
                    <input type="text" name="no_rangka" id="no_rangka" value="<?php echo e(old('no_rangka')); ?>" placeholder="Input No. Ranka"
                           class="bg-gray-500 text-white border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 w-full" required>
                    <?php $__errorArgs = ['no_rangka'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="border border-red-500 text-red-500 text-xs italic"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


                <div>
                    <label for="img" class="text-sm text-white block mb-1 font-medium">Car Photo</label>
                    <input type="file" id="img" name="img"
                               class="w-full  font-medium text-white text-sm bg-gray-500 file:cursor-pointer cursor-pointer file:border-0 file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded" />

                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="border border-red-500 text-red-500 text-xs italic"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>


            </div>

            <div class="space-x-4 mt-8 flex justify-start">
                <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                <a href="/cars" class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php echo $__env->make('base.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projectWFD\resources\views/cars/carAdd.blade.php ENDPATH**/ ?>