<?php $__env->startSection('title', __('User Permissions')); ?>
<div>
    <div class="rounded-lg px-12 pt-8 pb-12 bg-white shadow border border-gray-100">
        <div>
            <p class="text-xl font-bold underline"><?php echo e($selectedModel->name); ?> <?php echo e(__('Permissions')); ?></p>
        </div>
        <form wire:submit.prevent="save">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4">
                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal74b62b190a03153f11871f645315f4de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74b62b190a03153f11871f645315f4de = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['title' => $permission->name,'name' => 'selectedPermissions','value' => $permission->name]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permission->name),'name' => 'selectedPermissions','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permission->name)]); ?>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="flex justify-end mt-4">
                <?php if (isset($component)) { $__componentOriginalbb7ef3e56ece23d87a945663f01aebba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7ef3e56ece23d87a945663f01aebba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['type' => 'submit','title' => __('Save')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Save'))]); ?>
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
        </form>
    </div>
</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/user_permissions.blade.php ENDPATH**/ ?>