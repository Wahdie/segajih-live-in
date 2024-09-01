<?php $__env->startSection('content'); ?>
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">

            <?php if($posts->isEmpty()): ?>
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">No posts found in this category.</h1>
                    <hr class="divider" />
                </div>
            <?php else: ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold"><?php echo e($post->title); ?></h1>
                        <hr class="divider" />
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="col-lg-8 align-self-baseline">
            </div>
        </div>
    </div>
</header>
<div class="container mt-5">
    <div class="row justify-content-center">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-lg-8">
            <?php if($post): ?>

                <h1 class="mb-4"><?php echo e($post->title); ?></h1>
                <?php if($post->image): ?>
                    <div class="text-center my-4">
                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" class="img-fluid w-50" alt="<?php echo e($post->title); ?>">
                    </div>
                <?php endif; ?>
                <p class="text-75 mb-4"><?php echo nl2br(str_replace("\n", "\n\n", strip_tags($post->body))); ?></p>

                <div class="mt-4">
                    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary">Back</a>
                </div>

            <?php else: ?>
                <h2 class="text-center">Post not found</h2>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\desa-wisata\resources\views/posts/index.blade.php ENDPATH**/ ?>