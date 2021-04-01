<?php $__env->startSection('app'); ?>

<header class="card-header container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-sm">
                
                <a href="<?php echo e(route('home')); ?>" class="navbar-brand">
                    <p class="text-center mb-1 text-inter h3 text-inter text-white">ЕДА</p>
                    <hr class="hr">
                    <p class="text-center mt-1 text-inter h3 text-inter h3 text-white">HELP</p>
                </a>
                

                
                <div class="container">
                   <form class="d-flex">
                       <div class="cuprum ya-site-form ya-site-form_inited_no"
                            data-bem="{&quot;action&quot;:&quot;https://yandex.ru/search/site/&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:16,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Yandex Site Search #2454816&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_blank&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:3,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2454816,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск по сайту&quot;,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#000000&quot;}">
                           <form class="d-flex"
                                 action="https://yandex.ru/search/site/"
                                 method="get"
                                 target="_blank"
                                 accept-charset="utf-8">
                               <input type="hidden" name="searchid" value="2454816"/>
                               <input type="hidden" name="l10n" value="ru"/>
                               <input type="hidden" name="reqenc" value=""/>
                               <input type="search" name="text" value=""/>
                               <input class="" type="submit" value="Найти"/>

                           </form>
                       </div>
                       <style
                           type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }
                       </style>
                       <script
                           type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');
                       </script>
                    </form>
                
                </div>
                
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <a class="btn btn-success cuprum" href="<?php echo e(route('logout')); ?>">
                            ВЫЙТИ
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>"
                           class="btn btn-success margin cuprum pt-3 pb-3">
                            ВХОД
                        </a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>"
                               class="btn btn-success margin cuprum pt-3 pb-3">
                                РЕГИСТРАЦИЯ
                            </a>
                        <?php endif; ?>

                    <?php endif; ?>

                <?php endif; ?>
                
            </div>
        </nav>
    </header>







<?php echo $__env->yieldSection(); ?>


<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/layouts/app.blade.php ENDPATH**/ ?>