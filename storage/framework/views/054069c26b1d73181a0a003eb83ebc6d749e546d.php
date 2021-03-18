<?php $__env->startSection('app'); ?>

<header class="card-header container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
                
                <a href="<?php echo e(route('home')); ?>" class="navbar-brand">
                    <p class="text-center mb-1 text-inter h3 text-inter text-white">ЕДА</p>
                    <hr class="hr">
                    <p class="text-center mt-1 text-inter h3 text-inter h3 text-white">HELP</p>
                </a>
                

                
                <div class="container">
                    
                    <form class="d-flex">
                        <input class="form-control mr-xl-1 cuprum"
                               name="TextSearch"
                               id="TextSearch"
                               type="search"
                               placeholder="ПОИСК"
                               aria-label="Search">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-outline-success margin cuprum"
                                type="submit"
                                name="search"
                                id="search">
                            ПОИСК
                        </button>

                    


                     


                        <?php if(Route::has('login')): ?>

                            <?php if(auth()->guard()->check()): ?>
                              
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" button class="btn btn-success margin cuprum">
                                    ВХОД
                                </a>

                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>" button class="btn btn-success margin cuprum">
                                        РЕГИСТРАЦИЯ
                                    </a>
                                <?php endif; ?>

                            <?php endif; ?>

                        <?php endif; ?>
                        

                    </form>
                

                
                    
                

                
                    
                    
                </div>
            </div>
        </nav>
    </header>

<?php echo $__env->yieldSection(); ?>


<?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/layouts/app.blade.php ENDPATH**/ ?>