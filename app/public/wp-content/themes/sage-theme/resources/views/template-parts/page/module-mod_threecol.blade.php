<section class="mod-threecol">
    <div class="container flex flex-col items-center justify-center max-w-1104">
        <div class="flex flex-col items-center text-center max-w-85p mt-16 mb-16">
            {!! $data->module['contentintro'] !!}
        </div>
        <div class="col-contain flex flex-col md:justify-between items-center md:items-start md:flex-row min-h-479">            
            <div class="info-col">
                <div>
                    <img class="info-icon w-40 h-40" src="{!! App::getIcon()['machine'] !!}" alt="{!! App::getIcon()['alt'] !!}">
                </div>
                <h3>Solutions for Manufacturers</h3>
                <p>Integrate all aspects of your operations with a single source of truth for planning, purchasing, production, QC, inventory, sales, accounting, finance, and business intelligence.</p>
                <a href="">EXPLORE ORCHESTRA</a>
            </div>
            <div>
                <img class="dot-arrow md:mt-12" src="{!! App::getIcon()['dotarrow'] !!}" alt="{!! App::getIcon()['alt'] !!}">
            </div>
            <div class="info-col">
                <div>
                    <img class="info-icon w-40 h-40" src="{!! App::getIcon()['box'] !!}" alt="{!! App::getIcon()['alt'] !!}">
                </div>
                <h3>Solutions for Distributors</h3>
                <p>Increase operational efficiency and manage growth effectively with products like warehouse management, sales execution, logistics, warehouse automation, retailer ordering, business intelligence, and more.</p>
                <a href="">EXPLORE ENCOMPASS CLOUD</a>
            </div>
            <div>
                <img class="dot-arrow md:mt-12" src="{!! App::getIcon()['dotarrow'] !!}" alt="{!! App::getIcon()['alt'] !!}">
            </div>
            <div class="info-col">
                <div>
                    <img class="info-icon w-40 h-40" src="{!! App::getIcon()['house'] !!}" alt="{!! App::getIcon()['alt'] !!}">
                </div>
                <h3>Solutions for Retailers</h3>
                <p>Run a more efficient business by optimizing interactions with your distributors and customers with solutions like online ordering, retail eCommerce websites, delivery applications, and more.</p>
                <a href="">EXPLORE RETAIL SOLUTIONS</a>
            </div>
        </div>
    </div>
</section>