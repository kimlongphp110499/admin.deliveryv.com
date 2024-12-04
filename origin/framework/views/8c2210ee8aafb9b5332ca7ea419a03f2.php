<?php $__env->startSection('title', __('Order Chat') ); ?>
<div>

    <div class="shadow-lg shadow-zinc-400 block h-[85vh] bg-gray-200 border overflow-clip border-gray-200 rounded-lg md:flex">
        <div class="w-full border-r h-90vh md:w-3/12 ">
            <?php $__currentLoopData = $chatTypes ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chatType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $chatTypeCode = ($chatType['code'] ?? '');
            $selected = $selectedChatType == $chatTypeCode;
            $selectedClasses = $selected ? 'bg-primary-600 text-white font-semibold':'';
            ?>
            <div class="p-2 bg-gray-100 border-b border-gray-200 hover:bg-primary-600 hover:text-white hover:font-semibold hover:cursor-pointer <?php echo e($selectedClasses); ?>" wire:click="changeChatType('<?php echo e($chatTypeCode); ?>')">
                <?php echo e(__($chatType['name'] ?? $chatType ?? '')); ?>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="w-full py-2 bg-white">
            <div class="px-4 py-2 text-lg font-semibold border-b">
                <?php echo e(__('Chats')); ?>

            </div>
            <div id="chatListDiv">
                <div id="chatList" class="w-full flex flex-col p-4 space-y-4 overflow-scroll h-[78vh]">
                </div>
            </div>
            <?php if(empty($chats)): ?>
            <div class="flex items-center justify-center min-h-full" id="emptyChat">
                <div>
                    <img src="<?php echo e(asset('images/empty_chat.png')); ?>" class="w-32 h-32 mx-auto my-4 centered" />
                    <?php if(empty($selectedChatType)): ?>
                    <p class="text-lg font-medium">
                        <?php echo e(__('No chat listed here, please select a chat type on the side of this box')); ?>

                    </p>
                    <?php else: ?>
                    <p class="text-lg font-medium text-center">
                        <?php echo e(__('No chat from the selected chat type.')); ?>

                        <br />
                        <?php echo e(__('When new chat are send, you can refresh this to see them list here')); ?>

                    </p>
                    <?php if (isset($component)) { $__componentOriginalbb7ef3e56ece23d87a945663f01aebba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7ef3e56ece23d87a945663f01aebba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['title' => 'Refresh','wireClick' => 'fetchChats()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Refresh','wireClick' => 'fetchChats()']); ?>
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
                    <?php endif; ?>

                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
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

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/order-chat.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/order_chat.blade.php ENDPATH**/ ?>