<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            
            <div class="row">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        ЗАКУСКИ
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ХОЛОДНЫЕ ЗАКУСКИ
                        </p>
                    </article>
                    <?php $__currentLoopData = $coldsnacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coldsnack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($coldsnack->id); ?>

                           href="<?php echo e(route('snack',['id'=>$coldsnack->id])); ?>">
                            <img src="<?php echo e(asset($coldsnack->snacks_image)); ?>"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($coldsnack->snacks_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ГОРЯЧИЕ ЗАКУСКИ
                        </p>
                    </article>
                    <?php $__currentLoopData = $hotsnacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotsnack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($hotsnack->id); ?>

                           href="<?php echo e(route('snack',['id'=>$hotsnack->id])); ?>">
                            <img src="<?php echo e(asset($hotsnack->snacks_image)); ?>"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($hotsnack->snacks_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            БРУСКЕТТЫ И СМОРЕБРОДЫ
                        </p>
                    </article>
                    <?php $__currentLoopData = $bruschettas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bruschetta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($bruschetta->id); ?>

                       href="<?php echo e(route('snack',['id'=>$bruschetta->id])); ?>">
                        <img src="<?php echo e(asset($bruschetta->snacks_image)); ?>"
                             class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                               <?php echo e($bruschetta->snacks_name); ?>

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

                           href="<?php echo e(route('snack',['id'=>$mix->id])); ?>">
                            <img src="<?php echo e(asset($mix->snacks_image)); ?>"
                                 class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($mix->snacks_name); ?>

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