<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-3 d-lg-flex justify-content-lg-between">
        <div>
            <h1 class="title1 d-inline mr-4">Category</h1>
            <small class="">Categorize your course</small>
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
    <div class="mt-4 row">
        <div class="col-lg-6 offset-lg-3 mb-4">
            <form action="<?php echo e(route('addcategory')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <h6 class="">Category Name</h6>
                    <input type="text" class="form-control  border border-primary" name="category" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="px-5 btn btn-primary">Add</button>
                </div>
            </form>
        </div>
        <div class="col-12 mt-3">
            <h5 class="">Categories List</h5>
            <div class=" table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($item->category->category); ?></td>
                                <td>
                                    <a href="<?php echo e(route('deletecategory', $item->category->id)); ?>"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="2" class="text-center"> No Data Available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/memebership/category.blade.php ENDPATH**/ ?>