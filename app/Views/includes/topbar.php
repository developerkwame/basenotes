    <!-- Nav -->
    <nav class="border-b-thin">
        <div class="container py-2">
            <div class="nav flex">
                <div class="nav-left py-1">
                    <h1><a href="<?=url('')?>" class="big-font font-blue" ><?=config('app_name')?></a></h1>
                </div>
                <div class="nav-right ml-auto flex">
                    <a href="https://github.com/developerkwame/basenotes"><button class="bg-white py-1 px-3 border-thin action-btn" style="cursor:pointer">View Github Repo</button></a>
                    <div class="nav-right-icon">
                        <a href="https://github.com/developerkwame" target="_blank"><i class="fa fa-github big-font ml-2 py-1" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/webbyphp" target="_blank"><i class="fa fa-twitter big-font ml-2 py-1" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="nav-mobile-toggle ml-auto flex cursor-pointer">
                    <i class="fa fa-bars big-font"></i>
                </div>
            </div>
        </div>

        <?=partial('includes/mobile-nav')?>

    </nav>
    <!-- Nav End -->