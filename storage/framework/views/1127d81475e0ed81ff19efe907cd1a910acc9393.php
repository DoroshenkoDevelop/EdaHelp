<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        САЛАТЫ
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5">
                            С МЯСОМ
                        </p>
                    </article>
                    <?php $__currentLoopData = $saladsbiffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saladsbiff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($saladsbiff->id); ?>

                           href="<?php echo e(route('salad',['id'=>$saladsbiff->id])); ?>">
                            <img src="<?php echo e(asset($saladsbiff->salads_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($saladsbiff->salads_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            С ПТИЦЕЙ
                        </p>
                    </article>
                    <?php $__currentLoopData = $saladchikens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saladchiken): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($saladchiken->id); ?>

                           href="<?php echo e(route('salad',['id'=>$saladchiken->id])); ?>">
                            <img src="<?php echo e(asset($saladchiken->salads_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($saladchiken->salads_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                 
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            С МОРЕПРОДУКТАМИ И РЫБОЙ
                        </p>
                    </article>
                    <?php $__currentLoopData = $saladseafoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saladseafood): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($saladseafood->id); ?>

                           href="<?php echo e(route('salad',['id'=>$saladseafood->id])); ?>">
                            <img src="<?php echo e(asset($saladseafood->salads_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($saladseafood->salads_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ОВОЩНОЙ
                        </p>
                    </article>
                    <?php $__currentLoopData = $saladvegetables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saladvegetable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($saladvegetable->id); ?>

                           href="<?php echo e(route('salad',['id'=>$saladvegetable->id])); ?>">
                            <img src="<?php echo e(asset($saladvegetable->salads_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($saladvegetable->salads_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                


            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/salads/index.blade.php ENDPATH**/ ?>