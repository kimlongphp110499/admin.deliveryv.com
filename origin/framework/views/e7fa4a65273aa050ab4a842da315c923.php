<?php $__env->startSection('title', __('Wallet Transactions')); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Wallet Transactions')).'','showNew' => true,'actionTitle' => ''.e(__('Add/Minus Wallet Balance')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Wallet Transactions')).'','showNew' => true,'actionTitle' => ''.e(__('Add/Minus Wallet Balance')).'']); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.wallet-transaction-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l1040987801-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1040987801-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1040987801-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1040987801-0');
} else {
    $response = \Livewire\Livewire::mount('tables.wallet-transaction-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1040987801-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

    
    <div x-data="{ open: <?php if ((object) ('showCreate') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showCreate'->value()); ?>')<?php echo e('showCreate'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showCreate'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['confirmText' => ''.e(__('Save')).'','action' => 'save']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['confirmText' => ''.e(__('Save')).'','action' => 'save']); ?>
            <p class="text-xl font-semibold"><?php echo e(__('Update User Wallet Balance')); ?></p>
            
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
    $html = \Livewire\Livewire::mount('select.user-select', ['name' => 'user_id','placeholder' => ''.e(__('Select Customer')).'','searchable' => true])->html();
} elseif ($_instance->childHasBeenRendered('l1040987801-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1040987801-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1040987801-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1040987801-1');
} else {
    $response = \Livewire\Livewire::mount('select.user-select', ['name' => 'user_id','placeholder' => ''.e(__('Select Customer')).'','searchable' => true]);
    $html = $response->html();
    $_instance->logRenderedChild('l1040987801-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['message' => ''.e($errors->first('user_id')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e($errors->first('user_id')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
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
            
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Current Balance')).'','text' => ''.e(currencyFormat($wallet->balance ?? '0.00')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Current Balance')).'','text' => ''.e(currencyFormat($wallet->balance ?? '0.00')).'']); ?>
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
            <?php if (isset($component)) { $__componentOriginaled2cde6083938c436304f332ba96bb7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2cde6083938c436304f332ba96bb7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['title' => ''.e(__('Action')).'','options' => $actions,'name' => 'selectedAction']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Action')).'','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($actions),'name' => 'selectedAction']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => ''.e(__('Amount')).'','name' => 'amount','placeholder' => '','type' => 'number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Amount')).'','name' => 'amount','placeholder' => '','type' => 'number']); ?>
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

    
    <div x-data="{ open: <?php if ((object) ('showDetails') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'->value()); ?>')<?php echo e('showDetails'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

            <p class="text-xl font-semibold">
                <?php echo e(__('Wallet Transactions Details')); ?>

            </p>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Ref')).'','text' => ''.e($selectedModel->ref ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Ref')).'','text' => ''.e($selectedModel->ref ?? '').'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Transaction Code')).'','text' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Transaction Code')).'','text' => '']); ?>
                    <p class="break-words"><?php echo e($selectedModel->session_id ?? ''); ?></p>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('User')).'','text' => ''.e($selectedModel->wallet->user->name ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('User')).'','text' => ''.e($selectedModel->wallet->user->name ?? '').'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Amount')).'','text' => ''.e(currencyFormat($selectedModel->amount ?? 0.0)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Amount')).'','text' => ''.e(currencyFormat($selectedModel->amount ?? 0.0)).'']); ?>
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
            </div>
            <hr class="mt-4" />
            <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Reason')).'','text' => ''.e($selectedModel->reason ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Reason')).'','text' => ''.e($selectedModel->reason ?? '').'']); ?>
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
            <?php if(
                $selectedModel != null &&
                    $selectedModel->payment_method != null &&
                    $selectedModel->payment_method->slug == 'offline'): ?>
                <img src="<?php echo e($selectedModel->photo ?? ''); ?>" class="mt-6 border rounded-sm" />
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
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/wallet-transactions.blade.php ENDPATH**/ ?>