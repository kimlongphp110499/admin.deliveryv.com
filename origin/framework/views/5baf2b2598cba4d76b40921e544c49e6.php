<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="<?php echo e(setting('localeCode', 'en')); ?>"
    dir="<?php echo e(isRTL() ? 'rtl' : 'ltr'); ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo e(setting('favicon')); ?>" />
    <title><?php echo $__env->yieldContent('title', ''); ?> - <?php echo e(setting('websiteName', env('APP_NAME'))); ?></title>
    <?php echo $__env->make('layouts.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('styles'); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">

        <!-- Desktop sidebar -->
        <?php echo $__env->make('layouts.partials.nav.desktop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Mobile sidebar -->
        <?php echo $__env->make('layouts.partials.nav.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="flex flex-col flex-1 w-full">

            
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header.profile')->html();
} elseif ($_instance->childHasBeenRendered('N4gUL4M')) {
    $componentId = $_instance->getRenderedChildComponentId('N4gUL4M');
    $componentTag = $_instance->getRenderedChildComponentTagName('N4gUL4M');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('N4gUL4M');
} else {
    $response = \Livewire\Livewire::mount('header.profile');
    $html = $response->html();
    $_instance->logRenderedChild('N4gUL4M', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>



            <main class="h-full overflow-y-auto">
                <div class="container grid px-6 py-5 mx-auto">
                    <?php echo e($slot ?? ''); ?>

                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </main>

            
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header.subscription')->html();
} elseif ($_instance->childHasBeenRendered('DjUITEK')) {
    $componentId = $_instance->getRenderedChildComponentId('DjUITEK');
    $componentTag = $_instance->getRenderedChildComponentTagName('DjUITEK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DjUITEK');
} else {
    $response = \Livewire\Livewire::mount('header.subscription');
    $html = $response->html();
    $_instance->logRenderedChild('DjUITEK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>

    <?php echo $__env->make('layouts.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>
<?php /**PATH /home/deliveryv/public_html/admin.deliveryv.com/resources/views/layouts/app.blade.php ENDPATH**/ ?>