<?php $__env->startSection('title', __('Wallet Payment Methods') ); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Wallet Payment Methods')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Wallet Payment Methods')).'']); ?>
        <p>
            <span class="font-semibold text-red-500"><?php echo e(__("Note")); ?>:</span>
            <span class="text-sm text-gray-500">
            <?php echo e(__("Any payment method enabled here will show to wallet top-up even if the payment method is deactivated in the payment methods page")); ?>

            </span>
        </p>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.wallet-payment-methods-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l3387437778-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3387437778-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3387437778-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3387437778-0');
} else {
    $response = \Livewire\Livewire::mount('tables.wallet-payment-methods-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3387437778-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/wallet_payment_methods.blade.php ENDPATH**/ ?>