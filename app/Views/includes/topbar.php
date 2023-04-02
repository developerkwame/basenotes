    <!-- Nav -->
    <nav class="border-b-thin">
        <div class="container py-2">
            <div class="nav flex">
                <div class="nav-left py-1">
                    <h1><a href="<?=url('')?>" class="big-font font-blue" ><?=config('app_name')?></a></h1>
                </div>
                <div class="nav-right ml-auto flex">
                    <a href="<?=url('void')?>"><button class="bg-white py-1 px-3 border-thin action-btn" style="cursor:pointer">View Github Repo</button></a>
                    <div class="nav-right-icon">
                        <a href="<?=url('')?>"><i class="fa fa-github big-font ml-2 py-1" aria-hidden="true"></i></a>
                        <i class="fa fa-twitter big-font ml-2 py-1" aria-hidden="true"></i>
                        {memory_usage} | {elapsed_time}
                    </div>
                </div>
                <div class="nav-mobile-toggle ml-auto flex">
                    <i class="fa fa-bars big-font"></i>
                </div>
            </div>
        </div>

        <?=partial('includes/mobile-nav')?>

    </nav>
    <!-- Nav End -->