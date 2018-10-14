  <div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 sidebar">

                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categorias</div>
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
                                if($categoria['id']==$id_categoria_current)
                                {
                                  echo'<li class="dropdown menu-item">';
                                    echo'<a href="'.$link.'" class="catCurrent"><!--<i class="icon fa fa-check fa-fw">--></i>'.$categoria['nom_cat'].'</a>';
                                    echo'</li>';
                                }
                                else
                                {
                                    echo'<li class="dropdown menu-item">';
                                    echo'<a href="'.$link.'"><!--<i class="icon fa fa-check fa-fw">--></i>'.$categoria['nom_cat'].'</a>';
                                    echo'</li>';
                                }
                          }
                          ?>
                        </ul><!-- /.nav -->
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->


                <div class="sidebar-widget hot-deals wow fadeInUp">
                    <!--<h3 class="section-title"></h3>-->
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
                        <div class="item">
                            <div class="products">

                            </div>
                        </div>
                    </div><!-- /.sidebar-widget -->
                </div>

                <div class="sidebar-widget  wow fadeInUp outer-top-vs hidden-xs hidden-sm">
                    <div id="advertisement-2" class="advertisement">
                      <?php
                      if(count($bannerslateral)>0)
                      {

                      foreach($bannerslateral as $bannerlateral)
                        {
                         echo '<li><a href="#"><img src="files/bannerlateral/'.$bannerlateral->imagen.'" class=""  /></a></li>';
                        }
                      }
                    ?>
                    </div><!-- /.owl-carousel -->
                </div>




            </div><!-- /.sidemenu-holder -->
            <?php
                $cat = strtoupper($nomCategoria->nom_cat);
                 echo'<h3 class="fontFucsia">'.$cat.'</h3>';
                 ?>

           <div class='col-xs-12 col-sm-12 col-md-3 col-lg-9'>
                <div id="category" class="category-carousel hidden-xs">
                    <div class="item">
                        <div class="image">
                            <img src="" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="search-result-container">
                    <div>
                        <div>
                            <div class="category-product inner-top-vs">
                                <div class="row">
                                   <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 wow fadeInUp">
                                     <div class="products">
                                    <?php
                                 foreach($subcategorias as $subcat)
                                {
                              $link = "subcat".'/'.$subcat->id_subcategoria.'-'.$subcat->url;
                               echo'<div class="product col-md-4 mgb-20 col-xs-6 col-sm-6"> ';
                                    echo'<div class="product-image">';
                                       echo'<div class="image">';

                                            echo'<a href="'.$link.'"><img src="files/subcategorias/'.$subcat->imagen.'" width="190" height="240" alt="'.$subcat->nombre.'"></a>';

                                        echo'</div> ';
                                   echo'</div>';
                                   echo' <div class="product-info text-left">';
                                    echo' <h3 class="name"><a href="'.$link.'">'.$subcat->nombre.'</a></h3>';

                                   echo'</div>';
                                echo'</div>';
                                        }
                                     ?>
                                        </div><!-- /.products -->

                                    </div><!-- /.item -->



                                </div><!-- /.row -->

                            </div><!-- /.category-product -->

                        </div><!-- /.tab-pane -->

                    </div><!-- /.tab-content -->

                </div><!-- /.search-result-container -->

            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.container -->

</div><!-- /.body-content -->
