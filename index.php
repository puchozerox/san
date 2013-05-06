<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>
            <?php
            require "Template.php";
            $template = new Template();
            echo $template->mostrarTitulo();
            ?>
        </title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="nav">
            <h1 id="sitename"><a href="index.php"><?php  echo $template->mostrarTitulo();?></a></h1>
            <?php
                echo $template->mostrarMenuSuperior();
            ?>
        </div>
        <div id="wrap">
            <div id="header">
                <h2 id="desc">A free css template</h2>

            </div>
            <div id="topbar">
                <ul class="breadcrumb">
                    <li>You Are Here &raquo;</li>
                    <li>YourSiteName.com &raquo; <a href="index.html">Home</a>&raquo;</li>


                </ul>
                <div id="searchbar">
                    <form action="#" method="get">
                        <div>
                            <input name="keyword" type="text" class="keyword" value="test test test" />

                        </div>
                        <div>
                            <input type="image" src="images/searchbutton.jpg" name="search" />
                        </div>
                    </form>
                </div>
            </div>
            <div id="content">
                <div id="left">
                    <div class="post">
                        <h2><a href="#">About Template</a></h2>
                        <p>Black &amp; Blue CSS Website Template is released under the <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>. It is free to download, modify and/or use as you wish, as long as you retain the link back to RamblingSoul.com in the template/website. Permissions beyond the scope of this license may be available at <a  href="http://www.ramblingsoul.com">Ramblingsoul.com</a>.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mattis ipsum in nisl viverra quis tristique enim congue. Cras ipsum nibh, suscipit a vulputate vel, rutrum id justo. Etiam luctus ullamcorper justo nec sagittis. Maecenas at metus enim, vel imperdiet purus. Nulla ac consectetur urna. Nulla risus mi, sollicitudin et suscipit sit amet, feugiat id purus. Morbi ut neque vel tellus aliquam tempor ut a dui. Nulla facilisi. Vivamus malesuada lectus hendrerit arcu elementum commodo. Donec gravida orci libero, quis ultricies augue. Nullam faucibus mattis enim, in facilisis quam dignissim at. </p>
                        <div class="clear"></div>
                    </div>
                    <div class="columns">
                        <div class="col">
                            <h3>Nulla Nulla Quam</h3>
                            <img src="images/simg3.jpg" width="185" height="100" alt="image" />
                            <p>Nulla nulla quam, sagittis ac placerat sed, ultrices vel arcu. Phasellus faucibus lacus non eros fringilla quis consequat ante aliquet. Sed tempus est a mi iaculis eget pretium massa commodo. Etiam tempor diam vitae nunc aliquam quis pulvinar est placerat. </p>
                            <span class="txtbutton"><a href="#">Learn More</a></span>
                        </div>

                        <div class="col">
                            <h3>Nulla Nulla Quam</h3>
                            <img src="images/simg2.jpg" width="185" height="100" alt="image" />
                            <p>Nulla nulla quam, sagittis ac placerat sed, ultrices vel arcu. Phasellus faucibus lacus non eros fringilla quis consequat ante aliquet. Sed tempus est a mi iaculis eget pretium massa commodo. Etiam tempor diam vitae nunc aliquam quis pulvinar est placerat. </p>
                            <span class="txtbutton"><a href="#">Learn More</a></span>
                        </div>

                        <div class="col">
                            <h3>Nulla Nulla Quam</h3>
                            <img src="images/simg1.jpg" width="185" height="100" alt="image" />
                            <p>Nulla nulla quam, sagittis ac placerat sed, ultrices vel arcu. Phasellus faucibus lacus non eros fringilla quis consequat ante aliquet. Sed tempus est a mi iaculis eget pretium massa commodo. Etiam tempor diam vitae nunc aliquam quis pulvinar est placerat. </p>
                            <span class="txtbutton"><a href="#">Learn More</a></span>
                        </div>

                        <div class="clear"></div>
                        <div class="col">
                            <h3>Nulla Nulla Quam</h3>
                            <img src="images/simg2.jpg" width="185" height="100" alt="image" />
                            <p>Nulla nulla quam, sagittis ac placerat sed, ultrices vel arcu. Phasellus faucibus lacus non eros fringilla quis consequat ante aliquet. Sed tempus est a mi iaculis eget pretium massa commodo. Etiam tempor diam vitae nunc aliquam quis pulvinar est placerat. </p>
                            <span class="txtbutton"><a href="#">Learn More</a></span>
                        </div>
                        <div class="col">
                            <h3>Nulla Nulla Quam</h3>
                            <img src="images/simg1.jpg" width="185" height="100" alt="image" />
                            <p>Nulla nulla quam, sagittis ac placerat sed, ultrices vel arcu. Phasellus faucibus lacus non eros fringilla quis consequat ante aliquet. Sed tempus est a mi iaculis eget pretium massa commodo. Etiam tempor diam vitae nunc aliquam quis pulvinar est placerat. </p>
                            <span class="txtbutton"><a href="#">Learn More</a></span>
                        </div>
                        <div class="col">
                            <h3>Nulla Nulla Quam</h3>
                            <img src="images/simg1.jpg" width="185" height="100" alt="image" />
                            <p>Nulla nulla quam, sagittis ac placerat sed, ultrices vel arcu. Phasellus faucibus lacus non eros fringilla quis consequat ante aliquet. Sed tempus est a mi iaculis eget pretium massa commodo. Etiam tempor diam vitae nunc aliquam quis pulvinar est placerat. </p>
                            <span class="txtbutton"><a href="#">Learn More</a></span>
                        </div>
                        <div class="clear"></div>
                        <div class="col">
                            <h3>Nulla Nulla Quam</h3>
                            <img src="images/simg3.jpg" width="185" height="100" alt="image" />
                            <p>Nulla nulla quam, sagittis ac placerat sed, ultrices vel arcu. Phasellus faucibus lacus non eros fringilla quis consequat ante aliquet. Sed tempus est a mi iaculis eget pretium massa commodo. Etiam tempor diam vitae nunc aliquam quis pulvinar est placerat. </p>
                            <span class="txtbutton"><a href="#" title="Learn More">Learn More</a></span>
                        </div>
                        <div class="col">
                            <h3>Nulla Nulla Quam</h3>
                            <img src="images/simg2.jpg" width="185" height="100" alt="image" />
                            <p>Nulla nulla quam, sagittis ac placerat sed, ultrices vel arcu. Phasellus faucibus lacus non eros fringilla quis consequat ante aliquet. Sed tempus est a mi iaculis eget pretium massa commodo. Etiam tempor diam vitae nunc aliquam quis pulvinar est placerat. </p>
                            <span class="txtbutton"><a href="#">Learn More</a></span>
                        </div>
                        <div class="col">
                            <h3>Nulla Nulla Quam</h3>
                            <img src="images/simg1.jpg" width="185" height="100" alt="image" />
                            <p>Nulla nulla quam, sagittis ac placerat sed, ultrices vel arcu. Phasellus faucibus lacus non eros fringilla quis consequat ante aliquet. Sed tempus est a mi iaculis eget pretium massa commodo. Etiam tempor diam vitae nunc aliquam quis pulvinar est placerat. </p>
                            <span class="txtbutton"><a href="#">Learn More</a></span>
                        </div>
                        <div class="clear"></div>
                    </div>


                </div>
                <div id="sidebar">

                    <h2>Categories</h2>
                    <ul class="categories">
                        <li><a href="#">Computers</a></li>
                        <li><a href="#">Health &amp; Beauty</a></li>

                        <li><a href="#">Apple / Macintosh</a></li>
                        <li><a href="#">Microsoft</a></li>
                        <li><a href="#">World News </a></li>
                        <li><a href="#">Movies &amp; Entertainment</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Typography</a></li>


                    </ul>
                    <div class="block">
                        <div class="blocktop"></div>
                        <div class="blockmid">

                            <p class="ads"> <a href="#"><img src="images/ad1.jpg" width="125" height="125" alt="ad" /></a>
                                <a href="#"><img src="images/ad2.jpg" width="125" height="125" alt="ad" /></a>
                                <a href="#"><img src="images/ad4.jpg" width="125" height="125" alt="ad" /></a>
                                <a href="#"><img src="images/ad2.jpg" width="125" height="125" alt="ad" /></a> </p>
                            <div class="clear"></div>
                        </div>
                        <div class="blockfooter"></div>
                    </div>
                    <div class="block">
                        <div class="blocktop"></div>
                        <div class="blockmid">
                            <h2>Latest Articles</h2>
                            <ul class="posts">
                                <li><a href="#">Lorem Ipsum Dolar Sit Amet</a> <span>12/12/2009 | 12 Comments</span>
                                </li>
                                <li><a href="#">Nullam Nulla Quam, Sagittis</a> <span>12/12/2009 | 12 Comments</span>
                                </li>
                                <li><a href="#">Ultrices Vel Arcu Phasellus</a> <span>12/12/2009 | 12 Comments</span>
                                </li>
                                <li><a href="#">Phasellus Faucibus Lacus Non Eros</a> <span>12/12/2009 | 12 Comments</span>
                                </li>
                                <li><a href="#">Sed Tempus Est A Mi Iaculis</a> <span>12/12/2009 | 12 Comments</span>
                                </li>

                                <li><a href="#">Lorem Ipsum Dolar Sit Amet</a> <span>12/12/2009 | 12 Comments</span>
                                </li>
                                <li><a href="#">Nullam Nulla Quam, Sagittis</a> <span>12/12/2009 | 12 Comments</span>
                                </li>
                                <li><a href="#">Ultrices Vel Arcu Phasellus</a> <span>12/12/2009 | 12 Comments</span>
                                </li>
                                <li><a href="#">Phasellus Faucibus Lacus Non Eros</a> <span>12/12/2009 | 12 Comments</span>
                                </li>
                                <li><a href="#">Sed Tempus Est A Mi Iaculis</a> <span>12/12/2009 | 12 Comments</span>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="blockfooter"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="footerlinks">

                <ul id="footernav">
                    <li><a href="#">Home</a> &raquo;</li>
                    <li><a href="#">Blog</a> &raquo;</li>
                    <li><a href="#">Articles</a> &raquo;</li>
                    <li><a href="#">Contact</a> &raquo;</li>

                </ul>
            </div>
            <div id="bottom">


                <p>Copyright Information Goes Here | 2009 - 2010 | Your Website Name</p>

                <!-- Removing this link back to Ramblingsoul.com will be violation of the Creative Commons Attribution 3.0 Unported License, under which this template is released for download -->
                <a href="http://ramblingsoul.com" title="Download High Quality CSS Layouts">CSS Layout</a> by RamblingSoul.com
                <!-- Copyright - Ramblingsoul.com -->

            </div>
        </div>
    </body>
</html>