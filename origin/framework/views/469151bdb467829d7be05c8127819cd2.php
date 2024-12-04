<?php if($model->is_active ?? ($active ?? false)): ?>
    
    <span title="<?php echo e(__('Active')); ?>">
        <?php if (isset($component)) { $__componentOriginaleb403acef064796aa0c4a762c954ab62 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleb403acef064796aa0c4a762c954ab62 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.check','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleb403acef064796aa0c4a762c954ab62)): ?>
<?php $attributes = $__attributesOriginaleb403acef064796aa0c4a762c954ab62; ?>
<?php unset($__attributesOriginaleb403acef064796aa0c4a762c954ab62); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleb403acef064796aa0c4a762c954ab62)): ?>
<?php $component = $__componentOriginaleb403acef064796aa0c4a762c954ab62; ?>
<?php unset($__componentOriginaleb403acef064796aa0c4a762c954ab62); ?>
<?php endif; ?>
    </span>
<?php else: ?>
    
    <span title="<?php echo e(__('Inactive')); ?>">
        <?php if (isset($component)) { $__componentOriginal66d5115e29fd4120257ecaad49b17b6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66d5115e29fd4120257ecaad49b17b6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.close','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.close'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66d5115e29fd4120257ecaad49b17b6d)): ?>
<?php $attributes = $__attributesOriginal66d5115e29fd4120257ecaad49b17b6d; ?>
<?php unset($__attributesOriginal66d5115e29fd4120257ecaad49b17b6d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66d5115e29fd4120257ecaad49b17b6d)): ?>
<?php $component = $__componentOriginal66d5115e29fd4120257ecaad49b17b6d; ?>
<?php unset($__componentOriginal66d5115e29fd4120257ecaad49b17b6d); ?>
<?php endif; ?>
    </span>
<?php endif; ?>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/table/active.blade.php ENDPATH**/ ?>