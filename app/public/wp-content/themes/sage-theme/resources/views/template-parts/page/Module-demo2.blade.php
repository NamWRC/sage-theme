@php
    $class = 'h2';
@endphp
<section>
    <div class="container">
        <h1>Module: Demo2</h1>
        {{Page::filterDemo([
            'class' => $class,
            'title' => $data->title,
            'desc' => $data->desc
        ])}}
    </div>
</section>