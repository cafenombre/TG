<?php
   include 'header.php';
   ?>
<!-- Photo Grid -->
<div class="row">
   <div class="col s12 m6 push-m3">
      <div class="card transparent cardop">
         <div class="card-content white-text">
            <div class="row-img">
               <div class="column">
                  <div class="img__wrap">
                     <img src="img/c3.jpg" style="width:100%">
                     <div class="img__description_layer">
                        <p class="img__description">EXPERIENCES & SKILLS</p>
                     </div>
                  </div>
               </div>
               <div class="column">
                  <div class="img__wrap">
                     <img src="img/p3.jpg" style="width:100%">
                     <div class="img__description_layer">
                        <p class="img__description">CONTACT</p>
                     </div>
                  </div>
                  <div class="img__wrap">
                     <img src="img/r2.jpg" style="width:100%">
                     <div class="img__description_layer">
                        <p class="img__description">Personnal projects</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="btn-cv center">
   <div id="btn__before">
      <p><a class="waves-effect waves btn text-cyan lighten-5 cardop dowload__btn" onclick="showFlags()">Download CV</a></p>
   </div>
   <div id="btn__after">
      <p>
         <a class="btn cardop half__btn" onclick="download__cv('FR')"><img src="img/fr.svg" class="img__flag"></a>
         <a class="btn cardop half__btn" onclick="download__cv('EN')"><img src="img/gb.svg" class="img__flag"></a>
      </p>
   </div>
</div>
</body>
</html>