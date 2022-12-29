<section class="mod-banner items-center relative min-h-638">
    <div class="bg-img w-full absolute h-full">
        <img class="h-full w-full" src="<?php echo e($data->module['bg']->url); ?>">
    </div>
    <div class="relative flex w-full justify-end">
        <div class="flex flex-wrap md:flex-no-wrap w-full z-10 banner-content lg:w-4/5 justify-between mt-35">
            <div class="banner-slogan w-full flex flex-col items-center md:items-start justify-center text-center lg:text-left lg:max-w-40p text-white">
                <?php echo $data->module['contents']; ?>

                <button class=" mt-17 bg-red hover:bg-brown-200 h-27 w-242 rounded-27 banner-button">ABOUT US</button>
            </div>
            <div class="banner-img w-full md:min-w-490 min-h-400 lg:w-1/2 min-w-872 lg:max-w-55p flex justify-end">
                <img class="pt-18.5 xl:p-0" src="<?php echo e($data->module['leftbg']->url); ?>" alt="<?php echo App::getBanner()['alt']; ?>">
            </div>
        </div>
    </div>
</section>