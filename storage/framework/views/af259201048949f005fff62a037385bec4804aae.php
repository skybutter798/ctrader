<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-4">
        <h1 class="title1 ">Account Profile Information</h1>
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
    <div class="row profile">

        <div class="p-2 col-md-8 offset-md-2">
            <div class="card p-5 shadow-lg ">

                <form role="form" method="post"action="<?php echo e(route('upadprofile')); ?>">
                    <h5 class="">First name</h5>
                    <input type="text" name="name" value="<?php echo e(Auth('admin')->User()->firstName); ?>"
                        class="form-control  "> <br>

                    <h5 class="">Last name</h5>
                    <input type="text" name="lname" value="<?php echo e(Auth('admin')->User()->lastName); ?>"
                        class="form-control  "> <br>

                    <h5 class="">Phone Number</h5>
                    <input type="text" name="phone" class="form-control  " value="<?php echo e(Auth('admin')->User()->phone); ?>">
                    <br>

                    <h5 class="">Two Factor Authentication</h5>
                    <select class="form-control  " name="token">
                        <option><?php echo e(Auth('admin')->User()->enable_2fa); ?></option>
                        <option value="enabled">Enable</option>
                        <option value="disabled">Disable</option>
                    </select><br>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-primary" value="Update">
                </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/Profile/profile.blade.php ENDPATH**/ ?>