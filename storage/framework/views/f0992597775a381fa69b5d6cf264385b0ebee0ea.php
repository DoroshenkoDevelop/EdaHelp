<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <table class="table table-striped table-hover">
            <?php $__currentLoopData = $chefs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chef): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
            <tr>
                <td>

                        <a class="text-decoration-none text-black" href="<?php echo e(route('chef',['id'=>$chef->id])); ?>">
                            <p class="cuprum">
                                <?php echo e($chef->name_chef); ?>

                            </p>
                            <img class="img-fluid"
                                 width="100px"
                                 height="100px"
                                 src="<?php echo e(asset($chef->image_chef)); ?>">
                        </a>

                </td>
                <td>
                    <p class="cuprum">
                        <?php echo e($chef->chef_description_1); ?>

                    </p>
                </td>
                
                <td>
                        <p class="cuprum">
                            <?php echo e($chef->chef_description_2); ?>

                        </p>
                    </a>
                </td>
                
            </tr>

            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </main>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\eh\resources\views/chef/index.blade.php ENDPATH**/ ?>