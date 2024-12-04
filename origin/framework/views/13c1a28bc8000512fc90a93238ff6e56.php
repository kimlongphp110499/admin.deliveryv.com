<?php $__env->startSection('title', __('Refunds')); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Refunds')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Refunds')).'']); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.refund-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l1982275942-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1982275942-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1982275942-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1982275942-0');
} else {
    $response = \Livewire\Livewire::mount('tables.refund-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1982275942-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

    
    <div x-data="{ open: <?php if ((object) ('showDetails') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'->value()); ?>')<?php echo e('showDetails'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginal499fb9141b93d6f99741a42b1db79e84 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal499fb9141b93d6f99741a42b1db79e84 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal-lg','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-lg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <p class="text-xl font-semibold"><?php echo e(__('Order Details')); ?></p>
            <?php if(!empty($selectedModel) ): ?>
                <?php switch($selectedModel->order_type):
                    case ("package"): ?>
                        <?php echo $__env->make('livewire.order.package_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ("parcel"): ?>
                        <?php echo $__env->make('livewire.order.package_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ("service"): ?>
                        <?php echo $__env->make('livewire.order.service_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                    <?php case ("taxi"): ?>
                        <?php echo $__env->make('livewire.order.taxi_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>

                    <?php default: ?>
                        <?php echo $__env->make('livewire.order.regular_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php break; ?>
                <?php endswitch; ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal499fb9141b93d6f99741a42b1db79e84)): ?>
<?php $attributes = $__attributesOriginal499fb9141b93d6f99741a42b1db79e84; ?>
<?php unset($__attributesOriginal499fb9141b93d6f99741a42b1db79e84); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal499fb9141b93d6f99741a42b1db79e84)): ?>
<?php $component = $__componentOriginal499fb9141b93d6f99741a42b1db79e84; ?>
<?php unset($__componentOriginal499fb9141b93d6f99741a42b1db79e84); ?>
<?php endif; ?>
    </div>


</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/refunds.blade.php ENDPATH**/ ?>