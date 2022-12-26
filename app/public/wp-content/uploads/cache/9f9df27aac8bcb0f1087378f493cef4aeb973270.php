<?php
    $class = 'h4';
?>
<section>
    <div class="container">
        <h1>Module: Demo</h1>
        <?php echo $__env->make('partials/demo/item',[
            'class' => $class,
            'title' => $data->title,
            'desc' => $data->desc
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</section>