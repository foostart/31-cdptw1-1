<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1343">


    <div class="header-top">

        <span class="my_overplay" onclick="closeNav()"></span>
        <div class="container flexbox">
            <div class="navi-logo">
                <a class="a-logo" href="#">Délicious</a>
            </div>
            <div id="mySidenav" class="my_menu ">

                <ul>
                    <li class=" x-close"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                    <li class="fath-li"><a class="a-one" href="#">Home</a></li>
                    <li class="fath-li"><a class="a-one" href="#">About</a>
                        <ul class="sub-menu ">
                            <li class="li-two"><a href="#">Blog</a></li>
                            <li class="li-two"><a href="#" data-wpel-link="internal">SEO</a></li>
                            <li class="li-two"><a href="#">Features</a></li>
                        </ul>

                    </li>
                    <li class="fath-li"><a class="a-one" href="#">Menu</a>
                        <ul class="sub-menu ">
                            <li class="li-two"><a href="#">Blog</a></li>
                            <li class="li-two"><a href="#" data-wpel-link="internal">SEO</a></li>
                            <li class="li-two"><a href="#">Features</a></li>
                        </ul>
                    </li>
                    <li class="fath-li"><a class="a-one" href="#">Gallery</a>
                        <ul class="sub-menu ">
                            <li class="li-two"><a href="#">Blog</a></li>
                            <li class="li-two"><a href="#" data-wpel-link="internal">SEO</a></li>
                            <li class="li-two"><a href="#">Features</a></li>
                        </ul>
                    </li>
                    <li class="fath-li"><a class="a-one" href="#">Shop</a>
                        <ul class="sub-menu ">
                            <li class="li-two"><a href="#">Blog</a></li>
                            <li class="li-two"><a href="#" data-wpel-link="internal">SEO</a></li>
                            <li class="li-two"><a href="#">Features</a></li>
                        </ul>

                    </li>
                    <li class="fath-li"><a class="a-one" href="#">Contact</a>
                        <ul class="sub-menu ">
                            <li class="li-two"><a href="#">Blog</a></li>
                            <li class="li-two"><a href="#" data-wpel-link="internal">SEO</a></li>
                            <li class="li-two"><a href="#">Features</a></li>
                        </ul>

                    </li>
                </ul>
            </div>
            <div class="navi-cart">
                <div class="shop-cart">
                    <a href="#"><i class="fa fa-shopping-bag"></i></a>
                    <span>0</span>
                    <div class="list-cart">
                        <span>Không có sản phẩm nào trong giỏ của bạn.</span>
                    </div>
                </div>

                <input type="search" class="menu-search-text" placeholder="Please input search...">

                <div class="search">
                    <i class="fa fa-search icon-search"></i>

                </div>

                <div id="icon-responsive">
                    <i class="fa fa-bars" onclick="openNav()"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="header-banner">
        <div class="banner-text">
            <h2>Menu</h2>
            <hr>
            <p>Life tasted better width Délicous</p>
        </div>
    </div>

</div>