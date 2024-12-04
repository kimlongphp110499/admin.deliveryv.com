<?php $__env->startPush('scripts'); ?>
    <script>
        //on page ready
        $(document).ready(function() {
            // Redirect to the register page
            const hash = window.location.hash.substring(1);
            //if hash is driver
            if (hash === 'driver') {
                //redirect to register driver route
                window.location.replace("<?php echo e(route('register.driver')); ?>");

            } else if (hash === 'vendor') {
                window.location.replace("<?php echo e(route('register.vendor')); ?>");
            } else {
                window.location.href = '/404';
            }
        });

        // Redirect to the register page
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/auth/register/register-reroute.blade.php ENDPATH**/ ?>