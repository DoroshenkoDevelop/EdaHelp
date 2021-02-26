<?php $__env->startSection('content'); ?>

    <main class="container-sm border-right border-left border-dark">


        <div class="logo mt-5 mb-5">

            <a class="navbar-brand"
               href="<?php echo e(route('home')); ?>">
                <p class="text-center mb-1 text-inter h3 text-inter text-dark">
                    ЕДА
                </p>
                <hr class="hr">
                <p class="text-center mt-1 text-inter h3 text-inter h3 text-dark">
                    HELP
                </p>
            </a>

        </div>

        <form
            class="text-center"
            method="POST"
            action="<?php echo e(route('send')); ?>">
            <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
            <input name="name" class="" type="text">
            <input name="email" class="" type="text">
            <textarea name="nsg" class="" type="text">

            </textarea>
            <button submit="send" class="btn btn-success ml-2 cuprum">
                ОТПРАВИТЬ
            </button>
        </form>




    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/email/email.blade.php ENDPATH**/ ?>