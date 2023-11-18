<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-4">
        <h1 class="title1  d-inline"><?php echo e($user->name); ?> login activities</h1>
        <div class="d-inline">
            <div class="float-right btn-group">
                <a class="btn btn-primary btn-sm" href="<?php echo e(route('viewuser', $user->id)); ?>"> <i class="fa fa-arrow-left"></i>
                    back</a>
            </div>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Alert::class, []); ?>
<?php $component->withName('admin.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e)): ?>
<?php $component = $__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e; ?>
<?php unset($__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e); ?>
<?php endif; ?>
    <div class="mb-5 row">
        <?php if(count($activities) > 0): ?>
            <div class="mb-4 col-md-12">
                <a class="btn btn-danger btn-sm" href="<?php echo e(route('clearactivity', $user->id)); ?>"> <i class="fa fa-trash"></i>
                    Clear Data</a>
            </div>
        <?php endif; ?>
        <div class="col-md-12 card shadow p-4 ">
            <div class="table-responsive" data-example-id="hoverable-table">
                <table id="ShipTable" class="table table-hover ">
                    <thead>
                        <tr>
                            
                            <th>IP Address</th>
                            <th>Device/OS/Browser</th>
                            <th>Date/Time logged in</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                
                                <td><?php echo e($activity->ip_address); ?></td>
                                <td><?php echo e($activity->device); ?>/<?php echo e($activity->os); ?>/<?php echo e($activity->browser); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($activity->created_at)->toDayDateTimeString()); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/Users/loginactivity.blade.php ENDPATH**/ ?>