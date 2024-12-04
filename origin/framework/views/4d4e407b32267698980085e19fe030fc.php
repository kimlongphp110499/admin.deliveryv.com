

<?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        <p style="color:#000000;font-size:14px">
            <?php echo e(__('From')); ?>

        </p>
        <p style="color:#333333;font-size:16px">
            <strong><?php echo e($order->vendor->name); ?></strong>
        </p>
        <p style="color:#333333;font-size:13px">
            <?php echo e($order->vendor->address); ?>

        </p>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        <p style="color:#000000;font-size:14px">
            <?php echo e(__('To')); ?>

        </p>
        <?php if(empty($orderStop->delivery_addres)): ?>
            <p style="color:#333333;font-size:16px">
                <strong><?php echo e(__('Customer Pickup')); ?></strong>
            </p>
        <?php else: ?>
            <p style="color:#333333;font-size:16px">
                <strong><?php echo e($order->delivery_address->name ?? ''); ?></strong>
            </p>
            <p style="color:#333333;font-size:12px">
                <?php echo e($order->delivery_address->address ?? ''); ?>

            </p>
        <?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>


<tr>
    <td style="height:20px;margin-top:10px;margin-bottom:10px;" colspan="2">
        <hr />
    </td>
</tr>


<?php if(!empty($order->products) && $order->order_service == null): ?>
    
    <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('title', null, []); ?> 
            <p
                style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px;margin-top:10px;">
                <strong><?php echo e(__('Products')); ?></strong>
            </p>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
    

    <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> 
                <?php echo e($orderProduct->quantity); ?> x <?php echo e($orderProduct->product->name); ?>

             <?php $__env->endSlot(); ?>
             <?php $__env->slot('content', null, []); ?> 
                <p
                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px;text-align:right">
                    <?php echo e(currencyFormat($orderProduct->price)); ?>

                </p>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    
    <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('title', null, []); ?> 
            <p
                style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px;margin-top:10px;">
                <strong><?php echo e(__('Service')); ?></strong>
            </p>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('title', null, []); ?> 
            <?php echo e($order->order_service->service->name); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <p
                style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px;text-align:right">
                <?php echo e(currencyFormat($order->order_service->price)); ?>

            </p>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/view/emails/includes/order_details.blade.php ENDPATH**/ ?>