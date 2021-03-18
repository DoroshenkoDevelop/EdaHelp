<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('list_chefs')); ?>" method="POST">
      

        <main class="container-md border-right border-left border-dark">
            
            <div class="content-header container p-5">

                <div class="row">
                    <p class="cuprum h4 text-white">
                        <?php echo e($chef->chef_description_3); ?>

                    </p>

                    <p class="cuprum h3 text-white">
                        <?php echo e($chef->chef_description_4); ?>

                    </p>

                    <p class="cuprum h3 text-white">
                        <?php echo e($chef->chef_description_5); ?>

                    </p>
                </div>
            </div>
            

            
            <div class="parallax">

                <p class="cuprum h2 text-left text-white">
                        <?php echo e($chef->name_chef); ?>

                </p>
            </div>
            

            <div class="content-footer">
                <p class="cuprum h2 text-right text-black">
                        <?php echo e($chef->name_recipe); ?>

                </p>

                
                <article class="row">
                    <div class="col-8">
                        <ul class="list-group">
                            <li>
                                <p class="font-italic h-100 cuprum ml-4 mt-2 mb-1">
                                    <?php echo e($chef->chef_ingredients_1); ?>

                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_2); ?>

                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_3); ?>

                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_4); ?>

                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_5); ?>

                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_6); ?>

                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_7); ?>

                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_8); ?>

                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_9); ?>

                                </p>
                            </li>

                            <li>
                                <p class="font-italic  h-100 cuprum ml-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_10); ?>

                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4">
                        <ul class="list-group">
                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mt-2 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_1); ?> <?php echo e($chef->chef_ingredients_value_1); ?>

                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_2); ?> <?php echo e($chef->chef_ingredients_value_2); ?>

                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_3); ?> <?php echo e($chef->chef_ingredients_value_3); ?>

                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_4); ?> <?php echo e($chef->chef_ingredients_value_4); ?>

                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_5); ?> <?php echo e($chef->chef_ingredients_value_5); ?>

                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_6); ?> <?php echo e($chef->chef_ingredients_value_6); ?>

                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_7); ?> <?php echo e($chef->chef_ingredients_value_7); ?>

                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_8); ?> <?php echo e($chef->chef_ingredients_value_8); ?>

                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_9); ?> <?php echo e($chef->chef_ingredients_value_9); ?>

                                </p>
                            </li>

                            <li>
                                <p class="text-right font-italic  h-100 cuprum mr-4 mb-1">
                                    <?php echo e($chef->chef_ingredients_gr_10); ?> <?php echo e($chef->chef_ingredients_value_10); ?>

                                </p>
                            </li>
                        </ul>
                    </div>

                </article>
                

            </div>

        </main>
    </form>




    



<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\EH\resources\views/chef/gordon.blade.php ENDPATH**/ ?>