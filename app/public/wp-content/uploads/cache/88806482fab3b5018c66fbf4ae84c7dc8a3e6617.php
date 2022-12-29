<section class="mod-carousel">
    <div class="container relative carousel w-4/5 max-w-1001 shadow-3xl rounded-57 min-h-462 justify-center items-center">
        
        <?php $__currentLoopData = $data->module['quotes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="w-full flex justify-center md:block">
                <div class="quote md:ml-14p ml-19 max-w-659">
                    <?php echo $item->quote; ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>