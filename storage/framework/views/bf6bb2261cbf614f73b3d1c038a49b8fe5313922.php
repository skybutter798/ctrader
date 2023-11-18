<?php $__env->startSection('content'); ?>
    <div class="my-2 mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h1 class="title1">Manage leads </h1>
            <p class="">Leads are simply new users that have not made any deposit.</p>
        </div>
        <div>
            <a href="#" data-toggle="modal" data-target="#assignModal" class="btn btn-primary">Assign</a>
            <!-- Assign Modal -->
            <div id="assignModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h4 class="modal-title ">Assign users to admin for follow up
                            </h4>
                            <button type="button" class="close " data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body ">
                            <form role="form" method="post" action="<?php echo e(route('assignuser')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <h5 class="">Select User to Assign</h5>
                                    <select name="user_name" id="" class="form-control select2" required>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <h5 class="">Select Admin to assign this user to.
                                    </h5>
                                    <select name="admin" id="" class="form-control" required>
                                        <option value="">Select</option>
                                        <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->firstName); ?>

                                                <?php echo e($user->lastName); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-info" value="Assign">
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
    <div class="mb-3 row">
        <div class="col-lg-6">
            <p class="m-0 ml-3">Import leads from excel document. <a href="<?php echo e(route('downlddoc')); ?>"
                    class=" text-underline">download
                    sample document</a></p>
            <form action="<?php echo e(route('fileImport')); ?>" class="form-inline" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input name="file" class="form-control  " type="file" required>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive" data-example-id="hoverable-table">
                        <table id="ShipTable" class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Date registered</th>
                                    <th>Assigned To</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($list->name); ?></td>
                                        <td><?php echo e($list->email); ?></td>
                                        <td><?php echo e($list->phone); ?></td>
                                        <td>
                                            <?php if($list->status == 'active'): ?>
                                                <span class="badge badge-success">Active</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">Inactive</span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($list->created_at->toDayDateTimeString()); ?>

                                        </td>
                                        <td>
                                            <?php if($list->tuser): ?>
                                                <?php echo e($list->tuser->firstName); ?> <?php echo e($list->tuser->lastName); ?>

                                            <?php else: ?>
                                                <span class="text-info">Not assigned yet</span>
                                            <?php endif; ?>

                                        </td>
                                        <td>
                                            <a class="m-1 btn btn-info btn-sm text-white" data-toggle="modal"
                                                data-target="#editModal<?php echo e($list->id); ?>">Edit Status</a>
                                        </td>
                                    </tr>

                                    <div id="editModal<?php echo e($list->id); ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header ">
                                                    <h4 class="modal-title">Edit this User status</h4>
                                                    <button type="button" class="close "
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body ">
                                                    <form method="post" action="<?php echo e(route('updateuser')); ?>">
                                                        <div class="form-group">
                                                            <h5 class=" ">User Status</h5>
                                                            <textarea name="userupdate" id="" rows="5" class="form-control  " placeholder="Enter here" required><?php echo e($list->userupdate); ?></textarea>
                                                        </div>
                                                        <input type="hidden" name="id" value="<?php echo e($list->id); ?>">
                                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                        <input type="submit" class="btn btn-primary" value="Save">

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $('.select2').select2();
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/leads.blade.php ENDPATH**/ ?>