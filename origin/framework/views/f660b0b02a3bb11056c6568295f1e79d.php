<?php $__env->startSection('title', __('New Order')); ?>
<div>


    <?php if (isset($component)) { $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form','data' => ['action' => 'showSummary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'showSummary']); ?>
        <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Create Order')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Create Order')).'']); ?>

            <div class='md:min-h-[70%] grid grid-cols-1 md:grid-cols-4 md:gap-4'>
                <div class="col-span-3">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        
                        <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'customer_id','title' => ''.e(__('Customer')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'customer_id','title' => ''.e(__('Customer')).'']); ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('select.new-order-user-select', ['name' => 'user_id','placeholder' => ''.e(__('Select Customer')).'','searchable' => true])->html();
} elseif ($_instance->childHasBeenRendered('l640433966-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l640433966-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l640433966-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l640433966-0');
} else {
    $response = \Livewire\Livewire::mount('select.new-order-user-select', ['name' => 'user_id','placeholder' => ''.e(__('Select Customer')).'','searchable' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('l640433966-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                        
                        <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'vendor_id','title' => ''.e(__('Vendor')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'vendor_id','title' => ''.e(__('Vendor')).'']); ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('select.new-order-vendor-select', ['name' => 'vendor_id','placeholder' => ''.e(__('Select Vendor')).'','searchable' => true])->html();
} elseif ($_instance->childHasBeenRendered('l640433966-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l640433966-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l640433966-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l640433966-1');
} else {
    $response = \Livewire\Livewire::mount('select.new-order-vendor-select', ['name' => 'vendor_id','placeholder' => ''.e(__('Select Vendor')).'','searchable' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('l640433966-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                    </div>

                    
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'product_id','title' => ''.e(__('Product')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'product_id','title' => ''.e(__('Product')).'']); ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('select.new-order-product-select', ['name' => 'product_id','placeholder' => ''.e(__('Search products')).'','searchable' => true,'dependsOn' => ['vendor_id']])->html();
} elseif ($_instance->childHasBeenRendered('l640433966-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l640433966-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l640433966-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l640433966-2');
} else {
    $response = \Livewire\Livewire::mount('select.new-order-product-select', ['name' => 'product_id','placeholder' => ''.e(__('Search products')).'','searchable' => true,'dependsOn' => ['vendor_id']]);
    $html = $response->html();
    $_instance->logRenderedChild('l640433966-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                    <table class="my-4 w-full shadow-sm border-collapse border border-gray-400">
                        <?php
                            $cellClasses = 'border border-gray-300 p-2 py-4 text-left';
                        ?>
                        <thead>
                            <tr class="bg-black text-white">
                                <th colspan="3" class="<?php echo e($cellClasses); ?>"><?php echo e(__('Product')); ?></th>
                                <th class="<?php echo e($cellClasses); ?>"><?php echo e(__('Options')); ?></th>
                                <th class="<?php echo e($cellClasses); ?>"><?php echo e(__('Quantity')); ?></th>
                                <th class="<?php echo e($cellClasses); ?>"><?php echo e(__('Price')); ?></th>
                                <th class="<?php echo e($cellClasses); ?> text-center"><?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class=" <?php echo e($key % 2 == 1 ? 'bg-gray-100' : 'bg-white'); ?> ">
                                    <td colspan="3" class="<?php echo e($cellClasses); ?>">
                                        <?php echo e($product['name'] ?? ''); ?>

                                    </td>
                                    <td class="<?php echo e($cellClasses); ?>">
                                        <?php
                                            $selected_options = $product['selected_options'] ?? [];
                                            if (is_string($selected_options)) {
                                                $selected_options = json_decode($selected_options, true);
                                            }
                                        ?>
                                        <?php $__currentLoopData = $selected_options ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($option['name'] ?? ''); ?><?php echo e(!$loop->last ? ',' : ''); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td class="<?php echo e($cellClasses); ?> w-24">
                                        <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'number','name' => 'products.'.e($key).'.qty','min' => '1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','name' => 'products.'.e($key).'.qty','min' => '1']); ?>
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
                                    </td>
                                    <td class="<?php echo e($cellClasses); ?>">
                                        <?php echo e(currencyFormat($product['price'] ?? '0')); ?>

                                    </td>
                                    <td class="<?php echo e($cellClasses); ?> flex items-center justify-center">
                                        <?php if (isset($component)) { $__componentOriginal22f2a551afff288dcea10b92ba0cb847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22f2a551afff288dcea10b92ba0cb847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.plain','data' => ['bgColor' => 'bg-red-500','wireClick' => 'removeProduct('.e($key).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['bgColor' => 'bg-red-500','wireClick' => 'removeProduct('.e($key).')']); ?>
                                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
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
<?php if (isset($__attributesOriginal22f2a551afff288dcea10b92ba0cb847)): ?>
<?php $attributes = $__attributesOriginal22f2a551afff288dcea10b92ba0cb847; ?>
<?php unset($__attributesOriginal22f2a551afff288dcea10b92ba0cb847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal22f2a551afff288dcea10b92ba0cb847)): ?>
<?php $component = $__componentOriginal22f2a551afff288dcea10b92ba0cb847; ?>
<?php unset($__componentOriginal22f2a551afff288dcea10b92ba0cb847); ?>
<?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if(empty($products)): ?>
                                <tr>
                                    <td colspan="7" class="text-center p-4">
                                        <?php echo e(__('No products added yet')); ?>

                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <hr class="my-4" />
                    
                    <?php if (isset($component)) { $__componentOriginal74b62b190a03153f11871f645315f4de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74b62b190a03153f11871f645315f4de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['name' => 'isPickup','title' => ''.e(__('Pickup Order')).'','defer' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'isPickup','title' => ''.e(__('Pickup Order')).'','defer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $attributes = $__attributesOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__attributesOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74b62b190a03153f11871f645315f4de)): ?>
<?php $component = $__componentOriginal74b62b190a03153f11871f645315f4de; ?>
<?php unset($__componentOriginal74b62b190a03153f11871f645315f4de); ?>
<?php endif; ?>

                    <?php if(!$isPickup): ?>
                        
                        <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'delivery_address_id','title' => ''.e(__('Delivery Address')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'delivery_address_id','title' => ''.e(__('Delivery Address')).'']); ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('select.new-order-delivery-address-select', ['name' => 'delivery_address_id','placeholder' => ''.e(__('Select Delivery Address')).'','searchable' => true,'dependsOn' => ['user_id']])->html();
} elseif ($_instance->childHasBeenRendered('l640433966-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l640433966-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l640433966-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l640433966-3');
} else {
    $response = \Livewire\Livewire::mount('select.new-order-delivery-address-select', ['name' => 'delivery_address_id','placeholder' => ''.e(__('Select Delivery Address')).'','searchable' => true,'dependsOn' => ['user_id']]);
    $html = $response->html();
    $_instance->logRenderedChild('l640433966-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                    <?php endif; ?>

                </div>

                <div class="mt-4 md:mt-0 md:border-l md:pl-4">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['for' => 'payment_method_id','title' => ''.e(__('Payment Method')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'payment_method_id','title' => ''.e(__('Payment Method')).'']); ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('select.payment-method-select', ['name' => 'payment_method_id','value' => $payment_method_id,'placeholder' => '--'.e(__('Select')).'--','dependsOn' => ['vendor_id']])->html();
} elseif ($_instance->childHasBeenRendered('l640433966-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l640433966-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l640433966-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l640433966-4');
} else {
    $response = \Livewire\Livewire::mount('select.payment-method-select', ['name' => 'payment_method_id','value' => $payment_method_id,'placeholder' => '--'.e(__('Select')).'--','dependsOn' => ['vendor_id']]);
    $html = $response->html();
    $_instance->logRenderedChild('l640433966-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

                    
                    <?php if(!$isPickup): ?>
                        <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'number','title' => ''.e(__('Driver Tip')).'','name' => 'tip','min' => '0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'number','title' => ''.e(__('Driver Tip')).'','name' => 'tip','min' => '0']); ?>
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
                    <?php endif; ?>

                    
                    <?php if (isset($component)) { $__componentOriginal4727f9fd7c3055c2cf9c658d89b16886 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.textarea','data' => ['title' => ''.e(__('Note')).'','name' => 'note']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Note')).'','name' => 'note']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886)): ?>
<?php $attributes = $__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886; ?>
<?php unset($__attributesOriginal4727f9fd7c3055c2cf9c658d89b16886); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4727f9fd7c3055c2cf9c658d89b16886)): ?>
<?php $component = $__componentOriginal4727f9fd7c3055c2cf9c658d89b16886; ?>
<?php unset($__componentOriginal4727f9fd7c3055c2cf9c658d89b16886); ?>
<?php endif; ?>

                    
                    <div class="w-full flex items-start justify-start">
                        <div class="w-full">
                            <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'text','title' => ''.e(__('Coupon Code')).'','name' => 'coupon_code']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','title' => ''.e(__('Coupon Code')).'','name' => 'coupon_code']); ?>
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
                        <div class="ml-2 mt-10">
                            <?php if (isset($component)) { $__componentOriginal22f2a551afff288dcea10b92ba0cb847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22f2a551afff288dcea10b92ba0cb847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.plain','data' => ['wireClick' => 'applyCoupon','bgColor' => 'bg-primary-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wireClick' => 'applyCoupon','bgColor' => 'bg-primary-500']); ?>
                                <?php echo e(__('Apply')); ?>

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
                    </div>

                    <hr class="my-4" />
                    
                    <?php if (isset($component)) { $__componentOriginalbb7ef3e56ece23d87a945663f01aebba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7ef3e56ece23d87a945663f01aebba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['noMargin' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['noMargin' => 'true']); ?>
                        <?php echo e(__('Show Summary')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb7ef3e56ece23d87a945663f01aebba)): ?>
<?php $attributes = $__attributesOriginalbb7ef3e56ece23d87a945663f01aebba; ?>
<?php unset($__attributesOriginalbb7ef3e56ece23d87a945663f01aebba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb7ef3e56ece23d87a945663f01aebba)): ?>
<?php $component = $__componentOriginalbb7ef3e56ece23d87a945663f01aebba; ?>
<?php unset($__componentOriginalbb7ef3e56ece23d87a945663f01aebba); ?>
<?php endif; ?>
                </div>
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $attributes = $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $component = $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>




    
    <div x-data="{ open: <?php if ((object) ('showDetails') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'->value()); ?>')<?php echo e('showDetails'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['action' => 'addOptionsToProduct','confirmText' => ''.e(__('Add')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'addOptionsToProduct','confirmText' => ''.e(__('Add')).'']); ?>
            <p class="text-xl font-semibold"><?php echo e(__('Product Options')); ?></p>
            <hr class="my-2" />
            <?php if(!empty($selectedModel)): ?>
                
                <?php $__currentLoopData = $optionGroups ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <p class="font-boldmt-4 text-lg"><?php echo e($optionGroup->name); ?></p>
                    
                    <div class="my-2 mb-8">
                        <?php $__currentLoopData = $optionGroup->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mb-2 flex items-center justify-items-center">

                                <?php if($optionGroup->multiple ?? false): ?>
                                    <input type="checkbox" name="option_<?php echo e($option->id); ?>"
                                        id="option_<?php echo e($option->id); ?>" class="form-checkbox h-5 w-5 text-indigo-600"
                                        wire:key="option_seclection.<?php echo e($key); ?>"
                                        wire:model.defer="newProductSelectedOptions.<?php echo e($option->id); ?>"
                                        value="1">
                                <?php else: ?>
                                    <input type="radio" name="option_<?php echo e($option->id); ?>"
                                        id="optionGroup_<?php echo e($optionGroup->id); ?>"
                                        class="form-radio h-5 w-5 text-indigo-600"
                                        wire:key="option_seclection.<?php echo e($key); ?>"
                                        wire:model.defer="newProductSelectedOptions.<?php echo e($option->id); ?>"
                                        value="1">
                                <?php endif; ?>
                                <p class="font-medium text-sm w-full mx-2 "><?php echo e($option->name); ?></p>
                                <p class="font-bold text-sm w-3/12 text-right">
                                    <?php echo e(currencyFormat($option->price ?? 0)); ?>

                                </p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


    

    
    <div x-data="{ open: <?php if ((object) ('showSummary') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showSummary'->value()); ?>')<?php echo e('showSummary'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showSummary'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginal499fb9141b93d6f99741a42b1db79e84 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal499fb9141b93d6f99741a42b1db79e84 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal-lg','data' => ['confirmText' => ''.e(__('Place Order')).'','action' => 'saveNewOrder','onCancel' => '$set(\'showSummary\', false)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-lg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['confirmText' => ''.e(__('Place Order')).'','action' => 'saveNewOrder','onCancel' => '$set(\'showSummary\', false)']); ?>
            <p class="text-xl font-semibold"><?php echo e(__('Order Summary')); ?></p>
            
            <div class="grid grid-cols-1 md:grid-cols-2">
                <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Customer')).'','text' => ''.e($newOrder->user->name ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Customer')).'','text' => ''.e($newOrder->user->name ?? '').'']); ?>
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
                <?php if(!$isPickup): ?>
                    <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Delivery Address')).'','text' => ''.e($newOrder->delivery_address->address ?? 'Pickup').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Delivery Address')).'','text' => ''.e($newOrder->delivery_address->address ?? 'Pickup').'']); ?>
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
                <?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Note')).'','text' => ''.e($newOrder->note ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Note')).'','text' => ''.e($newOrder->note ?? '').'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Payment Method')).'','text' => ''.e($newOrder->payment_method->name ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Method')).'','text' => ''.e($newOrder->payment_method->name ?? '').'']); ?>
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
            <hr class="my-4" />
            
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Vendor')).'','text' => ''.e($newOrder->vendor->name ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Vendor')).'','text' => ''.e($newOrder->vendor->name ?? '').'']); ?>
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
            
            <p class="mt-4 mb-2 font-medium text-md"><?php echo e(__('Products')); ?></p>
            <table class="w-full p-2 border rounded-sm">
                <thead>
                    <tr>
                        <th class="w-1/12 p-2 bg-gray-300 border-b">S/N</th>
                        <th class="w-3/12 p-2 bg-gray-300 border-b">Name</th>
                        <th class="w-4/12 p-2 bg-gray-300 border-b">Options</th>
                        <th class="w-2/12 p-2 bg-gray-300 border-b">QTY</th>
                    </tr>
                </thead>
                <tbody>


                    <?php $__currentLoopData = $products ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="items-center w-1/12 px-2 py-1 border-b">
                                <span><?php echo e($key + 1); ?></span>
                            </td>
                            <td class="items-center w-2/12 px-2 py-1 border-b">
                                <?php echo e($product['name'] ?? ''); ?>

                            </td>
                            <td class="items-center w-4/12 px-2 py-1 border-b">
                                <?php
                                    $selected_options = $product['selected_options'] ?? [];
                                    if (is_string($selected_options)) {
                                        $selected_options = json_decode($selected_options, true);
                                    }
                                ?>
                                <?php $__currentLoopData = $selected_options ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($option['name'] ?? ''); ?><?php echo e(!$loop->last ? ',' : ''); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td class="items-center w-1/12 px-2 py-1 border-b">
                                <?php echo e($product['qty'] ?? '1'); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <hr class="my-4" />
            <div class="">

                <div class="flex items-center justify-end space-x-20 border-b">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => ''.e(__('Subtotal')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Subtotal')).'']); ?>
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
                    <div class="w-6/12 md:w-4/12 lg:w-2/12">
                        <?php if (isset($component)) { $__componentOriginale6f55df0d089f1696fbb95c694f436d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6f55df0d089f1696fbb95c694f436d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.p','data' => ['text' => ''.e(currencyFormat($newOrder->sub_total ?? '')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.p'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => ''.e(currencyFormat($newOrder->sub_total ?? '')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $attributes = $__attributesOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $component = $__componentOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__componentOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="flex items-center justify-end space-x-20 border-b">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => ''.e(__('Discount')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Discount')).'']); ?>
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
                    <div class="w-6/12 md:w-4/12 lg:w-2/12">
                        <?php if (isset($component)) { $__componentOriginale6f55df0d089f1696fbb95c694f436d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6f55df0d089f1696fbb95c694f436d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.p','data' => ['text' => '- '.e(currencyFormat($newOrder->discount ?? '')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.p'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => '- '.e(currencyFormat($newOrder->discount ?? '')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $attributes = $__attributesOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $component = $__componentOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__componentOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="flex items-center justify-end space-x-20 border-b">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => ''.e(__('Tax')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Tax')).'']); ?>
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
                    <div class="w-6/12 md:w-4/12 lg:w-2/12">
                        <?php if (isset($component)) { $__componentOriginale6f55df0d089f1696fbb95c694f436d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6f55df0d089f1696fbb95c694f436d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.p','data' => ['text' => '+ '.e(currencyFormat($newOrder->tax ?? '')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.p'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => '+ '.e(currencyFormat($newOrder->tax ?? '')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $attributes = $__attributesOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $component = $__componentOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__componentOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
                    </div>
                </div>
                <?php if(!$isPickup): ?>
                    <div class="flex items-center justify-end space-x-20 border-b">
                        <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => ''.e(__('Delivery Fee')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Delivery Fee')).'']); ?>
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
                        <div class="w-6/12 md:w-4/12 lg:w-2/12">
                            <?php if (isset($component)) { $__componentOriginale6f55df0d089f1696fbb95c694f436d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6f55df0d089f1696fbb95c694f436d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.p','data' => ['text' => '+ '.e(currencyFormat($newOrder->delivery_fee ?? '0')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.p'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => '+ '.e(currencyFormat($newOrder->delivery_fee ?? '0')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $attributes = $__attributesOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $component = $__componentOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__componentOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <div class="flex items-center justify-end space-x-20 border-b">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => ''.e(__('Driver Tip')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Driver Tip')).'']); ?>
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
                    <div class="w-6/12 md:w-4/12 lg:w-2/12">
                        <?php if (isset($component)) { $__componentOriginale6f55df0d089f1696fbb95c694f436d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6f55df0d089f1696fbb95c694f436d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.p','data' => ['text' => '+ '.e(currencyFormat($newOrder->tip ?? '0')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.p'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => '+ '.e(currencyFormat($newOrder->tip ?? '0')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $attributes = $__attributesOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $component = $__componentOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__componentOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="flex items-center justify-end space-x-20 border-b">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => ''.e(__('Total')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Total')).'']); ?>
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
                    <div class="w-6/12 md:w-4/12 lg:w-2/12">
                        <?php if (isset($component)) { $__componentOriginale6f55df0d089f1696fbb95c694f436d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6f55df0d089f1696fbb95c694f436d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.p','data' => ['text' => ''.e(currencyFormat($newOrder->total ?? '')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.p'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['text' => ''.e(currencyFormat($newOrder->total ?? '')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $attributes = $__attributesOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__attributesOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6f55df0d089f1696fbb95c694f436d5)): ?>
<?php $component = $__componentOriginale6f55df0d089f1696fbb95c694f436d5; ?>
<?php unset($__componentOriginale6f55df0d089f1696fbb95c694f436d5); ?>
<?php endif; ?>
                    </div>
                </div>



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
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/new-order.blade.php ENDPATH**/ ?>