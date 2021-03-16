<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        ДЕСЕРТЫ
                    </p>
                </article>
                

                 
                <article class="col-sm-12 col-md-3">
                    <?php $__currentLoopData = $desserts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dessert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($dessert->id); ?>

                           href="<?php echo e(route('dessert',['id'=>$dessert->id])); ?>">
                            <img src="<?php echo e(asset($dessert->desserts_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($dessert->desserts_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3">
                    <?php $__currentLoopData = $brounis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brouni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($brouni->id); ?>

                           href="<?php echo e(route('dessert',['id'=>$brouni->id])); ?>">
                            <img src="<?php echo e(asset($brouni->desserts_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($brouni->desserts_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3">
                    <?php $__currentLoopData = $сheesecakes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $сheesecake): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($сheesecake->id); ?>

                           href="<?php echo e(route('dessert',['id'=>$сheesecake->id])); ?>">
                            <img src="<?php echo e(asset($сheesecake->desserts_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($сheesecake->desserts_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3">
                    <?php $__currentLoopData = $strudelcherys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strudelchery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($strudelchery->id); ?>

                           href="<?php echo e(route('dessert',['id'=>$strudelchery->id])); ?>">
                            <img src="<?php echo e(asset($strudelchery->desserts_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($strudelchery->desserts_name); ?>

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