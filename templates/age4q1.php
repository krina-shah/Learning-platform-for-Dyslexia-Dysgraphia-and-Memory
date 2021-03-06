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
      h4{
        font-family: 'Staatliches', cursive;
        color: purple;
        font-size: 50px;
      }
      h5{
       
        color: black;
        font-size: 20px;
      }
       h6{
       font-family: 'Staatliches', cursive;
        color: black;
        font-size: 45px;
      }
      .odd{
       
        color: black;
        font-size: 30px;
      }
      .even{
       
        color: black;
        font-size: 30px;
      }
      .size{
        width: 25px;
        height: 25px;
      }
      .changecolor{
        font-family: 'Staatliches', cursive;
        color: black;
        font-size: 50px;
      }
      .shape{
        font-family: 'Staatliches', cursive;
        color: black;
        font-size: 50px;
        width: 55px;
        height:40px;
      }
      textarea{
        border-radius: 40%;
      }
      .maincontent{
        
        text-align: center;
        /*background: linear-gradient(to bottom, rgba(0,50,150,0.4), rgba(0,0,30,0.3));
        background-image: url('logbg.jpg');*/
        background-color: rgba(254, 198, 21,0.2);
        background-size: cover;
        
      }
    
     .div1
     {
      width: 40px;
      height: 40px;
      margin-left: 15px;
      border: 1px solid #aaaaaa;
     }
     #drag1>img{
      width: 36px;
      height: 36px;
     margin-left: 15px;
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
<form method="POST" action="{{ url_for('mathage4')}}">
    <div  class="col-lg-12  col-md-12  col-sm-12  col-xs-12" data-aos="fade-down">
    
      <h2>Mathematical Operation</h2>
      
      <h4 >500 cm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="changecolor">=</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" class="shape" id="ans1">m</h4>
  <br>
      <h4 >1 l&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="changecolor">=</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" class="shape" id="ans2" ><span class="changecolor">ml</span></h4>
  <br>
       
   

<h5>choose the correct type of angle.</h5><br>

<!-- <h6>5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="changecolor">=</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="odev" value="Even" class="size" >&nbsp;<span class="even">Even</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="odev" value="odd" class="size" >&nbsp;<span class="odd">Odd</span></h6>
 -->

            
        <!--     <h4>3</h4>
            
            <img src="rightA.png">
            <div class="ratio">
                <input type="radio" name="Angle" value="right"> Right
				<input type="radio" name="Angle" value="acute"> Acute
				<input type="radio" name="Angle" value="obtuse"> Obtuse
            </div> -->



<br>
<!-- <h6>9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="changecolor">=</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="odev1" value="Even" class="size">&nbsp;<span class="even" >Even</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="odev1" value="odd" class="size">&nbsp;<span class="odd">Odd</span></h6>
   </div>  -->
   <img src="img/acuteA.png">
            <div class="radio">
               <h2> <input type="radio" name="Angle" value="right" class="size"> &nbsp;Right&nbsp;&nbsp;&nbsp;
				<input type="radio" name="Angle" value="acute" class="size">&nbsp; Acute&nbsp;&nbsp;&nbsp;
				<input type="radio" name="Angle" value="obtuse" class="size"> &nbsp;Obtuse</h2>
            </div> 

            
            <img src="img/obtuseA.png">
            <div class="radio">
            <h2>    <input type="radio" name="Angle1" value="right" class="size">&nbsp; Right&nbsp;&nbsp;&nbsp;
				<input type="radio" name="Angle1" value="acute" class="size"> &nbsp;Acute&nbsp;&nbsp;&nbsp;
				<input type="radio" name="Angle1" value="obtuse" class="size"> &nbsp;Obtuse</h2>
                <!--<button id="btn3"><span id="choice3"></span></button>-->
            </div> 



<input type="hidden" name="result1" id="data1">
<input type="hidden" name="result2" id="data2">
<input type="hidden" name="result3" id="data3">
<input type="hidden" name="result4" id="data4">

<input type="submit" class="btn btn-primary btn-lg"   onclick="result()" name ="q1age4">
 <!-- <input type="button" class="btn btn-primary btn-lg"  name="save" onclick="window.location.href='quiz2.php'" value="Next">-->

    </div>
    </form>
    </section>


    
     <script src="{{ url_for('static',     filename='js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url_for('static',     filename='js/bootstrap.min.js') }}"></script>
    <script src="{{ url_for('static',     filename='js/aos.js') }}"></script>
    <script src="{{ url_for('static',     filename='js/main.js') }}"></script>

{% block content %}
    {% endblock %}


   <script type="text/javascript">
function allowDrop(event)
{
  event.preventDefault(); 
}
function drop(event)
{
  var data=event.dataTransfer.getData("Text");
  event.target.appendChild(document.getElementById(data));
  event.preventDefault(); 
}
function drag(event)
{
  event.dataTransfer.setData("Text",event.target.id);
  
}

</script>

 <script type="text/javascript">
function result() 
{
  //alert("hello");
 var ans1=document.getElementById("ans1").value;
 var ans2=document.getElementById("ans2").value;
var ans3=($("input[name=Angle]:checked").val());
var ans4=($("input[name=Angle1]:checked").val());


if(ans1=="5"){
  var result1="correct";
}
else{
  var result1="wrong";
}

//alert(result1);
result2();
document.getElementById("data1").value=result1;
}


</script>


<script type="text/javascript">
function result2() 
{
  
 
 var ans2=document.getElementById("ans2").value;



if(ans2=="1000"){
  var result2="correct";
}
else{
  var result2="wrong";
}

//alert(result2);
result3();
document.getElementById("data2").value=result2;
}


</script>

<script type="text/javascript">
function result3() 
{
  
 
var ans3=($("input[name=odev]:checked").val());



if(ans3=="acute"){
  var result3="correct";
}
else{
  var result3="wrong";
}

//alert(result3);
result4();
document.getElementById("data3").value=result3;
}


</script>


<script type="text/javascript">
function result4() 
{
 
 
var ans4=($("input[name=odev1]:checked").val());


if(ans4=="obtuse"){
  var result4="correct";
}
else{
  var result4="wrong";
}

//alert(result4);
 document.getElementById("data4").value=result4;

}


</script>


  </body>
  
</html>
