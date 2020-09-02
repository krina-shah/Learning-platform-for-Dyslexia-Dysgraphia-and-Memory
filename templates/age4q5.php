
<?php include('age4.php') ?>
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
        font-size: 30px;

      }
      #shape{
       
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
      <p> <a  href="{{(url_for('logout'))}}"  class="link" id="session">LOGOUT</a> </p>
    <?php endif ?></li>
      </ul>    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<form method="POST" action="{{ url_for('lwage4')}}">
    <div  class="col-lg-12  col-md-12  col-sm-12  col-xs-12" data-aos="fade-down">
    
      <h1>Letter Word Identification</h1>
      <br>
      <h4>Click On start and Read the word loudly </h4>
      <h2 id="myDIV">1) REFLECTION</h2>
      <input type="hidden" rows="10"  id="textbox" >
      <br><br>
      <button type="button" class="btn btn-primary btn-lg"  id="start-btn"  onclick="myFunction3()">Start</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-lg"  id="stop-btn" >Stop</button>


<h2 id="myDIV">2) DELIGHTED</h2>
      <input type="hidden" rows="10"  id="textbox1" >
      <br><br>
      <button type="button" class="btn btn-primary btn-lg"  id="start-btn1"  onclick="myFunction31()">Start</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-lg"  id="stop-btn1" >Stop</button>


<h2 id="myDIV">3) DISLIKE</h2>
      <input type="hidden" rows="10"  id="textbox2" >
      <br><br>
      <button type="button" class="btn btn-primary btn-lg"  id="start-btn2"  onclick="myFunction32()">Start</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-primary btn-lg"  id="stop-btn2" >Stop</button>
         
<br><br>
<input type="hidden" name="result1" id="data1">
<input type="hidden" name="result2" id="data2">
<input type="hidden" name="result3" id="data3">
<!--<input type="submit" class="btn btn-primary btn-lg" id="btn_submit" onclick="getans1()" >-->
<input type="submit" class="btn btn-primary btn-lg"   onclick="getans1()" name ="q5age4">
 <!--<input type="button" class="btn btn-primary btn-lg"  name="save" onclick="window.location.href='quiz6.php'" value="Next">-->

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
   function myFunction3(){

var SpeechRecognition = window.webkitSpeechRecognition;
  
var recognition = new SpeechRecognition();
 
var Textbox = $('#textbox');
var instructions = $('instructions');
 
var Content = '';
 
recognition.continuous = true;
 
recognition.onresult = function(event) {
 
  var current = event.resultIndex;
 
  var transcript = event.results[current][0].transcript;
 
    Content += transcript;
    Textbox.val(Content);
  
};
 
recognition.onstart = function() { 
  instructions.text('Voice recognition is ON.');
}
 
recognition.onspeechend = function() {
  instructions.text('No activity.');
}
 
recognition.onerror = function(event) {
  if(event.error == 'no-speech') {
    instructions.text('Try again.');  
  }
}
 
$('#start-btn').on('click', function(e) {
  if (Content.length) {
    Content += ' ';
  }
  recognition.start();
});
 $('#stop-btn').on('click', function(e) {
  if (Content.length) {
    Content += ' ';
  }
  recognition.stop();
});

Textbox.on('input', function() {
  Content = $(this).val();
})
   }
</script>



<script type="text/javascript">
   function myFunction31(){

var SpeechRecognition = window.webkitSpeechRecognition;
  
var recognition = new SpeechRecognition();
 
var Textbox = $('#textbox1');
var instructions = $('instructions');
 
var Content = '';
 
recognition.continuous = true;
 
recognition.onresult = function(event) {
 
  var current = event.resultIndex;
 
  var transcript = event.results[current][0].transcript;
 
    Content += transcript;
    Textbox.val(Content);
  
};
 
recognition.onstart = function() { 
  instructions.text('Voice recognition is ON.');
}
 
recognition.onspeechend = function() {
  instructions.text('No activity.');
}
 
recognition.onerror = function(event) {
  if(event.error == 'no-speech') {
    instructions.text('Try again.');  
  }
}
 
$('#start-btn1').on('click', function(e) {
  if (Content.length) {
    Content += ' ';
  }
  recognition.start();
});
 $('#stop-btn1').on('click', function(e) {
  if (Content.length) {
    Content += ' ';
  }
  recognition.stop();
});

Textbox.on('input', function() {
  Content = $(this).val();
})
   }
</script>


<script type="text/javascript">
   function myFunction32(){

var SpeechRecognition = window.webkitSpeechRecognition;
  
var recognition = new SpeechRecognition();
 
var Textbox = $('#textbox2');
var instructions = $('instructions');
 
var Content = '';
 
recognition.continuous = true;
 
recognition.onresult = function(event) {
 
  var current = event.resultIndex;
 
  var transcript = event.results[current][0].transcript;
 
    Content += transcript;
    Textbox.val(Content);
  
};
 
recognition.onstart = function() { 
  instructions.text('Voice recognition is ON.');
}
 
recognition.onspeechend = function() {
  instructions.text('No activity.');
}
 
recognition.onerror = function(event) {
  if(event.error == 'no-speech') {
    instructions.text('Try again.');  
  }
}
 
$('#start-btn2').on('click', function(e) {
  if (Content.length) {
    Content += ' ';
  }
  recognition.start();
});
 $('#stop-btn2').on('click', function(e) {
  if (Content.length) {
    Content += ' ';
  }
  recognition.stop();
});

Textbox.on('input', function() {
  Content = $(this).val();
})
   }
</script>



<script type="text/javascript">
  function getans1() {
    var ans1=document.getElementById("textbox").value;
    if (ans1=="reflection") {
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
    var ans2=document.getElementById("textbox1").value;
    if (ans2=="delighted") {
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
    var ans3=document.getElementById("textbox2").value;
    if ( ans3=="dislike") {
      var ques3="correct";
    }
    else{
      var ques3="wrong";
    }
    //alert(ques3);
    
    document.getElementById("data3").value=ques3;
  }
</script>


  </body>
  
</html>
