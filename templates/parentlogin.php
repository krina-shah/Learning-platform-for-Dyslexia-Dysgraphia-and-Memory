<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Learning</title>
    <link href="{{ url_for('static', filename='css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ url_for('static', filename='css/mycss.css') }}"> -->
    <style type="text/css">
      @import url("https://fonts.googleapis.com/css?family=Kaushan+Script");
      @import url('https://fonts.googleapis.com/css?family=Pacifico&display=swap');
      @import url('https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&display=swap');
      main{
  
  height:auto;
  max-height: 2200px; 
  width: 100%;
  
  max-width:1570px;
  

}
#home{
  width: 100%;
  height: 900px;
  background-color: rgba(254, 198, 21,0.2)!important;
  position: relative;
  
  

  
}
.btn-primary2{
  background-color: white !important;
  border: black solid !important;
  width: 150px !important;
  height:60px !important;
  font-family: "Kaushan Script", cursive;
  color: black;
  font-size: 20px;
}
.btn-primary2:hover{
  background-color: black !important;
  color:#ff6781;
  
}
.btn-primary1{
  background-color: white !important;
  border: black solid !important;
  width: 150px !important;
  height:42px !important;
  
  color: black;
  font-size: 20px;
}
.btn-primary1:hover{
  background-color: black !important;
  color:#A52A2A;
  
}
h1{
  color: black;
  font-family: "Kaushan Script", cursive;
  
  
}
#color{
  color: #ff6781;
  font-family: "Kaushan Script", cursive;
  font-size: 50px;
}

.footer {
  position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:rgba(227,158,89,0.2); 
  color: black;
  text-align: center;
 border-style: none !important;
}
h3{
  color: black;
  
  font-size: 20px;

  
}
.inputtype{
  border-radius: 9px;
  border-color: lightgray;
}
fieldset{
  border-color: black !important;
}
legend{
  border-color:none !important;
}
/*.content{
  border-radius: 10px;
      padding: 20px 10px;
      margin-top: 10px;
     background-color: white !important;
}*/
#logo{
height:35px;
width:40px;
position:relative;
top:-7px;
left:10px;
}
#help,h6{
font-family: 'Pacifico', cursive;
font-size:23px;
}
#session{
font-family: "Kaushan Script", cursive;font-size:20px;
color: white;
}
h7,h4{
font-family: 'Pacifico', cursive;
font-size:23px;
}
h4{
font-family: 'Pacifico', cursive;
font-size:30px;
}
.shape{
        font-family: 'Staatliches', cursive;
        color: black;
        font-size: 20px;
        width: 32px;
        height:32px;
      }
.shape1{
        font-family: 'Staatliches', cursive;
        color: black;
        font-size: 20px;
        width: 45px;
        height:32px;
      }
.desgin{
        font-family: 'Pacifico', cursive;
font-size:23px;
        width: 25px;
        height:25px;
      }
.done{
width:100px;
height:100px;
}
      .icon-login{
        width:100px;
        height: 100px;}
      .first-row{
        /*border-bottom:1px solid rgba(0,200,255,0.4);*/
        padding:1em 0;
        border-radius: 5px 5px 0 0;
        /*background: rgba(0,0,0,0.2);*/
        }
        .form1{
        
        width:400px;
        height: 500px;
        margin: auto;
        text-align: center;
        /*background: linear-gradient(to bottom, rgba(0,50,150,0.4), rgba(0,0,30,0.3));*/
         background-color: white;
        /*background-size: cover;*/
        border-radius: 20px;
        /*border: solid;*/
        /*border-color: red;*/
        -webkit-box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.85);
      -moz-box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.85);
      box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.85);
      }
      h2{
        
        font-size: 30px;
      }
      .btn-primary3{
  background-color: white !important;
  border: black solid !important;
  width: 300px !important;
  height:40px !important;
  
  color: black;
  font-size: 20px;
}
.btn-primary3:hover{
  background-color: black !important;
  color:#ff6781;
  
}
    </style>
    </head>

  <body>
    <main><nav  class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
<img src="{{ url_for('static', filename='img/logo.png') }}" id="logo">
</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        
        <li><a  id="help">Welcome</a></li>
      </ul>
<div>
<div>
</nav>
     <section  id="home" class="container-fluid " data-aos="fade-left" data-aos-delay="100">

  <div class="container-fluid">
    <div class="row"><br><br><br>
      <div class="form1">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="100">
        <br><br><br>
        
          <div class="first-row">
        <a href="#"><img src="{{ url_for('static', filename='img/icon.png') }}" alt="login" class="icon-login" data-aos="fade-down" data-aos-delay="200"></a>
        <!-- <h2 class="first-login" data-aos="fade-left" data-aos-delay="200">Welcome to Miss India Contest.</h2><br> -->
         <!-- <h3 class="first-login" data-aos="fade-right" data-aos-delay="200">Login. To see Yourself in Action</h3> -->
      </div>
          <!-- <fieldset style="width:400px"  class="content">   -->
    <!-- <legend><img src="img/icon.png" width="70" height="70"></legend> -->
      <form method="POST" action="{{(url_for('dashboard'))}}">
        <h2>Login Here</h2>
        <?php include('errors.php'); ?>
      <!-- <center> -->
              <input type="text" name="loginusername"  class="form-control form-control-lg" placeholder="Username"><br>
              <input type="password" name="loginpassword"  class="form-control form-control-lg" placeholder="Password">
              <br>
           <button  type="submit" class="btn btn-primary btn-primary1" name="login_user">Login</button>

          <a href="{{(url_for('home'))}}"><button  type="button" class="btn btn-primary btn-primary1">Back</button></a><br><br>
         
          </form>
    <!-- </fieldset> -->
         




      </div>

    </div>
    </div>
  </div>
</section>
  
    
<section id="footer">
  <div class="footer">
  <p>CopyRight All Rights Reserved</p>
</div>
</section>
</main>

   <script src="{{ url_for('static',     filename='js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url_for('static',     filename='js/bootstrap.min.js') }}"></script>
    {% block content %}
    {% endblock %}
    
  </body>
 
</html>












