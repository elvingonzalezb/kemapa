 <div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar menulateral">



                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categorías</div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                        <?php
                        foreach($categorias as $categoria)
                        {
                          if($categoria['num_categorias']>0)
                              {
                                    $link = 'subcategorias/'.$categoria['url'].'-'.$categoria['id'];
                              }
                              else
                              {
                                    $link = 'productos/'.$categoria['url'].'-'.$categoria['id'];
                              }
                            echo'<li class="dropdown menu-item">';
                                echo'<a href="'.$link.'"><!--<i class="icon fa fa-check fa-fw">--></i>'.$categoria['nom_cat'].'</a>';
                            echo'</li>';
                        }
                        ?>

                        </ul><!-- /.nav -->
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->


                <div class="hidden-xs hidden-sm">
                    <div class="sidebar-widget hot-deals wow fadeInUp">
                        <!--<h3 class="section-title"></h3>-->
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products">

                                </div>
                            </div>
                        </div><!-- /.sidebar-widget -->
                    </div>
                </div>





            </div>


            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 homebanner-holder">
                  <?php
                      if(count($banners)>0)
                      {
                        echo '<ul class="bxslider">';
                      foreach($banners as $banner)
                        {
                         echo '<li><a href="#"><img src="files/banner/'.$banner->imagen.'" class="img-fluid" style="width: 870px; height: 255px;" /></a></li>';
                        }
                        echo '</ul>';
                      }
                    ?>

               <div class="clearfix"></div>
                <section class="section featured-product wow fadeInUp">

                    <h3 class="section-title">Productos Destacados</h3>

                    <div class="tab-content outer-top-xs">

                      <div class="item item-carousel">

                            <div class="products ">
                            <?php
                                foreach($Dest_productos as $dest_producto)
                                {
                               $link = "producto".'/'.$dest_producto->id.'-'.$dest_producto->url;
                               echo'<div class="product col-md-4 mgb-20 col-xs-6 col-sm-6"> ';
                                    echo'<div class="product-image">';
                                       echo'<div class="image">';

                                            echo'<a href="'.$link.'"><img src="" data-echo="files/productos/medianas/'.$dest_producto->imagen.'" width="190" height="240" alt="'.$dest_producto->nom_producto.'"></a>';

                                        echo'</div> ';
                                   echo'</div>';
                                   echo' <div class="product-info text-left">';
                                    echo' <h3 class="name"><a href="'.$link.'">'.$dest_producto->nom_producto.'</a></h3>';

                                   echo'</div>';
                                echo'</div>';
                                        }
                                     ?>
                           </div><!-- /.products -->

                        </div><!-- /.item -->
                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->



                <div class="clearfix"></div>


                <section class="section outer-bottom-vs wow fadeInUp">
                    <h3 class="section-title">Últimos Artículos</h3>
                    <div class="blog-slider-container outer-top-xs">
                        <div class="owl-carousel blog-slider custom-carousel">

                              <?php
                               foreach($last_articulos as $last_articulo)
                                {
                                $link = $last_articulo->id.'-'.$last_articulo->url;
                            echo'<div class="item">';
                                echo'<div class="blog-post">';
                                   echo' <div class="blog-post-image">';
                                       echo' <div class="image">';
                                           echo' <a href="'.$link.'"><img data-echo="files/articulos/medianas/'.$last_articulo->imagen.'" width="270" height="135" src="assets/frontend/img/blank.gif" alt=""></a>';
                                        echo'</div>';
                                    echo'</div>';
                                    echo'<div class="blog-post-info text-left">';
                                       echo' <h3 class="name"><a href="'.$link.'">'.$last_articulo->titulo.'</a></h3> ';
                                        echo'<span class="info">'.$last_articulo->created.'</span>';
                                        if(strlen($last_articulo->introtext) > 90){
                                          $last_articulo->introtext = substr($last_articulo->introtext,0,90)."...";
                                        }
                                        echo'<p class="text-justify">'.$last_articulo->introtext.'</p>';
                                        echo'<a href="'.$link.'" class="btn btn-fucsia">Leer más</a>';
                                   echo' </div>';
                                echo'</div>';
                            echo'</div>';
                                }
                                ?>
                           </div><!-- /.owl-carousel -->
                    </div><!-- /.blog-slider-container -->
                </section><!-- /.section -->

            </div><!-- /.homebanner-holder -->
        </div><!-- /.row -->
</div><!-- /.container -->
    </div><!-- /.container -->

</div><!-- /#top-banner-and-menu -->
