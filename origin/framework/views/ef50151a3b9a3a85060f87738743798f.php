<?php if( $model->multiple ?? false ): ?>
    <span class="px-2 py-1 text-sm font-medium text-center text-white bg-green-500 rounded-xl"><?php echo e(__('Yes')); ?></span>
<?php else: ?>
    <span class="px-2 py-1 text-sm font-medium text-center text-white bg-red-500 rounded-xl"><?php echo e(__('No')); ?></span>
<?php endif; ?>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/table/multiple.blade.php ENDPATH**/ ?>