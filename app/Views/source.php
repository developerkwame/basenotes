<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=asset()?>css/style.css">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>BaseCSS</title>
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
                    <li class="sub-category mb-1"><a href="#link">Link</a></li>
                    <li class="main-category mb-1 fw-thick font font-underline">Utilities</li>
                    <li class="sub-category mb-1"><a href="#fonts">Fonts</a></li>
                    <li class="sub-category mb-1"><a href="#border">Border</a></li>
                    <li class="sub-category mb-1"><a href="#width">Width</a></li>
                    <li class="sub-category mb-1"><a href="#height">Height</a></li>
                    <li class="sub-category mb-1"><a href="#margin">Margin</a></li>
                    <li class="sub-category mb-1"><a href="#padding">Padding</a></li>
                    <li class="sub-category mb-1"><a href="#color">Color</a></li>
                    <li class="sub-category mb-1"><a href="#media">Media Query</a></li>
                    <li class="main-category mb-1 fw-thick font font-underline">Components</li>
                    <li class="sub-category mb-1"><a href="#form">Form</a></li>
                    <li class="sub-category mb-1"><a href="#table">Table</a></li>
                    <li class="sub-category mb-1"><a href="#alert">Alert</a></li>
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
                <!-- Utilities Section Start -->
                <section id="utilities" class="w-100p">
                    <div class="section-heading mb-2">
                        <h1 class="main-heading fw-thick mb-1 font-blue">Utilities</h1>
                    </div>

                    <!-- Font Section Start -->
                    <div id="fonts" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Fonts</h2>
                    </div>
                    <!-- Font Size -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Sizes</h3>
                        <div class="demo mb-1 p-1 w-100p">
                          <p class="tiny-font">.tiny-font</p>
                        </div>
                        <div class="demo mb-1 p-1 w-100p">
                            <p class="normal-font">.normal-font</p>
                        </div>
                        <div class="demo mb-1 p-1 w-100p">
                            <p class="big-font">.big-font</p>
                        </div>
                        <div class="demo mb-1 p-1 w-100p">
                            <h1 class="small-heading">.small-heading</h1>
                        </div>
                        <div class="demo mb-1 p-1 w-100p">
                            <h1 class="medium-heading">.medium-heading</h1>
                        </div>
                        <div class="demo mb-1 p-1 w-100p">
                            <h1 class="main-heading">.main-heading</h1>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"tiny-font"</span><span>></span><span>This is how to use a font sizing class.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Font Weight -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Weight</h3>
                        <div class="demo mb-1 p-1 w-100p">
                          <p class="fw-thin">.fw-thin</p>
                        </div>
                        <div class="demo mb-1 p-1 w-100p">
                            <p class="fw-normal">.fw-normal</p>
                        </div>
                        <div class="demo mb-1 p-1 w-100p">
                            <p class="fw-thick">.fw-thick</p>
                        </div>
                        <div class="demo p-1 w-100p">
                            <p class="fw-extra-thick">.fw-extra-thick</p>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"fw-extra-thick"</span><span>></span><span>This is how to use a font weight class.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Font Align -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Align</h3>
                        <div class="demo mb-1 p-1 w-100p">
                          <p class="font-left">.font-left</p>
                        </div>
                        <div class="demo mb-1 p-1 w-100p">
                            <p class="font-center">.font-center</p>
                        </div>
                        <div class="demo mb-1 p-1 w-100p">
                            <p class="font-right">.font-right</p>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"font-left"</span><span>></span><span>This is how to use a font align
                                         class.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Font Section End -->

                    <!-- Border Start -->
                    <div id="border" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Border</h2>
                    </div>
                    <!-- Border-Width -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Width</h3>
                        <div class="demo mb-1 p-1 border-none w-100p">
                            <p class="">.border-none</p>
                        </div>
                        <div class="demo mb-1 p-1 border-thin border-black w-100p">
                            <p class="">.border-thin</p>
                        </div>
                        <div class="demo mb-1 p-1 border-thick border-black w-100p">
                            <p class="">.border-thick</p>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"border-thin"</span><span>></span><span>This is how to use a 1px border-width class .</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Border-Width End-->
                    <!-- Border-Side -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Side</h3>
                        <div class="demo mb-1 p-1 border-black border-thin border-l-none w-100p">
                            <p class="">.border-l-none</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-l-thin w-100p">
                            <p class="">.border-l-thin</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-l-thick w-100p">
                            <p class="">.border-l-thick</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-thin border-r-none w-100p">
                            <p class="">.border-r-none</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-r-thin w-100p">
                            <p class="">.border-r-thin</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-r-thick w-100p">
                            <p class="">.border-r-thick</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-thin border-t-none w-100p">
                            <p class="">.border-t-none</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-t-thin w-100p">
                            <p class="">.border-t-thin</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-t-thick w-100p">
                            <p class="">.border-t-thick</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-thin border-b-none w-100p">
                            <p class="">.border-b-none</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-b-thin w-100p">
                            <p class="">.border-b-thin</p>
                        </div>
                        <div class="demo mb-1 p-1 border-black border-b-thick w-100p">
                            <p class="">.border-b-thick</p>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"border-l-thick"</span><span>></span><span>This is how to use a 2px border class on the left.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Border-Side End-->
                    <!-- Border End -->

                    <!-- Width Start -->
                    <div id="width" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Width</h2>
                    </div>
                    <!-- Width Percentage -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Percentage</h3>
                        <div class="demo mb-1 p-1 border-none w-100p">
                            <p class="">.w-100p</p>
                        </div>
                        <div class="demo mb-1 p-1 border-none w-90p">
                            <p class="">.w-90p</p>
                        </div>
                        <div class="demo mb-1 p-1 border-none w-80p">
                            <p class="">.w-80p</p>
                        </div>
                        <div class="demo mb-1 p-1 border-none w-70p">
                            <p class="">.w-70p</p>
                        </div>
                        <div class="demo mb-1 p-1 border-none w-60p">
                            <p class="">.w-60p</p>
                        </div>
                        <div class="demo mb-1 p-1 border-none w-50p">
                            <p class="">.w-50p</p>
                        </div>
                        <div class="demo mb-1 p-1 border-none w-40p">
                            <p class="">.w-40p</p>
                        </div>
                        <div class="demo mb-1 p-1 border-none w-30p">
                            <p class="">.w-30p</p>
                        </div>
                        <div class="demo mb-1 p-1 border-none w-20p">
                            <p class="">.w-20p</p>
                        </div>
                        <div class="demo mb-1 p-1 border-none w-10p">
                            <p class="">.w-10p</p>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"w-10p"</span><span>></span><span>This is how to use 10% width class.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Width Percentage End-->
                    <!-- Width Pixels -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Pixels</h3>
                        <div class="width-bar flex">
                            <div class="demo mb-1 p-1 border-none w-4"></div>
                            <p class="ml-2">.w-4</p>
                        </div>
                        <div class="width-bar flex">
                            <div class="demo mb-1 p-1 border-none w-3"></div>
                            <p class="ml-2">.w-3</p>
                        </div>
                        <div class="width-bar flex">
                            <div class="demo mb-1 p-1 border-none w-2"></div>
                            <p class="ml-2">.w-2</p>
                        </div>
                        <div class="width-bar flex">
                            <div class="demo mb-1 py-1  border-none w-1"></div>
                            <p class="ml-2">.w-1</p>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"w-1"</span><span>></span><span>This is how to use a 10px width class .</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Width Pixels End-->
                    <!-- Width End -->

                    <!-- Height Start -->
                    <div id="#height" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Height</h2>
                    </div>
                    <!-- Height Percentage -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Percentage</h3>
                        <div class="height-demo h-percent flex mb-1 border-none">
                            <div class="demo height-demo-child h-100p">
                                <p class="font-center mt-4">.h-100p</p>
                            </div>
                            <div class="demo height-demo-child h-90p">
                                <p class="font-center mt-4">.h-90p</p>
                            </div>
                            <div class="demo height-demo-child h-80p">
                                <p class="font-center mt-4">.h-80p</p>
                            </div>
                            <div class="demo height-demo-child h-70p">
                                <p class="font-center mt-4">.h-70p</p>
                            </div>
                            <div class="demo height-demo-child h-60p">
                                <p class="font-center mt-4">.h-60p</p>
                            </div>
                            <div class="demo height-demo-child h-50p">
                                <p class="font-center mt-4">.h-50p</p>
                            </div>
                            <div class="demo height-demo-child h-40p">
                                <p class="font-center mt-4">.h-40p</p>
                            </div>
                            <div class="demo height-demo-child h-30p">
                                <p class="font-center mt-4">.h-30p</p>
                            </div>
                            <div class="demo height-demo-child h-20p">
                                <p class="font-center mt-4">.h-20p</p>
                            </div>
                            <div class="demo height-demo-child h-10p">
                                <p class="font-center mt-2">.h-10p</p>
                            </div>
                        </div>
                        
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"h-40p"</span><span>></span><span>This is how to use 40% height class.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Height Percentage End-->
                    <!-- Height Pixels -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Pixels</h3>
                        <div class="flex height-pixels mb-1 border-none">
                            <div class="hp w-10p">
                                <p class="font-center mx-1">.h-4</p>
                                <div class="demo height-demo-child h-4 w-100p"></div>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">.h-3</p>
                                <div class="demo height-demo-child h-3 w-100p"></div>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">.h-2</p>
                                <div class="demo height-demo-child h-2 w-100p"></div>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">.h-1</p>
                                <div class="demo height-demo-child h-1 w-100p"></div>
                            </div>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"h-2"</span><span>></span><span>This is how to use 20px height class.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Height Pixels End-->
                    <!-- Height End -->

                    <!-- Margin Start -->
                    <div id="margin" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Margin</h2>
                    </div>
                    <!-- Margin Top -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Top</h3>
                        <div class="flex height-pixels mb-1 border-none margin-y">
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p mt-4 py-1">
                                    <p class="font-center mx-1">.mt-4</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p mt-3 py-1">
                                    <p class="font-center mx-1">.mt-3</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p mt-2 py-1">
                                    <p class="font-center mx-1">.mt-2</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p mt-1 py-1">
                                    <p class="font-center mx-1">.mt-1</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p mt-0 py-1">
                                    <p class="font-center mx-1">.mt-0</p>
                                </div>
                            </div>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"mt-2"</span><span>></span><span>This is how to use a margin-top class of 20px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Margin Right -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Right</h3>
                        <div class="width-bar flex">
                            <div class="demo mb-1 p-1 border-none ml-auto mr-4"><p>.mr-4</p></div>
                            <p class="py-1">&#8594</p> 
                        </div>
                        <div class="width-bar flex">
                            <div class="demo mb-1 p-1 border-none ml-auto mr-3"><p>.mr-3</p></div>
                            <p class="py-1">&#8594</p> 
                        </div>
                        <div class="width-bar flex">
                            <div class="demo mb-1 p-1 border-none ml-auto mr-2"><p>.mr-2</p></div>
                            <p class="py-1">&#8594</p> 
                        </div>
                        <div class="width-bar flex">
                            <div class="demo mb-1 p-1 border-none ml-auto mr-1"><p>.mr-1</p></div>
                            <p class="py-1">&#8594</p> 
                        </div>
                        <div class="width-bar flex">
                            <div class="demo mb-1 p-1 border-none ml-auto mr-0"><p>.mr-0</p></div>
                            <p class="py-1">&#8594</p> 
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"mr-3"</span><span>></span><span>This is how to use a margin-right class of 30px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Margin Bottom-->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Bottom</h3>
                        <div class="flex height-pixels mb-1 border-none margin-y">
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p mb-4 py-1">
                                    <p class="font-center mx-1">.mb-4</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p mb-3 py-1">
                                    <p class="font-center mx-1">.mb-3</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p mb-2 py-1">
                                    <p class="font-center mx-1">.mb-2</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p mb-1 py-1">
                                    <p class="font-center mx-1">.mb-1</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p mb-0 py-1">
                                    <p class="font-center mx-1">.mb-0</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"mb-4"</span><span>></span><span>This is how to use a margin-bottom class of 40px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Margin Left -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Left</h3>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1 border-none ml-4"><p>.ml-4</p></div> 
                        </div>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1 border-none ml-3"><p>.ml-3</p></div>
                        </div>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1 border-none ml-2"><p>.ml-2</p></div>
                        </div>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1  border-none ml-1"><p>.ml-1</p></div>
                        </div>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1  border-none ml-0"><p>.ml-0</p></div>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"ml-1"</span><span>></span><span>This is how to use a margin-left class of 10px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Margin y-axis -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Y-axis</h3>
                        <div class="flex height-pixels mb-1 border-none margin-y">
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p my-4 py-1">
                                    <p class="font-center mx-1">.my-4</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p my-3 py-1">
                                    <p class="font-center mx-1">.my-3</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p my-2 py-1">
                                    <p class="font-center mx-1">.my-2</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p my-1 py-1">
                                    <p class="font-center mx-1">.my-1</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                            <div class="hp w-10p">
                                <p class="font-center mx-1">&#8593</p>
                                <div class="demo height-demo-child w-100p my-0 py-1">
                                    <p class="font-center mx-1">.mb-0</p>
                                </div>
                                <p class="font-center mx-1">&#8595</p>
                            </div>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"my-2"</span><span>></span><span>This is how to use a margin class for both top and bottom of 20px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Margin x-axis -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">X-axis</h3>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1 border-none mx-4"><p class="">.mx-4</p></div>
                            <p class="py-1">&#8594</p>
                        </div>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1 border-none mx-3"><p class="">.mx-3</p></div>
                            <p class="py-1">&#8594</p>
                        </div>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1 border-none mx-2"><p class="">.mx-2</p></div>
                            <p class="py-1">&#8594</p>
                        </div>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1 border-none mx-1"><p class="">.mx-1</p></div>
                            <p class="py-1">&#8594</p>
                        </div>
                        <div class="width-bar flex">
                            <p class="py-1">&#8592</p>
                            <div class="demo mb-1 p-1 border-none mx-0"><p class="">.mx-0</p></div>
                            <p class="py-1">&#8594</p>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"mx-4"</span><span>></span><span>This is how to use a margin class for both left and right of 40px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Margin End -->

                    <!-- Padding Start -->
                    <div id="padding" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Padding</h2>
                    </div>
                    <!-- Padding Top -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Top</h3>
                        <div class="flex height-pixels mb-1 border-none margin-y">
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pt-4 pb-1">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.pt-4</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pt-3 pb-1">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.pt-3</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pt-2 pb-1">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.pt-2</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pt-1 pb-1">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.pt-1</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pt-0 pb-1">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.pt-0</p>
                                </div>
                            </div>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"pt-2"</span><span>></span><span>This is how to use a padding-top class of 20px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Padding Right -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Right</h3>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p class="pr-4">.pr-4</p>
                                <p>&#8594</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p class="pr-3">.pr-3</p>
                                <p>&#8594</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p class="pr-2">.pr-2</p>
                                <p>&#8594</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p class="pr-1">.pr-1</p>
                                <p>&#8594</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p class="pr-0">.pr-0</p>
                                <p>&#8594</p>
                            </div> 
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"pr-3"</span><span>></span><span>This is how to use a padding-right class of 30px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Padding Bottom -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Bottom</h3>
                        <div class="flex height-pixels mb-1 border-none margin-y">
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pb-4 pt-1">
                                    <p class="font-center mx-1">.pb-4</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pb-3 pt-1">
                                    <p class="font-center mx-1">.pb-3</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pb-2 pt-1">
                                    <p class="font-center mx-1">.pb-2</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pb-1 pt-1">
                                    <p class="font-center mx-1">.pb-1</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p pb-0 pt-1">
                                    <p class="font-center mx-1">.pb-0</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"pb-4"</span><span>></span><span>This is how to use a padding-bottom class of 40px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Padding Left -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Left</h3>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="pl-4">.pl-4</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="pl-3">.pl-3</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="pl-2">.pl-2</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="pl-1">.pl-1</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="pl-0">.pl-0</p>
                            </div> 
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"pl-0"</span><span>></span><span>This is how to use a padding-left class of 0.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Padding Y-axis -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Y-axis</h3>
                        <div class="flex height-pixels mb-1 border-none margin-y">
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p py-4">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.py-4</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p py-3">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.py-3</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p py-2">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.py-2</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p py-1">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.py-1</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                            <div class="hp w-10p">
                                <div class="demo height-demo-child w-100p py-0">
                                    <p class="font-center mx-1">&#8593</p>
                                    <p class="font-center mx-1">.py-0</p>
                                    <p class="font-center mx-1">&#8595</p>
                                </div>
                            </div>
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"py-1"</span><span>></span><span>This is how to use a padding class for both top and bottom of 10px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Padding X-axis -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">X-axis</h3>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="px-4">.px-4</p>
                                <p>&#8594</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="px-3">.px-3</p>
                                <p>&#8594</p>
                            </div>
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="px-2">.px-2</p>
                                <p>&#8594</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="px-1">.px-1</p>
                                <p>&#8594</p>
                            </div> 
                        </div>
                        <div class="width-bar flex">
                            <div class="flex demo mb-1 p-1 border-none">
                                <p>&#8592</p>
                                <p class="px-0">.px-0</p>
                                <p>&#8594</p>
                            </div> 
                        </div>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">p </span><span class="class">class</span><span>=</span><span class="class-name">"px-3"</span><span>></span><span>This is how to use a padding class for both left and right of 30px.</span><span><</span><span><span>/</span><span class="tag">p</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Padding End -->

                    <!-- Color Section Start -->
                    <div id="color" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Color</h2>
                    </div>
                    <!-- Font Color -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Font</h3>
                        <!-- Font Color Row -->
                        <div class="color-row flex height-pixels mb-2 border-none">
                            <div class="demo height-demo-child bg-black h-4 w-100p py-1">
                                <p class="font-center font-white mx-1">.font-white</p>
                            </div>
                            <div class="demo height-demo-child h-4 w-100p py-1">
                                <p class="font-center font-black mx-1">.font-black</p>
                            </div>
                            <div class="demo height-demo-child h-4 bg-black w-100p py-1">
                                <p class="font-center font-red mx-1">.font-red</p>
                            </div>
                            <div class="demo height-demo-child h-4 bg-black w-100p py-1">
                                <p class="font-center font-light-red mx-1">.font-light-red</p>
                            </div>
                            <div class="demo height-demo-child h-4 bg-black w-100p py-1">
                                <p class="font-center font-deep-red mx-1">.font-deep-red</p>
                            </div>
                            <div class="demo height-demo-child h-4 w-100p py-1">
                                <p class="font-center font-green mx-1">.font-green</p>
                            </div>
                            <div class="demo height-demo-child bg-black w-100p py-1">
                                <p class="font-center font-light-green">.font-light-green</p>
                            </div>
                            <div class="demo height-demo-child w-100p py-1">
                                <p class="font-center font-deep-green">.font-deep-green</p>
                            </div>
                            <div class="demo height-demo-child h-4 w-100p py-1">
                                <p class="font-center font-blue mx-1">.font-blue</p>
                            </div>
                            <div class="demo height-demo-child bg-black w-100p py-1">
                                <p class="font-center font-light-blue">.font-light-blue</p>
                            </div>
                            <div class="demo height-demo-child h-4 w-100p py-1">
                                <p class="font-deep-blue mx-1 font-center">.font-deep-blue</p>
                            </div>
                        </div>
                        <!-- Font Color Row -->

                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">h6 </span><span class="class">class</span><span>=</span><span class="class-name">"font-blue"</span><span>></span><span>This is how to use a font coloring class.</span><span><</span><span><span>/</span><span class="tag">h6</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>

                    <!-- Background Color -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Background</h3>
                        <!-- Background Color Row -->
                        <div class="color-row flex height-pixels mb-2 border-none">
                            <div class="demo height-demo-child bg-black h-4 w-100p py-1">
                                <p class="font-center font-white mx-1">.bg-black</p>
                            </div>
                            <div class="demo height-demo-child bg-white border-thin h-4 w-100p py-1">
                                <p class="font-center font-black mx-1">.bg-white</p>
                            </div>
                            <div class="demo height-demo-child h-4 bg-light-red w-100p py-1">
                                <p class="font-center font-black mx-1">.bg-light-red</p>
                            </div>
                            <div class="demo height-demo-child h-4 bg-deep-red w-100p py-1">
                                <p class="font-center font-white mx-1">.deep-red</p>
                            </div>
                            <div class="demo height-demo-child h-4 bg-light-green w-100p py-1">
                                <p class="font-center font-black mx-1">.bg-light-green</p>
                            </div>
                            <div class="demo height-demo-child h-4 bg-deep-green w-100p py-1">
                                <p class="font-center font-white mx-1">.deep-green</p>
                            </div>
                            <div class="demo height-demo-child h-4 bg-light-blue w-100p py-1">
                                <p class="font-center font-black mx-1">.bg-light-blue</p>
                            </div>
                            <div class="demo height-demo-child h-4 bg-deep-blue w-100p py-1">
                                <p class="font-center font-white mx-1">.deep-blue</p>
                            </div>
                        </div>
                        <!-- Background Color Row -->

                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"bg-black"</span><span>></span><span>This is how to use a background coloring class.</span><span><</span><span><span>/</span><span class="tag">div</span>></span>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>
                    <!-- Color Section End -->

                    <!-- Media Query Section Start -->
                    <div id="media" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Media Query</h2>
                    </div>
                    <!-- Font Color -->
                    <div class="sub-section mb-4">
                        <h3 class="big-font fw-thick mb-1">Breakpoints</h3>
                        <!-- Breakpoints Row -->
                        <div class="bp-row flex height-pixels mb-2 border-none">
                            <div class="demo height-demo-child bg-white border-thin h-4 w-30p py-1">
                                <p class="font-center font-black mx-1">Phones <= 480px</p>
                            </div>
                            <div class="demo height-demo-child bg-white border-thin h-4 w-30p py-1">
                                <p class="font-center font-black mx-1">Tablets < 900px</p>
                            </div>
                            <div class="demo height-demo-child bg-white border-thin h-4 w-30p py-1">
                                <p class="font-center font-black mx-1">Small Laptop  >= 1024px</p>
                            </div>

                            <div class="demo height-demo-child bg-white border-thin h-4 w-30p py-1">
                                <p class="font-center font-black mx-1">large Laptop  >= 1280px</p>
                            </div>
                            <div class="demo height-demo-child bg-white border-thin h-4 w-30p py-1">
                                <p class="font-center font-black mx-1">X-large Laptop  >= 1440px</p>
                            </div>
                            <div class="demo height-demo-child bg-white border-thin h-4 w-30p py-1">
                                <p class="font-center font-black mx-1">Monitor, TV  >= 1920px</p>
                            </div>
                        </div>
                        <!-- Breakpoints Row -->

                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">CSS</h1>
                            </div>
                            <div class="drk code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="code" data-lang="css">
                                    <span class="gry">@</span><span class="class">media </span><span class="bracket">(</span><span class="style-rule">max-width</span>: <span class="tag">480</span><span class="bracket">px</span><span class="tag"></span><span class="bracket">)</span><br>
                                    <span class="bracket">{</span><br>
                                    <span>&emsp;Media Query for Phones...</span><br>
                                    <span class="bracket">}</span>
                                </code>
                                <br>
                                <br>
                                <code class="code" data-lang="css">
                                    <span class="gry">@</span><span class="class">media </span><span class="bracket">(</span><span class="style-rule">max-width</span>: <span class="tag">900</span><span class="bracket">px</span><span class="tag"></span><span class="bracket">)</span><br>
                                    <span class="bracket">{</span><br>
                                    <span>&emsp;Media Query for Tablets...</span><br>
                                    <span class="bracket">}</span>
                                </code>
                                <br>
                                <br>
                                <code class="code" data-lang="css">
                                    <span class="gry">@</span><span class="class">media </span><span class="bracket">(</span><span class="style-rule">min-width</span>: <span class="tag">1024</span><span class="bracket">px</span><span class="tag"></span><span class="bracket">)</span><br>
                                    <span class="bracket">{</span><br>
                                    <span>&emsp;Media Query for Small Laptops...</span><br>
                                    <span class="bracket">}</span>
                                </code>
                                <br>
                                <br>
                                <code class="code" data-lang="css">
                                    <span class="gry">@</span><span class="class">media </span><span class="bracket">(</span><span class="style-rule">min-width</span>: <span class="tag">1280</span><span class="bracket">px</span><span class="tag"></span><span class="bracket">)</span><br>
                                    <span class="bracket">{</span><br>
                                    <span>&emsp;Media Query for Large Laptops...</span><br>
                                    <span class="bracket">}</span>
                                </code>
                                <br>
                                <br>
                                <code class="code" data-lang="css">
                                    <span class="gry">@</span><span class="class">media </span><span class="bracket">(</span><span class="style-rule">min-width</span>: <span class="tag">1440</span><span class="bracket">px</span><span class="tag"></span><span class="bracket">)</span><br>
                                    <span class="bracket">{</span><br>
                                    <span>&emsp;Media Query for Extra Large Laptops...</span><br>
                                    <span class="bracket">}</span>
                                </code>
                                <br>
                                <br>
                                <code class="code" data-lang="css">
                                    <span class="gry">@</span><span class="class">media </span><span class="bracket">(</span><span class="style-rule">min-width</span>: <span class="tag">1920</span><span class="bracket">px</span><span class="tag"></span><span class="bracket">)</span><br>
                                    <span class="bracket">{</span><br>
                                    <span>&emsp;Media Query for Monitors, TVs...</span><br>
                                    <span class="bracket">}</span>
                                </code>
                                <br>
                                <br>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>

                    <!-- Media Query Section End -->
                </section>
                <!-- Utilities Section End -->

                <!-- Utilities Section Start -->
                <section id="components" class="w-100p">
                    <div class="section-heading mb-2">
                        <h1 class="main-heading fw-thick mb-1 font-blue">Components</h1>
                    </div>
                    <!-- Form Component Section Start -->
                    <div id="form" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Form</h2>
                    </div>
                    <div class="component mb-4">
                        <form class="border-thin p-2">
                            <div class="form-container flex flex-row mb-2 space-between w-100p">
                                <div class="flex flex-col">
                                    <label for="" class="mb-1">Form component</label>
                                    <input type="text" placeholder="Example input">
                                </div>
                                <div class="flex flex-col">
                                    <label for="" class="mb-1">Name</label>
                                    <input type="text" placeholder="Enter your name">
                                </div>
                                <div class="flex flex-col">
                                    <label for="" class="mb-1">Telephone</label>
                                    <input type="text" placeholder="+233 55 847 4211">
                                </div>
                            </div>
                            <div class="flex">
                                <button class="mx-auto px-2">Submit</button>
                            </div>
                        </form>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">form </span><span class="class">class</span><span>=</span><span class="class-name">"border-thin p-2"</span><span>></span><br>
                                    &emsp;
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"flex flex-row mb-2 space-between"</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"flex flex-col mr-2"</span><span>></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">label </span><span class="class">class</span><span>=</span><span class="class-name">"mb-1"</span><span>></span>An example of a form component<span><</span><span class="tag">label</span><span>/></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">input </span><span class="class">type</span><span>=</span><span class="class-name">"text"</span><span class="class"> placeholder</span><span>=</span><span class="class-name">"Example input"</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">/div</span><span>></span><br>

                                    &emsp;&emsp;
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"flex flex-col mr-2"</span><span>></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">label </span><span class="class">class</span><span>=</span><span class="class-name">"mb-1"</span><span>></span>Name<span><</span><span class="tag">label</span><span>/></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">input </span><span class="class">type</span><span>=</span><span class="class-name">"text"</span><span class="class"> placeholder</span><span>=</span><span class="class-name">"Enter your name here"</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">/div</span><span>></span><br>

                                    &emsp;&emsp;
                                    <span><</span><span class="tag">div </span><span class="class">class</span><span>=</span><span class="class-name">"flex flex-col mr-2"</span><span>></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">label </span><span class="class">class</span><span>=</span><span class="class-name">"mb-1"</span><span>></span>Telephone<span><</span><span class="tag">label</span><span>/></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">input </span><span class="class">type</span><span>=</span><span class="class-name">"tel"</span><span class="class"> placeholder</span><span>=</span><span class="class-name">"+233 55 847 4211"</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">/div</span><span>></span><br>
                                    &emsp;
                                    <span><</span><span class="tag">/div</span><span>></span><br>
                                    <span><</span><span class="tag">/form</span><span>></span><br>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>

                    <!-- Table Component Normal -->
                    <div id="table" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Normal Table</h2>
                    </div>
                    <div class="component mb-4">
                        <table class="normal-table w-100p border-none box-shadow-sm">
                            <thead class="border-b-thin font-left bg-deep-blue font-white">
                                    <th>Male</th>
                                    <th>Female</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dave</td>
                                    <td>Davida</td>
                                </tr>
                                <tr>
                                    <td>Dave</td>
                                    <td>Davida</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">table </span><span class="class">class</span><span>=</span><span class="class-name">"striped w-100p border-none box-shadow-sm"</span><span>></span><br>
                                    &emsp;
                                    <span><</span><span class="tag">thead </span><span class="class">class</span><span>=</span><span class="class-name">"border-b-thin font-left bg-deep-blue font-white"</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">th</span>></span>Names<span><</span><span class="tag">/th</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">th</span>></span>Telephone Numbers<span><</span><span class="tag">/th</span><span>></span><br>
                                    &emsp;
                                    <span><</span><span class="tag">/thead</span><span>></span><br>

                                    &emsp;
                                    <span><</span><span class="tag">tbody</span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">tr</span>></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">td</span>></span>Dave<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;&emsp;

                                    <span><</span><span class="tag">td</span>></span>+233 55 847 4211<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">/tr</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">tr</span>></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">td</span>></span>Davida<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;&emsp;

                                    <span><</span><span class="tag">td</span>></span>+233 20 642 6465<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">/tr</span><span>></span><br>
                                    &emsp;
                                    <span><</span><span class="tag">/tbody</span><span>></span><br>
                                    <span><</span><span class="tag">/table</span><span>></span><br>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>

                    <!-- Table Component Striped -->
                    <div class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Striped Table</h2>
                    </div>
                    <div class="component mb-4">
                        <table class="striped w-100p border-none box-shadow-sm">
                            <thead class="border-b-thin font-left bg-deep-blue font-white">
                                    <th>Names</th>
                                    <th>Telephone Numbers</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dave</td>
                                    <td>+233 55 847 4211</td>
                                </tr>
                                <tr>
                                    <td>Davida</td>
                                    <td>+233 20 642 6465</td>
                                </tr>
                                <tr>
                                    <td>Davies</td>
                                    <td>+233 59 111 1234</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Code Example -->
                        <div class="code border-thin mt-2">
                            <div class="code-heading p-1 border-b-thin">
                                <h1 class="">HTML</h1>
                            </div>
                            <div class="code-text py-2 px-1">
                            <!-- <pre> -->
                                <code class="" data-lang="html">
                                    <span><</span><span class="tag">table </span><span class="class">class</span><span>=</span><span class="class-name">"striped w-100p border-none box-shadow-sm"</span><span>></span><br>
                                    &emsp;
                                    <span><</span><span class="tag">thead </span><span class="class">class</span><span>=</span><span class="class-name">"border-b-thin font-left bg-deep-blue font-white"</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">th</span>></span>Names<span><</span><span class="tag">/th</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">th</span>></span>Telephone Numbers<span><</span><span class="tag">/th</span><span>></span><br>
                                    &emsp;
                                    <span><</span><span class="tag">/thead</span><span>></span><br>

                                    &emsp;
                                    <span><</span><span class="tag">tbody</span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">tr</span>></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">td</span>></span>Dave<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;&emsp;

                                    <span><</span><span class="tag">td</span>></span>+233 55 847 4211<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">/tr</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">tr</span>></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">td</span>></span>Davida<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;&emsp;

                                    <span><</span><span class="tag">td</span>></span>+233 20 642 6465<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">/tr</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">tr</span>></span><br>
                                    &emsp;&emsp;&emsp;
                                    <span><</span><span class="tag">td</span>></span>Davies<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;&emsp;

                                    <span><</span><span class="tag">td</span>></span>+233 59 111 1234<span><</span><span class="tag">/td</span><span>></span><br>
                                    &emsp;&emsp;
                                    <span><</span><span class="tag">/tr</span><span>></span><br>
                                    &emsp;
                                    <span><</span><span class="tag">/tbody</span><span>></span><br>
                                    <span><</span><span class="tag">/table</span><span>></span><br>
                                </code>
                            <!-- </pre> -->
                            </div>
                        </div>
                    </div>

                    <!-- Alert Component Start -->
                    <div id="form" class="sub-section-heading mb-2 border-b-thin">
                        <h2 class="small-heading fw-thick mb-1">Alert</h2>
                    </div>
                    <div id="alert" class="component mb-4">
                    <!-- Alert Examples -->
                    <div class="alert hide bg-deep-green font-white">
                        You pressed the alert btn!
                    </div>
                    <button class="px-2 py-1" id="alert-btn">Press this button to show the alert</button>
                    <!-- Code Example -->
                    <div class="code border-thin mt-2">
                        <div class="code-heading p-1 border-b-thin">
                            <h1 class="">HTML</h1>
                        </div>
                        <div class="code-text py-2 px-1">
                        <!-- <pre> -->
                            <code class="" data-lang="html">
                                <span><</span><span class="tag">div </span><span class="class">id</span><span>=</span><span class="class-name">"alert"</span><span class="class"> class</span><span>=</span><span class="class-name">"bg-deep-green font-white"</span><span>></span><span><</span><span class="tag">/div</span><span>></span><br>
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