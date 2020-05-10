<?php

require_once('./config/default.php');

if( $_POST ){

  try{
    $booking->booking_table($_POST);
  } catch(PDOException $e) {
    echo $e->getMessage();
  }


}

require_once('header.php');

 ?>


 
     <section class="page-section cta">
       <div class="container">
         <div class="row">
           <div class="col-xl-9 mx-auto">
             <div class="cta-inner text-center rounded">
               <h2 class="section-heading mb-5">
                 <span class="section-heading-upper">Prenota con noi</span>
                 <span class="section-heading-lower">siamo aperti</span>
               </h2>
               <form class="" id='booking' method="post" action='<?php $_SERVER['PHP_SELF'] ?>'>
                 <div class="row">
                   <div class="form-group col-4">
                     <label for="name">Nome</label>
                     <input type="text" class="form-control" name="nome" id="name" required>
                   </div>

                   <div class="form-group col-4">
                     <label for="tel">Telefono</label>
                     <input type="tel" class="form-control" name="tel" id="tel" required>
                   </div>

                   <div class="form-group col-4">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" name="email" id="email" required>
                   </div>

                   <div class="form-group col-4">
                     <label for="intolleranza">Intolleranze</label>
                     <select class="custom-select" required name="intolleranza" id="intolleranza">
                       <option selected>Problemi da dichiarare</option>
                       <option value='nessuno'>Nessuno</option>
                       <option value="celiachia">Celiachia</option>
                       <option value="Intolleranza">Intolleranza</option>
                       <option value="3">Allergia</option>
                     </select>
                   </div>


                   <div class="form-group col-4">
                     <label for="email">Data di prenotazione</label>
                     <input type="date" class="form-control" name="date" id="date" required>
                   </div>

                   <div class="form-group col-4">
                     <label for="hour">Orario</label>
                     <input type="time" class="form-control" name="hour" id="hour" required>
                   </div>

                   <div class="form-group col">
                     <button class="btn btn-primary mt-3" type="submit">Prenota</button>
                   </div>

                 </div> <!-- row -->





               </form>
               <p class="address my-5">
                 <em>
                   <strong>1116 Orchard Street</strong>
                   <br>
                   Golden Valley, Minnesota
                 </em>
               </p>
               <p class="mb-0">
                 <small>
                   <em>Call Anytime</em>
                 </small>
                 <br>
                 (317) 585-8468
               </p>
             </div>
           </div>
         </div>
       </div>
     </section>

     <section class="page-section about-heading">
       <div class="container">
         <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
         <div class="about-heading-content">
           <div class="row">
             <div class="col-xl-9 col-lg-10 mx-auto">
               <div class="bg-faded rounded p-5">
                 <h2 class="section-heading mb-4">
                   <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                   <span class="section-heading-lower">About Our Cafe</span>
                 </h2>
                 <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                 <p class="mb-0">We guarantee that you will fall in
                   <em>lust</em>
                   with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>

     <?php  require_once('footer.php'); ?>