<?php $__env->startSection('head'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="TBbnzgj2hscIAHRYi5CVGqWH7gFODCYGH5Y4jRQyBWg" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <meta name="keywords" content="Рецепт приготовления риса, рецепт приготовление перловой каши, рецепт приготовление морепродуктов, рецепт приготовление булгура, рецепт приготовление риса с овощами.">
    <meta name="Description" content="Ризотто – рецепт итальянской кухни. Готовят ризотто из риса по особой технологии.
    Еда как в ресторане, но только дома. Рецепты подойдут как для владельцев своих ресторанов, также для приготовления в домашних условиях."/>
    <meta property="og:url" content="http://edahelp.ru/recipe_risottos">
    <meta property="og:description" content="Ризотто – рецепт итальянской кухни. Готовят ризотто из риса по особой технологии. Еда как в ресторане, но только дома. Рецепты подойдут как для владельцев своих ресторанов, также для приготовления в домашних условиях.">
    <meta property="og:site_name" content="ЕдаHelp">


    <link rel="icon" href="<?php echo e(asset('storage/favicon/favicon.PNG')); ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" type="text/js" href="<?php echo e(asset('js/parallax.min.js')); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" type="text/css" href="<?php echo e(mix('css/app.css')); ?>">
    <script src="<?php echo e(asset('js/parallax.min.js')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(74501833, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/74501833" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <noscript>
        <div>
            <img src="https://mc.yandex.ru/watch/74501833" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <title>
        Еда Хелп - ризотто с мясом, с курицей, морепродуктами и рыбой
    </title>

<?php echo $__env->yieldSection(); ?>
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
                            <div class="card">
                            <img src="<?php echo e(asset($risottomeat->risottos_image)); ?>"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            <?php echo e($risottomeat->risottos_name); ?>

                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Ризотто с мясом">
                                        <?php echo e($risottomeat->risottos_description_5); ?>

                                    </p>
                                </div>
                            </div>
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
                            <div class="card">
                            <img src="<?php echo e(asset($risottochiken->risottos_image)); ?>"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            <?php echo e($risottochiken->risottos_name); ?>

                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Ризотто с птицей">
                                        <?php echo e($risottochiken->risottos_description_5); ?>

                                    </p>
                                </div>
                            </div>
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
                            <div class="card">
                            <img src="<?php echo e(asset($risottosseafood->risottos_image)); ?>"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            <?php echo e($risottosseafood->risottos_name); ?>

                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Ризотто с морепродуктами и рыбой">
                                        <?php echo e($risottosseafood->risottos_description_5); ?>

                                    </p>
                                </div>
                            </div>
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
                            <div class="card">
                            <img src="<?php echo e(asset($risottovegetable->risottos_image)); ?>"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            <?php echo e($risottovegetable->risottos_name); ?>

                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Ризотто с овощами">
                                        <?php echo e($risottovegetable->risottos_description_5); ?>

                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edahelpr/public_html/resources/views/risotto/index.blade.php ENDPATH**/ ?>