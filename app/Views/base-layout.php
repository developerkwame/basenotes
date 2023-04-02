<?=partial('includes.head')?>

<body class="">

    <?=partial('includes.topbar')?>

    <!-- Main Body -->
    <section id="main">
        <!-- Back To Top Button -->
        <button title="btt" type="button" class="btt"><a href="" class="font-white"><i class="fa fa-arrow-up"></i></a></button>
        <!-- Container Start -->
        <div class="container border-l-thin border-r-thin flex">
            
            <?=partial('includes.sidenav')?>
            
            <?=section($content)?>

        </div>
        <!-- Container End -->
    </section>
    <!-- Main Body -->

<?=partial('includes.footer')?>
