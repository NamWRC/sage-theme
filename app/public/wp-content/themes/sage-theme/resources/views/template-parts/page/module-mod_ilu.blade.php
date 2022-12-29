<section class="mod-ilu">
    <div class="flex w-full md:flex-row flex-col justify-start h-full">
        <div class="md:w-1/2 w-full flex h-full min-h-936 relative justify-center">
            <div class="md:w-95p w-full h-95p bg-green-100 min-w-576 min-h-781">
            </div>
            <div class="absolute md:bottom-0 md:right-0 top-12">
                <img src="{{$data->module['image']->url}}">
            </div>
        </div>
        <div class="max-w-480 md:ml-49 self-center">
            {!! $data->module['content'] !!}
            <button href="{!! $data->module['link']->url !!}" class="lg:block bg-red hover:bg-brown-200 hidden mt-17 text-white h-27 w-242 rounded-27 banner-button">
                {!! $data->module['link']->title !!}
            </button>
        </div>
    </div>
</section>