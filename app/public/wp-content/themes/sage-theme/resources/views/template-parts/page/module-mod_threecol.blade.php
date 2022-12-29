<section class="mod-threecol">
    <div class="container flex flex-col items-center justify-center max-w-1104">
        <div class="flex flex-col items-center text-center max-w-85p mt-16 mb-16">
            {!! $data->module['contentintro'] !!}
        </div>
        <div class="col-contain flex flex-col md:justify-between items-center md:items-start md:flex-row min-h-479">
            @php
                $count = count($data->module['contents']);
            @endphp
            @foreach ($data->module['contents'] as $item)
                <div class="info-col">
                    <div>
                        <img class="info-icon w-40 h-40" src="{{ $item->icon->url }}">
                    </div>
                    {!! $item->content !!}
                    <a id="read" href="{!! $item->link->url !!}">{!! $item->link->title !!}</a>
                </div>
                @if ($item!=$data->module['contents'][$count-1])
                    <div>
                        <img class="dot-arrow md:mt-12" src="{{$data->module['dotarow']->url}}">
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>