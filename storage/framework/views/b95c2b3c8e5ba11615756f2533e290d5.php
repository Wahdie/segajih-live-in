<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="<?php echo e(url('/beranda')); ?>">
            <?php echo e(config('app.name', 'Laravel')); ?>

        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <?php echo $__env->make('partials.navlinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\desa-wisata\resources\views/partials/navbar.blade.php ENDPATH**/ ?>