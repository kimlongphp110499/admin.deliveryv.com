<div class="flex items-center gap-x-2">


    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'admin|city-admin')): ?>
        <?php if (isset($component)) { $__componentOriginal439707f3e2c3b6fb941683a6729701a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal439707f3e2c3b6fb941683a6729701a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.assign','data' => ['model' => $model]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.assign'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal439707f3e2c3b6fb941683a6729701a6)): ?>
<?php $attributes = $__attributesOriginal439707f3e2c3b6fb941683a6729701a6; ?>
<?php unset($__attributesOriginal439707f3e2c3b6fb941683a6729701a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal439707f3e2c3b6fb941683a6729701a6)): ?>
<?php $component = $__componentOriginal439707f3e2c3b6fb941683a6729701a6; ?>
<?php unset($__componentOriginal439707f3e2c3b6fb941683a6729701a6); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal2f9ce280949f52fa97b03b201c16f069 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f9ce280949f52fa97b03b201c16f069 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.loginas','data' => ['model' => $model]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.loginas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f9ce280949f52fa97b03b201c16f069)): ?>
<?php $attributes = $__attributesOriginal2f9ce280949f52fa97b03b201c16f069; ?>
<?php unset($__attributesOriginal2f9ce280949f52fa97b03b201c16f069); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f9ce280949f52fa97b03b201c16f069)): ?>
<?php $component = $__componentOriginal2f9ce280949f52fa97b03b201c16f069; ?>
<?php unset($__componentOriginal2f9ce280949f52fa97b03b201c16f069); ?>
<?php endif; ?>
    <?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal6cad4628cb66e9520a12470ef1f1650a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6cad4628cb66e9520a12470ef1f1650a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.time','data' => ['model' => $model]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.time'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6cad4628cb66e9520a12470ef1f1650a)): ?>
<?php $attributes = $__attributesOriginal6cad4628cb66e9520a12470ef1f1650a; ?>
<?php unset($__attributesOriginal6cad4628cb66e9520a12470ef1f1650a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6cad4628cb66e9520a12470ef1f1650a)): ?>
<?php $component = $__componentOriginal6cad4628cb66e9520a12470ef1f1650a; ?>
<?php unset($__componentOriginal6cad4628cb66e9520a12470ef1f1650a); ?>
<?php endif; ?>
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

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'city-admin|admin')): ?>
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
    <?php endif; ?>

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'manager')): ?>
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
        <?php endif; ?>
    <?php endif; ?>


    <?php
        $bgColor = 'bg-red-500';
        $title = __('Go Offline');
        $action = 'goOffline';
        if (!$model->is_open) {
            $bgColor = 'bg-green-500';
            $title = __('Go Online');
            $action = 'goOnline';
        }
    ?>

    <?php if (isset($component)) { $__componentOriginal22f2a551afff288dcea10b92ba0cb847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22f2a551afff288dcea10b92ba0cb847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.plain','data' => ['bgColor' => $bgColor,'title' => $title,'wireClick' => ''.e($action).'(\''.e($model->id).'\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bgColor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bgColor),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title),'wireClick' => ''.e($action).'(\''.e($model->id).'\')']); ?>
        <?php if($model->is_open): ?>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-status-offline'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ml-1 w-5 h-5']); ?>
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
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-status-online'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ml-1 w-5 h-5']); ?>
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



</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/buttons/market_actions.blade.php ENDPATH**/ ?>