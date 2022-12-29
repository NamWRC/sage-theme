<section class="mod-trusted border-t-1 border-gray-200">
    <div class="container flex flex-col items-center text-center pt-40">
        <div class="max-w-557">{!! $data->module['title'] !!}</div>
        <div class="max-w-659">{!! $data->module['content'] !!}</div>
        <div class="slick-contain relative w-full flex items-center w-full">
            <button class="trust-btn-prev text-4xl w-50 h-50 text-red"><span class="icomoon icon-chevron-left"></button>
            <div class="trust-slick relative w-4/5 flex items-center">
                @foreach ($data->module['images'] as $item)
                    <img class="h-full" src="{!! $item->image->url !!}">
                @endforeach
                @foreach ($data->module['images'] as $item)
                    <img class="h-full" src="{!! $item->image->url !!}">
                @endforeach
            </div>
            <button class="trust-btn-next text-4xl w-50 h-50 text-red"><span class="icomoon icon-chevron-right"></button>       
        </div>
    </div>
</section>