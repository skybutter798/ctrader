<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.signal.trade-signals', [])->html();
} elseif ($_instance->childHasBeenRendered('VkiqS5K')) {
    $componentId = $_instance->getRenderedChildComponentId('VkiqS5K');
    $componentTag = $_instance->getRenderedChildComponentTagName('VkiqS5K');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VkiqS5K');
} else {
    $response = \Livewire\Livewire::mount('admin.signal.trade-signals', []);
    $html = $response->html();
    $_instance->logRenderedChild('VkiqS5K', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/signals/tradeSignals.blade.php ENDPATH**/ ?>