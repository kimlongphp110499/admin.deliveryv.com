<?php $__env->startSection('body'); ?>
    <div>
        <!--[if gte mso 9]>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <v:fill type="tile" color="#f6f6f6"></v:fill>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </v:background>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <![endif]-->
        
        <table cellspacing="0" cellpadding="0" style="">
            <tr>
                <td valign="top" style="padding:0;Margin:0">
                    <table class="es-content" cellspacing="0" cellpadding="0" align="center"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%; margin-bottom:20px;">
                        <tr>
                            <td align="center" style="padding:0;Margin:0">
                                <h3
                                    style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333">
                                    <?php if($order->taxi_order != null): ?>
                                        <?php echo e(__('Trip Receipt')); ?>

                                    <?php else: ?>
                                        <?php echo e(__('Order Receipt')); ?>

                                    <?php endif; ?>
                                </h3>

                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#9ca3af;font-size:14px;">
                                    <?php echo e($order->updated_at->format('Y-m-d')); ?>

                                    <?php echo e(__('at')); ?>

                                    <?php echo e($order->updated_at->format('h:ia')); ?>

                                </p>

                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">
                                <h3
                                    style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333">
                                    <?php echo e(__('Hi')); ?> <?php echo e($order->user->name); ?>,
                                </h3>
                                <p
                                    style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px">
                                    <?php echo e(__('This is your receipt.')); ?>

                                </p>
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="padding-top: 20px;">
                                <hr />
                            </td>
                        </tr>
                    </table>
                    
                    
                    <table class="es-content" cellspacing="0" cellpadding="0" align="center"
                        style="mso-table-lspace:0pt;mso-table-rspace:0pt;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;border-collapse: separate;
                        border-spacing: 10px;">

                        
                        <?php if(empty($order->vendor)): ?>
                            <?php echo $__env->make('view.emails.includes.taxi_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                            
                            
                            <?php if(empty($order->package_type)): ?>
                                <?php echo $__env->make('view.emails.includes.order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php else: ?>
                                <?php echo $__env->make('view.emails.includes.package_order_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        <?php endif; ?>

                        
                        <tr>
                            <td style="height:20px;margin-top:10px;margin-bottom:10px;" colspan="2">
                                <hr />
                            </td>
                        </tr>
                        
                        <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Subtotal')).'','content' => ''.e(currencyFormat($order->sub_total ?? '')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Subtotal')).'','content' => ''.e(currencyFormat($order->sub_total ?? '')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Discount')).'','content' => ''.e(currencyFormat($order->discount ?? '')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Discount')).'','content' => ''.e(currencyFormat($order->discount ?? '')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Delivery fee')).'','content' => ''.e(currencyFormat($order->delivery_fee ?? '')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Delivery fee')).'','content' => ''.e(currencyFormat($order->delivery_fee ?? '')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Tax')).'','content' => ''.e(currencyFormat($order->tax ?? '')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Tax')).'','content' => ''.e(currencyFormat($order->tax ?? '')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Total Fare')).'','content' => ''.e(currencyFormat($order->total ?? '')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Total Fare')).'','content' => ''.e(currencyFormat($order->total ?? '')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
                        
                        <tr>
                            <td style="height:20px;margin-top:10px;margin-bottom:10px;" colspan="2">
                                <hr />
                            </td>
                        </tr>
                        <?php if (isset($component)) { $__componentOriginalecf9bcdb6dc4643fd74547b03809546f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.email_table_tr','data' => ['title' => ''.e(__('Payment Method')).'','content' => ''.e($order->payment_method->name ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.email_table_tr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Method')).'','content' => ''.e($order->payment_method->name ?? '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $attributes = $__attributesOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__attributesOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f)): ?>
<?php $component = $__componentOriginalecf9bcdb6dc4643fd74547b03809546f; ?>
<?php unset($__componentOriginalecf9bcdb6dc4643fd74547b03809546f); ?>
<?php endif; ?>

                    </table>
                    
                </td>
            </tr>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('view.emails.plain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/view/emails/order_update.blade.php ENDPATH**/ ?>