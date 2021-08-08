<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Update employe Information</title>
 
  </head>

      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    
  <?php 
include 'head.html'; 

  ?>
  
<body>
  <div class="col ml-5">
  <label for="searchemploye" >Search employe by User ID:</label>
  <br>
  <input type="number" name="searchemploye" id="searchemploye">

  <button id="search" onclick="searchemploye()" style="height:30px; width:150px;">Search</button>

  <p id="p3"></p>


        <hr>
          <h2>Update employe Information</h2>
          <br>

 

            <label>employe ID :&nbsp;&nbsp;&nbsp;</label>
            <input type="text"  name="duserid" style="width:20em;" id="duserid" >

      <br><br>

            <label>First Name :&nbsp;&nbsp;&nbsp;</label>
            <input type="text"  name="FirstName" style="width:20em;" id="FirstName" >

      <br><br>

            <label>Last Name :&nbsp;&nbsp;&nbsp;</label>
            <input type="text"  name="LastName" style="width:20em;" id="LastName" >

      <br><br>


            <label>Date of Birth :&nbsp;&nbsp;&nbsp;</label>
            <input type="date"  name="DOB" style="width:20em;" id="DOB" >

      <br><br>


            <label>Email :&nbsp;&nbsp;&nbsp;</label>
            <input type="email"  name="Email" style="width:20em;" id="Email"  >

      <br><br>


            <label>User name :&nbsp;&nbsp;&nbsp;</label>
            <input type="text"  name="username" style="width:20em;" id="username" >

      <br><br>


            <label><b>Password :&nbsp;&nbsp;&nbsp;</b></label>
            <input type="text"  name="password" style="width:20em;" id="password" >

      <br><br>


              <button id="submit" onclick="submit()" style="height:30px; width:150px;">Submit</button>
<br><br>


  <p id="p1"></p>

        <div style="position:fixed;
   right:10px;
   top:40px;" ><a href="AdminPanel.php"> back to Admin panel</a>
</div>
    </div>
</body>

</html>
    
