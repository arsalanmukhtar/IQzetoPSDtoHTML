<!DOCTYPE html>
<html lang="en">

<?php include_once("header.php"); ?>

<body>

   <?php include_once("top-navbar.php"); ?>

   <div class="container-fluid top-wrapper">
      <div class="row">
            
         <?php include_once("left-sidebar.php"); ?>

         <div class="col-lg-10 col-md-12 schedulequiz-wrapper background-style">

            <div class="row align-items-center justify-content-between info-bar">
               <?php include_once("infobar.php"); ?>
            </div>
            
            <hr>

            <div class="row schedule-quiz justify-content-center">
               <div class="col-md-2 d-flex flex-column">
                  <button class="btn dark-button nav-button active-button">Name</button>
                  <button class="btn light-button nav-button">Caption</button>
                  <button class="btn light-button nav-button">Date & time</button>
                  <button class="btn light-button nav-button">Duration</button>
                  <button class="btn light-button nav-button">Users</button>
                  <button class="btn light-button nav-button">Registration Fee</button>
                  <button class="btn light-button nav-button">Questions</button>
                  <button class="btn light-button nav-button">Category</button>
                  <button class="btn light-button nav-button">MCQs</button>
                  <button class="btn light-button nav-button">True/Flase</button>
                  <button class="btn light-button nav-button">Fill Blanks</button>
               </div>

               <div class="col-md-9 entries">
                  
                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Enter your name</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>Try to have it as descriptive as you can</p>
                           <input type="text" placeholder="Enter text. . ." >
                        </div>
                     </div>   
                  
                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Enter Quiz Caption</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>Try to have it as descriptive as you can</p>
                           <input type="text" placeholder="Enter text. . .">
                        </div>
                     </div>

                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Enter Quiz Date & Time</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>Select quiz date and time from below</p>
                           <input data-provide="datepicker" placeholder="Select date. . .">
                        </div>
                     </div>

                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Enter Quiz Duration</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>What is your quiz duration</p>
                           <select name="" id="">
                              <option>3 Minutes</option>
                              <option>4 Minutes</option>
                              <option>5 Minutes</option>
                           </select>
                        </div>
                     </div>

                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Minimum Users</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>Choose the numbers of users needed</p>
                           <input type="number" placeholder="Choose number. . .">
                        </div>
                     </div>

                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Registration Fee for Quiz</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>Enter the amount of registration fee</p>
                           <input type="number" placeholder="Enter amount. . .">
                        </div>
                     </div>

                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Number of Questions</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>Enter the number of questions you want in quiz</p>
                           <input type="number" placeholder="Enter text. . .">
                        </div>
                     </div>

                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Select Quiz Category</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>What is your quiz category</p>
                           <select>
                              <option value="miscellaneous">Miscellaneous</option>
                              <option value="arts">Arts</option>
                              <option value="science">Science</option>
                              <option value="linguistics">Linguistics</option>
                           </select>
                        </div>
                     </div>

                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Multipla Choice Questions</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>Number of Multiple Choice Questions needed</p>
                           <input type="number" placeholder="Choose number. . .">
                        </div>
                     </div>

                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>True False Questions needed</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>Choose the number of True/False questions needed</p>
                           <input type="number" placeholder="Choose number. . .">
                        </div>
                     </div>

                     <div class="row details">
                        <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                           <p>Fill in the Blanks needed</p>
                        </div>
                        <div class="current-description col-md-12 col-sm-6 col-xs-4">
                           <p>Choose the number of Blanks needed</p>
                           <input type="number" placeholder="Choose number. . .">
                        </div>
                     </div>
                  
               </div>

            </div>

         </div>
      </div>
   </div>
   
<?php include_once("footer.php"); ?>