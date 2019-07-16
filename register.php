<html>
<head><title>register</title>
    <style>
          
        

.btn-group button {
  background-color:green; 
  border: 1px solid green; 
  color: white; 
  padding: 40px 800px; 
  cursor: pointer;
  float: left; 
}


.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; 
}


.btn-group button:hover {
  background-color: #3e8e41;
}
    
.l {
  background-image: url("car1.jpg");
  background-repeat: no-repeat;
  background-position: right;
  margin-right: 200px;
    width:70%;
    height: 90%;
    float:right;
    
}
    </style>

<body bgcolor="lightblue">
    <div class="btn-group">
  
        
    

        <a href="carlogin.php"><button >LOGIN</button></a>
    </div>
    <br>
    <br>
    <br>
    <div class=l>
    </div>
    <h1>NEW REGISTER</h1>
 <form name="myForm1" action="filldata.php" onSubmit="return test1()" method="POST">
     
        
FIRST NAME:<br>
<input type="text" name="firstname">
<br><br>
LAST NAME:<br>
<input type="text" name="lastname">
<br><br>
         BIRTHDAY:<br>
  <input type="date" name="bday">
<br><br>
     AGE:<br>
     <input type="text" name="age">
     <br><br>
         GENDER:<br>
          <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
         <br><br>
		 EMAIL:<br>
         <input type="email" name="email">
         <br><br>
         CONTACT NUMBER:<br>
         <input type="text" name="contact">
     <br><br>
    
     PASSWORD:<br>
     <input type="password" name="psw"><br><br>
          
     <br>

<input type="submit">

</form>
     <script type="text/javascript">
                function test1()
                {
                    var name=document.forms["myForm1"]["firstname"];
                    var name1=document.forms["myForm1"]["lastname"];
                    var email=document.forms["myForm1"]["email"];
                    var number=document.forms["myForm1"]["contact"];
                    var password=document.forms["myForm1"]["psw"];
                    
                    if(name.value=="")
                        {
                            window.alert("Please enter your firstname");
                            name.focus();
                            return false;
                            
                        }
                    if(name1.value=="")
                        {
                            window.alert("Please enter your lastname");
                            name.focus();
                            return false;
                            
                        }
                    if(email.value=="")
                        {
                            window.alert("Please enter your email");
                            name.focus();
                            return false;
                            
                        }
                    if(phone.value=="")
                        {
                            window.alert("Please enter your contact number");
                            name.focus();
                            return false;
                            
                        }
                    if(password.value=="")
                        {
                            window.alert("please enter your password");
                            name.focus();
                            return false;
                        }
                    return true;
                    
                }
            
            </script>
    
</body>
</head>
</html>