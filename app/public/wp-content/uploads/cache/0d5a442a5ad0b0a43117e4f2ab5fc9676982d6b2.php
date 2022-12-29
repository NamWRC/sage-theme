<section class="mod-certi bg-green-100">
    <div class="container relative flex md:flex-row flex-col md:justify-start items-center md:w-full w-4/5 md:min-h-490">
        <div class="flex-col md:flex-wrap lg:flex-nowrap md:pr-10 w-full my-21 md:my-0">
            <div class="lg:max-w-506 my-21">
                <?php echo $data->module['title']; ?>

            </div>
            <div class="md:w-1/2">
                <?php echo $data->module['contents']; ?>

            </div>
        </div>
        <div class="w-full lg:h-full mt-25 flex md:absolute md:right-0 flex-col items-center justify-center lg:max-w-473 max-w-346">
            <div class="certi-slick relative lg:h-4/5 w-full flex items-center">
                <div class="flex flex-col w-full">
                    <?php for($j = 0; $j < 6; $j+=2): ?>
                        <div class="flex">
                            <img class="w-1/2 h-1/3" src="<?php echo e($data->module['images'][$j]->image->url); ?>">
                            <img class="w-1/2 h-1/3" src="<?php echo e($data->module['images'][$j+1]->image->url); ?>">
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="flex flex-col w-full">
                    <?php for($j = 0; $j < 5; $j+=2): ?>
                        <div class="flex">
                            <img class="w-1/2 h-1/3" src="<?php echo e($data->module['images'][$j]->image->url); ?>">
                            <img class="w-1/2 h-1/3" src="<?php echo e($data->module['images'][$j+1]->image->url); ?>">
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="md:absolute lg:bottom-3 md:bottom-n62 md:self-end">
                <button class="certi-btn-prev text-4xl w-50 h-50 text-red"><span class="icomoon icon-chevron-left"></button>
                <button class="certi-btn-next text-4xl w-50 h-50 text-red"><span class="icomoon icon-chevron-right"></button>
            </div>
        </div>
    </div>
</section>