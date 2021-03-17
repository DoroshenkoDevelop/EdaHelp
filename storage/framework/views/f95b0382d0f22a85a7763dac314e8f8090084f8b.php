<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        РИЗОТТО
                    </p>
                </article>
                

                 
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            С МЯСОМ
                        </p>
                    </article>
                    <?php $__currentLoopData = $risottomeats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $risottomeat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($risottomeat->id); ?>

                           href="<?php echo e(route('risotto',['id'=>$risottomeat->id])); ?>">
                            <img src="<?php echo e(asset($risottomeat->risottos_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($risottomeat->risottos_name); ?>

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
                    <?php $__currentLoopData = $risottochikens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $risottochiken): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($risottochiken->id); ?>

                           href="<?php echo e(route('risotto',['id'=>$risottochiken->id])); ?>">
                            <img src="<?php echo e(asset($risottochiken->risottos_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($risottochiken->risottos_name); ?>

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
                    <?php $__currentLoopData = $risottosseafoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $risottosseafood): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($risottosseafood->id); ?>

                           href="<?php echo e(route('risotto',['id'=>$risottosseafood->id])); ?>">
                            <img src="<?php echo e(asset($risottosseafood->risottos_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($risottosseafood->risottos_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            С ОВОЩАМИ
                        </p>
                    </article>
                    <?php $__currentLoopData = $risottovegetables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $risottovegetable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($risottovegetable->id); ?>

                           href="<?php echo e(route('risotto',['id'=>$risottovegetable->id])); ?>">
                            <img src="<?php echo e(asset($risottovegetable->risottos_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($risottovegetable->risottos_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/risotto/index.blade.php ENDPATH**/ ?>