<table class="w-full border rounded">
    <thead>
        <tr class="font-medium bg-gray-200 ">
            <th class="p-2"><?php echo e(__('Service')); ?></th>
            <th class="p-2"><?php echo e(__('Options')); ?></th>
            <th class="p-2"><?php echo e(__('Price')); ?></th>
            <th class="p-2"><?php echo e(__($order->order_service->service->duration ?? 'Fixed')); ?></th>
        </tr>
    </thead>
    <tbody>

        <?php if(!empty($order)): ?>
            <tr class="font-light border-b ">
                <td class="p-2">
                    <p><?php echo e($order->order_service->service->name ?? ''); ?></p>
                    <p class="text-xs font-light text-gray-500 space-x-2">
                        <span><?php echo e($order->order_service->service->category->name ?? ''); ?></span>
                        <?php if($order->order_service->service->subcategory != null): ?>
                            <span>/</span>
                            <span><?php echo e($order->order_service->service->subcategory->name ?? ''); ?></span>
                        <?php endif; ?>
                    </p>
                </td>
                <td class="p-2"><?php echo e($order->order_service->options ?? ''); ?></td>
                <td class="p-2"><?php echo e(currencyFormat($order->order_service->price ?? '')); ?></td>
                <td class="p-2"><?php echo e($order->order_service->hours ?? ''); ?></td>
            </tr>
        <?php endif; ?>

    </tbody>
</table>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/order/service.blade.php ENDPATH**/ ?>