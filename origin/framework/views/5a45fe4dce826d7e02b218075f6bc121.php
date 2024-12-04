<?php $__env->startSection('title', __('Dashboard')); ?>
<div>
    
    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Dashboard')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Dashboard')).'']); ?>

        
        <div class="grid gap-6 mt-10 md:grid-cols-2 lg:grid-cols-4">

            
            <?php if (isset($component)) { $__componentOriginal88210b161ac9da424ac08c0f17c4d197 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88210b161ac9da424ac08c0f17c4d197 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-card','data' => ['bg' => 'bg-primary-100','title' => ''.e(__('TOTAL ORDERS')).'','value' => ''.e($totalOrders).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bg' => 'bg-primary-100','title' => ''.e(__('TOTAL ORDERS')).'','value' => ''.e($totalOrders).'']); ?>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-shopping-bag'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-16 text-primary-600']); ?>
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
<?php if (isset($__attributesOriginal88210b161ac9da424ac08c0f17c4d197)): ?>
<?php $attributes = $__attributesOriginal88210b161ac9da424ac08c0f17c4d197; ?>
<?php unset($__attributesOriginal88210b161ac9da424ac08c0f17c4d197); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88210b161ac9da424ac08c0f17c4d197)): ?>
<?php $component = $__componentOriginal88210b161ac9da424ac08c0f17c4d197; ?>
<?php unset($__componentOriginal88210b161ac9da424ac08c0f17c4d197); ?>
<?php endif; ?>

            
            <?php if (isset($component)) { $__componentOriginal88210b161ac9da424ac08c0f17c4d197 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88210b161ac9da424ac08c0f17c4d197 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-card','data' => ['bg' => 'bg-blue-100','title' => ''.e(__('TOTAL EARNINGS')).'','value' => ''.e(setting('currency')).' '.e($totalEarnings).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bg' => 'bg-blue-100','title' => ''.e(__('TOTAL EARNINGS')).'','value' => ''.e(setting('currency')).' '.e($totalEarnings).'']); ?>
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-cash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-16 text-primary-600']); ?>
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
<?php if (isset($__attributesOriginal88210b161ac9da424ac08c0f17c4d197)): ?>
<?php $attributes = $__attributesOriginal88210b161ac9da424ac08c0f17c4d197; ?>
<?php unset($__attributesOriginal88210b161ac9da424ac08c0f17c4d197); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88210b161ac9da424ac08c0f17c4d197)): ?>
<?php $component = $__componentOriginal88210b161ac9da424ac08c0f17c4d197; ?>
<?php unset($__componentOriginal88210b161ac9da424ac08c0f17c4d197); ?>
<?php endif; ?>
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                
                <?php if (isset($component)) { $__componentOriginal88210b161ac9da424ac08c0f17c4d197 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88210b161ac9da424ac08c0f17c4d197 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-card','data' => ['bg' => 'bg-red-100','title' => ''.e(__('TOTAL VENDORS')).'','value' => ''.e($totalVendors).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bg' => 'bg-red-100','title' => ''.e(__('TOTAL VENDORS')).'','value' => ''.e($totalVendors).'']); ?>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-cake'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-16 text-primary-600']); ?>
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
<?php if (isset($__attributesOriginal88210b161ac9da424ac08c0f17c4d197)): ?>
<?php $attributes = $__attributesOriginal88210b161ac9da424ac08c0f17c4d197; ?>
<?php unset($__attributesOriginal88210b161ac9da424ac08c0f17c4d197); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88210b161ac9da424ac08c0f17c4d197)): ?>
<?php $component = $__componentOriginal88210b161ac9da424ac08c0f17c4d197; ?>
<?php unset($__componentOriginal88210b161ac9da424ac08c0f17c4d197); ?>
<?php endif; ?>

                
                <?php if (isset($component)) { $__componentOriginal88210b161ac9da424ac08c0f17c4d197 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal88210b161ac9da424ac08c0f17c4d197 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-card','data' => ['bg' => 'bg-yellow-100','title' => ''.e(__('TOTAL Clients')).'','value' => ''.e($totalClients).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bg' => 'bg-yellow-100','title' => ''.e(__('TOTAL Clients')).'','value' => ''.e($totalClients).'']); ?>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-users'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-16 text-primary-600']); ?>
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
<?php if (isset($__attributesOriginal88210b161ac9da424ac08c0f17c4d197)): ?>
<?php $attributes = $__attributesOriginal88210b161ac9da424ac08c0f17c4d197; ?>
<?php unset($__attributesOriginal88210b161ac9da424ac08c0f17c4d197); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88210b161ac9da424ac08c0f17c4d197)): ?>
<?php $component = $__componentOriginal88210b161ac9da424ac08c0f17c4d197; ?>
<?php unset($__componentOriginal88210b161ac9da424ac08c0f17c4d197); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>

        
        <div class="grid gap-6 mt-10 lg:grid-cols-2">

            
            <?php if (isset($component)) { $__componentOriginalab9585ae52c9f420e1cd76443e325fbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-chart','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $ordersChart])->html();
} elseif ($_instance->childHasBeenRendered('l2031384748-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2031384748-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2031384748-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2031384748-0');
} else {
    $response = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $ordersChart]);
    $html = $response->html();
    $_instance->logRenderedChild('l2031384748-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $attributes = $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $component = $__componentOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>

            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                
                <?php if (isset($component)) { $__componentOriginalab9585ae52c9f420e1cd76443e325fbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-chart','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $usersChart])->html();
} elseif ($_instance->childHasBeenRendered('l2031384748-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2031384748-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2031384748-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2031384748-1');
} else {
    $response = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $usersChart]);
    $html = $response->html();
    $_instance->logRenderedChild('l2031384748-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $attributes = $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $component = $__componentOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-4">

            <?php if (isset($component)) { $__componentOriginalab9585ae52c9f420e1cd76443e325fbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-chart','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $topSaleDaysChart])->html();
} elseif ($_instance->childHasBeenRendered('l2031384748-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l2031384748-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2031384748-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2031384748-2');
} else {
    $response = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $topSaleDaysChart]);
    $html = $response->html();
    $_instance->logRenderedChild('l2031384748-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $attributes = $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $component = $__componentOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalab9585ae52c9f420e1cd76443e325fbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-chart','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $topSaleTimingChart])->html();
} elseif ($_instance->childHasBeenRendered('l2031384748-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l2031384748-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2031384748-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2031384748-3');
} else {
    $response = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $topSaleTimingChart]);
    $html = $response->html();
    $_instance->logRenderedChild('l2031384748-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $attributes = $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $component = $__componentOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>

            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                <?php if (isset($component)) { $__componentOriginalab9585ae52c9f420e1cd76443e325fbd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-chart','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $userRolesChart])->html();
} elseif ($_instance->childHasBeenRendered('l2031384748-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l2031384748-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2031384748-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2031384748-4');
} else {
    $response = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $userRolesChart]);
    $html = $response->html();
    $_instance->logRenderedChild('l2031384748-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $attributes = $__attributesOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__attributesOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd)): ?>
<?php $component = $__componentOriginalab9585ae52c9f420e1cd76443e325fbd; ?>
<?php unset($__componentOriginalab9585ae52c9f420e1cd76443e325fbd); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                
                <div wire:init="fetchTopSellingVendors" class="space-y-2 border rounded shadow p-4">
                    <p class="text-base font-semibold text-gray-700">
                        <?php echo e(__('Top selling vendors')); ?>

                    </p>
                    
                    <div class="space-y-2">
                        <?php $__currentLoopData = $topSellingVendors ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <a href="<?php echo e(route('vendor.details', ['id' => $vendor->id])); ?>" target="_blank">
                                    <div class="flex items-center justify-start space-x-2">
                                        <img src="<?php echo e($vendor->logo); ?>" class="object-cover w-10 h-10 rounded" />
                                        <div>
                                            <p class="text-sm"><?php echo e($vendor->name); ?></p>
                                            <p class="text-xs font-light">
                                                <?php echo e(__('Total Orders')); ?>: <?php echo e($vendor->successful_sales_count ?? 0); ?>

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div wire:init="fetchTopRatedVendors" class="space-y-2 border rounded shadow p-4">
                    <p class="text-base font-semibold text-gray-700">
                        <?php echo e(__('Top rated Vendors')); ?>

                    </p>
                    
                    <div class="space-y-2">
                        <?php $__currentLoopData = $topRatedVendors ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <a href="<?php echo e(route('vendor.details', ['id' => $vendor->id])); ?>" target="_blank">
                                    <div class="flex items-center justify-start space-x-2">
                                        <img src="<?php echo e($vendor->logo); ?>" class="object-cover w-10 h-10 rounded" />
                                        <div class="">
                                            <p class="text-sm"><?php echo e($vendor->name); ?></p>
                                            <p class="text-xs font-light flex space-x-2">
                                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-primary-500']); ?>
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
                                                <?php echo e($vendor->rating ?? 0); ?>

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div wire:init="fetchTopCustomers" class="space-y-2 border rounded shadow p-4">
                    <p class="text-base font-semibold text-gray-700">
                        <?php echo e(__('Top Buying Customers')); ?>

                    </p>
                    
                    <div class="space-y-2">
                        <?php $__currentLoopData = $topCustomers ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <a href="<?php echo e(route('users.details', ['id' => $user->id])); ?>" target="_blank">
                                    <div class="flex items-center justify-start space-x-2">
                                        <img src="<?php echo e($user->photo); ?>" class="object-cover w-10 h-10 rounded" />
                                        <div class="">
                                            <p class="text-sm"><?php echo e($user->name); ?></p>
                                            
                                            <div class="flex space-x-2 items-center justify-center">
                                                <p class="text-xs font-light flex space-x-2">
                                                    <?php echo e(__('Total Orders')); ?>:
                                                    <?php echo e($user->orders_count ?? 0); ?>

                                                </p>
                                                <span class="text-xs">|</span>
                                                <p class="text-xs font-light flex space-x-2">
                                                    <?php echo e(__('Successful')); ?>:
                                                    <?php echo e($user->successful_orders_count ?? 0); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div wire:init="fetchTopSellingProducts" class="space-y-2 border rounded shadow p-4">
                    <p class="text-base font-semibold text-gray-700">
                        <?php echo e(__('Top selling Products')); ?>

                    </p>
                    
                    <div class="space-y-2">
                        <?php $__currentLoopData = $topSellingProducts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <a href="<?php echo e(route('product.details', ['id' => $product->id])); ?>" target="_blank">
                                    <div class="flex items-center justify-start space-x-2">
                                        <img src="<?php echo e($product->photo); ?>" class="object-cover w-10 h-10 rounded" />
                                        <div class="">
                                            <p class="text-sm"><?php echo e($product->name); ?></p>
                                            
                                            <div class="flex space-x-2 items-center justify-center">
                                                <p class="text-xs font-light flex space-x-2">
                                                    <?php echo e(__('Orders')); ?>:
                                                    <?php echo e($product->successful_sales_count ?? 0); ?>

                                                </p>
                                                <span class="text-xs">|</span>
                                                <p class="text-xs font-light flex space-x-2">
                                                    <?php echo e(__('Units')); ?>:
                                                    <?php echo e($product->successful_sales_sum_quantity ?? 0); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php else: ?>
                
                <div wire:init="fetchMyTopSellingProducts" class="space-y-2 border rounded shadow p-4">
                    <p class="text-base font-semibold text-gray-700">
                        <?php echo e(__('Top selling Products')); ?>

                    </p>
                    
                    <div class="space-y-2">
                        <?php $__currentLoopData = $myTopSellingProducts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <a href="<?php echo e(route('product.details', ['id' => $product->id])); ?>" target="_blank">
                                    <div class="flex items-center justify-start space-x-2">
                                        <img src="<?php echo e($product->photo); ?>" class="object-cover w-10 h-10 rounded" />
                                        <div class="">
                                            <p class="text-sm"><?php echo e($product->name); ?></p>
                                            
                                            <div class="flex space-x-2 items-center justify-center">
                                                <p class="text-xs font-light flex space-x-2">
                                                    <?php echo e(__('Orders')); ?>:
                                                    <?php echo e($product->successful_sales_count ?? 0); ?>

                                                </p>
                                                <span class="text-xs">|</span>
                                                <p class="text-xs font-light flex space-x-2">
                                                    <?php echo e(__('Units')); ?>:
                                                    <?php echo e($product->successful_sales_sum_quantity ?? 0); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>




        
        <div class="h-20"></div>

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
</div>
<?php $__env->startPush('scripts'); ?>
    <script src="https://admin.deliveryv.com/vendor/livewire-charts/app.js"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/dashboard.blade.php ENDPATH**/ ?>