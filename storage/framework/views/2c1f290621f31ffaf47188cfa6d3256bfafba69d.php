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
                    <article class="">
                        <p class="cuprum h5">
                            С ЛОСОСЕМ
                        </p>
                    </article>
                    <?php $__currentLoopData = $salmons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salmon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($salmon->id); ?>

                           href="<?php echo e(route('sushi',['id'=>$salmon->id])); ?>">
                            <img src="<?php echo e(asset($salmon->sushis_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($salmon->sushis_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            С ТУНЦОМ
                        </p>
                    </article>
                    <?php $__currentLoopData = $tunas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tuna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($tuna->id); ?>

                           href="<?php echo e(route('sushi',['id'=>$tuna->id])); ?>">
                            <img src="<?php echo e(asset($tuna->sushis_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($tuna->sushis_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            С УГРЁМ
                        </p>
                    </article>
                    <?php $__currentLoopData = $seafoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seafood): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($seafood->id); ?>

                           href="<?php echo e(route('sushi',['id'=>$seafood->id])); ?>">
                            <img src="<?php echo e(asset($seafood->sushis_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($seafood->sushis_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            МИКС
                        </p>
                    </article>
                    <?php $__currentLoopData = $mixs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mix): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($mix->id); ?>

                           href="<?php echo e(route('sushi',['id'=>$mix->id])); ?>">
                            <img src="<?php echo e(asset($mix->sushis_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($mix->sushis_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/sushi/index.blade.php ENDPATH**/ ?>