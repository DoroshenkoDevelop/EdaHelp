<?php $__env->startSection('content'); ?>
    <main class="container-sm">
        <div class="col-8 block-container border-right border-left border-dark">


<main class="row">
    <div class="col-12 p-4">

        
        <article class="">
            <img class="img-fluid"
                 alt="Responsive image"
                 width="100%"
                 src="<?php echo e(asset($article->articles_image_2)); ?>">
        </article>
        

        <ul class="list-group text-left h6 mt-2 ">
            <li>
                <p class="cuprum mb-3">
                    <?php echo e($article->articles_text_1); ?>

                </p>
            </li>

            <li>
                <p class=" cuprum mb-3">
                    <?php echo e($article->articles_text_2); ?>

                </p>
            </li>

            <li>
                
                    <img class="img-fluid mb-3"
                         alt="Responsive image"
                         width="100%"
                         src="<?php echo e(asset($article->articles_image_3)); ?>">
                
            </li>

            <li>
                <p class=" cuprum mb-3">
                    <?php echo e($article->articles_text_3); ?>

                </p>
            </li>

            <li>
                <p class=" cuprum mb-3">
                    <?php echo e($article->articles_text_4); ?>

                </p>
            </li>

            <li>
                    <p class=" cuprum mb-3">
                    <?php echo e($article->articles_text_5); ?> <a class="text-primary" href="<?php echo e($article->product); ?>">
                        <?php echo e($article->name_product); ?>

                    </a>
                </p>
            </li>

            <li>
                <p class=" cuprum mb-3">
                    <?php echo e($article->articles_text_6); ?>

                </p>
            </li>

            <li>
                <p class="cuprum mb-3">
                    <a class="text-primary" href="<?php echo e($article->product); ?>">
                        <?php echo e($article->name_product); ?>

                    </a><?php echo e($article->articles_text_7); ?>

                </p>
            </li>

            <li>
                <p class="cuprum mb-1">
                    <?php echo e($article->articles_text_8); ?>

                </p>
            </li>
        </ul>

        
        <div class="row">
            <div class="col-13 ">
                
                <a href="<?php echo e($article->product); ?>">
                <article class="">
                    <img class="img-fluid"
                         alt="Responsive image"
                         width="100%"
                         src="<?php echo e(asset($article->articles_image_4)); ?>">
                </article>
                
                </a>
                <div>
                    <p CLASS="cuprum ">
                        <b>
                        </b>
                    </p>
                </div>
            </div>
        </div>
        

    </div>

            </main>
        </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/articles/article.blade.php ENDPATH**/ ?>