<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.withdrawal.manage-withdrawal', [])->html();
} elseif ($_instance->childHasBeenRendered('vrsWVm7')) {
    $componentId = $_instance->getRenderedChildComponentId('vrsWVm7');
    $componentTag = $_instance->getRenderedChildComponentTagName('vrsWVm7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vrsWVm7');
} else {
    $response = \Livewire\Livewire::mount('admin.withdrawal.manage-withdrawal', []);
    $html = $response->html();
    $_instance->logRenderedChild('vrsWVm7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/Withdrawals/mwithdrawals.blade.php ENDPATH**/ ?>