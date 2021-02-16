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
                        <input class="form-control mr-xl-1 cuprum" type="search" placeholder="ПОИСК" aria-label="Search">
                        <button class="btn btn-outline-success margin cuprum" type="submit">ПОИСК</button>
                        <?php if(Route::has('login')): ?>

                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 underline">ГЛАВНАЯ</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" button class="btn btn-success margin cuprum">ВХОД</a>

                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>" button class="btn btn-success margin cuprum">РЕГИСТРАЦИЯ</a>
                                <?php endif; ?>
                            <?php endif; ?>

                        <?php endif; ?>
                        

                    </form>
                

                
                    
                

                
                    
                    
                </div>
            </div>
        </nav>
    </header>

<?php echo $__env->yieldSection(); ?>

<?php /**PATH W:\domains\EH\resources\views/layouts/app.blade.php ENDPATH**/ ?>