<section class="mod-twocol w-full flex justify-center">
    <div class="flex lg:justify-center w-4/5 lg:flex-row xl:w-3/5 flex-col items-center lg:items-start">
        <div class="main-tittle lg:max-w-428 lg:w-2/5 md:mr-0 lg:mr-44 mb-34 ">
            <div class="line-4 h-1 mb-15 "></div>
            {!! $data->module['title'] !!}
        </div>
        <div class="info-wraper flex w-full lg:w-3/5 mt-4 lg:max-w-634">
            @foreach ($data->module['rowcontents'] as $row)
                <div class="row-content">
                    <div class="info lg:max-w-273 lg:max-w-634 md:mr-8p">
                        {!! $row->Row[0]->item !!}
                    </div>
                    <div class="info lg:max-w-273 lg:max-w-634">
                        {!! $row->Row[1]->item !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
