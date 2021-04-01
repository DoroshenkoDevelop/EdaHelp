<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        РЫБА
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ЖАРЕННАЯ
                        </p>
                    </article>
                    <?php $__currentLoopData = $frieds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fried): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($fried->id); ?>

                           href="<?php echo e(route('fish',['id'=>$fried->id])); ?>">
                            <img src="<?php echo e(asset($fried->fishes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($fried->fishes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                 
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ЗАПЕЧЕНАЯ
                        </p>
                    </article>
                    <?php $__currentLoopData = $bakeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baked): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($baked->id); ?>

                           href="<?php echo e(route('fish',['id'=>$baked->id])); ?>">
                            <img src="<?php echo e(asset($baked->fishes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($baked->fishes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            СВЕЖАЯ
                        </p>
                    </article>
                    <?php $__currentLoopData = $raws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $raw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($raw->id); ?>

                           href="<?php echo e(route('fish',['id'=>$raw->id])); ?>">
                            <img src="<?php echo e(asset($raw->fishes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($raw->fishes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            МИКС
                        </p>
                    </article>
                    <?php $__currentLoopData = $mixs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mix): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($mix->id); ?>

                           href="<?php echo e(route('fish',['id'=>$mix->id])); ?>">
                            <img src="<?php echo e(asset($mix->fishes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($mix->fishes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                




            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/fish/index.blade.php ENDPATH**/ ?>