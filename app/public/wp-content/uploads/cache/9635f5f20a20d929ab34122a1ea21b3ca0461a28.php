<section class="mod-threedata">
    <div class="container flex flex-col items-center md:flex-row justify-center">
        <div class="w-1/2 py-15 md:w-1/3 md:border-r-4 border-b-4 md:border-b-0 pr-10 border-green-100">
            <img class="mb-13 w-77 h-77" src="<?php echo e($data->module['contents'][0]->image->url); ?>">
            <?php echo $data->module['contents'][0]->content; ?>

        </div>
        <div class="w-1/2 py-15 md:w-1/3 md:border-r-4 border-b-4 md:border-b-0  pr-10 md:ml-15 border-green-100">
            <img class="mb-13 w-77 h-77" src="<?php echo e($data->module['contents'][1]->image->url); ?>">
            <?php echo $data->module['contents'][1]->content; ?>

        </div>
        <div class="w-1/2 py-15 md:w-1/3 md:ml-15">
            <img class="mb-13 w-77 h-77" src="<?php echo e($data->module['contents'][2]->image->url); ?>">
            <?php echo $data->module['contents'][2]->content; ?>

        </div>
    </div>
</section>