<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=asset()?>css/style.css">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>BaseNotes</title>
</head>
<body class="">

    <!-- Nav -->
    <nav class="border-b-thin">
        <div class="container py-2">
            <div class="nav flex">
                <div class="nav-left py-1">
                    <h1><a href="index.html" class="big-font font-blue">BaseCSS</a></h1>
                </div>
                <div class="nav-right ml-auto flex">
                    <a href="https://drive.google.com/drive/folders/1dwB73uj_82Nmhw36pMrX4_d9CXOde3dF?usp=sharing"><button class="bg-white py-1 px-3 border-thin action-btn">Download</button></a>
                    <div class="nav-right-icon">
                        <a href="https://github.com/davvvead"><i class="fa fa-github big-font ml-2 py-1" aria-hidden="true"></i></a>
                        <i class="fa fa-youtube-play big-font ml-2 py-1" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="nav-mobile-toggle ml-auto flex">
                    <i class="fa fa-bars big-font"></i>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Start -->
        <div class="mobile-nav px-1 hide">
            <div class="close flex">
                <i class="fa fa-close ml-auto hide big-font"></i>
            </div>
            <div class="flex">
                <ul class="nav-links">
                    <h1 class="big-font font-blue mb-2">BaseCSS</h1>
                    <li class="main-category mb-1 fw-thick font font-underline">Installation</li>
                    <li class="sub-category mb-1"><a href="#npm">NPM</a></li>
                    <li class="main-category mb-1 fw-thick font font-underline">Utilities</li>
                    <li class="sub-category mb-1"><a href="#fonts">Fonts</a></li>
                    <li class="main-category mb-1 fw-thick font font-underline">Components</li>
                    <li class="sub-category mb-1"><a href="#form">Form</a></li>
                </ul>
            </div>
            <div class="flex social-icons">
                <a href="https://github.com/davvvead"><i class="fa fa-github big-font ml-2" aria-hidden="true"></i></a>
                <i class="fa fa-youtube-play big-font ml-2" aria-hidden="true"></i>
            </div>
        </div>
        <!-- Mobile Navigation End -->

    </nav>
    <!-- Nav End -->

    <!-- Main Body -->
    <section id="main">
        <!-- Back To Top Button -->
        <button title="btt" type="button" class="btt"><a href="" class="font-white"><i class="fa fa-arrow-up"></i></a></button>
        <!-- Container Start -->
        <div class="container border-l-thin border-r-thin flex">
            <!-- Side Nav Start -->
            <div class="sidenav sticky h-screen h-100p w-20p p-2 border-l-none border-t-none border-b-thin border-r-none border-thin">
                <ul>
                    <li class="main-category mb-1 fw-thick font font-underline">Installation</li>
                    <li class="sub-category mb-1"><a href="#npm">NPM</a></li>
                    <li class="main-category mb-1 fw-thick font font-underline">Utilities</li>
                    <li class="sub-category mb-1"><a href="#fonts">Fonts</a></li>
                    <li class="main-category mb-1 fw-thick font font-underline">Components</li>
                    <li class="sub-category mb-1"><a href="#form">Form</a></li>
                </ul>
            </div>
            <!-- Side Nav End -->
            
            <!-- Main Content Start -->
            <div class="main-content p-2 w-100p border-l-thin">

                 <!-- Getting Started Section -->
                 <section id="utilities" class="w-100p">
                    <div class="section-heading mb-2">
                        <h1 class="main-heading fw-thick mb-1 font-blue">Installation</h1>
                    </div>

                    <!-- Font Section Start -->
                    <div id="npm" class="sub-section-heading mb-2">
                        <h2 class="small-heading fw-thick mb-1">NPM</h2>
                    </div>
                    <div class="sub-section mb-2">
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">NPM</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    npm i davvead-basecss
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <div id="link" class="sub-section-heading mb-2">
                        <h2 class="small-heading fw-thick mb-1">Link</h2>
                    </div>
                    <div class="sub-section mb-4">
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">link </span><span class="class">rel</span><span>=</span><span class="class-name">"stylesheet"</span><span class="class"> href</span><span>=</span><span class="class-name" style="word-wrap: break-word;">"https://static.staticsave.com/basecss/style.css"</span><span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                 </section>

            </div>
        </div>
        <!-- Container End -->
    </section>
    <!-- Main Body -->

    <script src="<?=asset()?>js/script.js"></script>
</body>
</html>