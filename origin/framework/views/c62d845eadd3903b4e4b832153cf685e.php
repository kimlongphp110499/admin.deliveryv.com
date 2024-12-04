<div>
    <?php $__env->startSection('title',"".__('Edit Order') ." #". ($selectedModel != null ? $selectedModel->code : '') ." ". __("Products") .""); ?>
    <?php if (isset($component)) { $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form','data' => ['confirmText' => ''.e(__('Update')).'','action' => 'updateOrderProducts','clickAway' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['confirmText' => ''.e(__('Update')).'','action' => 'updateOrderProducts','clickAway' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>

        <p class="text-xl font-semibold">
            <?php echo e(__('Edit Order') ." ". __("Products")." - "." #". ($selectedModel != null ? $selectedModel->code : '') ." "); ?>

        </p>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Product')).'','column' => 'name','model' => 'Product','emitFunction' => 'autocompleteProductSelected','updateQueryClauseName' => 'productQueryClasueUpdate','clear' => true,'queryClause' => $productSearchClause,'onclearCalled' => 'clearAutocompleteFieldsEvent'])->html();
} elseif ($_instance->childHasBeenRendered('l633530246-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l633530246-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l633530246-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l633530246-0');
} else {
    $response = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Product')).'','column' => 'name','model' => 'Product','emitFunction' => 'autocompleteProductSelected','updateQueryClauseName' => 'productQueryClasueUpdate','clear' => true,'queryClause' => $productSearchClause,'onclearCalled' => 'clearAutocompleteFieldsEvent']);
    $html = $response->html();
    $_instance->logRenderedChild('l633530246-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <table class="w-full p-2 mt-5 border rounded-sm">
                <thead>
                    <tr>
                        <th class="text-left  p-2 bg-gray-300 border-b">S/N</th>
                        <th class="text-left w-4/12 p-2 bg-gray-300 border-b">Name</th>
                        <th class="text-left w-4/12 p-2 bg-gray-300 border-b">Options</th>
                        <th class="text-left w-2/12 p-2 bg-gray-300 border-b">QTY</th>
                        <th class="text-left w-2/12 p-2 bg-gray-300 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $editOrderProducts ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="items-center px-2 py-1 border-b">
                                <span><?php echo e($key + 1); ?></span>
                            </td>
                            <td class="items-center w-2/12 px-2 py-1 border-b">
                                <?php echo e($product->name); ?>

                            </td>
                            <td class="items-center w-4/12 px-2 py-1 border-b">
                                <?php $__currentLoopData = $product->option_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="p-1 mb-2 border-b">
                                        <p class="text-sm font-medium"><?php echo e($option_group->name); ?></p>
                                        <p class="ml-2">
                                            <?php $__currentLoopData = $option_group->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php
                                                    if($option_group->multiple){
                                                        $optionId = "editProductOptions.".$product->id.".".$option_group->id.".".$option->id;
                                                    }else{
                                                        $optionId = "editProductOptions.".$product->id.".".$option_group->id;
                                                    }
                                                ?>
                                                <?php if($option_group->multiple): ?>
                                                    <?php if (isset($component)) { $__componentOriginal74b62b190a03153f11871f645315f4de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74b62b190a03153f11871f645315f4de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['title' => ''.e($option->name.' ('.currencyFormat($option->price).')').'','name' => ''.e($optionId).'','defer' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($option->name.' ('.currencyFormat($option->price).')').'','name' => ''.e($optionId).'','defer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
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
                                                <?php else: ?>
                                                    <?php if (isset($component)) { $__componentOriginal2f9894a01a11669b094ae0763b00bdf1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f9894a01a11669b094ae0763b00bdf1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.radio','data' => ['type' => 'radio','title' => ''.e($option->name.' ('.currencyFormat($option->price).')').'','name' => ''.e($optionId).'','defer' => false,'value' => ''.e($option->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'radio','title' => ''.e($option->name.' ('.currencyFormat($option->price).')').'','name' => ''.e($optionId).'','defer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false),'value' => ''.e($option->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f9894a01a11669b094ae0763b00bdf1)): ?>
<?php $attributes = $__attributesOriginal2f9894a01a11669b094ae0763b00bdf1; ?>
<?php unset($__attributesOriginal2f9894a01a11669b094ae0763b00bdf1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f9894a01a11669b094ae0763b00bdf1)): ?>
<?php $component = $__componentOriginal2f9894a01a11669b094ae0763b00bdf1; ?>
<?php unset($__componentOriginal2f9894a01a11669b094ae0763b00bdf1); ?>
<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td class="items-center w-1/12 px-2 py-1 border-b">
                                <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'editOrderProductsQtys.'.e($product->id).'','type' => 'number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'editOrderProductsQtys.'.e($product->id).'','type' => 'number']); ?>
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
                            <td class="items-center w-2/12 px-2 py-1 border-b">
                                
                                <?php if (isset($component)) { $__componentOriginal22f2a551afff288dcea10b92ba0cb847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal22f2a551afff288dcea10b92ba0cb847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.plain','data' => ['wireClick' => '$emit(\'removeProductFromOrder\', \''.e($product->id).'\' )','bgColor' => 'bg-red-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.plain'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wireClick' => '$emit(\'removeProductFromOrder\', \''.e($product->id).'\' )','bgColor' => 'bg-red-500']); ?>
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
                </tbody>
            </table>
            
            <hr class="my-4" />
            <?php if (isset($component)) { $__componentOriginalbb7ef3e56ece23d87a945663f01aebba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7ef3e56ece23d87a945663f01aebba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['title' => ''.e(__('Save')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Save')).'']); ?>
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
        <?php if (isset($component)) { $__componentOriginal4d6bed2ebceb29e0a9932fbda627422a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d6bed2ebceb29e0a9932fbda627422a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-loader','data' => ['target' => 'updateOrderProducts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['target' => 'updateOrderProducts']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d6bed2ebceb29e0a9932fbda627422a)): ?>
<?php $attributes = $__attributesOriginal4d6bed2ebceb29e0a9932fbda627422a; ?>
<?php unset($__attributesOriginal4d6bed2ebceb29e0a9932fbda627422a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d6bed2ebceb29e0a9932fbda627422a)): ?>
<?php $component = $__componentOriginal4d6bed2ebceb29e0a9932fbda627422a; ?>
<?php unset($__componentOriginal4d6bed2ebceb29e0a9932fbda627422a); ?>
<?php endif; ?>
</div><?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/edit-order.blade.php ENDPATH**/ ?>