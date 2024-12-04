<select  name="<?php echo e($name ?? ''); ?>"  id="<?php echo e($id ?? ($name ?? '')); ?>"
     wire:change="<?php echo e($onchange ?? ''); ?>" 
    <?php if($defer ?? true): ?> wire:model.defer='<?php echo e($name ?? ''); ?>' <?php else: ?> wire:model='<?php echo e($name ?? ''); ?>' <?php endif; ?>
     <?php if($width ?? false): ?> style="width: <?php echo e($width); ?>%" <?php endif; ?>
    class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm">
    <?php if($noPreSelect ?? false): ?>
        <option> <?php echo e($hint ?? '-- Select --'); ?></option>
    <?php endif; ?>
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $optionId = $option->id ?? ($option['id'] ?? $option);
        ?>
        <option value="<?php echo e($optionId); ?>" <?php echo e($selected ?? '' == $optionId ? 'selected' : ''); ?>>
            <?php echo e(Str::ucfirst(__($option->name ?? ($option['name'] ?? $option)))); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/select-plain.blade.php ENDPATH**/ ?>