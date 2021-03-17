<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        СУШИ
                    </p>
                </article>
                

                 
                <article class="col-sm-12 col-md-3 mb-4">
                    <?php $__currentLoopData = $sushies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sushi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($sushi->id); ?>

                           href="<?php echo e(route('sushi',['id'=>$sushi->id])); ?>">
                            <img src="<?php echo e(asset($sushi->sushis_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($sushi->sushis_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <?php $__currentLoopData = $sushies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sushi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($sushi->id); ?>

                           href="<?php echo e(route('sushi',['id'=>$sushi->id])); ?>">
                            <img src="<?php echo e(asset($sushi->sushis_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($sushi->sushis_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <?php $__currentLoopData = $sushies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sushi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($sushi->id); ?>

                           href="<?php echo e(route('sushi',['id'=>$sushi->id])); ?>">
                            <img src="<?php echo e(asset($sushi->sushis_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($sushi->sushis_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <?php $__currentLoopData = $sushies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sushi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($sushi->id); ?>

                           href="<?php echo e(route('sushi',['id'=>$sushi->id])); ?>">
                            <img src="<?php echo e(asset($sushi->sushis_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($sushi->sushis_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/sushi/index.blade.php ENDPATH**/ ?>