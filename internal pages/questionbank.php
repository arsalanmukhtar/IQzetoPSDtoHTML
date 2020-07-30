<!DOCTYPE html>
<html lang="en">

<?php include_once("header.php"); ?>

<body>

   <?php include_once("top-navbar.php"); ?>

   <div class="container-fluid top-wrapper">
      <div class="row">
            
         <?php include_once("left-sidebar.php"); ?>

         <div class="col-lg-10 col-md-12 questionbank-wrapper background-style">

            <div class="row align-items-center justify-content-between info-bar">
               <?php include_once("infobar.php"); ?>
            </div>
                
            <hr>            
            <div class="col-md-12 question-bank">
               <div class="category">
                  <h2 class="text-center">Type and Category</h2>
                  <table>
                     <tr>
                        <th>Multiple Choice Questions</th>
                        <th>True False Questions</th>
                        <th>Fill the Blanks</th>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                     </tr>
                     <tr>
                        <td>
                           Select category
                           <select>
                              <option value=""></option>
                              <option value="arts">Arts</option>
                              <option value="science">Science</option>
                              <option value="linguistics">Linguistics</option>
                           </select>
                        </td>
                        <td>
                           Select category
                           <select>
                              <option value=""></option>
                              <option value="arts">Arts</option>
                              <option value="science">Science</option>
                              <option value="linguistics">Linguistics</option>
                           </select>
                        </td>
                        <td>
                           Select category
                           <select>
                              <option value=""></option>
                              <option value="arts">Arts</option>
                              <option value="science">Science</option>
                              <option value="linguistics">Linguistics</option>
                           </select>
                        </td>
                     </tr>
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                     </tr>
                  </table>
               </div>

               <div class="details">
                  <h2 class="text-center">Details</h2>
                  <table>
                     <tr>
                        <th>Question no.</th>
                        <th>Questions</th>
                        <th>Question type</th>
                        <th>Answer</th>
                        <th>Category</th>
                        <th>Date</th>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>dddd</td>
                        <td>MCQ</td>
                        <td>ee,fff,ggg,hhh</td>
                        <td>Miscelleaneous</td>
                        <td><time datetime="2020-05-23 03:00"></time></td>
                     </tr>
                     <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                     </tr>
                  </table>
               </div>

            </div>

         </div>
      </div>
   </div>

<?php include_once("footer.php"); ?>