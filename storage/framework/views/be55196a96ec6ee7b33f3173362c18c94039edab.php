<?php $__env->startSection('content'); ?>
    <p>
        <a href="<?php echo e(route('kyc')); ?>">
            <i class="p-2 rounded-lg fa fa-arrow-circle-left fa-2x bg-light"></i>
        </a>
    </p>

    <div class="mt-2 mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h1 class="title1 "><?php echo e($kyc->user->name); ?> KYC Application</h1>
            <?php if($kyc->status == 'Verified'): ?>
                <span class="badge badge-success">Verified</span>
            <?php else: ?>
                <span class="badge badge-danger"><?php echo e($kyc->status); ?></span>
            <?php endif; ?>
        </div>
        <a href="#" data-toggle="modal" data-target="#action" class="btn btn-primary btn-sm">Action</a>
    </div>
    <div id="action" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header ">
                    <h3 class="mb-2 d-inline ">Process KYC</h3>
                    <button type="button" class="close " data-dismiss="modal" aria-h6="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form action="<?php echo e(route('processkyc')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <select name="action" id="" class="form-control  " required>
                                <option value="Accept">Accept and verify user</option>
                                <option value="Reject">Reject and remain unverified</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Enter Message " class="form-control  " required>This is to inform you that following the documents you submited, your account have been verified. You can now enjoy all our services without restrictions. Cheers!!</textarea>
                        </div>
                        <div class="form-group">
                            <h5 class="">Email subject</h5>
                            <input type="text" name="subject" id="" class="form-control  "
                                placeholder="Account is verified successfully" required>
                        </div>
                        <input type="hidden" name="kyc_id" value="<?php echo e($kyc->id); ?>">
                        <div class="form-group">
                            <button type="submit" class="px-4 btn btn-primary"> Confirm </button>
                        </div>
                    </form>
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
    <div class="mb-5 row">
        <div class="col-md-12">
            <div class="card p-md-4 p-2 ">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-12 border-bottom">
                            <small class="text-primary">Personal Information</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->first_name); ?></h2>
                            <small class="text-muted">First name</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->last_name); ?></h2>
                            <small class="text-muted">Last name</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->email); ?></h2>
                            <small class="text-muted">Email</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->phone_number); ?></h2>
                            <small class="text-muted">Phone Number</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->dob); ?></h2>
                            <small class="text-muted">Date of Birth</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->social_media); ?></h2>
                            <small class="text-muted">Social Media username</small>
                        </div>
                        <div class="my-3 border-bottom col-md-12">
                            <small class="text-primary">Address Information</small>
                        </div>

                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->address); ?></h2>
                            <small class="text-muted">Address Line</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->city); ?></h2>
                            <small class="text-muted">City</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->state); ?></h2>
                            <small class="text-muted">State</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <h2 class=""><?php echo e($kyc->country); ?></h2>
                            <small class="text-muted">Nationality</small>
                        </div>
                        <div class="my-3 border-bottom col-md-12">
                            <small class="text-primary">Document Information</small>
                        </div>
                        <div class="mb-5 col-md-12">
                            <h2 class=""><?php echo e($kyc->document_type); ?></h2>
                            <small class="text-muted">Document type</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <img src="<?php echo e(asset('storage/app/public/' . $kyc->frontimg)); ?>" alt=""
                                class="w-50 img-fluid d-block">
                            <small class="text-muted">Front View of Document</small>
                        </div>
                        <div class="mb-3 col-md-6">
                            <img src="<?php echo e(asset('storage/app/public/' . $kyc->backimg)); ?>" alt=""
                                class="w-50 img-fluid d-block">
                            <small class="text-muted">Back View of Document</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/assetsplus/trade/resources/views/admin/kyc-applications.blade.php ENDPATH**/ ?>