<section class="mod-trusted border-t-1 border-gray-200">
    <div class="container flex flex-col items-center text-center pt-40">
        <div class="max-w-557"><?php echo $data->module['title']; ?></div>
        <div class="max-w-659"><?php echo $data->module['content']; ?></div>
        <div class="slick-contain relative w-full flex items-center w-full">
            <button class="trust-btn-prev text-4xl w-50 h-50 text-red"><span class="icomoon icon-chevron-left"></button>
            <div class="trust-slick relative w-4/5 flex items-center">
                <?php $__currentLoopData = $data->module['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img class="h-full" src="<?php echo $item->image->url; ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $data->module['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img class="h-full" src="<?php echo $item->image->url; ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <button class="trust-btn-next text-4xl w-50 h-50 text-red"><span class="icomoon icon-chevron-right"></button>       
        </div>
    </div>
</section>