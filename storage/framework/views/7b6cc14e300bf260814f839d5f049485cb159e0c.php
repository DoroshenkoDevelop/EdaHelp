<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5 text-center">
                        СУПЫ
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <article>
                        <p class="cuprum h5">
                            КРЕМ СУП
                        </p>
                    </article>
                    <?php $__currentLoopData = $creamsoups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $creamsoup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($creamsoup->id); ?>

                           href="<?php echo e(route('cream_soup',['id'=>$creamsoup->id])); ?>">
                            <img src="<?php echo e(asset($creamsoup->cream_soups_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($creamsoup->cream_soups_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <article>
                        <p class="cuprum h5">
                            С МОРЕПРОДУКТАМИ И РЫБОЙ
                        </p>
                    </article>
                    <?php $__currentLoopData = $fushsoups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fushsoup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($fushsoup->id); ?>

                           href="<?php echo e(route('cream_soup',['id'=>$fushsoup->id])); ?>">
                            <img src="<?php echo e(asset($fushsoup->cream_soups_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($fushsoup->cream_soups_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <article>
                        <p class="cuprum h5 ">
                            С МЯСОМ
                        </p>
                    </article>
                    <?php $__currentLoopData = $meatsoups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meatsoup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($meatsoup->id); ?>

                           href="<?php echo e(route('cream_soup',['id'=>$meatsoup->id])); ?>">
                            <img src="<?php echo e(asset($meatsoup->cream_soups_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($meatsoup->cream_soups_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <article>
                        <p class="cuprum h5 ">
                            ОВОЩНОЙ
                        </p>
                    </article>
                    <?php $__currentLoopData = $meatsoups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meatsoup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($meatsoup->id); ?>

                           href="<?php echo e(route('cream_soup',['id'=>$meatsoup->id])); ?>">
                            <img src="<?php echo e(asset($meatsoup->cream_soups_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($meatsoup->cream_soups_name); ?>

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