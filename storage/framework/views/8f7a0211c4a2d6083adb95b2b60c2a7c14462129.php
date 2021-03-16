<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            
            <div class="row">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        ЗАКУСКИ
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $snack3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $snack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($snack->id); ?>

                           href="<?php echo e(route('snack',['id'=>$snack->id])); ?>">
                            <img src="<?php echo e(asset($snack->snacks_image)); ?>"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($snack->snacks_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $snack4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $snack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($snack->id); ?>

                           href="<?php echo e(route('snack',['id'=>$snack->id])); ?>">
                            <img src="<?php echo e(asset($snack->snacks_image)); ?>"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($snack->snacks_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($recipe->id); ?>

                       href="<?php echo e(route('snack',['id'=>$recipe->id])); ?>">
                        <img src="<?php echo e(asset($recipe->snacks_image)); ?>"
                             class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                               <?php echo e($recipe->snacks_name); ?>

                            </b>
                        </p>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-3">
                    <?php $__currentLoopData = $tartars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tartar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($tartar->id); ?>

                           href="<?php echo e(route('snack',['id'=>$tartar->id])); ?>">
                            <img src="<?php echo e(asset($tartar->snacks_image)); ?>"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($tartar->snacks_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                






















               
                

            </div>
        </main>


    </main>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/recipes/index.blade.php ENDPATH**/ ?>