<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <main class="container-sm">

             
            <div class="row ">
                <article class="">
                    <p class="cuprum h1 mt-5 mb-5 text-center">
                        ИЗЫСКАННОЕ
                    </p>
                </article>
                

                 
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            МОРЕПРОДУКТЫ
                        </p>
                    </article>
                    <?php $__currentLoopData = $seafoods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seafood): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($seafood->id); ?>

                           href="<?php echo e(route('exquisite',['id'=>$seafood->id])); ?>">
                            <img src="<?php echo e(asset($seafood->exquisite_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($seafood->exquisite_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ПОКЕ
                        </p>
                    </article>
                    <?php $__currentLoopData = $pokes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($poke->id); ?>

                           href="<?php echo e(route('exquisite',['id'=>$poke->id])); ?>">
                            <img src="<?php echo e(asset($poke->exquisite_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($poke->exquisite_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                


                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ПОКЕ
                        </p>
                    </article>
                    <?php $__currentLoopData = $pokes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($poke->id); ?>

                           href="<?php echo e(route('exquisite',['id'=>$poke->id])); ?>">
                            <img src="<?php echo e(asset($poke->exquisite_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($poke->exquisite_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                


                
                <article class="col-sm-12 col-md-3 mb-4">
                    <article>
                        <p class="cuprum h5 ">
                            ПОКЕ
                        </p>
                    </article>
                    <?php $__currentLoopData = $pokes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $poke): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="text-decoration-none"
                           <?php echo e($poke->id); ?>

                           href="<?php echo e(route('exquisite',['id'=>$poke->id])); ?>">
                            <img src="<?php echo e(asset($poke->exquisite_image)); ?>" class="img-fluid card-img">
                            <p class="cuprum text-dark">
                                <b>
                                    <?php echo e($poke->exquisite_name); ?>

                                </b>
                            </p>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </article>
                

            </div>
        </main>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/exquisite/index.blade.php ENDPATH**/ ?>