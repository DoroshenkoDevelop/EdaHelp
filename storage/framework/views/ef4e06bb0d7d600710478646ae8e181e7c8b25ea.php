<?php $__env->startSection('content'); ?>

<main class="container-sm">
    <main class="container-sm">

        
        <div class="row">
            <article class="">
                <p class="cuprum h2 mt-5 mb-5">
                    ПОПУЛЯРНЫЕ РЕЦЕПТЫ
                </p>
            </article>
            

            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $populars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($popular->id); ?>

                       href="<?php echo e(route('popular',['id'=>$popular->id])); ?>">
                        <img src="<?php echo e(asset($popular->index_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                <?php echo e($popular->index_name); ?>

                            </b>
                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>

            
          
            
            
        </div>
    </main>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/popular/index.blade.php ENDPATH**/ ?>