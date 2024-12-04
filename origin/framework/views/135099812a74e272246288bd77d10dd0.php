<div class="flex items-center gap-x-2">


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
    <?php if( setting('currencyCode', 'USD') == $model->code ): ?>
        <span class="p-2 text-gray-600 border rounded-md"><?php echo e(__('Activated')); ?></span>
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



</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/buttons/currency_actions.blade.php ENDPATH**/ ?>