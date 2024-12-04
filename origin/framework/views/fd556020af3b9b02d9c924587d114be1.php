<div wire:init="setupData">


    <?php if (isset($component)) { $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form','data' => ['action' => 'saveTermsSettings','noClass' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'saveTermsSettings','noClass' => true]); ?>
        <p>
            <span class="font-bold">Link:</span>
            <br />
            <a href="<?php echo e(url(route('terms'))); ?>" target="_blank" class="underline"><?php echo e(url(route('terms'))); ?></a>
        </p>
        <div class="w-full">
            <?php if (isset($component)) { $__componentOriginal1074ae939a09b70950c2405d36f1c18f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1074ae939a09b70950c2405d36f1c18f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.summernote','data' => ['name' => 'terms','title' => ''.__('Terms & Condition').'','id' => 'termsEdit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.summernote'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'terms','title' => ''.__('Terms & Condition').'','id' => 'termsEdit']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1074ae939a09b70950c2405d36f1c18f)): ?>
<?php $attributes = $__attributesOriginal1074ae939a09b70950c2405d36f1c18f; ?>
<?php unset($__attributesOriginal1074ae939a09b70950c2405d36f1c18f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1074ae939a09b70950c2405d36f1c18f)): ?>
<?php $component = $__componentOriginal1074ae939a09b70950c2405d36f1c18f; ?>
<?php unset($__componentOriginal1074ae939a09b70950c2405d36f1c18f); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalbb7ef3e56ece23d87a945663f01aebba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7ef3e56ece23d87a945663f01aebba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['title' => ''.e(__('Save Changes')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Save Changes')).'']); ?>
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

    <?php if (isset($component)) { $__componentOriginal84bc13f46ede078ae58666238de3da00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal84bc13f46ede078ae58666238de3da00 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal84bc13f46ede078ae58666238de3da00)): ?>
<?php $attributes = $__attributesOriginal84bc13f46ede078ae58666238de3da00; ?>
<?php unset($__attributesOriginal84bc13f46ede078ae58666238de3da00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal84bc13f46ede078ae58666238de3da00)): ?>
<?php $component = $__componentOriginal84bc13f46ede078ae58666238de3da00; ?>
<?php unset($__componentOriginal84bc13f46ede078ae58666238de3da00); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/settings/terms.blade.php ENDPATH**/ ?>