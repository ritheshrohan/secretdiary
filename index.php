<?php 

include("login.php"); 

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

margin-top: 200px;
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

        <div class="navbar-header">

          

            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" id="chevron">
            <span class="glyphicon glyphicon-chevron-down"></span>
            </button>

            <a class="navbar-brand" id="brand"> R7 </a> 

          </div>

          <div class="collapse navbar-collapse">

          <form class="navbar-form navbar-right" method="post">

          <div class="form-group">

            <input type="email" name="loginemail" placeholder="Email" class="form-control" id="em" value= "<?php echo addslashes($_POST['loginemail']); ?>"/>
            
              <input type="password" name="loginpassword" placeholder="Password" class="form-control" id="em" value= "<?php echo addslashes($_POST['loginpassword']); ?>"/>
              </div>
              <input type="submit" name="submit"class="btn btn-success" value="Login">
              
          

          </form>


          </div>

         </div>

          </div>

      <div class="container contentContainer" id="topContainer">


        <div class="row">
          
            <div class="col-md-6 col-md-offset-3" id="toprow">
              <h1>Secret Diary <span class="glyphicon glyphicon-sunglasses"></span></h1>

              <p class="lead"> A Man is not what he thinks he is, he is what he hides!</p>
            
              <?php


              	if($error)
              	{
echo '<div class="alert alert-danger">'.addslashes($error).'</div>';

              	}

                                if($message)
                {
echo '<div class="alert alert-success">'.addslashes($message).'</div>';

                }

              ?>

              <p class="bold">Interested? Sign up below! </p>

            


            <form method="post">


  <div class="form-group paddintop">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Your Email" value= "<?php echo addslashes($_POST['email']); ?>"/>
  

    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Your password" value= "<?php echo addslashes($_POST['password']); ?>"/>
  
    </div>
  
  <input type="submit" name="submit" class="btn btn-success btn-lg paddingtop" value="Sign up" />
    



            </form>

        </div>


      </div>
    
      </div>


<script>

$(".contentContainer").css("min-height",$(window).height());



$("#chevron").click(function(){

$(".row").toggleClass("selected");



});




</script>

  </body>

</html>













