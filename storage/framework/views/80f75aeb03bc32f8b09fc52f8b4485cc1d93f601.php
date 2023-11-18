<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.system-courses', [])->html();
} elseif ($_instance->childHasBeenRendered('YITTDD0')) {
    $componentId = $_instance->getRenderedChildComponentId('YITTDD0');
    $componentTag = $_instance->getRenderedChildComponentTagName('YITTDD0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YITTDD0');
} else {
    $response = \Livewire\Livewire::mount('user.system-courses', []);
    $html = $response->html();
    $_instance->logRenderedChild('YITTDD0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/user/membership/courses.blade.php ENDPATH**/ ?>