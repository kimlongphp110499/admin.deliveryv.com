<?php $__env->startSection('title', __('Mobile App Settings')); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Mobile App Settings')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Mobile App Settings')).'']); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '1','title' => ''.e(__('General')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '1','title' => ''.e(__('General')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '2','title' => ''.e(__('Authentication')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '2','title' => ''.e(__('Authentication')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '3','title' => ''.e(__('App Layout')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '3','title' => ''.e(__('App Layout')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '4','title' => ''.e(__('Driver')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '4','title' => ''.e(__('Driver')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '5','title' => ''.e(__('Theme')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '5','title' => ''.e(__('Theme')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '6','title' => ''.e(__('Order')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '6','title' => ''.e(__('Order')).'']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.header','data' => ['tab' => '7','title' => ''.e(__('Page Setting')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '7','title' => ''.e(__('Page Setting')).'']); ?>
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
                    <?php echo $__env->make('livewire.settings.appsettings.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <?php echo $__env->make('livewire.settings.appsettings.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <?php echo $__env->make('livewire.settings.appsettings.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <?php echo $__env->make('livewire.settings.appsettings.driver', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <?php echo $__env->make('livewire.settings.appsettings.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.body','data' => ['tab' => '6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '6']); ?>
                    <?php echo $__env->make('livewire.settings.appsettings.order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tab.body','data' => ['tab' => '7']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tab.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tab' => '7']); ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('settings.page', [])->html();
} elseif ($_instance->childHasBeenRendered('l4275156012-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l4275156012-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l4275156012-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l4275156012-0');
} else {
    $response = \Livewire\Livewire::mount('settings.page', []);
    $html = $response->html();
    $_instance->logRenderedChild('l4275156012-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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

</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/settings/app-settings.blade.php ENDPATH**/ ?>