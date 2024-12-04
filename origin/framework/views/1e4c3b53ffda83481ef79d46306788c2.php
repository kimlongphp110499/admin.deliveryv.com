<?php if(!empty($selectedModel)): ?>

    <?php if(in_array($selectedModel->order_type, ['package', 'parcel', 'service', 'booking', 'taxi'])): ?>
        <p class="text-xl font-semibold"><?php echo e(__('Order Details')); ?></p>
    <?php endif; ?>
    <?php switch($selectedModel->order_type):
        case ('package'): ?>
            <?php echo $__env->make('livewire.order.package_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php break; ?>

        <?php case ('parcel'): ?>
            <?php echo $__env->make('livewire.order.package_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php break; ?>

        <?php case ('service'): ?>
            <?php echo $__env->make('livewire.order.service_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php break; ?>

        <?php case ('taxi'): ?>
            <?php echo $__env->make('livewire.order.taxi_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php break; ?>

        <?php default: ?>
            
            
            <div class="flex">
                <div class="mx-auto min-w-max" style="min-width: 100mm;">
                    
                    <img src="<?php echo e(url(setting('websiteLogo', asset('images/logo.png')))); ?>" alt=""
                        class="w-12 h-12 mx-auto my-1 rounded" />
                    
                    <h1 class="text-2xl font-semibold text-center mb-2"><?php echo e(setting('websiteName', env('APP_NAME'))); ?></h1>
                    
                    <div class="border-dotted border-2 border-spacing-x-2 py-2 font-bold mb-1 text-center">
                        <div>
                            <?php echo e(__('RECEIPT')); ?>

                        </div>
                        <p class="my-2"></p>
                        <?php if(setting('pos.showVendorDetails', true)): ?>
                            <div class="px-4">
                                
                                <p class="flex w-full">
                                    <span class="text-sm font-light"><?php echo e(__('Vendor')); ?>:</span>
                                    <span class="mx-auto"></span>
                                    <span class="text-base font-medium"><?php echo e($selectedModel->vendor->name ?? ''); ?></span>
                                </p>
                                
                                <p class="flex w-full">
                                    <span class="text-sm font-light"><?php echo e(__('Address')); ?>:</span>
                                    <span class="mx-auto"></span>
                                    <span class="text-base font-medium"><?php echo e($selectedModel->vendor->address ?? ''); ?></span>
                                </p>
                                
                                <p class="flex w-full">
                                    <span class="text-sm font-light"><?php echo e(__('Phone')); ?>:</span>
                                    <span class="mx-auto"></span>
                                    <span class="text-base font-medium"><?php echo e($selectedModel->vendor->phone ?? ''); ?></span>
                                </p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <table class="w-full table-auto">
                        <thead class="border-dotted border-2 border-spacing-x-2 px-12 py-2 font-bold">
                            <td class="py-1 px-2"><?php echo e(__('Qty')); ?></td>
                            <td class="py-1 px-2"><?php echo e(__('Item')); ?></td>
                            <td class="py-1 px-2"><?php echo e(__('Price')); ?></td>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $selectedModel->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="border-b text-sm text-gray-500">
                                    <td class='px-2 py-1'><?php echo e($orderProduct->quantity); ?>x</td>
                                    <td class='px-2 py-1'>
                                        <p class="break-words font-semibold line-clamp-2">
                                            <?php echo e($orderProduct->product->name); ?>

                                        </p>
                                        <p class="text-xs italic"><?php echo e($orderProduct->options ?? ''); ?></p>
                                    </td>
                                    <td class='px-2 py-1'><?php echo e(currencyFormat($orderProduct->price ?? '')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    
                    <div class="border-dotted border-2 border-spacing-x-2 my-1 py-2 space-y-1 font-medium">
                        
                        <div class="flex justify-between px-2">
                            <div class="text-left"><?php echo e(__('Subtotal')); ?></div>
                            <div class="text-right"><?php echo e(currencyFormat($selectedModel->sub_total ?? '')); ?></div>
                        </div>
                        
                        <div class="flex justify-between px-2">
                            <div class="text-left"><?php echo e(__('Discount')); ?></div>
                            <div class="text-right">- <?php echo e(currencyFormat($selectedModel->discount ?? '')); ?></div>
                        </div>
                        
                        <div class="flex justify-between px-2">
                            <div class="text-left"><?php echo e(__('Tax')); ?>(<?php echo e($selectedModel->tax_rate ?? ''); ?>%)</div>
                            <div class="text-right">+ <?php echo e(currencyFormat($selectedModel->tax ?? '')); ?></div>
                        </div>
                        
                        
                        <?php $__currentLoopData = json_decode($selectedModel->fees ?? [], true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex text-lg font-medium">
                                <div class="grow ltr:text-left rtl:text-right">
                                    <?php echo e(__($fee['name'] ?? 'Fee')); ?>

                                </div>
                                <span class="mx-auto"></span>
                                <div class="grow-0">+ <?php echo e(currencyFormat($fee['amount'] ?? 0)); ?></div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                        <hr class="mx-2" />
                        <div class="flex justify-between px-2">
                            <div class="font-bold text-lg text-left"><?php echo e(__('Total')); ?></div>
                            <div class="font-semibold text-lg text-right"> <?php echo e(currencyFormat($selectedModel->total ?? '')); ?>

                            </div>
                        </div>
                    </div>

                    
                    <div class="items-center justify-center text-center">
                        <p class="hidden" id="orderCode"><?php echo e($selectedModel->code); ?></p>
                        <div class="flex items-center justify-center">
                            <svg id="barcode"></svg>
                        </div>
                    </div>

                </div>


            </div>

            <?php $__env->startPush('scripts'); ?>
                <script src="<?php echo e(asset('js/print-barcode.js')); ?>"></script>
                <script src="<?php echo e(asset('js/receipt-print.js')); ?>"></script>
            <?php $__env->stopPush(); ?>
        <?php break; ?>
    <?php endswitch; ?>
<?php endif; ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/order/print.blade.php ENDPATH**/ ?>