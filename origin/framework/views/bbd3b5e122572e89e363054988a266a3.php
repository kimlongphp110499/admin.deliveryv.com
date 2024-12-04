<div>
    <?php if($errors->any()): ?>
        <div class="mt-2 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold"><?php echo e(__('Whoops! Something went wrong.')); ?></strong>
            <span class="block sm:inline"><?php echo e(__('Please check the form below for errors.')); ?></span>
            <ul class="list-disc list-inside">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/form-errors.blade.php ENDPATH**/ ?>