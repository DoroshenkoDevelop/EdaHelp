<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            
            <div class="row">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        ПАСТА
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ПЕНЕ
                        </p>
                    </article>
                    <?php $__currentLoopData = $pene; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($pen->id); ?>

                       href="<?php echo e(route('paste',['id'=>$pen->id])); ?>">
                        <img src="<?php echo e(asset($pen->pastes_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                               <?php echo e($pen->pastes_name); ?>

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
                

            </div>
        </main>


    </main>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/paste/index.blade.php ENDPATH**/ ?>