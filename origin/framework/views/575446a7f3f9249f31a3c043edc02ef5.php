<?php $__env->startSection('title', __('Extensions')); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Extensions')).'','showNew' => ''.e($showDetails).'','actionTitle' => ''.e(__('Install')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Extensions')).'','showNew' => ''.e($showDetails).'','actionTitle' => ''.e(__('Install')).'']); ?>
        <div class="mt-10"></div>
        <?php if($showDetails ?? true): ?>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                
                <?php $__currentLoopData = $extensions ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal34ca24560c893a2fa9aa422c35c04ae9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34ca24560c893a2fa9aa422c35c04ae9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.settings-item','data' => ['title' => ''.e(__($extension->name)).'','wireClick' => '$emit(\''.e($extension->action).'\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('settings-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__($extension->name)).'','wireClick' => '$emit(\''.e($extension->action).'\')']); ?>
                        <?php echo e(svg($extension->icon ?? 'heroicon-o-puzzle')->class('w-5 h-5 mr-4')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal34ca24560c893a2fa9aa422c35c04ae9)): ?>
<?php $attributes = $__attributesOriginal34ca24560c893a2fa9aa422c35c04ae9; ?>
<?php unset($__attributesOriginal34ca24560c893a2fa9aa422c35c04ae9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal34ca24560c893a2fa9aa422c35c04ae9)): ?>
<?php $component = $__componentOriginal34ca24560c893a2fa9aa422c35c04ae9; ?>
<?php unset($__componentOriginal34ca24560c893a2fa9aa422c35c04ae9); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        <?php endif; ?>

        <?php $__currentLoopData = $extensions ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($extension->component, [])->html();
} elseif ($_instance->childHasBeenRendered($extension->id)) {
    $componentId = $_instance->getRenderedChildComponentId($extension->id);
    $componentTag = $_instance->getRenderedChildComponentTagName($extension->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($extension->id);
} else {
    $response = \Livewire\Livewire::mount($extension->component, []);
    $html = $response->html();
    $_instance->logRenderedChild($extension->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf492f551685e3ce8be093bf80555c952)): ?>
<?php $attributes = $__attributesOriginalf492f551685e3ce8be093bf80555c952; ?>
<?php unset($__attributesOriginalf492f551685e3ce8be093bf80555c952); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf492f551685e3ce8be093bf80555c952)): ?>
<?php $component = $__componentOriginalf492f551685e3ce8be093bf80555c952; ?>
<?php unset($__componentOriginalf492f551685e3ce8be093bf80555c952); ?>
<?php endif; ?>


    
    <div x-data="{ open: <?php if ((object) ('showCreate') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showCreate'->value()); ?>')<?php echo e('showCreate'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showCreate'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['confirmText' => ''.e(__('Install')).'','action' => 'installExtension']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['confirmText' => ''.e(__('Install')).'','action' => 'installExtension']); ?>
            <p class="text-xl font-semibold"><?php echo e(__('Install Extension')); ?></p>
            <?php if (isset($component)) { $__componentOriginal2cc13b43f108853597af946fc02b5206 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2cc13b43f108853597af946fc02b5206 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.filepond','data' => ['wire:model' => 'photo','name' => 'photo','acceptedFileTypes' => '[\'application/zip\']','allowImagePreview' => 'false','allowFileSizeValidation' => 'true','maxFileSize' => '1mb']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.filepond'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'photo','name' => 'photo','acceptedFileTypes' => '[\'application/zip\']','allowImagePreview' => 'false','allowFileSizeValidation' => 'true','maxFileSize' => '1mb']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2cc13b43f108853597af946fc02b5206)): ?>
<?php $attributes = $__attributesOriginal2cc13b43f108853597af946fc02b5206; ?>
<?php unset($__attributesOriginal2cc13b43f108853597af946fc02b5206); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2cc13b43f108853597af946fc02b5206)): ?>
<?php $component = $__componentOriginal2cc13b43f108853597af946fc02b5206; ?>
<?php unset($__componentOriginal2cc13b43f108853597af946fc02b5206); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
    </div>

</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/extensions/index.blade.php ENDPATH**/ ?>