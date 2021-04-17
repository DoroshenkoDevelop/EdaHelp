<?php $__env->startSection('content'); ?>

    
    <main class="container-sm">

        <div class="col-8 block-container">

            
            <article class="mt-4">
                <h2 class="text-center text-comfortaa h4">
                    <b>
                        СТАТЬИ
                    </b>
                </h2>
            </article>
            

            
            <main class="border-right border-left border-dark p-5">
                
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($article->id); ?>

                           href="<?php echo e(route('article',['id'=>$article->id])); ?>">
                            <img src="<?php echo e(asset($article->articles_image_1)); ?>" alt="Елена Малышева" class="img-fluid card-img">
                            <p class="cuprum  text-dark h4 mt-3">
                                <b>
                                    <?php echo e($article->articles_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </main>











            </div>
    </main>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/articles/index.blade.php ENDPATH**/ ?>