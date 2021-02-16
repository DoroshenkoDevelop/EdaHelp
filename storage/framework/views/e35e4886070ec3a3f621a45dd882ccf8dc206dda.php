<?php $__env->startSection('content'); ?>
    
    <main class="container border-right border-left border-dark">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <td>
                        <a class="" href="<?php echo e(route('chef')); ?>"><p class="cuprum">Gordon Ramzi</p>
                            <img class="img-fluid" width="100px" height="100px" src="<?php echo e(asset('images/Gordon.jpg')); ?>">
                        </a>
                <td>
                   <a href="<?php echo e(route('chef')); ?>"><p class="cuprum">ШЕФ</p></a>
                </td>

                </td>
            </tr>
            </tbody>
        </table>
    </main>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/chef/chef_list.blade.php ENDPATH**/ ?>