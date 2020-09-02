<!-- <?php 
  // session_start(); 

  
  // if (isset($_GET['logout'])) {
  //   session_destroy();
  //   unset($_SESSION['username']);
  //   header("location: index.php");
  // }
?> -->
<?php include('survey.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Learning</title>
    <link href="{{ url_for('static', filename='css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ url_for('static', filename='css/mycss.css') }}"> -->
    </head>
    <style type="text/css">
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
      p{
        font-size: 17px;

      }
      h2{
font-family: 'Pacifico', cursive;
font-size:30px;
}
h3{
font-family: 'Pacifico', cursive;
font-size:23px;
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
{% endif %}</p></strong></p></strong></p>
      <p> <a href="{{(url_for('logout'))}}"  class="link" id="session">LOGOUT</a> </p>
    <?php endif ?></li>
      </ul>    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</section>
      <section  id="home" class="container-fluid " data-aos="fade-left" data-aos-delay="100">

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contenthome" data-aos="fade-up" data-aos-delay="100">
        <h2 class="text-center">
      Spelling
    </h2>
    <form method="POST" id="demoForm" name="myform" action="{{ url_for('spellingform')}}">
<h3>Select the answer to each question, and click on the "Submit" button to submit the information.</h3>

<P>Q1) Is the child able to recollect words for his dictation test?<BR>
<input type="radio" name="q1" id="question1" value="Excellent">Excellent<BR>
<input type="radio" name="q1" id="question2" value="Good">Good<BR>
<input type="radio" name="q1" id="question2" value="Poor">Poor<BR>

</p>

<P>Q2)Does the student frequently make spelling errors that involve changing the order of the letters within the word (i.e. left/felt or spelt/slept)?<BR>
<input type="radio" name="2" id="question2" value="Excellent">Excellent<BR>
<input type="radio" name="2" id="question2" value="Good">Good<BR>
<input type="radio" name="2" id="question2" value="Poor">Poor<BR>
</p>

<P>Q3)Is the child able to understand the context of the word?<BR>
<input type="radio" name="3" id="question3" value="Excellent">Excellent<BR>
<input type="radio" name="3" id="question3" value="Good">Good<BR>
<input type="radio" name="3" id="question3" value="Poor">Poor<BR>
</p>


<P>Q4) Does your child omit letters or word endings when writing quickly?<BR>
<input type="radio" name="4" id="question4" value="Excellent">Excellent<BR>
<input type="radio" name="4" id="question4" value="Good">Good<BR>
<input type="radio" name="4" id="question4" value="Poor">Poor<BR>
</p>


<P>Q5)Does the child demonstrate consistent letter reversals?(dady for baby)<BR>
<input type="radio" name="5" id="question5" value="Excellent">Excellent<BR>
<input type="radio" name="5"  id="question5" value="Good">Good<BR>
<input type="radio" name="5" id="question5" value="Poor">Poor<BR>
</p>


<P>Q6)Is the child able to differentiate the same word with different meaning?<BR>
<input type="radio" name="6" id="question6" value="Excellent">Excellent<BR>
<input type="radio" name="6" id="question6" value="Good">Good<BR>
<input type="radio" name="6" id="question6" value="Poor">Poor<BR>
</p>

<P>Q7)Rate the spelling formation.<BR>
<input type="radio" name="7" id="question7" value="Excellent">Excellent<BR>
<input type="radio" name="7" id="question7" value="Good">Good<BR>
<input type="radio" name="7" id="question7" value="Poor">Poor<BR>
</p>





<br>


<input type="hidden" name="data" id="data" ></input> 


<button class="btn btn-primary" type="submit"  id="btn" value="Submit" name="spellingsubmit" onclick="myFunction()">Submit</button>
<br>
</form>

  </div>






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
<script type="text/javascript">
      
  function myFunction() {
      
     
                var x1=($("input[name=q1]:checked").val());
                var x2=($("input[name=2]:checked").val());
                var x3=($("input[name=3]:checked").val());
                var x4=($("input[name=4]:checked").val());
                var x5=($("input[name=5]:checked").val());
                var x6=($("input[name=6]:checked").val());
                var x7=($("input[name=7]:checked").val());                
                var dataset=[x1,x2,x3,x4,x5,x6,x7];
                var c1=new Array(7);
                var c2=new Array(7);
                var c3=new Array(7);
                
                /*alert(dataset);*/
                if((document.myform.q1[0].checked==true)||(document.myform.q1[1].checked==true)||(document.myform.q1[2].checked==true))
                {  
                  for (i = 0; i <7; i++) { 
                        if (dataset[i] == "Excellent"){
                           c1.push(dataset[i]);

                        }
                         
                      
                      else if (dataset[i] == "Good"){
                        c2.push(dataset[i]);  
                      }
                     
                      else if (dataset[i] == "Poor"){
                        c3.push(dataset[i]);  
                      }
                    }
              
                
                 /*alert(c1);
              alert(c2);
                alert(c3);
                alert(c1.length);*/
                

                if (c1.length > c2.length && c1.length > c3.length)
                {
                   
                   var result="Lowest";
                   
                }
               
            else if( c2.length > c1.length && c2.length > c3.length)
            {
                
                   var result="Moderate";
                   
          
              }
               
            else if(c3.length > c1.length && c3.length > c2.length)
            {
                 
                   var result="Highest";
                   
               
          
               }
               
            else if(c1.length == c2.length && (c1.length> c3.length && c2.length > c3.length))
            {
               
                   var result="Lowest";
                   
          
                 
              }
              
            else if(c1.length == c3.length && (c1.length > c2.length && c3.length > c2.length)){
               
                   var result="Moderate";
                   
          
                 
              }
                
           else if( c2.length == c3.length && (c2.length > c1.length && c3.length > c1.length))
           {
              
                   var result="Moderate";
                   
          
               
              }
               


           }
           var finalresult=result;
          document.getElementById("data").value=finalresult;
         return finalresult;
        }
        
          

      
     


    </script>
  </body>
 
</html>












