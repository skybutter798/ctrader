<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-5">
        <h1 class="title1 ">Change Your password</h1> <br> <br>
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
        <div class="col-lg-8 offset-lg-2 card p-4  shadow">
            <form method="post" action="<?php echo e(route('adminupdatepass')); ?>">
                <div class="">
                    <h5 class=" ">Old Password</h5>
                    <input type="password" name="old_password" class="form-control  " required>
                </div>
                <div class="">
                    <h5 class=" ">New Password* </h5>
                    <input type="password" name="password" class="form-control  " required>
                </div>
                <div class="">
                    <h5 class=" ">Confirm Password</h5>
                    <input type="password" name="password_confirmation" class="form-control  " required>
                </div> <br>
                <input type="submit" class="btn btn-primary" value="Submit">

                <input type="hidden" name="id" value="<?php echo e(Auth('admin')->User()->id); ?>">
                <input type="hidden" name="current_password" value="<?php echo e(Auth('admin')->User()->password); ?>">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"><br />
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/Profile/changepassword.blade.php ENDPATH**/ ?>