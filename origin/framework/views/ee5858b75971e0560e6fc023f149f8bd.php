<div :class="openTab == <?php echo e($tab ?? 0); ?> ? 'border-b-2 border-primary-500 text-primary-600 font-bold' : ''"
    class="flex items-center px-2 py-2 cursor-pointer" x-on:click="openTab = <?php echo e($tab ?? 0); ?>">
    <?php echo e($slot ?? ''); ?>

    <span class="font-medium text-sm"><?php echo e($title ?? ''); ?></span>
</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/tab/header.blade.php ENDPATH**/ ?>