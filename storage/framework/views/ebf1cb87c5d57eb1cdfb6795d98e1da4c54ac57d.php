<?php $__env->startSection('content'); ?>
    <main class="container-sm">
        <div class="col-7 block-container border-right border-left border-dark">


<main class="row">
    <div class="col-12 p-4">

        
        <article class="">
            <img class="img-fluid"
                 alt="Responsive image"
                 width="100%"
                 src="<?php echo e(asset($article->articles_image_2)); ?>">
        </article>
        

        <ul class="list-group text-left h5 mt-2 ">
            <li>
                <p class="font-italic cuprum mb-3">
                    <?php echo e($article->articles_text_1); ?>

                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    <?php echo e($article->articles_text_2); ?>

                </p>
            </li>

            <li>
                
                    <img class="img-fluid"
                         alt="Responsive image"
                         width="100%"
                         src="<?php echo e(asset($article->articles_image_3)); ?>">
                
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    <?php echo e($article->articles_text_3); ?>

                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    <?php echo e($article->articles_text_4); ?>

                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    <?php echo e($article->articles_text_5); ?> <a href="https://clickmyt.com/BpZs">
                        «ЗДОРОВ».
                    </a>
                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    <?php echo e($article->articles_text_6); ?>

                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-3">
                    <a href="https://clickmyt.com/BpZs">
                        «ЗДОРОВ»
                    </a><?php echo e($article->articles_text_7); ?>

                </p>
            </li>

            <li>
                <p class="font-italic cuprum mb-5">
                    <?php echo e($article->articles_text_8); ?>

                </p>
            </li>
        </ul>
    </div>
    <a class="btn btn-success block-container" href="https://clickmyt.com/BpZs">
        ЗАКАЗАТЬ
    </a>
            </main>
        </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/articles/article.blade.php ENDPATH**/ ?>