<?php $__env->startSection('content'); ?>
    <main class="container-sm border-right border-left border-dark">

        
        <main class="text-center container-sm">
            <h1 class="display-2 mt-5 text-comfortaa">
                Мир кулинарного искусства
            </h1>
            <p class="cuprum h4">
                Портал не только с классическими, но и с самыми интересными и оригинальными рецептами от шеф-поваров.
            </p>
            <p class="cuprum h5">
                На нашем сайте вы найдете огромное количество фоторецептов с пошаговым и детальным описанием процесса приготовления.
            <p/>
        </main>
        


        
        <section class="row">
        <article class="">
            <p class="cuprum h2  mt-5 mb-2">
                ПОПУЛЯРНЫЕ РЕЦЕПТЫ
            </p>
        </article>

        
        <article class="col-sm-12 col-md-4">
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
        

            
            <article class="col-sm-12 col-md-4">
                <?php $__currentLoopData = $tartars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tartar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($tartar->id); ?>

                       href="<?php echo e(route('popular',['id'=>$tartar->id])); ?>">
                        <img src="<?php echo e(asset($tartar->index_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                <?php echo e($tartar->index_name); ?>

                            </b>
                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-4">
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
            
        </section>
        

        
        <section class="container-sm">
            <div class="row">
                <div class="col">
                    <p class="cuprum h2">ТОП ШЕФ РЕЦЕПТОВ</p>
                    <div class="carousel slide" id="mySlider" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <img src="<?php echo e(asset('/images/baloneze.jpg')); ?>" class="img-fluid d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo e(asset('/images/baloneze.jpg')); ?>" class="img-fluid d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo e(asset('/images/baloneze.jpg')); ?>" class="img-fluid d-block w-100">
                            </div>
                        </div>
                        <a href="#mySlider" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a href="#mySlider" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        

        
        <section class="row">
            <article class="">
                <p class="cuprum h2  mt-5 mb-2">
                    ПОПУЛЯРНЫЕ РЕЦЕПТЫ
                </p>
            </article>

            
            <article class="col-sm-12 col-md-4">
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
            

            
            <article class="col-sm-12 col-md-4">
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
            

            
            <article class="col-sm-12 col-md-4">
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
            
        </section>
        

        
        <section class="row">
            <article class="">
                <p class="cuprum h2  mt-5 mb-2">
                    ПОПУЛЯРНЫЕ РЕЦЕПТЫ
                </p>
            </article>

            
            <article class="col-sm-12 col-md-4">
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
            

            
            <article class="col-sm-12 col-md-4">
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
            

            
            <article class="col-sm-12 col-md-4">
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
            
        </section>
        



    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/home/index.blade.php ENDPATH**/ ?>