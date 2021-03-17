<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        ДЕСЕРТЫ
                    </p>
                </article>
                

                 
                <article class="col-sm-12 col-md-3 mb-4">
                    <?php $__currentLoopData = $pies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article>
                            <p class="cuprum h5 ">
                                ПИРОГИ
                            </p>
                        </article>
                        <a class="text-decoration-none"
                           <?php echo e($pie->id); ?>

                           href="<?php echo e(route('dessert',['id'=>$pie->id])); ?>">
                            <img src="<?php echo e(asset($pie->desserts_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($pie->desserts_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            СЛОЕНЫЕ
                        </p>
                    </article>
                    <?php $__currentLoopData = $puffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $puff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($puff->id); ?>

                           href="<?php echo e(route('dessert',['id'=>$puff->id])); ?>">
                            <img src="<?php echo e(asset($puff->desserts_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($puff->desserts_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            БИСКВИТЫ
                        </p>
                    </article>
                    <?php $__currentLoopData = $biscuits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $biscuit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($biscuit->id); ?>

                           href="<?php echo e(route('dessert',['id'=>$biscuit->id])); ?>">
                            <img src="<?php echo e(asset($biscuit->desserts_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($biscuit->desserts_name); ?>

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

                           href="<?php echo e(route('dessert',['id'=>$mix->id])); ?>">
                            <img src="<?php echo e(asset($mix->desserts_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($mix->desserts_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                
            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/desserts/index.blade.php ENDPATH**/ ?>