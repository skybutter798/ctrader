<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.deposit.manage-deposit', [])->html();
} elseif ($_instance->childHasBeenRendered('fFSUTed')) {
    $componentId = $_instance->getRenderedChildComponentId('fFSUTed');
    $componentTag = $_instance->getRenderedChildComponentTagName('fFSUTed');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fFSUTed');
} else {
    $response = \Livewire\Livewire::mount('admin.deposit.manage-deposit', []);
    $html = $response->html();
    $_instance->logRenderedChild('fFSUTed', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/Deposits/mdeposits.blade.php ENDPATH**/ ?>