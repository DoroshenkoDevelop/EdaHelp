<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        РЫБА
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $fish4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($fish->id); ?>

                           href="<?php echo e(route('fish',['id'=>$fish->id])); ?>">
                            <img src="<?php echo e(asset($fish->fishes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($fish->fishes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                 
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $fishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($fish->id); ?>

                           href="<?php echo e(route('fish',['id'=>$fish->id])); ?>">
                            <img src="<?php echo e(asset($fish->fishes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($fish->fishes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $tro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($tros->id); ?>

                           href="<?php echo e(route('fish',['id'=>$tros->id])); ?>">
                            <img src="<?php echo e(asset($tros->fishes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($tros->fishes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $los; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($lo->id); ?>

                           href="<?php echo e(route('fish',['id'=>$lo->id])); ?>">
                            <img src="<?php echo e(asset($lo->fishes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($lo->fishes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                




            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/fish/index.blade.php ENDPATH**/ ?>