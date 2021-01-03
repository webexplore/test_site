<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="vZN3f_5e491bCFBnt5OvH_IXFPausAtsBlrX-E2D0U4" />
    <meta name="keywords" content="<?php echo $keywords;?>">
    <meta name="description" content="<?php echo $description;?>">
   
    <title><?php echo $title;?></title>

    <?php if($canonical_url!=''){ ?>
    <link rel="canonical" href="<?php echo $canonical_url;?>" />
    <?php }?>

    <!-- Global site tag (gtag.js) - Google Analytics old
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178876530-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-178876530-1');
    </script> -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
  
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M3KMTH30CZ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-M3KMTH30CZ');
    </script>


    <script type='application/ld+json'>
        {
        "@context": "http://www.schema.org",
        "@type": "WebSite",
        "name": "gangasagar.in",
        "alternateName": "gangasagar.in",
        "url": "https://www.gangasagar.in/"
        }
    </script>


    <link rel="icon" href="<?php echo base_url(); ?>assets/web/images/favicon.ico" type="image/x-icon" />
    <link href="<?php echo base_url(); ?>assets/common/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/common/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/common/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/common/css/reset.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/common/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/common/fonts/fonts.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/common/css/lightbox.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/web/css/web.css?v=1.2" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/web/css/responsive.css?v=1.2" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet"> 

    
  
    <!-- <link href="<?php echo base_url(); ?>assets/web/css/web.min.css" rel="stylesheet" /> -->
    <style>
    .dropdown-submenu {
  position: relative !important;
}

.dropdown-submenu a::after {
  transform: rotate(-90deg) !important;
  position: absolute !important;
  right: 6px !important;
  top: 27px !important;
}

.dropdown-submenu .dropdown-menu {
  top: 0 !important;
  left: 100% !important;
  margin-left: .1rem !important;
  margin-right: .1rem !important;
}
.select2-container {  
    width: 100% !important;
}
    </style>
</head>

<body>
<section >
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!-- <iframe width="100%" height="400vh" src="" frameborder="0" allowfullscreen ></iframe> -->
                    <div id="videoFrame"></div>
                </div>
            </div>
            </div>
        </div>
    </section> 

   <header id="main-header">
        <input type="hidden" name="basepath" id="basepath" value="<?php echo base_url().$lang."/home"; ?>">
        <input type="hidden" name="commonpath" id="commonpath" value="<?php echo base_url()."template/"; ?>">
        <div id="topheader">
            <div class="container-fluid">

            <ul class="toplive-link">
                    <li><span> <a href="<?php echo base_url().$language; ?>/home" class="top-home"><i class="fa fa-home" aria-hidden="true"></i></a></span></li>
                
                    <li>
                        <img src="<?php echo base_url()?>assets/web/images/gangasagar_live_FINAL.png" class="playicon gangasagarvideo blink-image livegangasagar-img" data-video="https://www.youtube.com/embed/b036Fy1aabo?rel=0&autoplay=1&loop=1&playlist=b036Fy1aabo" data-toggle="modal" data-target="#videoModal" />
                    </li>
                    <!-- <li>
                        <a href="javascript:;" alt="E-snan" data-toggle="modal" data-target="#esnanModalCenter" class="esnan">e-snan</a>
                    </li> -->

                    <!-- <li style="background:url('/gangasagar/assets/web/images/gt.png')">
                        <div class="livetext" >
                            <img src="<?php echo base_url()?>assets/web/images/gangasagar_live.png" style="height: 25px;" class="playicon gangasagarvideo" data-video="https://www.youtube.com/embed/r9TVLg7RNTA?rel=0&autoplay=1&loop=1&playlist=r9TVLg7RNTA" data-toggle="modal" data-target="#videoModal" />
                            Gangasagar Live 
                        </div>
                    </li> -->
            </ul>


                <ul class="top-right-links">
                    <li class="nodisplay">Screen Reader</li>
                    <li><a href="javascript:void(0);"  class="increase">A+</a></li>
                    <li><a href="javascript:void(0);"  class="reset">A</a></li>
                    <li><a href="javascript:void(0);"  class="decrease">A-</a></li>
                    <!-- <li><i class="fa fa-language" aria-hidden="true"></i></li> -->
                    <li class ="<?php if($language=="en") echo "activelang"; ?>"><a href="<?php echo base_url()?>">English</a></li>
                    <li class ="<?php if($language=="hi") echo "activelang"; ?>"><a href="<?php echo base_url()?>hi/home">हिंदी</a></li>
                    <li class ="<?php if($language=="bn") echo "activelang"; ?>"><a href="<?php echo base_url()?>bn/home"> বাংলা </a></li>
                    <li>&nbsp;</li>

                    
                    <li class="social" title="Facebook">
                        <!-- <a href="https://www.facebook.com/GSMELA2020/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> </a> -->
                        <!-- <a href="https://www.facebook.com/GSMELA2020/" target="_blank"><img src="<?php echo base_url() ?>/assets/web/images/fb.png" /></a> -->
                        <a href="https://www.facebook.com/GSMELA2021/?modal=admin_todo_tour" target="_blank"><img src="<?php echo base_url() ?>/assets/web/images/fb.png" /></a>
                        <!-- <a href="https://www.facebook.com/GSMELA2020/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> </a> -->
                    </li>
                    <li class="social" title="Instagram">
                        <!-- <a href="https://www.instagram.com/gangasagar2020/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> </a> -->
                        <!-- <a href="https://www.instagram.com/gangasagar2020/" target="_blank"><img src="<?php echo base_url() ?>/assets/web/images/instagram.png" /></a> -->
                        <a href="https://www.instagram.com/gangasagar2021/" target="_blank"><img src="<?php echo base_url() ?>/assets/web/images/instagram.png" /></a>
                    </li>

                    <li class="social" title="Twitter">
                        <a href="https://twitter.com/gangasagar2021" target="_blank"><img src="<?php echo base_url() ?>/assets/web/images/twitter.png" /></a>
                    </li>

                    <li class="social" title="Youtube">
                        <a href="https://www.youtube.com/channel/UCbw0aKZTDyn0U6EfZJC4mqQ" target="_blank"><img src="<?php echo base_url() ?>/assets/web/images/ytb.png" /></a>
                    </li>
                   
                    <!-- <li>
                        <select>
                            <option value="en">English</option>
                            <option value="hi">हिदी</option>
                            <option value="bn">বাংলা</option>
                        </select>
                    </li> -->
                </ul>
            </div>
        </div><!-- end of topheader -->

        <div id="mainmenu">
            <nav class="navbar navbar-icon-top navbar-expand-lg">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primarymenu" aria-controls="primarymenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-align-left" aria-hidden="true"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="primarymenu">
                        <?php
                        //    if(isset($menus['FirstLevelMenuData'])){
                        //         echo $menus['FirstLevelMenuData']->menu_name;
                        //    }

                        //    echo "<pre>";
                        //    print_r($menus['FirstLevelMenuData']);
                        //    echo "</pre>";
                        ?>

                    <ul class="navbar-nav mr-auto ">


                    <?php
                        foreach ($menus as $first_level) {
                            
                            if( count($first_level['secondLevelMenu'])>0 ){ ?>
                              <li class="nav-item dropdown <?php echo $first_level['FirstLevelMenuData']->classnames; ?>">
                              <img src="<?php echo base_url(); ?>assets/web/images/menu/<?php echo $first_level['FirstLevelMenuData']->menu_icon; ?>" class="menuimg-icon" />
                              <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $first_level['FirstLevelMenuData']->menu_name; ?></a>
                              <ul class="dropdown-menu">

                              <?php
                                foreach($first_level['secondLevelMenu'] as $second_level) {

                                  if(count($second_level['thirdLevelMenu']) > 0) {



                                    echo '<li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> '.$second_level['secondLevelMenuData']->menu_name.'</a>';

                                    echo '<ul class="dropdown-menu">';
                                        foreach ($second_level['thirdLevelMenu'] as $third_level_menu) {

                                            $sub_sub_menu_url = $third_level_menu['thirdLevelMenuData']->url_slug;
                                            if($sub_sub_menu_url == "#" || $sub_sub_menu_url == null) {
                                                $sub_sub_menu_redirect_url = "javascript:void(0)";
                                            
                                            }
                                            else{
                                                $sub_sub_menu_redirect_url = base_url().$third_level_menu['thirdLevelMenuData']->url_slug;
                                            }

                                          echo '<li class="thirdlevel"><a class="dropdown-item" href="'.$sub_sub_menu_redirect_url.'"><i class="fa fa-angle-double-right" aria-hidden="true"></i>'. $third_level_menu['thirdLevelMenuData']->menu_name .'</a></li>';
                                        }
                                    echo '</ul>
                                         </li>';
                                  }
                                  else {


                                    
                                    $submenu_url = $second_level['secondLevelMenuData']->url_slug;
                                    if($submenu_url == "#" || $submenu_url == null) {
                                        $submenu_redirect_url = "javascript:void(0)";
                                    
                                    }
                                    else{
                                        $submenu_redirect_url = base_url().$second_level['secondLevelMenuData']->url_slug;
                                    }


                                      echo ' <li class="thirdlevel">
                                      <a class="dropdown-item" href="'.$submenu_redirect_url.'"><i class="fa fa-angle-double-right" aria-hidden="true"></i> '.$second_level['secondLevelMenuData']->menu_name .'  </a></li>';
                                  }
                                



                                }

                            echo "</ul></li>";


                            }
                            else { 
                                $menu_url = $first_level['FirstLevelMenuData']->url_slug;
                                if($menu_url == "#" || $menu_url == null) {$menu_redirect_url = "javascript:void(0)";}
                                else{$menu_redirect_url = base_url().$first_level['FirstLevelMenuData']->url_slug;}
                                
                                ?>
                                <li class="nav-item dropdown <?php echo $first_level['FirstLevelMenuData']->classnames; ?>">
                                <img src="<?php echo base_url(); ?>assets/web/images/menu/<?php echo $first_level['FirstLevelMenuData']->menu_icon; ?>" class="menuimg-icon" />
                                <a class="nav-link " href="<?php echo $menu_redirect_url; ?>" >
                                    <?php echo $first_level['FirstLevelMenuData']->menu_name;?>
                                </a>
                                   
    
                            </li>   
                        <?php
                            }

                        }
                    ?>
                            

                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gangasagar
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Gangasagar</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Link 1</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Link 2</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Gangasagar 2020</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Link 3</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Link 4</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item " href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Gangasagar Q</a>
                                       
                                    </li>

                                </ul>

                        </li> 

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gangasagar
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item " href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Gangasagar Q</a>
                                       
                                    </li>

                                </ul>

                        </li> 


                        <li class="nav-item dropdown">
                            <a class="nav-link " href="http://example.com" >
                                Gangasagar
                            </a>
                               

                        </li> 

                        <li class="nav-item dropdown">
                            <a class="nav-link " href="http://example.com" >
                                Gangasagar
                            </a>
                               

                        </li>  -->



                          
                         <!-- <?php // Commented on 09-Dec-2019
                           foreach($menus as $web_menu){
                               $secondlevelcount = sizeof($web_menu['secondLevelMenu']);

                               if($secondlevelcount > 0) {

                                    
                        ?>
                                <li class="nav-item <?php echo $web_menu['FirstLevelMenuData']->classnames; ?> dropdown">

                                   <img src="<?php echo base_url(); ?>assets/web/images/menu/<?php echo $web_menu['FirstLevelMenuData']->menu_icon; ?>" class="menuimg-icon" />

                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo strtoupper($web_menu['FirstLevelMenuData']->menu_name); ?></a>

                                  


                                    <ul class="dropdown-menu">
                                        <?php foreach($web_menu['secondLevelMenu'] as $websubmenu) {

                                            
                                            if(sizeof($websubmenu['thirdLevelMenu']) > 0) { ?>
                                                
                                                <a class="dropdown-item dropdown-toggle" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Gangasagar</a>

                                                <li class="dropdown-submenu">
                                                <ul class="dropdown-menu">
                                                <?php
                                                foreach($websubmenu['thirdLevelMenu'] as $thirdlevel) {  
                                                
                                               
                                     



                                                    $thirdlevelmenu_url = $thirdlevel['thirdLevelMenuData']->url_slug;
                                                    if($thirdlevelmenu_url == "#" || $thirdlevelmenu_url == null) {
                                                        $thirdlevelmenu_url_redirect = "javascript:void(0)";
                                                    
                                                    }
                                                    else{
                                                        $thirdlevelmenu_url_redirect = base_url().$thirdlevel['thirdLevelMenuData']->url_slug;
                                                    }

                                                    ?>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Link 3</a></li>
                                                 
                                            <?php
                                                }
                                                echo "</ul></li>";


                                            }
                                            else {
                                             
                                           

                                            $submenu_url = $websubmenu['secondLevelMenuData']->url_slug;
                                            if($submenu_url == "#" || $submenu_url == null) {
                                                $submenu_redirect_url = "javascript:void(0)";
                                            
                                            }
                                            else{
                                                $submenu_redirect_url = base_url().$websubmenu['secondLevelMenuData']->url_slug;
                                            }

                                            ?>
                                            <li class="dropdown-submenu">
                                               
                                                <a class="dropdown-item " href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Gangasagar Q</a>
                                            </li>
                                        <?php }} ?>
                                        
                                        </ul>
                                </li>
                        <?php
                               }
                               else{ 
                                   
                                $menu_url = $web_menu['FirstLevelMenuData']->url_slug;
                                if($menu_url == "#" || $menu_url == null) {$menu_redirect_url = "javascript:void(0)";}
                                else{$menu_redirect_url = base_url().$web_menu['FirstLevelMenuData']->url_slug;}
                                   
                                   ?>
                            <li class="nav-item <?php echo $web_menu['FirstLevelMenuData']->classnames; ?> dropdown">
                                <img src="<?php echo base_url(); ?>assets/web/images/menu/<?php echo $web_menu['FirstLevelMenuData']->menu_icon; ?>" class="menuimg-icon" />
                                <a class="nav-link" href="<?php echo $menu_redirect_url; ?>"><?php echo strtoupper($web_menu['FirstLevelMenuData']->menu_name); ?></a>
                            </li>
                        <?php }} ?>
                         -->


                        


                        <!-- <li class="nav-item pmmenu-link1bg">
                            <i class="fa fa-home menuicon pmmenu-lightcolor"></i>
                            <a class="nav-link pmmenu-lightcolor" href="#">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item pmmenu-link2bg pmmenu-lightcolor dropdown">
                            <i class="fa fa-envira menuicon pmmenu-lightcolor"></i>
                            <a class="nav-link pmmenu-lightcolor dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT GANGASAGAR</a>
                           
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Introduction</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Mythological Significance</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Astrological Significance</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Social Significance</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Rituals of Gangasagar</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Past Gangasagar Mela</a>
                                
                            </div>
                        </li>
                        
                        <li class="nav-item pmmenu-link3bg">
                            <p class="menuicon pmmenu-lightcolor">2020</p>
                            <a class="nav-link pmmenu-lightcolor dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GANGASAGAR</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Bathing Dates</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Do's & Don'ts</a>
                            </div>
                        </li>
                        <li class="nav-item pmmenu-link4bg">
                            <i class="fa fa-camera menuicon pmmenu-lightcolor"></i>    
                            <a class="nav-link pmmenu-lightcolor" href="#">GALLERY</a>
                        </li>
                        <li class="nav-item pmmenu-link5bg">
                            <i class="fa fa-user menuicon"></i>    
                            <a class="nav-link pmmenu-darkcolor" href="#">CITIZEN CORNER</a>
                        </li>
                        <li class="nav-item pmmenu-link6bg">
                            <i class="fa fa-users menuicon"></i>
                            <a class="nav-link pmmenu-darkcolor dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VISITOR SERVICES</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Prevention of fire hazards</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Medical Facilities</a>
                            </div>


                        </li>
                        <li class="nav-item pmmenu-link7bg">
                            <i class="fa fa-map-marker menuicon"></i>
                            <a class="nav-link pmmenu-darkcolor dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WHERE TO STAY</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> How to reach</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Where to stay</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Weather</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Places to Visit</a>
                            </div>
                        </li>
                        <li class="nav-item pmmenu-link8bg">
                            <i class="fa fa-handshake-o menuicon"></i>
                            <a class="nav-link pmmenu-darkcolor" href="#">CONTACT</a>
                        </li> -->
                        
                    </ul>
                </div>
            </nav>


        </div><!-- end of mainmenu -->




        
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li class="dropdown-submenu">
            <a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Submenu action</a></li>
              <li><a class="dropdown-item" href="#">Another submenu action</a></li>


              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
              </li>



            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav> -->










       

   </header><!-- End of Header -->

        
        <div id="mainbody-container">
            <?php
            if(isset($view_file))
            { 
              $this->load->view($lang.'/'.$view_file);
            }
            ?>
        </div> <!-- End of Main Content -->

        <div class="maps-link">
	    <img class="navigatemap desktopview"  src="<?php echo base_url()?>assets/web/images/htoreach_<?php echo $lang;?>.png" alt="Google Map"/>
	    <img class="map mobileview" onclick="mapsSelector()" src="<?php echo base_url()?>assets/web/images/htoreach_<?php echo $lang;?>.png" alt="Google Map" />
        </div> 
    

    <div class="esnan">
        <!-- <img src="<?php echo base_url()?>assets/web/images/esnan.png"  alt="E-snan" data-toggle="modal" data-target="#esnanModalCenter"> -->
        <a href="<?php echo base_url(); ?>en/esnan" target="_blank">
            <img src="<?php echo base_url()?>assets/web/images/esnan.png"  alt="E-snan" class="blink-image" >
        </a>
    </div>

    <div class="esnan2">
        <!-- <img src="<?php echo base_url()?>assets/web/images/esnan.png"  alt="E-snan" data-toggle="modal" data-target="#esnanModalCenter"> -->
        <a href="<?php echo base_url(); ?>en/esnan" target="_blank">
            <img src="<?php echo base_url()?>assets/web/images/esnan.png"  alt="E-snan" class="blink-image" >
        </a>
    </div>


    <div class="esnan-reqform">
    <div class="modal fade" id="esnanModalCenter" tabindex="-1" role="dialog" aria-labelledby="esnanModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" style="background:url('<?php echo base_url(); ?>assets/web/images/DSC_3528-copy.jpg');background-size:cover;background-repeat: no-repeat;background-position: center 34%;box-shadow: -1px 6px 8px 0px #1e0f04;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-center esnanleftblock">
                        <img src="<?php echo base_url()?>assets/web/images/esnan.png" class="" alt="E-snan" >
                        <p><span class="font-weight-bold">E-SNAN,</span> first of its kind of initiative by the administration, wherein people can take bath with Ganga Jal at their convenience while watching <span class="font-weight-bold">'LIVE Gangasagar'</span> via GS website & take the feel of <span style="padding-left: 3px;" class="font-weight-bold">'SAHI SNAN'</span></p>
                        <br>
                        <p>A <span class="font-weight-bold">'TIRTHA SAMAGRI PACK'</span> has been introduced, which consists of a <span class="font-weight-bold"> Ganga Jal container, Prasad</span> & <span class="font-weight-bold">Holy Tika</span> which can be <span class="font-weight-bold">booked through the website,</span> only delivery charge is applicable.</p>

                    </div>

                <div class="col-md-6 col-sm-12 esnanFormblock">
                <div class="modal-body">

                    <form id="esnanForm" action="#" method="post"> 
                      
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mobileno">Mobile</label>
                                <input type="text" class="form-control" placeholder="" name="mobileno" id="mobileno" maxlength="10" onkeyup="numericFilter(this);" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="qty">Qty. (Max 3)</label>
                                <input type="text" class="form-control" placeholder=""  name="qty" id="qty" value="1" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                          <textarea cols="30" rows="2" style="max-height:80px;" class="form-control" name="address" id="address" ></textarea>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" name="city" id="city" />
                            </div>
                            <div class="form-group col-md-6">
                            <label for="pincode">Pincode</label><br>
                            <!-- <input type="text" class="form-control" name="pincode" id="pincode" maxlength="10" /> -->
                            <select  data-live-search="true" class="form-control select2" name="pincode" id="pincode">
                                <?php foreach ($pincode as $pin) {?>
                                    <option value="<?php echo $pin->id; ?>"><?php echo $pin->pin ; ?></option>
                              <?php } ?>
                            </select>
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="state">State</label>
                            <select class="form-control" name="state" id="state"  >
                                <option selected>West Bengal</option>
                            </select>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="declaration" name="declaration">
                        <label class="form-check-label declaration-label " for="declaration" style="font-weight:500;">
                        I hereby declare that the information given in this application is true and correct to the best of my knowledge and belief. In case any information given in this application proves to be false or incorrect, the authority will take no responsibility. Also I acknowledge to pay a sum of Rs. 250 as delivery & packaging charge per Package.<br>
                        I understand that completing the application process does not guarantee providing the item (Tirtha Samagri Pack) I request from the Administration, Gangasagar 2020
                        </label>
                        </div>

                        <div class="terms-condition form-group">
                            <details>
                                <summary>Terms & Conditions</summary>
                                <ul>
                                    <li>One can order maximum of 3 'Samagri Packs'</li>
                                    <li>Only the Residents of Kolkata can place their order.</li>
                                    <li>Delivery & Packaging Charge of Rs. 250/- applicable per package.</li>
                                    <li>The administration has the sole authority to cancel the order or any given terms</li>
                                </ul>
                               
                            </details>
                        </div>

                        <div class="form-group">
                          <p id="error" class="ferror"></p>
                        </div>

                        <div class="form-group text-right">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" style="background:#b7b4b4;"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
                            <button type="submit" class="btn btn-primary btn-sm" id="btnbooking">Book Now <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            <button class="btn btn-primary btn-sm buttonload" id="btnloader" style="display:none;"> Loading <i class="fa fa-spinner fa-spin"></i></button>
                        </div>
                    </form>
                  
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div> -->
                </div>



                
        </div>




            </div>
        </div>
    </div>
</div>


<!-- Success Modal -->
<!-- Modal HTML -->

<div id="bookingStatusModal" class="modal fade">
	<div class="modal-dialog modal-confirm  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
                    <i id="book-symbol" class="fa fa-check" aria-hidden="true"></i>
                </div>				
				<h4 class="modal-title" id="booking-status"></h4>	
			</div>
			<div class="modal-body">
				<p class="text-center" id="booking-msg"></p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" id="btnStatus" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div> 


<!-- End of Success Modal --->

    <!-- Preface Modal -->

    <div class="modal fade" id="prefaceModal" tabindex="-1" role="dialog" aria-labelledby="prefaceModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body page-content content-area ">
        <div class="row">
          <div class="col-md-12 text-center">
              <img src="/assets/web/images/preface_img.png" style="width:15%;" alt="" />
              <h3>PREFACE</h3>
              <h4 class="font-weight-bold font-italic">"Learned not to burn-  </h4> 
              <h4 class="font-weight-bold font-italic">CULTIVATE FIRE SAFETY AWARENESS" </h4> <br>
          </div>
        </div>
        <div class="row mt-10">
          <div class="col-md-12">
              <p class="content-text">
              Fire has been an asset to the human for thousands of years. The ability to effectively manage and manipulate fire has led to many great life enhancements such as heating, cooking, smoke, signalling etc. however, it can become extremely dangerous and damaging to people, information and environment when it isn’t managed carefully preparedness is the most important aspect to ensure fire and life safety in the event of a fire in a premises and the nearby surroundings is a top priority.
              </p>
              <p class="content-text">
              Gangasagar Mela is one of the biggest event organised every year in the banks of Bay of Bengal, at Sagar islands West Bengal. Lakhs of pilgrims from all over the country gathered at Sagar Island in the month of January for holy dip in Ganga sagar on the day of Makar Sankranti is considered most auspicious for hindus and as Poush Sankranti which is also termed as Uttarayan Sankranti from ancient time and uttran kaal is the best time to begin good work in our country. </p>
              <p class="content-text">
              The West Bengal Fire & Emergency Services will arrange all the necessary fire and life safety measures covering the holy mela ground and in the transit points to avert any fire occurrence years after years for a safe  Ganga Sagar Mela. </p>
              <p class="content-text">
              It is an immense achievement for an organisation that last year Gangas Sagar Mela was successfully covered by the brigade and the entire mela was free from fire incident. To maintain services on top, our aim and motto will be to ensure a fire free Ganga Sagar Mela- 2021. </p>
              <p class="content-text">
              For us fire awareness campaigning is an essential priority than fire fighting, because when someone been educated how to eliminate the risk of fire and understands Fire is a friend not foe, the occurrence of fire simultaneously reduced. It’s been a long conventional practice of this service to engage our officers and staffs in the field of fire awareness in every Gangasagar Mela which is the biggest even of this district. But we have felt difficulties in such an enormous gathering and the entire island becomes congested to suggest not using open flames near the pilgrim sheds. It’s our earnest request to the Mela authority to arrange community kitchen built by tin in place of individual kitchen, which surely reduces the chances of Fire incidents. Considerable fire gap shall be maintained in between temporary structure and the darma sheds shall be treated with fire retardant solution and FRLS cables shall be used for electrical wiring, these precautions will surely reduce the chances of fire. </p>
              <p class="content-text">
              Finally, the W.B. Fire & Emergency Services will arrange all necessary fire and life safety arrangements by deployment of Fire Engines with modern equipments and gears together with fire awareness campaign and continuous patrolling by newly introduced Enfield Bullet with back pack extinguishers  as far as possible to secure this Gangasagar Mela free from any fire incident and contribute toward making the Sagar island a congenial place of voyage for the pilgrims and all other concern with the co-operation of other Govt. department and N.G.O’s.. </p>

              <h4 class="font-weight-bold font-italic">Fire Brigade save Life and Property</h4> 
              <h4 class="font-weight-bold font-italic">Deserve your Co-Operation </h4> <br>

              <p class="content-text">With Warm Regards,	
              </p>

          </div>

         

        </div>    
        
        <div class="row">
          <div class="col-md-8"></div>
          <div class="col-md-4 text-center">
              <p class="content-text">Sanat Kumar Mondal</p>
              <p class="content-text">Dy. Director (EZ)</p>
              <p class="content-text">Addl. Charge of Divisional Fire Officer</p>
              <p class="content-text">South 24 Parganas Division</p>
              <p class="content-text">West Bengal Fire & Emergency Services</p>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
    <!-- Preface Modal -->




<div class="tollfreeblock">
    <span> Toll Free No. 1800 345 2021</span>
</div>

<?php 
$footer_header = unserialize (FOOTER_LINK_HEADER);
$footer_link = unserialize (FOOTER_LINK);
?>
<footer class="footer">
    <div class="custom-container bottom_border">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h5 class="heading"><a href="<?php echo base_url().$lang."/home";?>" style="color: #FFF;"><?php echo $footer_header[$lang]['first_block']; ?></a></h5>
               
                <p class="ptext"><?php echo $footer_link[$lang]['link1']; ?></p>
                <p><i class="fa fa-location-arrow"></i> <?php echo $footer_link[$lang]['link2']; ?> </p>
                <!-- <p><i class="fa fa-phone"></i> +91-9999999999 </p> -->
                <p><i class="fa fa fa-envelope"></i> dm-ali@nic.in </p>

            </div>

            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="heading"><?php echo $footer_header[$lang]['second_block']; ?></h5>
              
                <ul class="footer-block resizable">
                    <li><a href="<?php echo base_url().$lang."/about/introduction"; ?>"><?php echo $footer_link[$lang]['link4']; ?></a></li>
                    <li><a href="<?php echo base_url().$lang."/about/mythologicalsignificance"; ?>"><?php echo $footer_link[$lang]['link5']; ?></a></li>
                    <li><a href="<?php if($lang=="en"){echo base_url().$lang."/about/astrologicalsignificance"; }else{ echo "javascript:void(0)"; } ?>"><?php echo $footer_link[$lang]['link6']; ?></a></li>
                    <li><a href="<?php if($lang=="en"){echo base_url().$lang."/about/pastgangasagarmela"; }else{ echo "javascript:void(0)"; } ?>"><?php echo $footer_link[$lang]['link7']; ?></a></li>
                </ul>
            
            </div>

            <div class=" col-sm-4 col-md  col-6 col">
                <h5 class="heading">&nbsp;</h5>
               
                <ul class="footer-block resizable">
                    <li><a href="<?php if($lang=="en"){echo base_url().$lang."/location/howtoreach"; }else{ echo "javascript:void(0)"; } ?>"><?php echo $footer_link[$lang]['link8']; ?></a></li>
                    <li><a href="<?php if($lang=="en"){echo base_url().$lang."/visitorservices/wheretostay"; }else{ echo "javascript:void(0)"; } ?>"><?php echo $footer_link[$lang]['link9']; ?></a></li>
                    <li><a href="<?php if($lang=="en"){echo base_url().$lang."/location/weather"; }else{ echo "javascript:void(0)"; } ?> "><?php echo $footer_link[$lang]['link10']; ?></a></li>
                    <li><a href="<?php if($lang=="en"){echo base_url().$lang."/location/placestovisit"; }else{ echo "javascript:void(0)"; } ?>"><?php echo $footer_link[$lang]['link11']; ?></a></li>
                </ul>
               
            </div>

            <div class=" col-sm-4 col-md  col-12 col">
                <h5 class="heading"><?php echo $footer_header[$lang]['third_block']; ?></h5>
         

                <ul class="important-info resizable">
                    <li>
                        <p><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $footer_link[$lang]['link12']; ?>  </p>
                    </li>
                    <li>
                        <p><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $footer_link[$lang]['link13']; ?> </p>
                    </li>
                    <li>
                        <p><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $footer_link[$lang]['link14']; ?> </p>
                    </li>
                    
                </ul>

                <div class="footersocial">
             
               
                <ul>
                    <li>Follow Us on</li>
                    <li>
                        <!-- <a href="https://www.facebook.com/GSMELA2020/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a> -->
                        <a href="https://www.facebook.com/GSMELA2021/?modal=admin_todo_tour" target="_blank"><i class="fa fa-facebook-f"></i> Facebook</a>
                    </li>
                    <li>
                        <!-- <a href="https://www.instagram.com/gangasagar2020/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a> -->
                        <a href="https://www.instagram.com/gangasagar2021/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                    </li>

                    <li>
                        <!-- <a href="https://www.instagram.com/gangasagar2020/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a> -->
                        <a href="https://twitter.com/gangasagar2021" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCbw0aKZTDyn0U6EfZJC4mqQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</a>
                    </li>
                </ul>
            </div>
               
              
            </div>
           


        </div>
    </div>

    <div class="container resizable footer-copy-site" style="">
        <ul class="text-center list-inline">
            <li class="list-inline-item"><a href="<?php echo base_url().$lang."/home/site_map"; ?>">Site Map</a> | </li>
            <li class="list-inline-item">Copyright @2019</li>
        </ul>
        <!-- <p class="text-center">Copyright @2019</p> -->
    </div>

    

</footer>

<!-- End of Footer -->


    <script src="<?php echo base_url(); ?>assets/common/js/jquery.min.js"></script>    
    <script src="<?php echo base_url(); ?>assets/common/js/bootstrap/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/common/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/common/js/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/common/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/common/js/lightbox.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/common/js/marquee.js"></script> -->

    <!-- 01122020 -->

    <script src="<?php echo base_url(); ?>assets/common/js/mdb.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/common/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/common/js/bootstrap/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/web/js/custom.js"></script>
 
    <script>

        // $(window).load(function() {
        //     alert("window load occurred!");
        // });
            

        $(document).ready(function(){
            $('.selectpicker').selectpicker();
           /*
            var theModal = $(".gangasagarvideo").data("target"),
            videoSRC = $(".gangasagarvideo").attr("data-video");
           // videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
           // var vidsr = "https://www.youtube.com/embed/b036Fy1aabo?rel=0&autoplay=1&loop=1&playlist=b036Fy1aabo"
           //    videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
            var iframehtm = "<iframe width='100%' height='400vh' src='https://www.youtube.com/embed/eQkaB1zFI6A' frameborder='0' allowfullscreen ></iframe>";
           

            $('#videoModal').modal('show');
            $("#videoFrame").html(iframehtm);
			*/



            $('.select2').select2();

            $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
  }
  var $subMenu = $(this).next('.dropdown-menu');
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass('show');
  });


  return false;
});

$(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox({
            alwaysShowClose: false,
            showArrows:true,
            wrapping:true
        });
});



$('#logo-crousal').owlCarousel({
    
    loop:true,
    margin:60,
    //nav:true,
    autoWidth:true,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
          

           // $('.simple-marquee-container').SimpleMarquee();

            var isMobile = false;
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                 isMobile = true; 
                 $(".mobileview").css("display","block");
                 $(".desktopview").css("display","none");
            }
            else {
                $(".mobileview").css("display","none");
                $(".desktopview").css("display","block");
                isMobile = false; 
            }

            $("#owl-home-crousal").owlCarousel({
            center: true,
            loop: true,
            nav: true,
            items: 3,
            navText: ['<img src="<?php echo base_url(); ?>assets/web/images/leftarrow.png" />', '<img src="<?php echo base_url(); ?>assets/web/images/rightarrow.png" />'],
              
            onInitialized: coverFlowEfx,
            onTranslate: coverFlowEfx,
            touchDrag  : false,
            mouseDrag  : false,
            smartSpeed : 500,
            slideTransition: 'linear',
            responsive: {
                0: {
                  items: 1,
                  touchDrag  : true,
                  mouseDrag  : true,
                },
                854: {
                  items: 1,
                  touchDrag  : true,
                  mouseDrag  : true,
                },
                855: {
                  items: 3,
                  touchDrag  : false,
                  mouseDrag  : false,
                },
                991: {
                  items: 3,
                  touchDrag  : false,
                  mouseDrag  : false,
                }
                
              },
            
           
           
        });


        var $videocrousal = $("#video-crousal");
        $videocrousal.children().each(function(index) {
            $(this).attr("data-position", index); 
        });
        $videocrousal.owlCarousel({
            center: true,
            loop: true,
            items: 3,
            touchDrag  : false,
            mouseDrag  : false,
            smartSpeed : 800,
            slideTransition: 'linear',
            responsive: {
                0: {
                  items: 1,
                  touchDrag  : true,
                  mouseDrag  : true,
                },
                680: {
                  items: 1,
                  navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                  touchDrag  : true,
                  mouseDrag  : true,
                },
                681: {
                  items: 3,
                  touchDrag  : false,
                  mouseDrag  : false,
                },
                991: {
                  items: 3,
                  touchDrag  : false,
                  mouseDrag  : false,
                }
                
              },
            
            
            
        });
        $(document).on("click", "#video-crousal .owl-item>div", function() {
            $videocrousal.trigger("to.owl.carousel", $(this).data("position"));
        });


        var $servicecrousal = $("#service-crousal");
        $servicecrousal.children().each(function(index) {
            $(this).attr("data-position", index); 
        });
        $servicecrousal.owlCarousel({
            center: true,
            loop: true,
            items: 3,
            touchDrag  : false,
            mouseDrag  : false,
            smartSpeed : 800,
            slideTransition: 'linear',
            responsive: {
                0: {
                  items: 1,
                  touchDrag  : true,
                  mouseDrag  : true,
                },
                680: {
                  items: 1,
                  navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                  touchDrag  : true,
                  mouseDrag  : true,
                },
                681: {
                  items: 3,
                  touchDrag  : false,
                  mouseDrag  : false,
                },
                991: {
                  items: 3,
                  touchDrag  : false,
                  mouseDrag  : false,
                }
                
              },
            onInitialized: coverFlowEfxService,
            onTranslate: coverFlowEfxService,
        });
        $(document).on("click", "#service-crousal .owl-item>div", function() {
            $servicecrousal.trigger("to.owl.carousel", $(this).data("position"));
        });
        
        
        $(document).on('click','.gangasagarvideo',function(){
            var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-video"),
            videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
            //var iframehtm = "<iframe width='100%' height='400vh' src='"+videoSRCauto+"' frameborder='0' allowfullscreen ></iframe>";
            var iframehtm = "<iframe width='100%' height='400vh' src='https://www.youtube.com/embed/eQkaB1zFI6A' frameborder='0' allowfullscreen ></iframe>";
            <?php /*
            // $(theModal + ' iframe').attr('src', videoSRCauto);
            // $(theModal + ' button.close').click(function () {
            //     $(theModal + ' iframe').attr('src', videoSRC);
            // });
            */ ?>
              
            $("#videoFrame").html(iframehtm);

        });

        $(document).on('click','.videogallery_item',function(){
            var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-video"),
            videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
            var iframehtm = "<iframe width='100%' height='400vh' src='"+videoSRCauto+"' frameborder='0' allowfullscreen ></iframe>";
            //var iframehtm = "<iframe width='100%' height='400vh' src='https://www.youtube.com/embed/eQkaB1zFI6A' frameborder='0' allowfullscreen ></iframe>";
            <?php /*
            // $(theModal + ' iframe').attr('src', videoSRCauto);
            // $(theModal + ' button.close').click(function () {
            //     $(theModal + ' iframe').attr('src', videoSRC);
            // });
            */ ?>
              
            $("#videoFrame").html(iframehtm);

        });



    /*
        var resize = new Array('p', 'h1', 'h2' , 'h3' , 'h4' , 'h5' , '.resizable' , 'ul.resizable > li > a');
        resize = resize.join(',');
        $(".reset").click(function() {
            var resetFont = $(resize).css('font-size');
            $('p', 'h1', 'h2' , 'h3' , 'h4' , 'h5' , '.resizable' , 'ul.resizable > li > a').css('font-size', '12px');
        });
        var increaseFontClick = 0;
        var decreaseFontClick = 0;
        $(".increase").click(function() {
            increaseFontClick++;
            decreaseFontClick = 0;
            if(increaseFontClick<4){
                var originalFontSize = $(resize).css('font-size');
                var originalFontNumber = parseFloat(originalFontSize, 10);
                var newFontSize = originalFontNumber * 1.2;
                $(resize).css('font-size', newFontSize);
            }
            return false;
        });
        $(".decrease").click(function() {
            decreaseFontClick++;
            increaseFontClick = 0;
            if(decreaseFontClick<4){
                var originalFontSize = $(resize).css('font-size');
                var originalFontNumber = parseFloat(originalFontSize, 10);
                var newFontSize = originalFontNumber * 0.6;
                $(resize).css('font-size', newFontSize);
            }
            return false;

        });
    */
        






        var $affectedElements = $("p,ul.resizable > li > a,h1,h2,h3,h4,h5,h6,ul.resizable"); 

        // Storing the original size in a data attribute so size can be reset
        $affectedElements.each( function(){
            var $this = $(this);
            $this.data("orig-size", $this.css("font-size") );
        });

        $(".increase").click(function(){
         changeFontSize($affectedElements,1);
        })

        $(".decrease").click(function(){
         changeFontSize($affectedElements,-1);
        })

        $(".reset").click(function(){
            $affectedElements.each( function(){
                    var $this = $(this);
                    $this.css( "font-size" , $this.data("orig-size") );
            });
        })




 

        $(document).on("click", ".navigatemap", function() {
                navigator.geolocation.getCurrentPosition(
                function(location) {

                navigator.permissions && navigator.permissions.query({name: 'geolocation'}).then(function(PermissionStatus) {
                if(PermissionStatus.state == 'granted'){} else{}
                console.log(location);
                var mapurl ="";
                 mapurl+= 'https://www.google.com/maps/dir/?api=1&origin=';
                 mapurl+= location.coords.latitude;
                 mapurl+= ',';
                 mapurl+= location.coords.longitude;
               //  mapurl+= '&destination=21.637645,88.075174';
                 mapurl+= '&destination=Kapil Muni Temple,Gangasagar, Gangasagar, West Bengal';
          
                 window.open(mapurl,'_blank');
                 });
            },
            function (e){},
            {
                enableHighAccuracy: true 
            }
            
            ); 
         



        });


        $("#esnanForm").on("submit", function(event){
            event.preventDefault();

            if(validateEsnan()) {
            $("#btnbooking").hide();
            $("#btnloader").show();

            var basepath = $("#basepath").val();
            $.ajax({
                type: "POST",
                url: basepath + '/bookEsnan',
                dataType: "json",
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                data: $(this).serialize(),
                success: function (result) {
				
                    if(result.STATUS == "SUCCESS") {
                        $("#esnanForm")[0].reset();
                        $('#esnanModalCenter').modal('hide');
                        // $("#booking-status").text(result.STATUS);
                        $("#booking-msg").text(result.MSG);
                        $("#book-symbol").attr("class","fa fa-check")
                        $(".icon-box").css("background","#82ce34")
                        $("#btnStatus").css("background","#82ce34")
                        $('#bookingStatusModal').modal('show');
                    }
                    else if(result.STATUS == "FAILED") {
                        // $("#booking-status").text(result.STATUS);
                        $("#booking-msg").text(result.MSG);
                        $("#book-symbol").attr("class","fa fa-times")
                        $(".icon-box").css("background","#dd3e1a")
                        $("#btnStatus").css("background","#dd3e1a")
                        $('#bookingStatusModal').modal('show');
                    }
                    else {
                        $("#error").text(result.MSG);
                    }

                    $("#btnbooking").show();
                    $("#btnloader").hide();
				
			}, 
			error: function (jqXHR, exception) {
              var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                alert(msg);  
            }
			});
            }


        });

        
        // Add minus icon for collapse element which is open by default
        $(".bs-accordionEx .collapse.show").each(function(){
                    $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
                });
                
                // Toggle plus minus icon on show hide of collapse element
                $(".bs-accordionEx .collapse").on('show.bs.collapse', function(){
                    $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
                }).on('hide.bs.collapse', function(){
                    $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
                });

            

                /**
                    01122020 --
                 */
                document.getElementById('show-element').onclick = function() {
                var element = document.getElementById('to-show');
                if (element.className === 'hide') {
                    element.className = 'show';
                    document.getElementsByTagName('body')[0].className = 'on';
                    document.getElementById('show-element').className = 'active';
                } else {
                    element.className = 'hide';
                    document.getElementsByTagName('body')[0].className = 'off';
                    document.getElementById('show-element').className = '';
                }
                }


                // $(document).on("keyup","#qty",function(){
                //     var qty = parseFloat($("#qty").val());
                //     var rate = parseFloat($("#rate").val());
                //     var amount = qty*rate;
                //     $("#amount").val(amount);
                // });






      });


      function mapsSelector() {
        if((navigator.platform.indexOf("iPhone") != -1) || 
            (navigator.platform.indexOf("iPod") != -1) || 
            (navigator.platform.indexOf("iPad") != -1)) {

        }
        else {
            var lat = 21.637645;
            var lng = 88.075174;
           // window.open('http://maps.google.com?daddr=' + lat + ',' + lng + '&amp;ll=');
            window.open('http://maps.google.com?daddr=Kapil Muni Temple,Gangasagar, Gangasagar, West Bengal&amp;ll=');
        }
           
         

}
        
        
        function changeFontSize($affectedElements,direction){
            $affectedElements.each( function(){
                var $this = $(this);
               // console.log(parseInt($this.css("font-size"))+direction);
                $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
            });
        }


      


function coverFlowEfx(e) {
  if ($("#owl-home-crousal .owl-dots")) {
    $("#owl-home-crousal .owl-dots").remove();
  }
  idx = e.item.index;
  $("#owl-home-crousal .owl-item.big").removeClass("big");
  $("#owl-home-crousal .owl-item.medium").removeClass("medium");
  $("#owl-home-crousal .owl-item.mdright").removeClass("mdright");
  $("#owl-home-crousal .owl-item.mdleft").removeClass("mdleft");
  $("#owl-home-crousal .owl-item.smallRight").removeClass("smallRight");
  $("#owl-home-crousal .owl-item.smallLeft").removeClass("smallLeft");
  $("#owl-home-crousal .owl-item")
    .eq(idx - 1)
    .addClass("medium mdleft");
  $("#owl-home-crousal .owl-item")
    .eq(idx)
    .addClass("big");
  $("#owl-home-crousal .owl-item")
    .eq(idx + 1)
    .addClass("medium mdright");
  $("#owl-home-crousal .owl-item")
    .eq(idx + 2)
    .addClass("smallRight");
  $("#owl-home-crousal .owl-item")
    .eq(idx - 2)
    .addClass("smallLeft");
}




function coverFlowEfxService(e) {
  if ($("#service-crousal .owl-dots")) {
     $("#service-crousal .owl-dots").remove();
  }
  idx = e.item.index;
  $("#service-crousal .owl-item.big").removeClass("big");
  $("#service-crousal .owl-item.medium").removeClass("medium");
  $("#service-crousal .owl-item.mdright").removeClass("mdright");
  $("#service-crousal .owl-item.mdleft").removeClass("mdleft");
  $("#service-crousal .owl-item.smallRight").removeClass("smallRight");
  $("#service-crousal .owl-item.smallLeft").removeClass("smallLeft");
  $("#service-crousal .owl-item")
    .eq(idx - 1)
    .addClass("medium mdleft");
  $("#service-crousal .owl-item")
    .eq(idx)
    .addClass("big");
  $("#service-crousal .owl-item")
    .eq(idx + 1)
    .addClass("medium mdright");
  $("#service-crousal .owl-item")
    .eq(idx + 2)
    .addClass("smallRight");
  $("#service-crousal .owl-item")
    .eq(idx - 2)
    .addClass("smallLeft");
}


    function resizeText(multiplier) {
    if (document.body.style.fontSize == "") {
        document.body.style.fontSize = "1.0em";
    }
    document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
    }





    function validateEsnan(){
        $("#error").text("");
        var n = $("#name").val();
        var m = $("#mobileno").val();
        var q = $("#qty").val();
        var p = $("#pincode").val();
        var phone_valid = /^([0-9]{10})$/;
		// var pincode_valid = /^([0-9]{6})$/;

        if(n=="" || n== null) {
            $("#name").focus();
            $("#error").text("Error : Name is required");
            return false;
        }
        if(m == "" || m == null) {
            $("#mobileno").focus();
            $("#error").text("Error : Mobile no is required");
            return false;
        }
        if(phone_valid.test(m)==false){
            $("#mobileno").focus();
            $("#error").text("Error : Invalid mobile number");
			return false;
		}
        if(q > 3) {
            $("#qty").focus();
            $("#error").text("Error : Maximum allowed quantity is 3");
            return false;
        }
        if(p == "" || p == null) {
            $("#pincode").focus();
            $("#error").text("Error : Pincode is required");
            return false;
        }
        // if(pincode_valid.test(p)==false) {
        //     $("#pincode").focus();
		// 	$("#error").text("Error : Invalid pincode");
		// 	return false;
		// }
        
        if (!$("#declaration").is(":checked")) {
            $("#declaration").focus();
            $("#error").text("Error : Please tick declaration");
            return false;
        }


        return true;
    }


    function numericFilter(txb) {
        txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }	



    </script>
</body>
</html>