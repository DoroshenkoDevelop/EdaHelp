<?php $__env->startSection('content'); ?>

    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

            
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mb-5 mt-5 text-center">
                        Статья
                    </p>
                </article>
                

                <article class="col-sm-12 col-md-3 mb-4">
                    <article class="">
                        <p class="cuprum h5">
                            ГОВЯДИНА
                        </p>
                    </article>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($article->id); ?>

                           href="<?php echo e(route('article',['id'=>$article->id])); ?>">
                            <img src="<?php echo e(asset($article->meats_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($article->meats_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>






            </div>
        </main>
    </main>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/articles/index.blade.php ENDPATH**/ ?>