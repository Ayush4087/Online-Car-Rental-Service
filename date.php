<?php 
session_start();
echo '<p align="right">';
echo '<font face="Algerian" color="red">You are logged in as :- </font>'.$_SESSION["u_email"];
echo '</p>'
?>

<html>
<head><title>date and time</title>
    <style>
        

.btn-group button {
  background-color:green; 
  border: 1px solid green; 
  color: white; 
  padding: 35px 750px; 
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
        .q{
            background-color: orange;
            font-size: 20px;
            
            align-content:center;
            
        } 
        .car {
            background-size: cover;
            backface-visibility: visible;
            background-color: bisque;
            border-color: chocolate;
            border-width: 10px;
        }
        .details {float:right;
        font-family: monospace;
        font-size: 18px;}
    </style>
<body bgcolor="lightblue">
    
     <div class="btn-group">
    
  
     
    
<a href="terms.php"><button ><h3>TERMS</h3></button></a>   
       
    </div>
    <br>
    <br>
    <br>
    <div class=q>
	
    <form name="myForm2" action="bill.php" method="POST"> 
        <center>
		
        COUNTRY:
      <input type="text" name="country">
            <br><br>
            LOCATION:
        <input type="text" name="location">
            <br><br>
            
            PICK UP DATE:
            <input type="date" name="pick_time">
            <br><br>
             DROP-OFF DATE:
           <input type="date" name="drop_time">
            <br><br>
     PICK UP TIME:
           <input type="text" name="picktime">
            <br><br>
        TOTAL HOURS:
           <input type="text" name="hours">
            <br><br><br>
			  CAR TYPE:<br><br>
          <input type="radio" name="cartype" value="innova" checked> Innova
  <input type="radio" name="cartype" value="swift"> Swift Dzire
  <input type="radio" name="cartype" value="audi"> AudiQ3
         
            <br><br>
          <input type="submit">
        
        </center>
        </form>
      
       </div>
    <br>
    <br><br>
   
    </body>
    </head>
	</html>
            
            
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </center>
            
            </form>
        </div>
    
    
    
    
    
    
    
    
    
    
    
    
        </center>
    </form>
    




</body>
</head>
</html>