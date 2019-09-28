<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-1346">

                     <div class="logo_respon">
                                            <a href="#">Délicious</a>
                    </div>     
                <div class="header-top">
                     <span class="my_overplay"  onclick="closeNav()"></span>  
                 
                    <div class="container flexbox">
                                   <div class="for_respon">

                                                     <div id="icon-left">
                                                            <i class="fa fa-bars bars_respon" onclick="openNav()"></i>
                                                        </div>
                                                        <div class="navi-logo">
                                                            <a href="#">Délicious</a>
                                                        </div>
                                     </div>
                                                    
                                     <div id="mySidenav" class="my_menu ">
                                        
                                        <ul class="defaultt">
                                                <li class=" x-close"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                                                <li class="fath-li"><a href="#">Home</a></li>
                                                <li class="fath-li"><a href="#">About</a>
                                                          <ul  class="sub-menu ">
                                                                <li><a href="#">Blog</a></li>
                                                                <li><a  href="#" data-wpel-link="internal">SEO</a></li>
                                                                <li><a href="#">Features</a></li>
                                                            </ul>

                                                </li>
                                                <li class="fath-li"><a href="#">Menu</a>
                                                        <ul  class="sub-menu ">
                                                                <li><a href="#">Blog</a></li>
                                                                <li><a  href="#" data-wpel-link="internal">SEO</a></li>
                                                                <li><a href="#">Features</a></li>
                                                            </ul>
                                                    </li>
                                                <li class="fath-li"><a href="#">Gallery</a>
                                                            <ul  class="sub-menu ">
                                                                <li><a href="#">Blog</a></li>
                                                                <li><a  href="#" data-wpel-link="internal">SEO</a></li>
                                                                <li><a href="#">Features</a></li>
                                                            </ul>
                                                </li>
                                                <li class="fath-li"><a href="#">Shop</a>
                                                            <ul  class="sub-menu ">
                                                                <li><a href="#">Blog</a></li>
                                                                <li><a  href="#" data-wpel-link="internal">SEO</a></li>
                                                                <li><a href="#">Features</a></li>
                                                            </ul>

                                                </li>
                                                <li class="fath-li"><a href="#">Contact</a>
                                                        <ul  class="sub-menu ">
                                                                <li><a href="#">Blog</a></li>
                                                                <li><a  href="#" data-wpel-link="internal">SEO</a></li>
                                                                <li><a href="#">Features</a></li>
                                                            </ul>

                                                    </li>
                                        </ul>
                                    </div>
                                        <div class="navi-cart">
                                        <div class="search">
                                                            <i class="fa fa-search icon-search"  ></i>
                                                            <form class="search-panel" method="post">
                                                                <input type="search" class="menu-search-text" placeholder="Please input search...">
                                                            </form>
                                                        </div>
                                            <div class="shop-cart">
                                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                                <span>0</span>
                                                        <div class="list-cart">
                                                            <span>Không có sản phẩm nào trong giỏ của bạn.</span>
                                                        </div>
                                        </div>
                                                
                                        </div>
                    </div>
                </div>
                <div class="header-banner">
                        <div class="banner-text">
                            <h2>Menu</h2>
                            <hr>
                            <p >Life tasted better width Délicous</p>
                        </div>
                </div>
        
        </div>
