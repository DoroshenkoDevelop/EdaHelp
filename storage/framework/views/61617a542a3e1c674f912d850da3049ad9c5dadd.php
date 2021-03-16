<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        САЛАТЫ
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $salad3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($salad->id); ?>

                           href="<?php echo e(route('salad',['id'=>$salad->id])); ?>">
                            <img src="<?php echo e(asset($salad->salads_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($salad->salads_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $salad2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($salad->id); ?>

                           href="<?php echo e(route('salad',['id'=>$salad->id])); ?>">
                            <img src="<?php echo e(asset($salad->salads_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($salad->salads_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                 
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $salads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($salad->id); ?>

                           href="<?php echo e(route('salad',['id'=>$salad->id])); ?>">
                            <img src="<?php echo e(asset($salad->salads_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($salad->salads_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                


            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/salads/index.blade.php ENDPATH**/ ?>