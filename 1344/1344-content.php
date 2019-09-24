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
                <!--menu-->
                        <div class="Filters " data-parent="olumn-filters">
                            <ul>
                                
                                <li ><a data-toggle="tab" href="#a">General Settings</a></li>
                                <li ><a data-toggle="tab" href="#b">Global Layout</a></li>
                                <li ><a data-toggle="tab" href="#c">Global Style</a></li>
                                <li ><a data-toggle="tab" href="#d">Global Typography</a></li>
                                <li ><a data-toggle="tab" href="#e">Top Bar & Header</a></li>
                                <li ><a data-toggle="tab" href="#f">Body</a></li>
                                <li ><a data-toggle="tab" href="#g">Shooter & Subfooter</a></li>
                                <li ><a data-toggle="tab" href="#h">Site Identiy, Product Archives</a></li>
                                <li ><a data-toggle="tab" href="#i">Menu, Widget, Static Front Page</a></li>
                            </ul>
                        </div>
                <!--..-->
                <div class="container">
                        <div class="portfolio_wrapper">
                            <div class="tab-content">
                                
                                <div id="a" class="tab-pane fade in active">
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageA.png" alt=""/>
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageA.png" alt=""/>
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageA.png" alt=""/>
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageA.png" alt=""/>
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageA.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="b" class="tab-pane "style="background: white;" >
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/content.jpg" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div id="c" class="tab-pane" style="background: white;">
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageC.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div id="d" class="tab-pane"    style="background: white;">
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageD.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="e" class="tab-pane">
                                    <div class="all">

                                    <div><h1 style="padding-bottom: 10px"> Top Bar</h1></div>
                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageE.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div id="f" class="tab-pane">
                                    <div class="all">

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageF.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="g" class="tab-pane">
                                    <div class="all">

                                    <div><h1 style="padding-bottom: 10px"> Footer</h1></div>

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageG.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="h" class="tab-pane">
                                    <div class="all">

                                    <div><h1 style="padding-bottom: 10px">Site Identity</h1></div>

                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageH.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="i" class="tab-pane">
                                    <div class="all">

                                    <div><h1 style="padding-bottom: 10px"> Menus</h1></div>
                                        <div>
                                            <div class="image">
                                                <img class="img-reponsive" src="<?php echo $url_path ?>/image/imageI.png" alt=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                 </div>        
            </div>
        
     </div>



