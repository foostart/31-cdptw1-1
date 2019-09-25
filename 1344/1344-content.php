<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-1344">
        <div class="container">
            <!--............-->
            <header class="themeoption">
                <h1>Theme Options</h1>  
                <hr>
            </header>  
            
        </div>
            <div class="product-menu">

 
                <!--..-->
                <div class="container">
                        <div class="padd-bottom">
                                <div class="swiper-container">

                                                    <div class="swiper-wrapper nav nav-tabs">
                                                    
                                                        <div class="swiper-slide" ><a data-toggle="tab" href="#a">General Settings</a></div>
                                                        <div class="swiper-slide"><a data-toggle="tab" href="#b"> Global Layout</a></div>
                                                        <div class="swiper-slide"><a data-toggle="tab" href="#c">Global Style</a></div>
                                                        <div class="swiper-slide"><a data-toggle="tab" href="#d">Global Typography</a></div>
                                                        <div class="swiper-slide"><a data-toggle="tab" href="#e">Top Bar & Header</a></div>
                                                        <div class="swiper-slide"><a data-toggle="tab" href="#h">Body Settings </a></div>
                                                        <div class="swiper-slide"><a data-toggle="tab" href="#g">Shooter & Subfooter</a></div>
                                                        <div class="swiper-slide"><a data-toggle="tab" href="#j">Site Identiy, Product Archives</a></div>
                                                        <div class="swiper-slide"><a data-toggle="tab" href="#k">Menu, Widget, Static Front Page</a></div>
                                                    

                                                    </div>

                                                     <div class="swiper-pagination"></div>


                                                    <div class="swiper-button-prev"></div>
                                                    <div class="swiper-button-next"></div>
                                 </div>
                        </div>
                        <div class="portfolio_wrapper">
                            <div class="tab-content">
                                
                                <div id="a" class="tab-pane fade in active">
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="./image/imageA.png" alt=""/>
                                                <img class="img-reponsive" src="./image/imageA.png" alt=""/>
                                                <img class="img-reponsive" src="./image/imageA.png" alt=""/>
                                                <img class="img-reponsive" src="./image/imageA.png" alt=""/>
                                                <img class="img-reponsive" src="./image/imageA.png" alt=""/>
                                            </div>./image
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="b" class="tab-pane" style="background: white;" >
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="./image/content.jpg" alt=""/>
                                            </div>
                                        </div>./image
                                    </div>
                                </div>
                            
                                <div id="c" class="tab-pane" style="background: white;">
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="./image/imageC.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div id="d" class="tab-pane"    style="background: white;">
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="./image/2.jpg" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="e" class="tab-pane">
                                    <div class="all">

                                    <div><h1 style="padding-bottom: 10px"> Top Bar</h1></div>
                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="./image/3.jpg" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div id="f" class="tab-pane">
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="./image/4.jpg" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="g" class="tab-pane">
                                    <div class="all">

                                    <div><h1 style="padding-bottom: 10px"> Footer</h1></div>

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="./image/imageG.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="h" class="tab-pane">
                                    <div class="all">

                                    <div><h1 style="padding-bottom: 10px">Site Identity</h1></div>

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="./image/imageH.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="i" class="tab-pane">
                                    <div class="all">

                                    <div><h1 style="padding-bottom: 10px"> Menus</h1></div>
                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="./image/imageI.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                 </div>        
                  </div>
        
    </div>



