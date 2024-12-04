<?php $__env->startSection('title', __('Orders')); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Orders')).'','showNew' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Orders')).'','showNew' => true]); ?>
        <?php if($stopRefresh): ?>
            <div>
            <?php else: ?>
                <div wire:poll.20000ms="refreshDataTable">
        <?php endif; ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.order-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l3377369941-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3377369941-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3377369941-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3377369941-0');
} else {
    $response = \Livewire\Livewire::mount('tables.order-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3377369941-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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


<div x-data="{ open: <?php if ((object) ('showDetails') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'->value()); ?>')<?php echo e('showDetails'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'); ?>')<?php endif; ?> }">
    <?php if (isset($component)) { $__componentOriginal0df1a91d4c1d99a1c30b8648c80a87d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0df1a91d4c1d99a1c30b8648c80a87d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal-xl','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-xl'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <p class="text-xl font-semibold"><?php echo e(__('Order Details')); ?></p>
        <?php if(!empty($selectedModel)): ?>
            <?php switch($selectedModel->order_type):
                case ('package'): ?>
                    <?php echo $__env->make('livewire.order.package_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>

                <?php case ('parcel'): ?>
                    <?php echo $__env->make('livewire.order.package_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>

                <?php case ('service'): ?>
                    <?php echo $__env->make('livewire.order.service_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>

                <?php case ('taxi'): ?>
                    <?php echo $__env->make('livewire.order.taxi_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>

                <?php default: ?>
                    <?php echo $__env->make('livewire.order.regular_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php break; ?>
            <?php endswitch; ?>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0df1a91d4c1d99a1c30b8648c80a87d6)): ?>
<?php $attributes = $__attributesOriginal0df1a91d4c1d99a1c30b8648c80a87d6; ?>
<?php unset($__attributesOriginal0df1a91d4c1d99a1c30b8648c80a87d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0df1a91d4c1d99a1c30b8648c80a87d6)): ?>
<?php $component = $__componentOriginal0df1a91d4c1d99a1c30b8648c80a87d6; ?>
<?php unset($__componentOriginal0df1a91d4c1d99a1c30b8648c80a87d6); ?>
<?php endif; ?>
</div>


<div x-data="{ open: <?php if ((object) ('showEdit') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showEdit'->value()); ?>')<?php echo e('showEdit'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showEdit'); ?>')<?php endif; ?> }">
    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['confirmText' => ''.e(__('Update')).'','action' => 'update']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['confirmText' => ''.e(__('Update')).'','action' => 'update']); ?>

        <p class="text-xl font-semibold"><?php echo e(__('Edit Order')); ?></p>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Code')).'','text' => '#'.e($selectedModel->code ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Code')).'','text' => '#'.e($selectedModel->code ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $attributes = $__attributesOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $component = $__componentOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__componentOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Status')).'','text' => ''.e($selectedModel->status ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Status')).'','text' => ''.e($selectedModel->status ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $attributes = $__attributesOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $component = $__componentOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__componentOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Payment Status')).'','text' => ''.e($selectedModel->payment_status ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Status')).'','text' => ''.e($selectedModel->payment_status ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $attributes = $__attributesOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $component = $__componentOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__componentOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Payment Method')).'','text' => ''.e($selectedModel->payment_method->name ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Method')).'','text' => ''.e($selectedModel->payment_method->name ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $attributes = $__attributesOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $component = $__componentOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__componentOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
        </div>
        <?php if($selectedModel->can_edit_products ?? false): ?>
            <div class="gap-4 mt-5 border-t">
                <p class="w-full py-4 text-center underline cursor-pointer text-primary-500"
                    wire:click="showEditOrderProducts"><?php echo e(__('Edit Products')); ?></p>
            </div>
        <?php endif; ?>
        <div class="gap-4 mt-5 border-t">
            
            
            <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'deliveryBoyId','title' => ''.e(__('Delivery Personal')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'deliveryBoyId','title' => ''.e(__('Delivery Personal')).'']); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('select.edit-order-driver-select', ['name' => 'deliveryBoyId','placeholder' => ''.e(__('Delivery Personal/Driver')).'','searchable' => true])->html();
} elseif ($_instance->childHasBeenRendered('l3377369941-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3377369941-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3377369941-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3377369941-1');
} else {
    $response = \Livewire\Livewire::mount('select.edit-order-driver-select', ['name' => 'deliveryBoyId','placeholder' => ''.e(__('Delivery Personal/Driver')).'','searchable' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('l3377369941-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['title' => ''.e(__('Status')).'','options' => $orderStatus ?? [],'name' => 'status']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Status')).'','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orderStatus ?? []),'name' => 'status']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['title' => ''.e(__('Payment Status')).'','options' => $orderPaymentStatus ?? [],'name' => 'paymentStatus']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Status')).'','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orderPaymentStatus ?? []),'name' => 'paymentStatus']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $attributes = $__attributesOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__attributesOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2cde6083938c436304f332ba96bb7c)): ?>
<?php $component = $__componentOriginaled2cde6083938c436304f332ba96bb7c; ?>
<?php unset($__componentOriginaled2cde6083938c436304f332ba96bb7c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => ''.e(__('Note')).'','name' => 'note']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Note')).'','name' => 'note']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>

        </div>
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



<div x-data="{ open: <?php if ((object) ('showAssign') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showAssign'->value()); ?>')<?php echo e('showAssign'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showAssign'); ?>')<?php endif; ?> }">
    <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['confirmText' => ''.e(__('Approve')).'','action' => 'approvePayment']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['confirmText' => ''.e(__('Approve')).'','action' => 'approvePayment']); ?>

        <p class="text-xl font-semibold"><?php echo e(__('Order Payment Proof')); ?></p>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Transaction Code')).'','text' => ''.e($selectedModel->payment->ref ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Transaction Code')).'','text' => ''.e($selectedModel->payment->ref ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $attributes = $__attributesOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $component = $__componentOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__componentOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Status')).'','text' => ''.e($selectedModel->payment->status ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Status')).'','text' => ''.e($selectedModel->payment->status ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $attributes = $__attributesOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $component = $__componentOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__componentOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Payment Method')).'','text' => ''.e($selectedModel->payment_method->name ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Method')).'','text' => ''.e($selectedModel->payment_method->name ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $attributes = $__attributesOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $component = $__componentOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__componentOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
            <div>
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => ''.e(__('Transaction Photo')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Transaction Photo')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <a href="<?php echo e($selectedModel->payment->photo ?? ''); ?>" target="_blank">
                    <img src="<?php echo e($selectedModel->payment->photo ?? ''); ?>" class="w-32 h-32" />
                </a>
            </div>
        </div>
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
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/orders.blade.php ENDPATH**/ ?>