<div class="contact py-5" id="contact">
   <div class="container  py-md-3">
      <div class="w3-head-all mb-3 w3-head-col">
         <h3>Contactanos</h3>
         <div align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d806.1866228760283!2d-107.99518749070634!3d31.09583649881023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86dc7ff482bd84db%3A0x29a8d5270bbefe74!2sSahuarito!5e0!3m2!1ses-419!2smx!4v1681614274076!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      </div>
      <div class="address-below">
         <div class="contact-icons text-center row">
            <div class="col-md-4 col-sm-4 col-xs-4 footer_grid_left">
               <div class="icon_grid_left">
                  <span class="fas fa-map-marker" aria-hidden="true"></span>
               </div>

               <?php

               $contactos = new InicioC();
               $contactos->VerContactosC();

               ?>

            </div>
            <div class="clearfix"> </div>
         </div>
      </div>