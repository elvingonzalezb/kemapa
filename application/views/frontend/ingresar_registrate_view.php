 <!-- Comienzo mainContent -->
 <div class="body-content outer-top-xs" id="top-banner-and-menu">
<div class="sign-in-page inner-bottom-sm">
  <div class="container">
    <div class="terms-conditions-page inner-bottom-sm">
      <div class="row">
     
        <!-- create a new account -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 create-new-account">
          <h4 class="checkout-subtitle">Ingresa a tu cuenta</h4>
             
          <!--<p class="text title-tag-line">Create your own Unicase account.</p>-->
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
             <?php
              $resultado = $this->session->userdata("resultado");
              if( isset($resultado) )
              {
                switch( $resultado )
                {
                  case "exito":
                    echo '<div class="alert alert-success" role="alert">';
                    echo $this->session->userdata("mensaje");
                    echo '</div>';
                  break;

                  case "error":
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $this->session->userdata("mensaje");
                    echo '</div>';
                  break;
                }
                $this->session->unset_userdata('resultado');
                    $this->session->unset_userdata('mensaje');
              }
            ?>  
          <form class="register-form outer-top-xs" action="ingresar_registrate/validarLogin" method="post" id="ingresarform" name="ingresarform">
        
           
            <div class="form-group">
              <label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" name="emailLogin" id="emailLogin" >
            </div>

            <div class="form-group">
              <label class="info-title" for="exampleInputEmail2">Password <span>*</span></label>
              <input type="password" class="form-control unicase-form-control text-input" name="claveLogin" id="claveLogin" >
            </div>

           

           
           <div class="form-group">
               <div class="g-recaptchamod">
                <?php echo $recaptcha;?>
               </div>
             </div>


            <p class="text-right"><input type="submit" class="btn-upper btn btn-fucsia checkout-page-button bg" value="Ingresar"></p>
          
          </form>
           </div>
        </div><!-- create a new account -->
      
       <!-- create a new account -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 create-new-account">
          <h4 class="checkout-subtitle">Crear una cuenta</h4>
             
          <!--<p class="text title-tag-line">Create your own Unicase account.</p>-->
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
             <?php
              $resultado = $this->session->userdata("resultado");
              if( isset($resultado) )
              {
                switch( $resultado )
                {
                  case "exito":
                    echo '<div class="alert alert-success" role="alert">';
                    echo $this->session->userdata("mensaje");
                    echo '</div>';
                  break;

                  case "error":
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $this->session->userdata("mensaje");
                    echo '</div>';
                  break;
                }
                $this->session->unset_userdata('resultado');
                    $this->session->unset_userdata('mensaje');
              }
            ?>  
          <form class="register-form outer-top-xs" action="registrate/enviar" method="post" id="registerform" name="registerform">
        
            <div class="form-group">
              <label class="info-title" for="exampleInputEmail2">Nombres <span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" name="nombres" id="nombres" >
            </div>

            <div class="form-group">
              <label class="info-title" for="exampleInputEmail2">Apellidos <span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" name="apellidos" id="apellidos" >
            </div>

            <div class="form-group">
              <label class="info-title" for="exampleInputEmail2">Teléfono <span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" name="telefono" id="telefono"  maxlength="12" onkeydown="return ( event.ctrlKey || event.altKey 
                                || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                                || (95<event.keyCode && event.keyCode<106)
                                || (event.keyCode==8) || (event.keyCode==9) 
                                || (event.keyCode>34 && event.keyCode<40) 
                                || (event.keyCode==46) )">
            </div>

            <div class="form-group">
              <label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" name="email" id="email" >
            </div>

            <div class="form-group">
              <label class="info-title" for="exampleInputEmail2">Password <span>*</span></label>
              <input type="password" class="form-control unicase-form-control text-input" name="clave" id="clave" >
            </div>

            <div class="form-group">
              <label class="info-title" for="exampleInputEmail2">Confirmar Password <span>*</span></label>
              <input type="password" class="form-control unicase-form-control text-input" name="clave2" id="clave2" >
            </div>

           
           <div class="form-group">
               <div class="g-recaptchamod">
                <?php echo $recaptcha;?>
               </div>
             </div>


            <p class="text-right"><input type="submit" class="btn-upper btn btn-fucsia checkout-page-button bg" value="Crear Cuenta"></p>
          
          </form>
           </div>
        </div>

       </div>
     </div><!-- /.row -->
    </div>
  </div>
</div>

