<?php $__env->startSection('title', __('Vendor Document Request')); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalf492f551685e3ce8be093bf80555c952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf492f551685e3ce8be093bf80555c952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.baseview','data' => ['title' => ''.e(__('Vendor Document Request')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Vendor Document Request')).'']); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('tables.vendor-document-request-table', [])->html();
} elseif ($_instance->childHasBeenRendered('l2573701909-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2573701909-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2573701909-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2573701909-0');
} else {
    $response = \Livewire\Livewire::mount('tables.vendor-document-request-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2573701909-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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

    
    <div x-data="{ open: <?php if ((object) ('showEdit') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showEdit'->value()); ?>')<?php echo e('showEdit'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showEdit'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['confirmText' => ''.e(__('Upload')).'','action' => 'uploadDocument']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['confirmText' => ''.e(__('Upload')).'','action' => 'uploadDocument']); ?>

            <p class="text-xl font-semibold"><?php echo e(__('Upload Documents')); ?></p>
            <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => ''.e(__('Documents')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Documents')).'']); ?>
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
            <?php if (isset($component)) { $__componentOriginal2cc13b43f108853597af946fc02b5206 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2cc13b43f108853597af946fc02b5206 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input.filepond','data' => ['wire:model' => 'documents','name' => 'documents','multiple' => 'true','acceptedFileTypes' => '[\'image/*\',\'application/pdf\',\'application/msword\',\'application/vnd.openxmlformats-officedocument.wordprocessingml.document\']','allowImagePreview' => 'false','allowFileSizeValidation' => 'true','maxFileSize' => '10mb']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input.filepond'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'documents','name' => 'documents','multiple' => 'true','acceptedFileTypes' => '[\'image/*\',\'application/pdf\',\'application/msword\',\'application/vnd.openxmlformats-officedocument.wordprocessingml.document\']','allowImagePreview' => 'false','allowFileSizeValidation' => 'true','maxFileSize' => '10mb']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2cc13b43f108853597af946fc02b5206)): ?>
<?php $attributes = $__attributesOriginal2cc13b43f108853597af946fc02b5206; ?>
<?php unset($__attributesOriginal2cc13b43f108853597af946fc02b5206); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2cc13b43f108853597af946fc02b5206)): ?>
<?php $component = $__componentOriginal2cc13b43f108853597af946fc02b5206; ?>
<?php unset($__componentOriginal2cc13b43f108853597af946fc02b5206); ?>
<?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
    </div>

    
    <div x-data="{ open: <?php if ((object) ('showDetails') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'->value()); ?>')<?php echo e('showDetails'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showDetails'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => ['withForm' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['withForm' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>

            <p class="text-xl font-semibold"><?php echo e(__('Document Request')); ?></p>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Vendor')).'','text' => ''.e($selectedModel->model->name ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Vendor')).'','text' => ''.e($selectedModel->model->name ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $attributes = $__attributesOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $component = $__componentOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__componentOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalf6e2e415902e89bd5e110fa89659d933 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6e2e415902e89bd5e110fa89659d933 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.details.item','data' => ['title' => ''.e(__('Status')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('details.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Status')).'']); ?>
                    <p class="text-sm font-medium">
                        <?php echo e($selectedModel->model->is_active ?? 0 ? __('Active') : __('Inactive')); ?>

                    </p>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $attributes = $__attributesOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__attributesOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6e2e415902e89bd5e110fa89659d933)): ?>
<?php $component = $__componentOriginalf6e2e415902e89bd5e110fa89659d933; ?>
<?php unset($__componentOriginalf6e2e415902e89bd5e110fa89659d933); ?>
<?php endif; ?>
            </div>
            <hr class="my-2" />
            <div>
                <?php if($selectedModel != null): ?>
                    <?php if($selectedModel->documents != null && count($selectedModel->documents) > 0): ?>
                        <div class="mt-1 grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <?php $__currentLoopData = $selectedModel->documents ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isMediaImage($document)): ?>
                                    <a href="<?php echo e($document->getUrl()); ?>" target="_blank">
                                        <img src="<?php echo e($document->getUrl()); ?>"
                                            class="h-24 rounded-sm object-cover w-full" />
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo e($document->getUrl()); ?>" target="_blank">
                                        <div class="h-24 border rounded overflow-hidden p-2 border-primary-500">
                                            <p class="line-clamp-1">
                                                <span class='font-bold'><?php echo e(__('Name')); ?></span>:
                                                <?php echo e($document->file_name); ?>

                                            </p>
                                            <p>
                                                <span class='font-bold'><?php echo e(__('Size')); ?></span>:
                                                <?php echo e($document->human_readable_size); ?>

                                            </p>
                                            <p class="text-sm italic text-primary-500 hover:underline">
                                                <?php echo e(__('Click to download/preview')); ?>

                                            </p>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php else: ?>
                        <p class="text-sm font-semibold text-center p-4"><?php echo e(__('No documents found')); ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
    </div>

</div>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/vendor_document_request.blade.php ENDPATH**/ ?>