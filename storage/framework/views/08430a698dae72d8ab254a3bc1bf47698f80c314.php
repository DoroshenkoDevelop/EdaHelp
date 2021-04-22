<?php $__env->startSection('content'); ?>

    <main class="container-sm border-right border-left border-dark">

      
        <main class="text-center container-sm">
            <meta name="Description" content="Сайт с рецептами, меню, фоторецептов с пошаговым и детальным описанием процесса приготовления.">
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
      

        
        <section class="row p-5">
            <article class="">
                <p class="cuprum h2  mt-5 mb-2">
                    ИНТЕРЕСНОЕ
                </p>
            </article>
            

            
            <article class="col-sm-12 col-md-6">
                <?php $__currentLoopData = $articles1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($articles->id); ?>

                       href="<?php echo e(route('article',['id'=>$articles->id])); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($articles->articles_image_1)); ?>" alt="Елена Малышева" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        <?php echo e($articles->index_name); ?>

                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6 ">
                                    <meta name="Description" content="Лечим суставы с Еленой Малышевой">
                                    <?php echo e($articles->articles_text_9); ?>

                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-6">
                <?php $__currentLoopData = $articles2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($articles->id); ?>

                       href="<?php echo e(route('article',['id'=>$articles->id])); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($articles->articles_image_1)); ?>" alt="Доктор Берг" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        <?php echo e($articles->index_name); ?>

                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Востанавливаем зрение с Доктором Бергом">
                                    <?php echo e($articles->articles_text_9); ?>

                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

       
        <section class="row">
        <article class="">
            <p class="cuprum h2 mt-5 mb-2">
                ПОПУЛЯРНЫЕ РЕЦЕПТЫ
            </p>
        </article>
            

        
        <article class="col-sm-12 col-md-3">
            <?php $__currentLoopData = $populars1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="text-decoration-none"
                   <?php echo e($populars->id); ?>

                   href="<?php echo e(route('recipe',['id'=>$populars->id])); ?>">
                    <div class="card">
                    <img src="<?php echo e(asset($populars->index_image)); ?>" alt="Суп" class="img-fluid card-img">
                        <div class="card-body">
                            <h5 class="card-title cuprum text-dark">
                                <b>
                                    <?php echo e($populars->index_name); ?>

                                </b>
                            </h5>
                            <p class="card-text cuprum text-dark h6 ">
                                <meta name="Description" content="Рецепт крем-супа из овощей">
                                <?php echo e($populars->index_description_5); ?>

                            </p>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </article>
         

          
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $populars2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($populars->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$populars->id])); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($populars->index_image)); ?>" alt="Рыба"  class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        <?php echo e($populars->index_name); ?>

                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт запеченого лосося">
                                    <?php echo e($populars->index_description_5); ?>


                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
          

            
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $populars3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($populars->id); ?>

                       href="<?php echo e(route('sushi',['id'=>$populars->id])); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($populars->sushis_image)); ?>" alt="Суши" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        <?php echo e($populars->sushis_name); ?>

                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6 ">
                                    <meta name="Description" content="Рецепт суши с угрем">
                                    <?php echo e($populars->sushis_description_5); ?>


                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $populars4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($populars->id); ?>

                       href="<?php echo e(route('meat',['id'=>$populars->id])); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($populars->meats_image)); ?>" alt="Мясо" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        <?php echo e($populars->meats_name); ?>

                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт свинины в беконе">
                                    <?php echo e($populars->meats_description_5); ?>


                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

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

                       href="<?php echo e(route('meat',['id'=>$new->id])); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($new->meats_image)); ?>" alt="Драники" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        <?php echo e($new->meats_name); ?>

                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6 ">
                                    <meta name="Description" content="Рецепт драников с мясом">
                                    <?php echo e($new->meats_description_5); ?>


                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $new2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($new->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$new->id])); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($new->index_image)); ?>" alt="Бургер" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        <?php echo e($new->index_name); ?>

                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт бургера">
                                    <?php echo e($new->index_description_5); ?>


                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $new3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($new->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$new->id])); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($new->index_image)); ?>" alt="Ризотто" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        <?php echo e($new->index_name); ?>

                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт перловой каши">
                                    <?php echo e($new->index_description_5); ?>


                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-3">
                <?php $__currentLoopData = $new4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($new->id); ?>

                       href="<?php echo e(route('recipe',['id'=>$new->id])); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($new->index_image)); ?>" alt="Суп" class="img-fluid card-img">
                            <div class="card-body">
                                <h5 class="card-title cuprum text-dark">
                                    <b>
                                        <?php echo e($new->index_name); ?>

                                    </b>
                                </h5>
                                <p class="card-text cuprum text-dark h6">
                                    <meta name="Description" content="Рецепт супа с рыбой">
                                    <?php echo e($new->index_description_5); ?>

                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            
        </section>
        

        
        <section class="mt-3 p-2">
            <div class="row">
                <div class="col">
                    <p class="cuprum h2">
                        ТОП ШЕФ РЕЦЕПТОВ
                    </p>
                    <div class="carousel slide mb-5" id="mySlider" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <?php $__currentLoopData = $chef1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chef): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="text-decoration-none"
                                       <?php echo e($chef->id); ?>

                                       href="<?php echo e(route('chef',['id'=>$chef->id])); ?>">
                                        <div class="card">
                                        <img src="<?php echo e(asset('/images/gordon-ramzi.jpg')); ?>"alt="Гордон Рамзи" class="img-fluid card-img">
                                            <div class="card-body">
                                                <h5 class="card-title cuprum text-dark">
                                                    <b>
                                                        <?php echo e($chef->index_name); ?>

                                                    </b>
                                                </h5>
                                                <p class="card-text cuprum text-dark h6">
                                                    <meta name="Description" content="Рецепты Гордона Рамзи">
                                                    <?php echo e($chef->chef_description); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        

            
            <article class="col-sm-12 col-md-3 p-5">
                <?php $__currentLoopData = $product1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($product->id); ?>

                       href=" <?php echo e($product->index_name); ?>">
                        <div class="card">
                        <img src="<?php echo e(asset($product->index_image)); ?>" alt="Пчелиный воск здоров" class="img-fluid card-img">
                            <div class="card-body">
                                <p class="card-text cuprum text-danger h5 ">
                                    <meta name="Description" content="">
                                    <?php echo e($product->index_description_5); ?>

                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-3 p-5">
                <?php $__currentLoopData = $product2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($product->id); ?>

                       href=" <?php echo e($product->index_name); ?>">
                        <div class="card">
                            <img src="<?php echo e(asset($product->index_image)); ?>" class="img-fluid card-img">
                            <div class="card-body">
                                <p class="card-text cuprum text-danger h5 ">
                                    <meta name="Description" content="">
                                    <?php echo e($product->index_description_5); ?>

                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            

            
            <article class="col-sm-12 col-md-3 p-5">
                <?php $__currentLoopData = $product3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="text-decoration-none"
                       <?php echo e($product->id); ?>

                       href=" <?php echo e($product->index_name); ?>">
                        <div class="card">
                            <img src="<?php echo e(asset($product->index_image)); ?>" class="img-fluid card-img">
                            <div class="card-body">
                                <p class="card-text cuprum text-danger h5 ">
                                    <meta name="Description" content="">
                                    <?php echo e($product->index_description_5); ?>

                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </article>
            



</section>
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/home/index.blade.php ENDPATH**/ ?>