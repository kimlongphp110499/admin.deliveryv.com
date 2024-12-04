<div class="mx-2 w-32">
    <?php if (isset($component)) { $__componentOriginal452c9455ae0fffff2bd3c651ce856a9f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal452c9455ae0fffff2bd3c651ce856a9f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select-xs','data' => ['options' => $vendors,'name' => 'vendor_id','defer' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select-xs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vendors),'name' => 'vendor_id','defer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal452c9455ae0fffff2bd3c651ce856a9f)): ?>
<?php $attributes = $__attributesOriginal452c9455ae0fffff2bd3c651ce856a9f; ?>
<?php unset($__attributesOriginal452c9455ae0fffff2bd3c651ce856a9f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal452c9455ae0fffff2bd3c651ce856a9f)): ?>
<?php $component = $__componentOriginal452c9455ae0fffff2bd3c651ce856a9f; ?>
<?php unset($__componentOriginal452c9455ae0fffff2bd3c651ce856a9f); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/header/vendor_selector.blade.php ENDPATH**/ ?>