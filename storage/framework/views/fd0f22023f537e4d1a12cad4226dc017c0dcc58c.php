<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-4">
        <h1 class="title1 ">Create New Task</h1>
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
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('addtask')); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <h5 class=" ">Task Title</h5>
                            <input type="text" name="tasktitle" class="form-control  " placeholder="task title" required>
                        </div>

                        <div class="form-group">
                            <h5 class=" ">Note </h5>
                            <textarea name="note" id="" rows="5" class="form-control  " placeholder="task description" required></textarea>
                        </div>

                        <div class="form-group">
                            <h5 class=" ">Task Delegations</h5>
                            <select class="form-control  " name="delegation" required>
                                <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->firstName); ?>

                                        <?php echo e($user->lastName); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <small class="">Admin to assign this task to</small>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <h5 class=" ">From</h5>
                                    <input type="date" name="start_date" class="form-control  " placeholder="First name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <h5 class=" ">To</h5>
                                    <input type="date" name="end_date" class="form-control  " placeholder="Last name"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5 class=" ">Priority</h5>
                            <select class="form-control  " name="priority" required>
                                <option>Immediately</option>
                                <option>High</option>
                                <option>Medium</option>
                                <option>Low</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo e(Auth('admin')->User()->id); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/task.blade.php ENDPATH**/ ?>