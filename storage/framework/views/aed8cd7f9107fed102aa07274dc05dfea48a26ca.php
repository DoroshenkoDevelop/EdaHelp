<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            
            <div class="row">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        ПАСТА
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ПЕНЕ
                        </p>
                    </article>
                    <?php $__currentLoopData = $penes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pene): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($pene->id); ?>

                       href="<?php echo e(route('paste',['id'=>$pene->id])); ?>">
                        <img src="<?php echo e(asset($pene->pastes_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                               <?php echo e($pene->pastes_name); ?>

                            </b>
                        </p>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ВЕРМЕШЕЛЬ
                        </p>
                    </article>
                    <?php $__currentLoopData = $vermicelli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vermicell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($vermicell->id); ?>

                           href="<?php echo e(route('paste',['id'=>$vermicell->id])); ?>">
                            <img src="<?php echo e(asset($vermicell->pastes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($vermicell->pastes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            СПАГЕТТИ
                        </p>
                    </article>
                    <?php $__currentLoopData = $spaghettis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spaghetti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($spaghetti->id); ?>

                           href="<?php echo e(route('paste',['id'=>$spaghetti->id])); ?>">
                            <img src="<?php echo e(asset($spaghetti->pastes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($spaghetti->pastes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ЛИНГВИНИ
                        </p>
                    </article>
                    <?php $__currentLoopData = $linguinis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linguini): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($linguini->id); ?>

                           href="<?php echo e(route('paste',['id'=>$linguini->id])); ?>">
                            <img src="<?php echo e(asset($linguini->pastes_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($linguini->pastes_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

            </div>
        </main>


    </main>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/paste/index.blade.php ENDPATH**/ ?>