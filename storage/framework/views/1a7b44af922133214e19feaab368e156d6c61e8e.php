<?php $__env->startSection('head'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="TBbnzgj2hscIAHRYi5CVGqWH7gFODCYGH5Y4jRQyBWg" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <meta name="keywords" content="Рецепт азиатского супа, крем суп, супы народов, супы со сливками, острые супы.">
    <meta name="Description" content="Суп первое блюдо. Сдесь вы найдете подборку наиболее аппетитных рецептов супов.
    Эти рецепты особенно подойдут для владельцев своих ресторанов.
    Рецепты приготовления супов, горячих, сливочных, острых и холодных.
    Подача супов в ресторанном стиле, классические рецепты супов."/>
    <meta property="og:url" content="http://edahelp.ru/recipe_cream_soups">
    <meta property="og:description" content="Суп первое блюдо. Сдесь вы найдете подборку наиболее аппетитных рецептов супов. Эти рецепты особенно подойдут для владельцев своих ресторанов. Рецепты приготовления супов, горячих, сливочных, острых и холодных. Подача супов в ресторанном стиле, классические рецепты супов.">
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
        Еда Хелп - крем супы, азиатские супы, народные супы как в ресторане
    </title>

<?php echo $__env->yieldSection(); ?>

<?php $__env->startSection('content'); ?>


    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        СУПЫ
                    </p>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5">
                            КРЕМ СУП
                        </p>
                    </article>
                    <?php $__currentLoopData = $creamsoups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $creamsoup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($creamsoup->id); ?>

                           href="<?php echo e(route('cream_soup',['id'=>$creamsoup->id])); ?>">
                            <div class="card">
                            <img src="<?php echo e(asset($creamsoup->cream_soups_image)); ?>"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            <?php echo e($creamsoup->cream_soups_name); ?>

                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Крем супы">
                                        <?php echo e($creamsoup->cream_soups_description_5); ?>

                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5">
                            АЗИАТСКИЕ
                        </p>
                    </article>
                    <?php $__currentLoopData = $fushsoups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fushsoup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($fushsoup->id); ?>

                           href="<?php echo e(route('cream_soup',['id'=>$fushsoup->id])); ?>">
                            <div class="card">
                            <img src="<?php echo e(asset($fushsoup->cream_soups_image)); ?>"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            <?php echo e($fushsoup->cream_soups_name); ?>

                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Азиацкие супы">
                                        <?php echo e($fushsoup->cream_soups_description_5); ?>

                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            НАРОДНЫЕ
                        </p>
                    </article>
                    <?php $__currentLoopData = $meatsoups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meatsoup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($meatsoup->id); ?>

                           href="<?php echo e(route('cream_soup',['id'=>$meatsoup->id])); ?>">
                            <div class="card">
                            <img src="<?php echo e(asset($meatsoup->cream_soups_image)); ?>"
                                 class="img-fluid card-img">
                                <div class="card-body">
                                    <h5 class="card-title cuprum text-dark">
                                        <b>
                                            <?php echo e($meatsoup->cream_soups_name); ?>

                                        </b>
                                    </h5>
                                    <p class="card-text cuprum text-dark h6 ">
                                        <meta name="Description" content="Народные супы">
                                        <?php echo e($meatsoup->cream_soups_description_5); ?>

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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edahelpr/public_html/resources/views/cream_soups/index.blade.php ENDPATH**/ ?>