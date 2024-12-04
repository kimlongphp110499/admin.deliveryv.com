<?php $__env->startSection('title', 'Forgot Password'); ?>
<div wire:init="initiateFireabse">
    <div class="flex items-center min-h-screen p-6 bg-gray-50 ">
        <div class="h-full mx-auto overflow-hidden bg-white rounded-lg shadow-xl w-full md:w-4/12 lg:w-3/12">


            
            <div class="flex items-center justify-center p-6 sm:p-12 ">
                <div class="w-full">
                    
                    <a class="text-lg font-bold text-black dark:text-white" href="<?php echo e(route('login')); ?>">
                        <img src="<?php echo e(appLogo()); ?>" class="w-12 h-12 mx-auto rounded" />
                        <p class="text-center"><?php echo e(setting('websiteName')); ?></p>
                    </a>
                    <div class="flex items-center justify-between">
                        <h1 class="mt-5 mb-4 text-xl font-semibold text-gray-700"><?php echo e(__('Forgot Password')); ?></h1>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('select.language-selector', [])->html();
} elseif ($_instance->childHasBeenRendered('l1887401375-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1887401375-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1887401375-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1887401375-0');
} else {
    $response = \Livewire\Livewire::mount('select.language-selector', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1887401375-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>

                    <?php if(!$setPassword): ?>
                        <div x-data="otpForm()" x-init="init()">
                            
                            <form wire:submit.prevent="resetPassword" x-show="!isVerifyOpen()">
                                <?php echo csrf_field(); ?>
                                <div class="items-end  justify-center space-x-1">
                                    <div class="mx-auto">
                                        <?php if (isset($component)) { $__componentOriginal630945e929872299d6a10920f267ac94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal630945e929872299d6a10920f267ac94 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.phoneselector','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('phoneselector'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal630945e929872299d6a10920f267ac94)): ?>
<?php $attributes = $__attributesOriginal630945e929872299d6a10920f267ac94; ?>
<?php unset($__attributesOriginal630945e929872299d6a10920f267ac94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal630945e929872299d6a10920f267ac94)): ?>
<?php $component = $__componentOriginal630945e929872299d6a10920f267ac94; ?>
<?php unset($__componentOriginal630945e929872299d6a10920f267ac94); ?>
<?php endif; ?>
                                    </div>

                                    <!-- Add a container for reCaptcha -->
                                    <div x-show="!loading">
                                        <?php if (isset($component)) { $__componentOriginalbb7ef3e56ece23d87a945663f01aebba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7ef3e56ece23d87a945663f01aebba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['title' => ''.e(__('Reset')).'','id' => 'reset-btn']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Reset')).'','id' => 'reset-btn']); ?>
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
                                    </div>
                                </div>
                                <div id="recaptcha-container"></div>
                            </form>

                            
                            <form wire:submit.prevent="verifyOTP" x-show="isVerifyOpen()">
                                <?php echo csrf_field(); ?>
                                <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => ''.e(__('Verification Code')).'','type' => 'number','name' => 'otp']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Verification Code')).'','type' => 'number','name' => 'otp']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                                <div x-show="!loading">
                                    <?php if (isset($component)) { $__componentOriginalbb7ef3e56ece23d87a945663f01aebba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7ef3e56ece23d87a945663f01aebba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['title' => ''.e(__('Verify')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Verify')).'']); ?>
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
                                </div>
                            </form>

                            
                            <div x-show="loading">
                                <img src="<?php echo e(asset('images/loading.svg')); ?>" class="mx-auto my-4" />
                            </div>

                            
                            <p class="my-4 text-xs text-center text-red-500" x-text="errorMessage"></p>


                        </div>
                    <?php else: ?>
                        <form wire:submit.prevent="saveNewPassword">
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => ''.e(__('New Password')).'','type' => 'password','placeholder' => '***************','name' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('New Password')).'','type' => 'password','placeholder' => '***************','name' => 'password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => ''.e(__('Confirm New Password')).'','type' => 'password','placeholder' => '***************','name' => 'password_confirmation']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Confirm New Password')).'','type' => 'password','placeholder' => '***************','name' => 'password_confirmation']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
                            <div wire:loading.remove>
                                <?php if (isset($component)) { $__componentOriginalbb7ef3e56ece23d87a945663f01aebba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb7ef3e56ece23d87a945663f01aebba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['title' => ''.e(__('Set New Password')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Set New Password')).'']); ?>
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
                            </div>
                            
                            <div class="flex items-center justify-items-center">
                                <img src="<?php echo e(asset('images/loading.svg')); ?>" class="mx-auto my-4" wire:loading
                                    wire:target="saveNewPassword" />
                            </div>
                        </form>
                    <?php endif; ?>


                    
                    <div class="">

                        <p class="flex items-center justify-center mt-4 space-x-2">
                            <span class="font-base"><?php echo e(__('Already have an account?')); ?></span>
                            <a class="text-sm font-medium text-primary-600 hover:underline"
                                href="<?php echo e(route('login')); ?>">
                                <?php echo e(__('Login')); ?>

                            </a>
                        </p>

                    </div>
                </div>
            </div>

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
    <?php $__env->startPush('scripts'); ?>
        <script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.3.3/firebase-auth.js"></script>
        <script src="<?php echo e(asset('js/forgot-password.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
</div>
<?php echo $__env->make('layouts.partials.phoneselector', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/livewire/auth/forgot-password.blade.php ENDPATH**/ ?>