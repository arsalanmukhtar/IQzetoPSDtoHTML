<!DOCTYPE html>
<html lang="en">

<?php include_once("header.php"); ?>

<body>

    <?php include_once("top-navbar.php"); ?>

      <div class="container-fluid top-wrapper">
         <div class="row">
            
            <?php include_once("left-sidebar.php"); ?>

            <div class="col-lg-10 col-md-12 quizdetails-wrapper background-style">

               <div class="row align-items-center justify-content-between info-bar">
                  <?php include_once("infobar.php"); ?>
               </div>
               <hr>
               
               <div class="col-md-6 d-flex upper-heading">
                  <button class="btn light-button quiz-alert">Quiz has been finished</button>
               </div>
               <div class="row upper-row">
                  <div class="col-md-6 col-sm-12 col-xs-12 topleft">
                     <div class="row left-header header-div">
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                           <div class="col-md-6 col-sm-6 col-xs-6">
                              <b>Quiz name: Brain twister</b>
                              <p>Daring mode</p>
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-6">
                              <div class="row justify-content-center">
                                 <b>Quiz ends in</b>
                              </div>
                              <div class="row justify-content-center">
                                 <p>0</p>
                                 <p>0</p>
                                 <p>0</p>
                                 <p>0</p>
                              </div>
                              <div class="row justify-content-center">
                                 <p>Days</p>
                                 <p>Hurs</p>
                                 <p>Mins</p>
                                 <p>Secs</p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="d-flex col-md-12 col-sm-6 col-xs-6 justify-content-between upper-stats">
                        <div class="col-md-3 col-sm-6 col-xs-6 justify-content-center">
                           <b>Quiz Schedule</b>
                           <p>Start time</p>
                           <p>End time</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 justify-content-center">
                           <b>Quiz Creator</b>
                           <p>Daring mind</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 justify-content-center">
                           <b>Registration Fee</b>
                           <p>50 Real Qzetos</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 justify-content-center">
                           <b>Price pool</b>
                           <p>1st - 60 Bonus Qzetos</p>
                           <p>2nd - 36 Bonus Qzetos</p>
                           <p>3rd - 24 Bonus Qzetos</p>
                        </div>         
                     </div>

                     <div class="d-flex col-md-12 col-sm-6 col-xs-6 justify-content-between lower-stats">
                        <div class="col-md-3 col-sm-6 col-xs-6 justify-content-center">
                           <b>Quiz Type</b>
                           <p>Paid quiz</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 justify-content-center">
                           <b>Number of Players</b>
                           <p>4</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 justify-content-center">
                           <b>Quiz Duration</b>
                           <p>3 Mins</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6 justify-content-center">
                           <b>Registered Players</b>
                           <p>4</p>
                        </div>
                     </div>

                     <div class="d-flex col-md-12 col-sm-12 col-xs-12 justify-content-center quiz-data-button">
                        <button class="btn dark-button">Start Now</button>
                        <button class="btn dark-button">Register</button>
                     </div>
                  </div>

                  <div class="col-md-6 question-bank d-flex justify-content-between align-items-center">
                     <i class="fas fa-angle-left"></i>
                     <div class="leaderboard">
                        <div class="col-md-12 d-flex justify-content-between leaderboard-heading">
                           <h2 class="">Leaderboard</h2>
                           <button class="btn special-button updates-button">Refresh for Updates</button>
                        </div>
                        <table>
                           <tr>
                              <th>Username</th>
                              <th>Time Taken</th>
                              <th>Correct Answers</th>
                              <th>Rank</th>
                              <th>Percentage</th>
                           </tr>
                           <tr>
                              <td>quiz lover</td>
                              <td>60 secs</td>
                              <td>5</td>
                              <td>3rd</td>
                              <td>50</td>
                           </tr>
                           <tr>
                              <td>daring mind</td>
                              <td>50 secs</td>
                              <td>7</td>
                              <td>2nd</td>
                              <td>70</td>
                           </tr>
                           <tr>
                              <td>quiz lover</td>
                              <td>60 secs</td>
                              <td>5</td>
                              <td>3rd</td>
                              <td>50</td>
                           </tr>
                           <tr>
                              <td>daring mind</td>
                              <td>50 secs</td>
                              <td>7</td>
                              <td>2nd</td>
                              <td>70</td>
                           </tr>
                           <tr>
                              <td>quiz lover</td>
                              <td>60 secs</td>
                              <td>5</td>
                              <td>3rd</td>
                              <td>50</td>
                           </tr>
                           <tr>
                              <td>daring mind</td>
                              <td>50 secs</td>
                              <td>7</td>
                              <td>2nd</td>
                              <td>70</td>
                           </tr>
                           <tr>
                              <td>quiz lover</td>
                              <td>60 secs</td>
                              <td>5</td>
                              <td>3rd</td>
                              <td>50</td>
                           </tr>
                           <tr>
                              <td>daring mind</td>
                              <td>50 secs</td>
                              <td>7</td>
                              <td>2nd</td>
                              <td>70</td>
                           </tr>
                           <tr>
                              <td>quiz lover</td>
                              <td>60 secs</td>
                              <td>5</td>
                              <td>3rd</td>
                              <td>50</td>
                           </tr>
                        </table>
                     </div>
                     <i class="fas fa-angle-right"></i>
                  </div>
               </div>

               <div class="row lower-row">
                  <div class="col-md-6 col-sm-12 col-xs-12 rules-section">
                     <div class="row rules-header">
                        <div class="col-md-12 d-flex justify-content-between align-items-center">
                           <b>Quiz rule</b>
                           <b>Prize pool</b>
                           <b>Knowledge bank</b>
                        </div>
                     </div>
                     <div class="col-md-12 d-flex col-sm-12 col-xs-12 justify-content-center align-item-center bottomleft">
                        <h1>Quiz Rules</h1>
                     </div>
                  </div>

                  <div class="col-md-6 col-sm-12 col-xs-12 review-section">
                     <div class="row justify-content-between">
                        <i class="far fa-heart"></i>
                        <i class="far fa-comment-alt"></i>
                        <i class="fas fa-eye"></i>
                        <i class="far fa-share-square"></i>
                     </div>
                     <div class="row comment-section justify-content-center">
                        <textarea cols="150" rows="5" placeholder="Write your comment. . ."></textarea>
                     </div>
                     <div class="row submit-section justify-content-between">
                        <p>220 characters left</p>
                        <button class="btn dark-button submit-review">Submit</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
  
<?php include_once("footer.php"); ?>