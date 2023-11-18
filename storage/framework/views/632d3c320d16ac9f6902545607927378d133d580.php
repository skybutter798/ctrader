<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.manage-users', [])->html();
} elseif ($_instance->childHasBeenRendered('X85PRkT')) {
    $componentId = $_instance->getRenderedChildComponentId('X85PRkT');
    $componentTag = $_instance->getRenderedChildComponentTagName('X85PRkT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('X85PRkT');
} else {
    $response = \Livewire\Livewire::mount('admin.manage-users', []);
    $html = $response->html();
    $_instance->logRenderedChild('X85PRkT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/Users/users.blade.php ENDPATH**/ ?>