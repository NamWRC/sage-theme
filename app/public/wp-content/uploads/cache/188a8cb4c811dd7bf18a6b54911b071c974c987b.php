<section class="mod-threecol">
    <div class="container flex flex-col items-center justify-center max-w-1104">
        <div class="flex flex-col items-center text-center max-w-85p mt-16 mb-16">
            <?php echo $data->module['contentintro']; ?>

        </div>
        <div class="col-contain flex flex-col md:justify-between items-center md:items-start md:flex-row min-h-479">
            <?php
                $count = count($data->module['contents']);
            ?>
            <?php $__currentLoopData = $data->module['contents']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="info-col">
                    <div>
                        <img class="info-icon w-40 h-40" src="<?php echo e($item->icon->url); ?>">
                    </div>
                    <?php echo $item->content; ?>

                    <a id="read" href="<?php echo $item->link->url; ?>"><?php echo $item->link->title; ?></a>
                </div>
                <?php if($item!=$data->module['contents'][$count-1]): ?>
                    <div>
                        <img class="dot-arrow md:mt-12" src="<?php echo e($data->module['dotarow']->url); ?>">
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>