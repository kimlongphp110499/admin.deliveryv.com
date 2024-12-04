<?php ($translatePrefix='env-editor::env-editor.views.currentEnv.'); ?>
<template id="env-editor-config-actions">
    <div>
        <button class="btn-outline-dark btn btn-sm" title="<?php echo e(__($translatePrefix.'btn.deleteConfigCacheDesc')); ?>"
                @click="deleteConfigCache"><?php echo e(__($translatePrefix.'btn.deleteConfigCache')); ?></button>

    </div>
</template>

<?php $__env->startPush('scripts'); ?>

    <script>

        let configActions = {
            template: '#env-editor-config-actions',
            methods: {
                deleteConfigCache() {
                    this.submit('delete', '<?php echo e(route(config($package.'.route.name').'.clearConfigCache')); ?>');
                },
                submit(method, url) {
                    envClient(url,{
                        method: method
                    }).then(data => {
                        if (data.message) {
                            envAlert('info', data.message);
                        }
                    })
                },
            }
        };

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/vendor/geo-sot/laravel-env-editor/src/../resources/views/components/_configActions.blade.php ENDPATH**/ ?>