<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-4 d-flex justify-content-between">
        <div class="">
            <h1 class="title1">Connected Accounts</h1>
            <div class="">
                <h4 class="m-0">These accounts have be connected to your Master Trading account.
                </h4>
                <ul class="text-primary font-weight-bold">
                    <li>
                        Accounts will be deleted after 10 days of expiration and have not been renewed.

                    <li>
                        Accounts will not receive trade if they are not deployed, even if copytrade is on.

                    </li>
                </ul>
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addccount">Add
                account</button>

            <div class="modal fade" id="addccount" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content shadow-3">
                        <div class="modal-header">
                            <div class="icon icon-shape rounded-3 bg-soft-primary text-primary text-lg me-4">
                                <i class="fa fa-plus"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Add Account</h5>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" action="<?php echo e(route('create.sub')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6 text-left">
                                        <label>Login*:</label>
                                        <input class="form-control" type="text" name="login" required>
                                    </div>
                                    <div class="form-group col-md-6 text-left">
                                        <label>Account Password*:</label>
                                        <input class="form-control  " type="text" name="password" required>
                                    </div>
                                    <div class="form-group col-md-6 text-left">
                                        <label>Account Name*:</label>
                                        <input class="form-control" type="text" name="name" required>
                                    </div>
                                    <div class="form-group col-md-6 text-left">
                                        <label>Server*:</label>
                                        <input class="form-control " Placeholder="E.g. HantecGlobal-live" type="text"
                                            name="serverName" required>
                                    </div>
                                    <div class="form-group col-md-6 text-left">
                                        <label>Account Type:</label>
                                        <input class="form-control  " Placeholder="E.g. Standard" type="text"
                                            name="acntype" required>
                                    </div>
                                    <div class="form-group col-md-6 text-left">
                                        <label>Leverage:</label>
                                        <input class="form-control  " Placeholder="E.g. 1:500" type="text"
                                            name="leverage" required>
                                    </div>
                                    <div class="form-group col-md-6 text-left">
                                        <label>Currency:</label>
                                        <input class="form-control" Placeholder="E.g. USD" type="text" name="currency"
                                            required>
                                    </div>
                                    <div class="form-group col-md-12 text-left">
                                        <input type="submit" class="btn btn-primary" value="Add Account">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
    <div class="mt-2 mb-5 row">
        <div class="col-12">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="<?php echo e(route('msubtrade')); ?>" class="nav-link ">Submited Accounts</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('tacnts')); ?>" class="nav-link active">Connected Accounts</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-3 row">

                    <div class="col-12">
                        <div class="table-responsive" data-example-id="hoverable-table">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Account ID</th>
                                        <th>Account Password</th>
                                        <th>Account Type</th>
                                        <th>Account Name</th>
                                        <th>Server</th>
                                        <th>Started at</th>
                                        <th>Expiring at</th>
                                        <th>Deployment</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $data['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td>
                                                <?php echo e($item['login']); ?>

                                            </td>
                                            <td>
                                                <?php echo e($item['password']); ?>

                                            </td>
                                            <td>
                                                <?php echo e($item['account_type']); ?>

                                            </td>
                                            <td>
                                                <?php echo e($item['account_name']); ?>

                                            </td>
                                            <td>
                                                <?php echo e($item['server']); ?>

                                            </td>
                                            <td>
                                                <span><?php echo e(\Carbon\Carbon::parse($item['start_date'])->toDayDateTimeString()); ?></span>
                                            </td>
                                            <td>

                                                <?php if(now()->greaterThanOrEqualTo(\Carbon\Carbon::parse($item['end_date']))): ?>
                                                    <span
                                                        class="text-danger"><?php echo e(\Carbon\Carbon::parse($item['end_date'])->toDayDateTimeString()); ?></span>
                                                    <a href="" class="btn btn-info btn-sm"
                                                        data-target="#renewModal<?php echo e($item['id']); ?>"
                                                        data-toggle="modal">Renew</a>
                                                <?php else: ?>
                                                    <span><?php echo e(\Carbon\Carbon::parse($item['end_date'])->toDayDateTimeString()); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($item['deployment_status'] == 'Deployed'): ?>
                                                    <h2 class="badge badge-success">
                                                        <?php echo e($item['deployment_status']); ?></h2>
                                                    <a href="<?php echo e(route('acnt.deployment', ['id' => $item['id'], 'deployment' => 'Undeploy'])); ?>"
                                                        class="btn btn-warning btn-sm">Undeploy</a>
                                                <?php else: ?>
                                                    <h2 class="badge badge-warning">
                                                        <?php echo e($item['deployment_status']); ?></h2>
                                                    <?php if(!now()->greaterThanOrEqualTo(\Carbon\Carbon::parse($item['end_date']))): ?>
                                                        <a href="<?php echo e(route('acnt.deployment', ['id' => $item['id'], 'deployment' => 'Deploy'])); ?>"
                                                            class="btn btn-success btn-sm">Deploy</a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if(!$item['started_copy_trade']): ?>
                                                    <button class="btn btn-sm btn-primary m-1" data-toggle="modal"
                                                        data-target="#copytrade<?php echo e($item['id']); ?>">
                                                        Start CopyTrade
                                                    </button>
                                                    <?php echo $__env->make('admin.subscription.subscriber.copytrade', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                <?php else: ?>
                                                    <span class="badge badge-success mt-1">
                                                        Copytrade is ON
                                                    </span>
                                                    <span>Provider: <?php echo e($item['provider']); ?></span>
                                                <?php endif; ?>
                                                <a href="#" class="btn btn-danger btn-sm m-1" data-toggle="modal"
                                                    data-target="#deleteModal">
                                                    Delete Account
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete
                                                            Trading Account
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        Are you sure you want to detele trading account?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                        </button>
                                                        <a href="<?php echo e(route('del.sub', ['id' => $item['id']])); ?>"
                                                            type="button" class="btn btn-danger">
                                                            Yes Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="renewModal<?php echo e($item['id']); ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Renew
                                                            Trading Account
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <h3>You will be charged $<?php echo e($amountPerSlot); ?> for
                                                            renewal.</h3>
                                                        <form action="<?php echo e(route('renew.acnt')); ?>" method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <input type="hidden" name="account_id"
                                                                value="<?php echo e($item['id']); ?>">
                                                            <button type="submit" class="btn btn-primary">
                                                                Yes Proceed
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="9" class="text-center">
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/subscription/tradingAccounts.blade.php ENDPATH**/ ?>