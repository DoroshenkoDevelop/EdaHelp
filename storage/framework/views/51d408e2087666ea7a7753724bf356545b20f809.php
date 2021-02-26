<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">
                        САЛАТЫ
                    </p>
                </article>
                

                 
                <article class="col-sm-12 col-md-3">
                    <?php $__currentLoopData = $listSalads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listSalad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($listSalad->id); ?>

                           href="<?php echo e(route('salad',['id'=>$listSalad->id])); ?>">
                            <img src="<?php echo e(asset('images/Kapreze.jpg')); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    Капрезе
                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                </article>
            </div>
        </main>
        </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/list_salads/index.blade.php ENDPATH**/ ?>