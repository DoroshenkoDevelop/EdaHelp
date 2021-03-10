<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        КРЕМ СУПЫ
                    </p>
                </article>
                

                 
                <article class="col-sm-12 col-md-3">
                    <?php $__currentLoopData = $soups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($soup->id); ?>

                           href="<?php echo e(route('dessert',['id'=>$soup->id])); ?>">
                            <img src="<?php echo e(asset($soup->cream_soups_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($soup->cream_soups_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                
            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/cream_soups/index.blade.php ENDPATH**/ ?>