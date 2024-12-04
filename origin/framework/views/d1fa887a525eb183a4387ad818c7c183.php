<div x-data="{ showMore: false }">
    <div class="flex flex-wrap items-center space-x-2 gap-y-2">
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
        
        <button
            class="flex items-center p-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray"
            wire:click="$emit('changeProductTiming', <?php echo e($model->id); ?> ) " title="<?php echo e(__('Edit Open/close time')); ?>">
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-clock'); ?>
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
            <?php echo e($slot ?? ''); ?>

        </button>

        <?php if (isset($component)) { $__componentOriginal3fb88f3c798c2fbfcf9069ea6a28e03f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fb88f3c798c2fbfcf9069ea6a28e03f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.edit','data' => ['model' => $model]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.edit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fb88f3c798c2fbfcf9069ea6a28e03f)): ?>
<?php $attributes = $__attributesOriginal3fb88f3c798c2fbfcf9069ea6a28e03f; ?>
<?php unset($__attributesOriginal3fb88f3c798c2fbfcf9069ea6a28e03f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fb88f3c798c2fbfcf9069ea6a28e03f)): ?>
<?php $component = $__componentOriginal3fb88f3c798c2fbfcf9069ea6a28e03f; ?>
<?php unset($__componentOriginal3fb88f3c798c2fbfcf9069ea6a28e03f); ?>
<?php endif; ?>

        
        
        

        <?php if($model->is_active): ?>
            <?php if (isset($component)) { $__componentOriginalddb1b48c4ff04a5492a9638f60319f8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalddb1b48c4ff04a5492a9638f60319f8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.deactivate','data' => ['model' => $model]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.deactivate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalddb1b48c4ff04a5492a9638f60319f8f)): ?>
<?php $attributes = $__attributesOriginalddb1b48c4ff04a5492a9638f60319f8f; ?>
<?php unset($__attributesOriginalddb1b48c4ff04a5492a9638f60319f8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalddb1b48c4ff04a5492a9638f60319f8f)): ?>
<?php $component = $__componentOriginalddb1b48c4ff04a5492a9638f60319f8f; ?>
<?php unset($__componentOriginalddb1b48c4ff04a5492a9638f60319f8f); ?>
<?php endif; ?>
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal886c919ba6defc38c210539926d23228 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal886c919ba6defc38c210539926d23228 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.activate','data' => ['model' => $model]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.activate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal886c919ba6defc38c210539926d23228)): ?>
<?php $attributes = $__attributesOriginal886c919ba6defc38c210539926d23228; ?>
<?php unset($__attributesOriginal886c919ba6defc38c210539926d23228); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal886c919ba6defc38c210539926d23228)): ?>
<?php $component = $__componentOriginal886c919ba6defc38c210539926d23228; ?>
<?php unset($__componentOriginal886c919ba6defc38c210539926d23228); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginala0d2205837e7192aa1c378a8f0868165 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0d2205837e7192aa1c378a8f0868165 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.delete','data' => ['model' => $model]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0d2205837e7192aa1c378a8f0868165)): ?>
<?php $attributes = $__attributesOriginala0d2205837e7192aa1c378a8f0868165; ?>
<?php unset($__attributesOriginala0d2205837e7192aa1c378a8f0868165); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0d2205837e7192aa1c378a8f0868165)): ?>
<?php $component = $__componentOriginala0d2205837e7192aa1c378a8f0868165; ?>
<?php unset($__componentOriginala0d2205837e7192aa1c378a8f0868165); ?>
<?php endif; ?>
        <?php if($model->available_qty != null && $model->available_qty > 0): ?>
            <?php if (isset($component)) { $__componentOriginal22f2a551afff288dcea10b92ba0cb847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22f2a551afff288dcea10b92ba0cb847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.plain','data' => ['bgColor' => 'bg-red-500','wireClick' => '$emit(\'setOutOfStock\', '.e($model->id).' )','title' => ''.e(__('Set product to out of stock')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bgColor' => 'bg-red-500','wireClick' => '$emit(\'setOutOfStock\', '.e($model->id).' )','title' => ''.e(__('Set product to out of stock')).'']); ?>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('lineawesome-ban-solid'); ?>
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
</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/buttons/product_actions.blade.php ENDPATH**/ ?>