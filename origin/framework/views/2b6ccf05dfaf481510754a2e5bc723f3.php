<?php if(!empty($model)): ?>
<a href="<?php echo e(route('orders')); ?>?filters[search]=<?php echo e($model->code); ?>" class="hover:underline text-primary-600"> <?php echo e($value ?? $model->code ?? $model[$column->attribute] ??  ''); ?></a>
<?php endif; ?><?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/components/table/order.blade.php ENDPATH**/ ?>