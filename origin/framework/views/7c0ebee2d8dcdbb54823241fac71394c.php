<table class="w-full border rounded">
    <thead>
        <tr class="font-medium bg-gray-200 ">
            <th class="p-2"><?php echo e(__('Package Type')); ?></th>
            <th class="p-2"><?php echo e(__('Weight')); ?></th>
            <th class="p-2"><?php echo e(__('Width')); ?></th>
            <th class="p-2"><?php echo e(__('Length')); ?></th>
            <th class="p-2"><?php echo e(__('Height')); ?></th>
        </tr>
    </thead>
    <tbody>

        <?php if(!empty($order)): ?>
            <tr class="font-light border-b ">
                <td class="p-2"><?php echo e($order->package_type->name ?? ''); ?></td>
                <td class="p-2"><?php echo e($order->weight); ?>kg</td>
                <td class="p-2"><?php echo e($order->width); ?>cm</td>
                <td class="p-2"><?php echo e($order->length); ?>cm</td>
                <td class="p-2"><?php echo e($order->height); ?>cm</td>
            </tr>
        <?php endif; ?>

    </tbody>
</table>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/order/package.blade.php ENDPATH**/ ?>