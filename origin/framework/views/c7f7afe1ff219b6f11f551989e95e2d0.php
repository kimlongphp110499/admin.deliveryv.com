<?php $__env->startSection('title', __('Payment Update')); ?>
<div class="">
    <div class="w-11/12 p-12 mx-auto mt-20 border rounded shadow md:w-6/12 lg:w-4/12">

        <?php echo e(svg($icon ?? 'heroicon-o-exclamation')->class('w-12 h-12 mx-auto text-primary-400 md:h-24 md:w-24')); ?>

        <p class="text-xl font-medium text-center"><?php echo e(!empty($title) ? $title : __('Already processed')); ?></p>
        <p class="text-sm text-center">
            <?php echo e(!empty($message) ? $message : __('Payment has already been processed. Please check your app to see more details about the payment')); ?>

        </p>
    </div>

    
    <p class="w-full p-4 text-sm text-center text-gray-500"><?php echo e(__('You may close this window')); ?></p>
    <?php if (isset($component)) { $__componentOriginal389bdb2dd1c5e5ef1c5ae8a0305b2147 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal389bdb2dd1c5e5ef1c5ae8a0305b2147 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.close','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.close'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal389bdb2dd1c5e5ef1c5ae8a0305b2147)): ?>
<?php $attributes = $__attributesOriginal389bdb2dd1c5e5ef1c5ae8a0305b2147; ?>
<?php unset($__attributesOriginal389bdb2dd1c5e5ef1c5ae8a0305b2147); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal389bdb2dd1c5e5ef1c5ae8a0305b2147)): ?>
<?php $component = $__componentOriginal389bdb2dd1c5e5ef1c5ae8a0305b2147; ?>
<?php unset($__componentOriginal389bdb2dd1c5e5ef1c5ae8a0305b2147); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/payment/processed.blade.php ENDPATH**/ ?>