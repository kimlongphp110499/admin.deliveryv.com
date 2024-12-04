<div <?php if($ignore ?? true): ?> wire:ignore <?php endif; ?>>
    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => $title]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title)]); ?>
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
    <div class="relative inline-block w-full">
        <textarea name="<?php echo e($name ?? ''); ?>" id="<?php echo e($id ?? ''); ?>" class="w-full summernote"></textarea>
        
        <input type="hidden" id="<?php echo e($id ?? ($name ?? '')); ?>-Input"
            <?php if($defer ?? true): ?> wire:model.defer='<?php echo e($name ?? ''); ?>'
        <?php else: ?>
            wire:model='<?php echo e($name ?? ''); ?>' <?php endif; ?> />
    </div>

    
    <?php if (! $__env->hasRenderedOnce('f62a8db7-cf9f-4df4-aeb9-8092efad6c43')): $__env->markAsRenderedOnce('f62a8db7-cf9f-4df4-aeb9-8092efad6c43');
$__env->startPush('styles'); ?>
        
        <style>
            .ck-editor__editable_inline {
                min-height: 200px;
                max-height: 400px;
            }
        </style>
    <?php $__env->stopPush(); endif; ?>
    <?php if (! $__env->hasRenderedOnce('8532a0d1-4826-4826-a201-fabd394c5897')): $__env->markAsRenderedOnce('8532a0d1-4826-4826-a201-fabd394c5897');
$__env->startPush('scripts'); ?>
        
        
        <script src="<?php echo e(asset('js/ckeditor.js')); ?>" type="module"></script>
        <script src="<?php echo e(asset('js/summernote-handler.js')); ?>" type="module"></script>
    <?php $__env->stopPush(); endif; ?>

</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/input/summernote.blade.php ENDPATH**/ ?>