<!DOCTYPE html>
<html lang="en">

<?php include_once("header.php"); ?>

<body class="refer">

   <div class="overlay">
      <div class="refer-form col-md-8 col-sm-8 col-xs-6 justify-contents-center align-items-center bg-white">
         <form action="quizlist.php">
            <div class="form-group">
               <label for="email">Email address</label>
               <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                  placeholder="Enter email">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
               <label for="name">Name</label>
               <input type="text" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="form-group">
               <label for="phone">Name</label>
               <input type="text" class="form-control" id="phone" placeholder="Enter contact">
            </div>
               <button type="submit" class="btn dark-button refer-button float-right" onclick='window.location.href="quizlist.php"'>Close</button>
               <button type="submit" class="btn dark-button refer-button float-right" onclick='window.location.href="quizlist.php"'>Refer now</button>
         </form>
      </div>
   </div>

   <nav id="navigation" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Quiz Lover</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse align-items-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">My Question Bank <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <div class="btn-group dropdown">
                        <a class="nav-link" href="#">Add Question</a>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Schedule Quiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Scheduled Quizes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Past Quizes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Refer & Earn</a>
                </li>
                <li class="nav-item">
                    <div class="btn-group dropdown">
                        <a class="nav-link" href="#">Account</a>
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

   <div class="container-fluid top-wrapper">
        <div class="row">
            
            <?php include_once("left-sidebar.php"); ?>

            <div class="col-lg-10 col-md-12 quizlist-wrapper background-style">

                <div class="row align-items-center justify-content-between info-bar">
                    <?php include_once("infobar.php"); ?>
                </div>
                
                <hr>
                <div class="d-flex justify-content-between upper-heading">
                    <h3>Mathematics</h3>
                    <button class="btn see-more" onclick='window.location.href="addquestion.php"'>See more</button>
                </div>
                <div class="row upper-row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Inequalities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Inequalities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Inequalities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Inequalities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Inequalities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Inequalities</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between lower-heading">
                    <h3>Arts & Languages</h3>
                    <button class="btn see-more">See more</button>
                </div>
                <div class="row lower-row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Linguistics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Linguistics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Linguistics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Linguistics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Linguistics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 pb-2">
                        <div class="quizes">
                            <div class="quiz-header header-div"></div>
                            <div class="image-holder">
                                <img src="img/quiz-holder.png" alt="">
                            </div>
                            <div class="quiz-title bg-white">
                                <p>Linguistics</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php include_once("footer.php"); ?>