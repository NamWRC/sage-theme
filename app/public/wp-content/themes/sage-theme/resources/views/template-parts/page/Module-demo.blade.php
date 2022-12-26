@php
    $class = 'h4';
@endphp
<section>
    <div class="container">
        <h1>Module: Demo</h1>
        @include('partials/demo/item',[
            'class' => $class,
            'title' => $data->title,
            'desc' => $data->desc
        ])
    </div>
</section>