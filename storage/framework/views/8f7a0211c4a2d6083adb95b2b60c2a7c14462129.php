<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            
            <div class="row ">
                <article class="">
                    <p class="cuprum h2 mt-5 mb-5">ЗАКУСКИ</p>
                </article>
                

                
                <article class="col-sm-12 col-md-3">
                    <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($recipe->id); ?> href="<?php echo e(route('snack',['id'=>$recipe->id])); ?>">
                        <img src="<?php echo e(asset('images/_71A5736.jpg')); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                Мус из тигровых креветок и форели
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