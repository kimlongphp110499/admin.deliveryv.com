
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
            style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:20px;color:#000000;font-size:13px">
            <?php echo e(__('From')); ?></p>
        <p
            style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">
            <strong></strong><strong><?php echo e($order->stops->first()->name); ?>

                -
                (<?php echo e($order->stops->first()->phone); ?>)</strong><strong></strong><br type="_moz">
        </p>
        <p
            style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
            <?php echo e($order->stops->first()->delivery_address->address); ?><br type="_moz"></p>
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


<?php $__currentLoopData = $order->stops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderStop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <?php if($loop->first): ?>
        <?php continue; ?>
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
            <p
                style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:20px;color:#000000;font-size:13px">
                <?php echo e(__('Stop')); ?></p>
            <p
                style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">
                <strong><?php echo e($orderStop->name); ?> - (<?php echo e($orderStop->phone); ?>)</strong>
                <br type="_moz">
            </p>
            <p
                style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:18px;color:#333333;font-size:12px">
                <?php echo e($orderStop->delivery_address->address); ?>

                <br type="_moz">
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



<tr>
    <td style="height:20px;margin-top:10px;margin-bottom:10px;" colspan="2">
        <hr />
    </td>
</tr>

<?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ' '.e(__('Package details')).'','content' => ''.e($order->package_type->name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ' '.e(__('Package details')).'','content' => ''.e($order->package_type->name).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Weight')).'','content' => ' '.e($order->weight).'kg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Weight')).'','content' => ' '.e($order->weight).'kg']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Width')).'','content' => ''.e($order->width).'cm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Width')).'','content' => ''.e($order->width).'cm']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Length')).'','content' => ''.e($order->length).'cm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Length')).'','content' => ''.e($order->length).'cm']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Height')).'','content' => ''.e($order->height).'cm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Height')).'','content' => ''.e($order->height).'cm']); ?>
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
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/view/emails/includes/package_order_details.blade.php ENDPATH**/ ?>