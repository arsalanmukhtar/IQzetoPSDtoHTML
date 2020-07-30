<!DOCTYPE html>
<html lang="en">

   <?php include_once("header.php"); ?>

   <?php include_once("topsection.php"); ?>

   
    <section class="contactus justify-content-center align-items-center">
      <div class="container d-flex col-md-10">
         <div class="contact-info col-md-4 col-sm-6 col-xs-12">
            <h2>Contact Info</h2>
            <div class="info">
               <ul class="info">
                  <li>
                     <span><i class="fas fa-map-marker-alt"></i></span>
                     <span>IQvirus Services Pvt Ltd, Plot No - 160, Sector-1, Block-H, Alkapoor Township, Hyderabad-500081, Telangana.
                     </span>
                  </li>
                  <li>
                     <span><i class="fas fa-envelope"></i></span>
                     <span>lorem@ipsum.com</span>
                  </li>
                  <li>
                     <span><i class="fas fa-phone"></i></span>
                     <span>+92-3453332221</span>
                  </li>
               </ul>
            </div>
            <ul class="sci">
               <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
               <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
               <li><a href="https://myaccount.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
               <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
               <li><a href="https://www.pinterest.com"><i class="fab fa-pinterest"></i></a></li>
            </ul>
         </div>

         <div class="contact-form  col-md-8 col-sm-6 col-xs-12">
            <h2>Send a Message</h2>
            <div class="formbox d-flex justify-content-between">
               <div class="inputbox w50">
                  <input type="text" name="" required>
                  <span>User name</span>
               </div>
               <div class="inputbox w50">
                  <input list="queries" name="subject"/></label>
                  <datalist id="queries">
                     <option value="Website related query">
                     <option value="Quiz related query">
                     <option value="Reward related query">
                     <option value="Redeem related query">
                     <option value="Any feedback">
                  </datalist>      
                  <span>Subject</span>               
               </div>
               <div class="inputbox w50">
                  <input type="text" name="" required>
                  <span>First name</span>
               </div>
               <div class="inputbox w50">
                  <input type="text" name="" required>
                  <span>Last name</span>
               </div>
               <div class="inputbox w50">
                  <input type="text" name="" required>
                  <span>Email address</span>
               </div>
               <div class="inputbox w50">
                  <input type="text" name="" required>
                  <span>Mobile number</span>
               </div>
               <div class="inputbox w100">
                  <textarea name="" required></textarea>
                  <span>Write your message here. . .</span>
               </div>
               <div class="inputbox w100">
                  <input class="dark-button" type="submit" value="Submit"></input>
               </div>
            </div>
         </div>
      </div>
   </section>


   <?php include_once("footer.php"); ?>

   <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<body>
   
</body>
</html>
