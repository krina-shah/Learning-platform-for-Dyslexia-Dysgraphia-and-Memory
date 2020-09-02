<!-- <?php 
  // session_start(); 

  
  // if (isset($_GET['logout'])) {
  //   session_destroy();
  //   unset($_SESSION['username']);
  //   header("location: index.php");
  // }
?> -->
<?php include('age1.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>QUIZ</title>
    <link href="{{ url_for('static', filename='css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ url_for('static', filename='css/mycss.css') }}"> -->
    <link rel="stylesheet" href="{{ url_for('static', filename='css/aos.css') }}">
    
    
    
    
  </head>
<style type="text/css">

      @import url('https://fonts.googleapis.com/css?family=Staatliches&display=swap');
      @import url('https://fonts.googleapis.com/css?family=Roboto|Staatliches&display=swap');
      @import url('https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&display=swap');
@import url("https://fonts.googleapis.com/css?family=Kaushan+Script");
@import url('https://fonts.googleapis.com/css?family=Pacifico&display=swap');
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
       main{
  background:url("img/headerBcg.jpeg");
  height: auto;
  width: 100%;
  background-repeat: no-repeat;
  background-size:cover;
  max-width:1570px;
  }
      h2{

        
        color: black;
        font-size: 20px;

      }
      .shape{
       
        width:350px;
        height:40px;
      }
     
     
       .maincontent{
        
        text-align: center;
        /*background: linear-gradient(to bottom, rgba(0,50,150,0.4), rgba(0,0,30,0.3));
        background-image: url('logbg.jpg');*/
        background-color: rgba(254, 198, 21,0.2);
        background-size: cover;
        
      }
    .size{
        width: 25px;
        height: 25px;
      }
       #session{
      font-family: 'Pacifico', cursive;
font-size:20px;
 color: white;
     }
          </style>
  <body>
    <main>
    <section  class="container-fluid maincontent" data-aos="fade-down" data-aos-delay="100">
      <nav class="navbar navbar-inverse" id="nav1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" data-aos="fade-right" data-aos-delay="300">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
<img  id="logo" src="{{ url_for('static', filename='img/logo.png') }}" >
</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-aos="fade-left" data-aos-delay="300">
      <ul class="nav navbar-nav navbar-right">
        
         <li><?php  if (isset($_SESSION['username'])) : ?>
      <p id="session">Welcome <strong><p id="session" name="userdisplay">{% if 'username' in session %}
  {{ session['username'] }}
{% endif %}</p></strong></p>
      <p> <a href="{{(url_for('logout'))}}"  class="link" id="session">LOGOUT</a> </p>
    <?php endif ?></li>
      </ul>    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<form method="POST" action="{{ url_for('pcage1')}}">
    <div  class="col-lg-12  col-md-12  col-sm-12  col-xs-12" data-aos="fade-down">
    
      <h1>Passage Comprehension</h1>
      <br>
      <h2 class="text-justify">Emma  has  a  new  bicycle. 

      It  is  bright  pink  and  shiny.

      It  was  a  gift  from  her  uncle. 

      He  hide  it  behind  a  bush  to  surprise  her.

      When  Emma  looked  behind  the bush  and  saw the  bicycle,  she  jumped  for  joy.

      It  wasjust  what  she  wanted.  

      She  gave  her  uncle  a  big  hug. 
      
      She  loves  her  new  bicycle,  and  she  loves  her  uncle.
</h2>
<br>
<h3>Answer the following questions.</h3>
<h2>1) What color is the bicycle? </h2><br>
<h4><input type="text" id="ans1" class="shape"></h4>
<br>
<h2>2) Who was it a gift from?  </h2><br>
<h4><input type="text" id="ans2" class="shape"></h4>
<br>
<h2>3) Where was it hidden?   </h2><br>
<h4><input type="text" id="ans3" class="shape"></h4>
<br>
<h2>4) What did Emma do when she saw the bicycle? </h2><br>
<h4><input type="text" id="ans4" class="shape"></h4>
<br><br>


<input type="hidden" name="result1" id="data1">
<input type="hidden" name="result2" id="data2">
<input type="hidden" name="result3" id="data3">
<input type="hidden" name="result4" id="data4">
<!--<button class="btn btn-info btn-lg" onclick="getans1()">Submit</button>-->
<input type="submit" class="btn btn-primary btn-lg"   onclick="getans1()" name ="q4age1">
  <!--<input type="button" class="btn btn-primary btn-lg"  name="save" onclick="window.location.href='quiz5.php'" value="Next">-->
    </div>
    </form>
    </section>
    <br><br>
</main>

    
    <script src="{{ url_for('static',     filename='js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url_for('static',     filename='js/bootstrap.min.js') }}"></script>
    <script src="{{ url_for('static',     filename='js/aos.js') }}"></script>
    <script src="{{ url_for('static',     filename='js/main.js') }}"></script>

{% block content %}
    {% endblock %}

   
<script type="text/javascript">
  function getans1() {
    var ans1=document.getElementById("ans1").value;
    if (ans1=="Pink" || ans1=="pink" || ans1=="The color of the bicycle is bright pink") {
      var ques1="correct";
    }
    else{
      var ques1="wrong";
    }
    //alert(ques1);
    getans2();
    document.getElementById("data1").value=ques1;
  }
</script>

<script type="text/javascript">
  function getans2() {
    var ans2=document.getElementById("ans2").value;
    if (ans2=="Uncle" || ans2=="uncle" || ans2=="The bike was a gift from her uncle") {
      var ques2="correct";
    }
    else{
      var ques2="wrong";
    }
    //alert(ques2);
    getans3();
    document.getElementById("data2").value=ques2;
  }
</script>


<script type="text/javascript">
  function getans3() {
    var ans3=document.getElementById("ans3").value;
    if (ans3=="The bike was hidden behind a bush" || ans3=="Behind a bush" || ans3=="behind a bush") {
      var ques3="correct";
    }
    else{
      var ques3="wrong";
    }
    //alert(ques3);
    getans4();
    document.getElementById("data3").value=ques3;
  }


</script>

<script type="text/javascript">
  function getans4() {
    var ans4=document.getElementById("ans4").value;
    if (ans4=="jumped" || ans4=="Jumped" || ans4=="jumped for joy" ||ans4=="Jumped for joy" || ans4=="Emma jumped for joy when she saw the bicycle") {
      var ques4="correct";
    }
    else{
      var ques4="wrong";
    }
    //alert(ques4);
    
    document.getElementById("data4").value=ques4;
  }


</script>





  </body>
  
</html>