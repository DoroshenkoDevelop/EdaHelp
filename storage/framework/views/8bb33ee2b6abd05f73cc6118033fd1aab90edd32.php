<?php $__env->startSection('content'); ?>
    
    <main class="container-md border-right border-left border-dark">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <td> <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($list->id); ?>

                        <a href="<?php echo e(route('chef',['id'=>$list->id])); ?>">
                            <p class="cuprum">Gordon Ramzi</p>
                            <img class="img-fluid" width="100px" height="100px" src="<?php echo e(asset('images/Gordon.jpg')); ?>">
                        </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>

                <td>
                    <p class="cuprum">ШЕФ</p>
                </td>
                
                <td>
                    <a href=""><p class="cuprum">КУХНЯ</p></a>
                </td>
                
            </tr>
            </tbody>
        </table>
    </main>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/chef/index.blade.php ENDPATH**/ ?>