<section class="mod-thelast relative">
    <div class="absolute z-0 h-676 w-676 left-70p top-0">
        <img src="<?php echo e($data->module['bglogo']->url); ?>">
    </div>
    <div class="container relative w-4/5 z-10">
        <a id="read" href="">THE LASTEST</a>
        <div class="flex flex-col justify-between xl:flex-row w-full xl:h-530 relative">
            <div class="shadow-3xl rounded-57 flex flex-col xl:max-w-664 xl:w-3/5 bg-white">
                <img class="w-full h-278" src="<?php echo e($data->module['main'][0]->image->url); ?>">
                <?php echo $data->module['main'][0]->content; ?>

                <a id="read" href="<?php echo $data->module['main'][0]->link->url; ?>"><?php echo $data->module['main'][0]->link->title; ?></a>
            </div>
            <div class="h-full flex flex-col justify-between xl:w-2/5 xl:items-end ">
                <div class="rounded-57 flex flex-col shadow-3xl mt-16 xl:max-h-240 xl:mt-0 xl:h-1/2 xl:max-w-452 bg-white">
                    <?php echo $data->module['sub'][0]->content; ?>

                    <a id="read" href="<?php echo $data->module['sub'][0]->link->url; ?>"><?php echo $data->module['sub'][0]->link->title; ?></a>
                </div>
                <div class="rounded-57 flex flex-col shadow-3xl mt-16 xl:max-h-240 xl:mt-0 xl:h-1/2 xl:max-w-452 bg-white">
                    <?php echo $data->module['sub'][1]->content; ?>

                    <a id="read" href="<?php echo $data->module['sub'][1]->link->url; ?>"><?php echo $data->module['sub'][1]->link->title; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>