<div class="body-content outer-top-bd">
    <div class="container">
        <div class="row">
            <div class="blog-page">

                <div class="col-md-9">

                    <div class="blog-post wow fadeInUp">
                        <img class="img-responsive" src="files/articulos/grandes/<?php echo $articulo->imagen?>" alt="regalos para profesionales de la salud">
                        <h1 class="fontFucsia"><?php echo $articulo->titulo?></h1>
                        <span class="date-time"><?php echo $articulo->created?></span>
                        <p><?php echo $articulo->fulltext?></p>
                    </div>
                </div>

                <div class="col-md-3 sidebar">
                    <div class="sidebar-module-container">
                        <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Últimos Artículos</div>      
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                       
                          <?php   
                          $active="active";
                               foreach($last_Articulos as $ultimo)
                              {
                             $link = $ultimo->id.'-'.$ultimo->url;
                             echo'<li class="dropdown menu">';
                                 echo'<a href="'.$link.'"><i class="icon fa fa-check fa-fw"></i>'.$ultimo->titulo.'</a>';
                            echo'</li>';
                            $active="";
                          }
                          ?>
                        
                        </ul>
                    </nav>
                </div>

                        
                        </div><!-- /.sidebar-widget -->

                 <div class="sidebar-widget  wow fadeInUp outer-top-vs hidden-xs hidden-sm">
                    <div id="advertisement-2" class="advertisement">
                      <?php 
                      if(count($bannerslateral)>0)
                      {
                      
                      foreach($bannerslateral as $bannerlateral)
                        {
                         echo '<li><a href="#"><img src="files/bannerlateral/'.$bannerlateral->imagen.'" class="" /></a></li>';
                        }
                      }
                    ?>
                    </div><!-- /.owl-carousel -->
                </div>


                       
                   </div>
                </div>

            </div>
        </div>
    </div>
</div>    