<div class="flex items-center gap-x-2">
    <?php if (isset($component)) { $__componentOriginal8110bcd06083da5640cb413b304f0671 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8110bcd06083da5640cb413b304f0671 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.show','data' => ['model' => $model]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.show'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8110bcd06083da5640cb413b304f0671)): ?>
<?php $attributes = $__attributesOriginal8110bcd06083da5640cb413b304f0671; ?>
<?php unset($__attributesOriginal8110bcd06083da5640cb413b304f0671); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8110bcd06083da5640cb413b304f0671)): ?>
<?php $component = $__componentOriginal8110bcd06083da5640cb413b304f0671; ?>
<?php unset($__componentOriginal8110bcd06083da5640cb413b304f0671); ?>
<?php endif; ?>
    
    <?php if($model->status == 'pending'): ?>
        <?php if (isset($component)) { $__componentOriginal22f2a551afff288dcea10b92ba0cb847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22f2a551afff288dcea10b92ba0cb847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.plain','data' => ['title' => ''.e(__('Upload')).'','bgColor' => 'bg-primary-600 space-x-1','wireClick' => '$emit(\'initiateDocumentUpload\',\''.e($model->id ?? ($id ?? '')).'\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Upload')).'','bgColor' => 'bg-primary-600 space-x-1','wireClick' => '$emit(\'initiateDocumentUpload\',\''.e($model->id ?? ($id ?? '')).'\')']); ?>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-cloud-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <span><?php echo e(__('Upload')); ?></span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22f2a551afff288dcea10b92ba0cb847)): ?>
<?php $attributes = $__attributesOriginal22f2a551afff288dcea10b92ba0cb847; ?>
<?php unset($__attributesOriginal22f2a551afff288dcea10b92ba0cb847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22f2a551afff288dcea10b92ba0cb847)): ?>
<?php $component = $__componentOriginal22f2a551afff288dcea10b92ba0cb847; ?>
<?php unset($__componentOriginal22f2a551afff288dcea10b92ba0cb847); ?>
<?php endif; ?>
        

        
        <?php if (isset($component)) { $__componentOriginal22f2a551afff288dcea10b92ba0cb847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22f2a551afff288dcea10b92ba0cb847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.plain','data' => ['title' => ''.e(__('Approve')).'','bgColor' => 'bg-green-500','wireClick' => 'initiateActivate('.e($model->id ?? ($id ?? '')).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Approve')).'','bgColor' => 'bg-green-500','wireClick' => 'initiateActivate('.e($model->id ?? ($id ?? '')).')']); ?>
            <?php echo e(__('Approve')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22f2a551afff288dcea10b92ba0cb847)): ?>
<?php $attributes = $__attributesOriginal22f2a551afff288dcea10b92ba0cb847; ?>
<?php unset($__attributesOriginal22f2a551afff288dcea10b92ba0cb847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22f2a551afff288dcea10b92ba0cb847)): ?>
<?php $component = $__componentOriginal22f2a551afff288dcea10b92ba0cb847; ?>
<?php unset($__componentOriginal22f2a551afff288dcea10b92ba0cb847); ?>
<?php endif; ?>
        
        <?php if (isset($component)) { $__componentOriginal22f2a551afff288dcea10b92ba0cb847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22f2a551afff288dcea10b92ba0cb847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.plain','data' => ['title' => ''.e(__('Reject')).'','bgColor' => 'bg-red-500','wireClick' => 'initiateDeactivate('.e($model->id ?? ($id ?? '')).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Reject')).'','bgColor' => 'bg-red-500','wireClick' => 'initiateDeactivate('.e($model->id ?? ($id ?? '')).')']); ?>
            <?php echo e(__('Reject')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal22f2a551afff288dcea10b92ba0cb847)): ?>
<?php $attributes = $__attributesOriginal22f2a551afff288dcea10b92ba0cb847; ?>
<?php unset($__attributesOriginal22f2a551afff288dcea10b92ba0cb847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22f2a551afff288dcea10b92ba0cb847)): ?>
<?php $component = $__componentOriginal22f2a551afff288dcea10b92ba0cb847; ?>
<?php unset($__componentOriginal22f2a551afff288dcea10b92ba0cb847); ?>
<?php endif; ?>
    <?php endif; ?>

</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/buttons/document_request_actions.blade.php ENDPATH**/ ?>