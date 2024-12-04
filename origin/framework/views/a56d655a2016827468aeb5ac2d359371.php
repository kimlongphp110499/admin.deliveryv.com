<?php $__env->startSection('title', __('Settings')); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Settings')).'']); ?>

        <?php if (isset($component)) { $__componentOriginal8383b4898d21e249722388691c20716c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8383b4898d21e249722388691c20716c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.tabview','data' => ['class' => 'shadow pb-10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.tabview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'shadow pb-10']); ?>

             <?php $__env->slot('header', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal44239d0c81e6cca14c1e56d802f175c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '1','title' => ''.e(__('Push notification setting(Firebase)')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '1','title' => ''.e(__('Push notification setting(Firebase)')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $attributes = $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $component = $__componentOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal44239d0c81e6cca14c1e56d802f175c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '2','title' => ''.e(__('Backend Settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '2','title' => ''.e(__('Backend Settings')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $attributes = $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $component = $__componentOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal44239d0c81e6cca14c1e56d802f175c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '3','title' => ''.e(__('General Settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '3','title' => ''.e(__('General Settings')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $attributes = $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $component = $__componentOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal44239d0c81e6cca14c1e56d802f175c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '4','title' => ''.e(__('Custom Order Notification Messages')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '4','title' => ''.e(__('Custom Order Notification Messages')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $attributes = $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $component = $__componentOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal44239d0c81e6cca14c1e56d802f175c6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '5','title' => ''.e(__('File Upload Limits')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '5','title' => ''.e(__('File Upload Limits')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $attributes = $__attributesOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__attributesOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6)): ?>
<?php $component = $__componentOriginal44239d0c81e6cca14c1e56d802f175c6; ?>
<?php unset($__componentOriginal44239d0c81e6cca14c1e56d802f175c6); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('body', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginal069daa2c1673be3436fef69d19ee8d93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069daa2c1673be3436fef69d19ee8d93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.body','data' => ['tab' => '1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '1']); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.notification', [])->html();
} elseif ($_instance->childHasBeenRendered('l828642090-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l828642090-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l828642090-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l828642090-0');
} else {
    $response = \Livewire\Livewire::mount('settings.notification', []);
    $html = $response->html();
    $_instance->logRenderedChild('l828642090-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $attributes = $__attributesOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $component = $__componentOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__componentOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal069daa2c1673be3436fef69d19ee8d93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069daa2c1673be3436fef69d19ee8d93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.body','data' => ['tab' => '2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '2']); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.backend-settings', [])->html();
} elseif ($_instance->childHasBeenRendered('l828642090-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l828642090-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l828642090-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l828642090-1');
} else {
    $response = \Livewire\Livewire::mount('settings.backend-settings', []);
    $html = $response->html();
    $_instance->logRenderedChild('l828642090-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $attributes = $__attributesOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $component = $__componentOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__componentOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal069daa2c1673be3436fef69d19ee8d93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069daa2c1673be3436fef69d19ee8d93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.body','data' => ['tab' => '3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '3']); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.web-app-settings', [])->html();
} elseif ($_instance->childHasBeenRendered('l828642090-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l828642090-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l828642090-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l828642090-2');
} else {
    $response = \Livewire\Livewire::mount('settings.web-app-settings', []);
    $html = $response->html();
    $_instance->logRenderedChild('l828642090-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $attributes = $__attributesOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $component = $__componentOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__componentOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal069daa2c1673be3436fef69d19ee8d93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069daa2c1673be3436fef69d19ee8d93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.body','data' => ['tab' => '4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '4']); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.custom-notification-message', [])->html();
} elseif ($_instance->childHasBeenRendered('l828642090-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l828642090-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l828642090-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l828642090-3');
} else {
    $response = \Livewire\Livewire::mount('settings.custom-notification-message', []);
    $html = $response->html();
    $_instance->logRenderedChild('l828642090-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $attributes = $__attributesOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $component = $__componentOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__componentOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal069daa2c1673be3436fef69d19ee8d93 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal069daa2c1673be3436fef69d19ee8d93 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.body','data' => ['tab' => '5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '5']); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.file-limit', [])->html();
} elseif ($_instance->childHasBeenRendered('l828642090-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l828642090-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l828642090-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l828642090-4');
} else {
    $response = \Livewire\Livewire::mount('settings.file-limit', []);
    $html = $response->html();
    $_instance->logRenderedChild('l828642090-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $attributes = $__attributesOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__attributesOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal069daa2c1673be3436fef69d19ee8d93)): ?>
<?php $component = $__componentOriginal069daa2c1673be3436fef69d19ee8d93; ?>
<?php unset($__componentOriginal069daa2c1673be3436fef69d19ee8d93); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8383b4898d21e249722388691c20716c)): ?>
<?php $attributes = $__attributesOriginal8383b4898d21e249722388691c20716c; ?>
<?php unset($__attributesOriginal8383b4898d21e249722388691c20716c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8383b4898d21e249722388691c20716c)): ?>
<?php $component = $__componentOriginal8383b4898d21e249722388691c20716c; ?>
<?php unset($__componentOriginal8383b4898d21e249722388691c20716c); ?>
<?php endif; ?>
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

    <?php echo $__env->make('layouts.partials.wysisyg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if (isset($component)) { $__componentOriginal84bc13f46ede078ae58666238de3da00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal84bc13f46ede078ae58666238de3da00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal84bc13f46ede078ae58666238de3da00)): ?>
<?php $attributes = $__attributesOriginal84bc13f46ede078ae58666238de3da00; ?>
<?php unset($__attributesOriginal84bc13f46ede078ae58666238de3da00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal84bc13f46ede078ae58666238de3da00)): ?>
<?php $component = $__componentOriginal84bc13f46ede078ae58666238de3da00; ?>
<?php unset($__componentOriginal84bc13f46ede078ae58666238de3da00); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/settings/index.blade.php ENDPATH**/ ?>