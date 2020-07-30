<!DOCTYPE html>
<html lang="en">

<?php include_once("header.php"); ?>

<body>

   <?php include_once("top-navbar.php"); ?>

   <div class="container-fluid top-wrapper">
      <div class="row">
            
         <?php include_once("left-sidebar.php"); ?>

         <div class="col-lg-10 col-md-12 addquestion-wrapper background-style">

            <div class="row align-items-center justify-content-between info-bar">
               <?php include_once("infobar.php"); ?>
            </div>
            
            <hr>


            <div class="question-bg">
               <div class="col-md-12 entries">
                  <div class="row details">
                     <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                        <p>Multiple Choice Question</p>
                     </div>
                     <div class="current-description d-flex align-items-center col-md-12 col-sm-6 col-xs-4">
                        <p>Question: </p><input type="text">
                     </div>
                  </div>               
                  <div class="row answer-details justify-content-between">
                     <div class="col-md-5 col-sm-12 col-xs-12 d-flex align-items-center options">
                     <p>Options:</p><input type="text" size="7"><input type="text" size="7"><input type="text" size="7"><input type="text" size="7">
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 d-flex align-items-center options">
                        <p>Correct option:</p><input type="text" size="7">
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 d-flex align-items-center options">
                        <p>Category:</p><input type="text" size="7">
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 d-flex align-items-center options">
                        <button class="btn light-button nav-button">Choose file</button><p>No file chosen</p>
                     </div>
                  </div>
               </div>
            </div>
            <br><br>

            <div class="question-bg">
               <div class="col-md-12 entries">
                  <div class="row details">
                     <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                        <p>True False Question</p>
                     </div>
                     <div class="current-description d-flex align-items-center col-md-12 col-sm-6 col-xs-4">
                        <p>Question: </p><input type="text">
                     </div>
                  </div>
                  <div class="row answer-details justify-content-between">
                     <div class="col-md-2 col-sm-12 col-xs-12 d-flex align-items-center options">
                        <p>Correct answer:</p><input type="text" size="7">
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 d-flex align-items-center options">
                        <p>Category:</p><input type="text" size="7">
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 d-flex align-items-center options">
                        <button class="btn light-button nav-button">Choose file</button>
                        <p>No file chosen</p>
                     </div>
                  </div>
               </div>
            </div>
               <br><br>

            <div class="question-bg">
               <div class="col-md-12 entries">
                  <div class="row details">
                     <div class="schedule-header header-div col-md-12 col-sm-6 col-xs-4">
                        <p>Fill in the Blank</p>
                     </div>
                     <div class="current-description d-flex align-items-center col-md-12 col-sm-6 col-xs-4">
                        <p>Question: </p><input type="text">
                     </div>
                  </div>
                  <div class="row answer-details justify-content-between">
                     <div class="col-md-2 col-sm-12 col-xs-12 d-flex align-items-center options">
                        <p>Correct answer:</p><input type="text" size="7">
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 d-flex align-items-center options">
                        <p>Category:</p><input type="text" size="7">
                     </div>
                     <div class="col-md-2 col-sm-12 col-xs-12 d-flex align-items-center options">
                        <button class="btn light-button nav-button">Choose file</button>
                        <p>No file chosen</p>
                     </div>
                  </div>
               </div> 
            </div>
         </div>
      </div>
   </div>

<?php include_once("footer.php"); ?>

