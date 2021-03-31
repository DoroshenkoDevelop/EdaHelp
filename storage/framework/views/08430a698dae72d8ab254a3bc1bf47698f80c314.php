<?php $__env->startSection('content'); ?>

    <main class="container-sm border-right border-left border-dark">

      
        <main class="text-center container-sm">
            <h1 class="display-2 mt-5 text-comfortaa mb-4">
                Мир кулинарного искусства
            </h1>
            <p class="cuprum h4 mb-4">
                Портал не только с классическими, но и с самыми интересными и оригинальными рецептами от шеф-поваров.
            </p>
            <p class="cuprum h5 mt-4">
                На нашем сайте вы найдете огромное количество фоторецептов с пошаговым и детальным описанием процесса приготовления.
            <p/>
        </main>
      


       
        <section class="row">
        <article class="">
            <p class="cuprum h2  mt-5 mb-2">
                ПОПУЛЯРНЫЕ РЕЦЕПТЫ
            </p>
        </article>
            

        
        <article class="col-sm-12 col-md-3">
            <?php $__currentLoopData = $populars1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="text-decoration-none"
                   <?php echo e($populars->id); ?>

                   href="<?php echo e(route('recipe',['id'=>$populars->id])); ?>">
                    <img src="<?php echo e(asset($populars->index_image)); ?>" class="img-fluid card-img">
                    <p class="cuprum text-dark">
                        <b>
                            <?php echo e($populars->index_name); ?>

                        </b>
                    </p>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </article>
         

          
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $populars2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($populars->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$populars->id])); ?>">
                        <img src="<?php echo e(asset($populars->index_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                <?php echo e($populars->index_name); ?>

                            </b>
                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
          

            
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $populars3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($populars->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$populars->id])); ?>">
                        <img src="<?php echo e(asset($populars->index_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                <?php echo e($populars->index_name); ?>

                            </b>
                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $populars4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($populars->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$populars->id])); ?>">
                        <img src="<?php echo e(asset($populars->index_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                <?php echo e($populars->index_name); ?>

                            </b>
                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

        </section>
        

       
        <section class="mt-3">
            <div class="row">
                <div class="col">
                    <p class="cuprum h2 ">
                        ТОП ШЕФ РЕЦЕПТОВ
                    </p>
                    <div class="carousel slide" id="mySlider" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <a href="">
                                <img src="<?php echo e(asset('/images/oliver.jpg')); ?>"
                                     class="img-fluid d-block w-100">
                                </a>
                            </div>

                            <div class="carousel-item">

                                <a href="">
                                <img src="<?php echo e(asset('/images/gordon-ramzi.jpg')); ?>"
                                     class="img-fluid d-block w-100">
                                </a>

                            </div>

                            <div class="carousel-item">
                                <a href="">
                                <img src="<?php echo e(asset('/images/paul_bocuse_1.jpg')); ?>"
                                     class="img-fluid d-block w-100">
                                </a>
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
        


        
        <section class="row mb-5">
            <article class="">
                <p class="cuprum h2  mt-5 mb-2">
                    НОВЫЕ РЕЦЕПТЫ
                </p>
            </article>

             
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $new1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($new->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$new->id])); ?>">
                        <img src="<?php echo e(asset($new->index_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                <?php echo e($new->index_name); ?>

                            </b>
                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
             

             
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $new2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($new->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$new->id])); ?>">
                        <img src="<?php echo e(asset($new->index_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                <?php echo e($new->index_name); ?>

                            </b>
                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $new3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($new->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$new->id])); ?>">
                        <img src="<?php echo e(asset($new->index_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                <?php echo e($new->index_name); ?>

                            </b>
                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
             

            
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $new4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($new->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$new->id])); ?>">
                        <img src="<?php echo e(asset($new->index_image)); ?>" class="img-fluid card-img">
                        <p class="cuprum text-dark">
                            <b>
                                <?php echo e($new->index_name); ?>

                            </b>
                        </p>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            
        </section>
        



    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/home/index.blade.php ENDPATH**/ ?>