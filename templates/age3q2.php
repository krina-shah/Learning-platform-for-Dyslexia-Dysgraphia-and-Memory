

<?php include('age3.php') ?>
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
        font-size: 26px;

      }
      .shape{
       font-family: 'Roboto', sans-serif;
        color: purple;
        font-size: 30px;
        width: 120px;
        height:32px;
      }
     
      .maincontent{
        
        text-align: center;
        /*background: linear-gradient(to bottom, rgba(0,50,150,0.4), rgba(0,0,30,0.3));
        background-image: url('logbg.jpg');*/
        background-color: rgba(254, 198, 21,0.2);
        background-size: cover;
        
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
    	<p> <a href="{{(url_for('logout'))}}"  class="link" id="session" >LOGOUT</a> </p>
    <?php endif ?></li>
      </ul>    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<form method="POST" id="demoform" name="myform" action="{{ url_for('sosage3')}}">
    <div  class="col-lg-12  col-md-12  col-sm-12  col-xs-12" data-aos="fade-down">
    
      <h1>Spelling Of Sounds</h1>
      <br>
      <pre><h2 >1)I went <input type="text" class="shape" id="ans11"> the mall, <br>I want to go to the park
<input type="text" class="shape" id="ans12"></h2>
<input type="button" class="btn btn-info btn-lg glyphicon glyphicon-volume-up" onclick="myFunction1()" value="Hear it"></pre> 
       
  <br>
   <pre> <h2 >2)<input type="text" class="shape" id="ans21"> madam, I was <br>surprise to see a lots of  <input type="text" class="shape" id="ans22"></h2>
   <input type="button" class="btn btn-info btn-lg glyphicon glyphicon-volume-up" onclick="myFunction2()" value="Hear it"></pre>
   
  <br>
   <pre><h2 >3) I received a <input type="text" class="shape" id="ans31"><br> 
from a  <input type="text" class="shape" id="ans32"></h2>
<input type="button" class="btn btn-info btn-lg glyphicon glyphicon-volume-up" onclick="myFunction3()" value="Hear it"></pre>
   
   
<br><br>

<input type="hidden" name="result3" id="data">
<input type="hidden" name="result1" id="data1">
<input type="hidden" name="result2" id="data2">
<!-- <button class="btn btn-info btn-lg" onclick="getans1()">Submit</button>-->
 <input type="submit" class="btn btn-primary btn-lg"   onclick="getans1()" name ="q2age3">
 <!-- <input type="button" class="btn btn-primary btn-lg"  name="save" onclick="window.location.href='quiz3.php'" value="Next">-->
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
  function myFunction1(){
    var inputmsg="I went to the mall I want to go to the park too";
    var msg = new SpeechSynthesisUtterance(inputmsg);
    window.speechSynthesis.speak(msg);
  }

</script>

<script type="text/javascript">
  function myFunction2(){
    var inputmsg="Dear madam I was surprise to see a lots of deer";
    var msg = new SpeechSynthesisUtterance(inputmsg);
    window.speechSynthesis.speak(msg);
  }

</script>

<script type="text/javascript">
  function myFunction3(){
    var inputmsg="I recieved a mail from a male";
    var msg = new SpeechSynthesisUtterance(inputmsg);
    window.speechSynthesis.speak(msg);
  }

</script>

<script type="text/javascript">
  function getans1(){
    var ans11=document.getElementById("ans11").value;
    var ans12=document.getElementById("ans12").value;
    
    //alert("height");
    
if(ans11!="to" && ans12!="too"){
  var ques1="wrong";
  
}
else if(ans11!="to" && ans12=="too"){
  var ques1="wrong";
 
}
else if(ans11=="to" && ans12!="too"){
  var ques1="wrong";
  
}
else if(ans11=="to" && ans12=="too"){
  var ques1="correct";
 
  }
  getans2();
//alert(ques1);
document.getElementById("data1").value=ques1;
}

</script>



<script type="text/javascript">
  function getans2(){
    var ans21=document.getElementById("ans21").value;
    var ans22=document.getElementById("ans22").value;
    
    
    
if(ans21!="dear" && ans22!="deer"){
  var ques2="wrong";
  
}
else if(ans21!="dear" && ans22=="deer"){
  var ques2="wrong";
  
}
else if(ans21=="dear" && ans22!="deer"){
  var ques2="wrong";
  
}
else if(ans21=="dear" && ans22=="deer"){
  var ques2="correct";
 
  }
  getans3();
//alert(ques2);
document.getElementById("data2").value=ques2;
}

</script>

<script type="text/javascript">
  function getans3(){
    var ans31=document.getElementById("ans31").value;
    var ans32=document.getElementById("ans32").value;
    
    
    
if(ans31!="mail" && ans32!="male"){
  var ques3="wrong";
  
}
else if(ans31!="mail" && ans32=="male"){
  var ques3="wrong";
  
}
else if(ans31=="mail" && ans32!="male"){
  var ques3="wrong";
  
}
else if(ans31=="mail" && ans32=="male"){
  var ques3="correct";
  }
//alert(ques3);
document.getElementById("data").value=ques3;
}

</script>




  </body>
  
</html>

