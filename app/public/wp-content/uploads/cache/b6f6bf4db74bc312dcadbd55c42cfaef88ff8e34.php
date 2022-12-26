<?php
    $class = 'h2';
?>
<section>
    <div class="container">
        <h1>Module: Demo2</h1>
        <?php echo e(Page::filterDemo([
            'class' => $class,
            'title' => $data->title,
            'desc' => $data->desc
        ])); ?>

    </div>
</section>