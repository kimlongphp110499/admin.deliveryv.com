<?php $__env->startSection('title', __('Customers Report') ); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '']); ?>
        
        <div class="grid gap-6 mt-10 md:grid-cols-2 lg:grid-cols-4 md:grid">

            
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
    $html = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $topSuccessfulOrdersChart])->html();
} elseif ($_instance->childHasBeenRendered('l2694751488-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2694751488-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2694751488-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2694751488-0');
} else {
    $response = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $topSuccessfulOrdersChart]);
    $html = $response->html();
    $_instance->logRenderedChild('l2694751488-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    $html = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $topCustomersChart])->html();
} elseif ($_instance->childHasBeenRendered('l2694751488-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2694751488-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2694751488-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2694751488-1');
} else {
    $response = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $topCustomersChart]);
    $html = $response->html();
    $_instance->logRenderedChild('l2694751488-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    $html = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $mostCancelsChart])->html();
} elseif ($_instance->childHasBeenRendered('l2694751488-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l2694751488-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2694751488-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2694751488-2');
} else {
    $response = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $mostCancelsChart]);
    $html = $response->html();
    $_instance->logRenderedChild('l2694751488-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    $html = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $leastCustomersChart])->html();
} elseif ($_instance->childHasBeenRendered('l2694751488-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l2694751488-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2694751488-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2694751488-3');
} else {
    $response = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $leastCustomersChart]);
    $html = $response->html();
    $_instance->logRenderedChild('l2694751488-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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


        </div>
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
    <div class="mt-12"></div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Customers Report')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Customers Report')).'']); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.reports.customer-report-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l2694751488-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l2694751488-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2694751488-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2694751488-4');
} else {
    $response = \Livewire\Livewire::mount('tables.reports.customer-report-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2694751488-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/reports/customers_report.blade.php ENDPATH**/ ?>