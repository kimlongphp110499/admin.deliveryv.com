<div class="flex items-center gap-x-2">

    <?php if (isset($component)) { $__componentOriginal5be0409501952822bbc271806cd0dbe9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5be0409501952822bbc271806cd0dbe9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.payout','data' => ['model' => $model]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.payout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['model' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($model)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5be0409501952822bbc271806cd0dbe9)): ?>
<?php $attributes = $__attributesOriginal5be0409501952822bbc271806cd0dbe9; ?>
<?php unset($__attributesOriginal5be0409501952822bbc271806cd0dbe9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5be0409501952822bbc271806cd0dbe9)): ?>
<?php $component = $__componentOriginal5be0409501952822bbc271806cd0dbe9; ?>
<?php unset($__componentOriginal5be0409501952822bbc271806cd0dbe9); ?>
<?php endif; ?>
    <?php if( ($type ?? '' ) == "drivers"): ?>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', "admin|city-admin")): ?>
    <?php if($model->amount > 0): ?>
        <?php if (isset($component)) { $__componentOriginal22f2a551afff288dcea10b92ba0cb847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22f2a551afff288dcea10b92ba0cb847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.plain','data' => ['wireClick' => '$emit(\'initiateEarningWalletTransfer\', '.e($model->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wireClick' => '$emit(\'initiateEarningWalletTransfer\', '.e($model->id).')']); ?>
            <?php echo e(__("Transfer")); ?>

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
    <?php endif; ?>
    <?php endif; ?>

</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/buttons/earning_actions.blade.php ENDPATH**/ ?>