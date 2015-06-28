
<?php

session_start();

include("connection.php");

$query="SELECT `diary` from `users` WHERE id='".$_SESSION['id']."' LIMIT 1";

$result=mysqli_query($link,$query);

$row=mysqli_fetch_array($result);

$diary=$row['diary'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secret Diary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  
  <style>
  

.navbar-fixed-top{

  border:1px black;
opacity: 0.95;

}

.collapse{
border: none;
}

#chevron .glyphicon{

  color: white;

}
.navbar-brand{
  color: white !important;
  font-size: 3em;
  font-family: calibri;
  position:relative;
  top:1.5px;



}
#topContainer {
     background-image:url("bg.jpg");
     height:100%;
     width:100%;
     background-size:cover;

     }

.midContainer {
     background-image:url("bg2.jpg");
     height:698px;
     width:100%;
     background-size:cover;

     }

.botContainer {
     background-image:url("bg3.jpg");
     height:100%;
     width:100%;
     background-size:cover;

     }

#toprow{

margin-top: 80px;
text-align: center;
color: white;
opacity: 0.99;

}

#toprow h1{

  font-size: 400%;
}

.bold {

font-weight:bold;
margin-top: 59px;
margin-bottom: 30px;
}

.lead{

  margin-top: 29px;
}

.paddingtop{
  position:relative;
  top:10px;
}

a{
  font-family: calibri;
  font-size: 1.4em;
  color: white !important;
}

.form-group input{
margin-top: 3px;
margin-bottom: 2px;

}

.navbar-inverse .navbar-collapse{
  border: 1px black solid ;
box-shadow: none;
  border-left:none !important; border-right: none !important;
}


.navbar-inverse .navbar-form{
  border:none !important;
box-shadow: none;
  
}


.selected{

-webkit-filter: blur(4px);
  -moz-filter: blur(4px);
  -o-filter: blur(4px);
  -ms-filter: blur(4px);
  filter: blur(4px); 


}
 
 .center{

  text-align: center;
 }
.title{

  margin-top: 100px;
  font-size: 300%;
}


.margintop{
margin-top: 30px;
}

.appstoreimg{

height:60px;
width: 160px;
margin-top: 20px;

}

.playstoreimg{

height:60px;
width: 160px;
margin-top: 20px;
}


a:hover{
  color: #EEED92 !important;
}

#em{
  margin-bottom: 7px;
}

.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
    background-color: black;
}
  </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">

   


    </script>
    

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">

    
    </script>

<script type="text/javascript" src="js/kinetic.js"></script>

<script type="text/javascript" src="../jquery.final-countdown.js"></script>


  </head>


  <body data-spy="scroll" data-target=".navbar-collapse">
 


    <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">  

        <div class="navbar-header pull-left">

        
            <a class="navbar-brand" id="brand"> R7 </a> 

          </div>

          <div class="pull-right">

          <ul class="navbar-nav nav">

            <li> <a href="index.php?logout=1">Log Out</a></li>
          </ul>
          </div>

         </div>

          </div>

      <div class="container contentContainer" id="topContainer">


        <div class="row">
          
            <div class="col-md-6 col-md-offset-3" id="toprow">
          

            <textarea class="form-control"><?php echo $diary;?></textarea>


        </div>


      </div>
    
      </div>


<script>

$(".contentContainer").css("min-height",$(window).height());

$("textarea").css("height",$(window).height()-170);


$("#chevron").click(function(){

$(".row").toggleClass("selected");



});

$("textarea").keyup(function()
{

$.post("updatediary.php",{diary:$("textarea").val()});

});



</script>

  </body>

</html>













