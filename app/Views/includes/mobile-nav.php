
        <!-- Mobile Navigation Start -->
        <div class="mobile-nav px-1 hide">
            <div class="close flex cursor-pointer">
                <i class="fa fa-close ml-auto hide big-font"></i>
            </div>
            <div class="flex">
                <ul class="nav-links">
                    <h1 class="big-font font-blue mb-2"><?=config('app_name')?></h1>
                    <li class="main-category mb-1 fw-thick font font-underline">Navigation</li>
                    <li class="sub-category mb-1"><a href="<?=url('notes')?>">List Notes</a></li>
                    <li class="sub-category mb-1"><a href="<?=url('notes/create')?>">Create Note</a></li>
                </ul>
            </div>
            <div class="flex social-icons">
                <a href="https://github.com/developerkwame/basenotes"><i class="fa fa-github big-font ml-2" aria-hidden="true"></i></a>
                <a href="https://twitter.com/webbyphp"><i class="fa fa-twitter big-font ml-1" aria-hidden="true"></i></a>

            </div>
        </div>
        <!-- Mobile Navigation End -->
