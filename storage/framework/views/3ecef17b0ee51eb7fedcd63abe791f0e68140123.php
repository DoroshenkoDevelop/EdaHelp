<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mb-5 mt-5 text-center">
                        МЯСО
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            ГОВЯДИНА
                        </p>
                    </article>
                    <?php $__currentLoopData = $beefs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beef): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($beef->id); ?>

                           href="<?php echo e(route('meat',['id'=>$beef->id])); ?>">
                            <img src="<?php echo e(asset($beef->meats_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($beef->meats_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5 ">
                            СВИНИНА
                        </p>

                    </article>
                    <?php $__currentLoopData = $porks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pork): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($pork->id); ?>

                           href="<?php echo e(route('meat',['id'=>$pork->id])); ?>">
                            <img src="<?php echo e(asset($pork->meats_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($pork->meats_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5 ">
                            ПТИЦА
                        </p>

                    </article>
                    <?php $__currentLoopData = $birds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bird): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($bird->id); ?>

                           href="<?php echo e(route('meat',['id'=>$bird->id])); ?>">
                            <img src="<?php echo e(asset($bird->meats_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($bird->meats_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5 ">
                            МИКС
                        </p>

                    </article>
                    <?php $__currentLoopData = $mixs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mix): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($mix->id); ?>

                           href="<?php echo e(route('meat',['id'=>$mix->id])); ?>">
                            <img src="<?php echo e(asset($mix->meats_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($mix->meats_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                



            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/meat/index.blade.php ENDPATH**/ ?>