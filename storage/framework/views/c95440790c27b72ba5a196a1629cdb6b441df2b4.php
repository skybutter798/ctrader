<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.signal.setup', [])->html();
} elseif ($_instance->childHasBeenRendered('BGCinbr')) {
    $componentId = $_instance->getRenderedChildComponentId('BGCinbr');
    $componentTag = $_instance->getRenderedChildComponentTagName('BGCinbr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BGCinbr');
} else {
    $response = \Livewire\Livewire::mount('admin.signal.setup', []);
    $html = $response->html();
    $_instance->logRenderedChild('BGCinbr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/signals/signalSettings.blade.php ENDPATH**/ ?>