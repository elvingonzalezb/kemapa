<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row outer-bottom-sm'>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 sidebar">

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


                <div class="sidebar-widget hot-deals wow fadeInUp">
                    <!--<h3 class="section-title"></h3>-->
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
                        <div class="item">
                            <div class="products">

                            </div>
                        </div>
                    </div><!-- /.sidebar-widget -->
                </div>

                <!--<div class="sidebar-widget  wow fadeInUp outer-top-vs hidden-xs hidden-sm">
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
                    </div>
                </div>


                <div class="sidebar-widget  wow fadeInUp outer-top-vs hidden-xs hidden-sm">
                    <div id="advertisement" class="advertisement">
                      <?php
                      if(count($bannerslateral)>0)
                      {
                      echo '<ul class="bxslider">';
                        foreach($bannerslateral as $bannerlateral)
                        {
                          echo '<li><a href="#"><img src="files/bannerlateral/'.$bannerlateral->imagen.'" class="img-fluid" /></a></li>';
                         }
                      echo '</ul>';
                      }
                      ?>
                    </div>
                </div>-->

            </div>


            <div class='col-md-9'>

      	       <div class="search-result-container">
      					<div id="myTabContent" class="tab-content">
      						<div class="tab-pane active " id="grid-container">
      							<div class="category-product  inner-top-vs">
      								<div class="row">


                        <?php

                         $orden = 1;
                         $cad_id_productos=array();
                         for($i=0; $i<count($productos); $i++)
                         {
                           $current = $productos[$i];
                           $imagen = $current['imagen'];
                           $id_producto = $current['id_producto'];
                           $url = $current['url'];
                           $nom_producto= $current['nom_producto'];
                           $resumen= $current['resumen'];
                           $codigo= $current['codigo'];
                           $descripcion= $current['descripcion'];
                           $prodxcolor= $current['prodxcolor'];

                           $link = "producto".'/'.$id_producto.'-'.$url;
                        	echo'<div class="col-sm-6 col-md-4 wow fadeInUp">';

                            echo'<div class="products">';


                              echo'<div class="product">';

                              	echo'<div class="product-image">';
                            			echo'<div class="image">';
                            				echo'<a href="'.$link.'"><img  src="" data-echo="files/productos/medianas/'.$imagen.'"  alt="'.$nom_producto.'"></a>';
                            			echo'</div>';

                            		echo'</div>';

                                echo'<div class="product-info text-left">';
                                    echo '<div class="divNombreProd">';
                                        echo '<div class="nombreProd">';
                                            echo $nom_producto;
                                        echo '</div>';
                                    echo '</div>';
                              			//echo'<h3 class="name"><a href="'.$link.'">'.$nom_producto.'</a></h3>';


                                			echo'<div class="product-price">';
                                				 echo'<span class="text-left">'.$codigo.'</span>';
                                			echo'</div>';

                                         $sk='';
                                         for($e=0;$e<count($prodxcolor);$e++)
                                         {
                                           $cur=$prodxcolor[$e];
                                           $color=$cur['codigo_color'];
                                           $nombre=$cur['nombre_color'];
                                           $id_prodxcolor=$cur['id_prodxcolor'];
                                           $cad_id_productos[]=$id_prodxcolor;

                                            echo'<div style="background:'.$color.'" class="colores" title="'.$color.' - '.$nombre.'"></div>';
                                         }
                            		echo'</div>';
                            					echo'<div class="cart clearfix animate-effect">';
                            				echo'<div class="action">';
                            					echo'<ul class="list-unstyled">';
                            						echo'<li class="add-cart-button btn-group">';


                          						  echo'</li>';
                        		              echo'<li class="lnk wishlist">';
                              							echo'<a class="add-to-cart" href="'.$link.'" title="Wishlist">';
                              								 echo'<i class="icon fa fa-shopping-cart"></i>';
                              							echo' Mas detalles</a>';
                              						echo'</li>';


                            					echo'</ul>';
                            				echo'</div>';
                            			echo'</div>';

                            echo'</div>';


                    			echo'</div>';

                        echo'</div>';
                      }
                      $cad_id_productos=implode("&&",$cad_id_productos);
                      ?>

      								</div>
                      <div class="text-right">
                        <div class="col-md-12">
                           <?php echo $paginacion; ?>
                       </div>
                    </div>
      							</div>
      						</div>
       				  </div>
      				</div>

            </div>

    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.body-content -->
