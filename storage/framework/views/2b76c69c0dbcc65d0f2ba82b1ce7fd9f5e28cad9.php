<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        ИЗЫСКАННОЕ
                    </p>
                </article>
                

                 
                <article class="col-sm-12 col-md-3">
                    <?php $__currentLoopData = $exquisites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exquisite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($exquisite->id); ?>

                           href="<?php echo e(route('exquisite',['id'=>$exquisite->id])); ?>">
                            <img src="<?php echo e(asset($exquisite->exquisite_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($exquisite->exquisite_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3">
                    <?php $__currentLoopData = $crabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($crab->id); ?>

                           href="<?php echo e(route('exquisite',['id'=>$crab->id])); ?>">
                            <img src="<?php echo e(asset($crab->exquisite_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($crab->exquisite_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/exquisite/index.blade.php ENDPATH**/ ?>