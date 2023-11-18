<?php $__env->startSection('content'); ?>
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
    <div class="mt-2 mb-4">
        <h1 class="title1 m-0">Trade Signals Subscribers</h1>
        <p>See users subscription</p>
    </div>
    <div class="mb-5 row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Subscribers</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="bg-primary text-white">
                                <th>
                                    Subscriber
                                </th>
                                <th>
                                    Subscription
                                </th>
                                <th>
                                    Amount
                                </th>
                                <th>
                                    Expiration
                                </th>
                                <th>
                                    Started At
                                </th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $subscribers->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php
                                        $user = \App\Models\User::find($subscriber->client_id);
                                        if ($user) {
                                            $name = $user->name;
                                        } else {
                                            $name = '-';
                                        }
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo e($name); ?>

                                        </td>
                                        <td><?php echo e($subscriber->subscription); ?></td>
                                        <td><?php echo e($settings->currency); ?><?php echo e($subscriber->amount_paid); ?></td>
                                        <td>
                                            <?php if(now()->greaterThanOrEqualTo($subscriber->expired_at)): ?>
                                                <span class="text-danger">
                                                    <?php echo e(\Carbon\Carbon::parse($subscriber->expired_at)->toDayDateTimeString()); ?></span>
                                            <?php else: ?>
                                                <span class="text-success">
                                                    <?php echo e(\Carbon\Carbon::parse($subscriber->expired_at)->toDayDateTimeString()); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e(\Carbon\Carbon::parse($subscriber->created_at)->toDayDateTimeString()); ?>

                                        </td>
                                        <td>
                                            
                                            <a href="<?php echo e(route('delete.subscriber', ['id' => $subscriber->id])); ?>"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            No Data Available
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/signals/subscribers.blade.php ENDPATH**/ ?>