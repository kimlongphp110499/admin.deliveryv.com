<?php ($translatePrefix='env-editor::env-editor.views.currentEnv.'); ?>
<template id="env-editor-main-tab">
    <div>
        <div class="h5 my-4"><?php echo e(__($translatePrefix.'title')); ?></div>
        <div class="py-3 text-right">
            <button class="btn btn-info" @click="addNew()"><?php echo e(__($translatePrefix.'btn.addNewKey')); ?></button>
        </div>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead>
                <tr class="table-secondary ">
                    <th class="py-2" scope="col"><?php echo e(__($translatePrefix.'tableTitles.key')); ?></th>
                    <th class="py-2" scope="col"><?php echo e(__($translatePrefix.'tableTitles.value')); ?></th>
                    <th class="py-2" scope="col"><?php echo e(__($translatePrefix.'tableTitles.actions')); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(item, index) in items" :key="item.key" v-bind="item" v-if="!item.separator">
                    <th scope="row" class="font-weight-bold ">{{ item.key }}</th>
                    <td>{{ item.value }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <button class="btn btn-info" @click="edit(item)" title="<?php echo e(__($translatePrefix.'btn.edit')); ?>"><span class="fas fa-edit"></span></button>
                            <button class="btn btn-secondary" @click="addAfter(item)" title="<?php echo e(__($translatePrefix.'btn.addAfterKey')); ?>"><span class="fas fa-share"></span></button>
                            <button class="btn btn-danger" @click="remove(item)" title="<?php echo e(__($translatePrefix.'btn.delete')); ?>"><span class="fas fa-trash"></span></button>
                        </div>
                    </td>
                </tr>
                <tr v-else>
                    <td colspan="100%">&nbsp;</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</template>

<?php $__env->startPush('scripts'); ?>


    <script>
        const itemsWrapper = {
                template: '#env-editor-main-tab',
                data: () => {
                    return {
                        items: [],
                    }
                },
                mounted() {
                    envEventBus.$on('env:changed', () => {
                        this.getItemsWithAjax();
                    });
                    this.getItemsWithAjax()
                },
                methods: {
                    edit: function (item) {
                        envEventBus.$emit('env:item:edit', item);
                    },
                    addNew() {
                        envEventBus.$emit('env:item:new');
                    },
                    addAfter(item) {
                        let oldItem = {
                            key: null,
                            value: null,
                            group: item.group,
                            index: item.index + 0.1,
                        }

                        envEventBus.$emit('env:item:new', oldItem);
                    },
                    remove(item) {
                        envEventBus.$emit('env:item:delete', item);
                    },
                    getItemsWithAjax() {
                        envClient('<?php echo e(route(config($package.'.route.name').'.index')); ?>')
                            .then(data => this.items = data.items)
                    }
                },
            }
        ;


    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/vendor/geo-sot/laravel-env-editor/src/../resources/views/components/_currentEnv.blade.php ENDPATH**/ ?>