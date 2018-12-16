
<html>
 <head>
 <link type="text/css" rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <style>
 
 
.button
{
background-color:orange;
border:none;
font-family:'Montserrat',sans-serif;
font-weight:bold;
font-size:12px;
border:2px solid black;
width:100px;
height:30px;
z-index:11;
position:relative;
color:black;
}
.addbuttondiv
{
	width:20%;
	margin-top:30%;
	margin-left:65px;
    position:absolute;  
   text-align:center;	
}
.wbuttondiv
{
	width:20%;
	margin-top:30%;
    margin-left:385px;
    position:absolute;
    text-align:center;	
}
.dbuttondiv
{
	width:20%;
	margin-top:30%;
	margin-left:705px;
    position:absolute;   
    text-align:center;
	}
.ubuttondiv
{
	width:20%;
	margin-top:30%;
	margin-left:1025px;
    position:absolute;   
    text-align:center;
	}

.avatar{
	width:100px;
	height:100px;
	border-radius:50%;
	position:absolute;
	top:200px;
	left:calc(50% - 50px);
	border:2px solid white;
}	
.detail
{
	font-size:20px;
	margin-top:20px;
}
 .add{
      width:20%;
      height:58.5%;
	  border-radius:10%;
	  text-align:center;
      background-color:rgba(256,256,256,0.2);
      font-family:'Montserrat',sans-serif;
      color:orange;
      text-shadow:5px 5px 25px black;
	  font-weight:bold;
      font-size:40px;
      position: absolute;
      top:25%;
      left:65px;
	  padding-top:20px;
    	border:3px solid white;  
		  }


.withdraw {
        width:20%;
	    height:58.5%;
	    border-radius:10%;
	    text-align:center;
        background-color:rgba(256,256,256,0.2);
        font-family:'Montserrat',sans-serif;
        color:orange;
	 	text-shadow:5px 5px 25px black;
		font-weight:bold;
	    font-size:40px;
        position: absolute;
        top:25%;
        left:385px;
        padding-top:20px;
		border:3px solid white;
		}

.delete{
      width:20%;
      height:61.5%;
	   border-radius:10%;
	  text-align:center;
      background-color:rgba(256,256,256,0.2);
      font-family:'Montserrat',sans-serif;
      color:orange;
      text-shadow:5px 5px 25px black;
	  font-weight:bold;
      font-size:40px;
      position: absolute;
      top:25%;
      left:705px;
      border:3px solid white;
	  }
.update{
      width:20%;
      height:61.5%;
	   border-radius:10%;
	  text-align:center;
      background-color:rgba(256,256,256,0.2);
      font-family:'Montserrat',sans-serif;
      color:orange;
      text-shadow:5px 5px 25px black;
	  font-weight:bold;
      font-size:40px;
      position: absolute;
      top:25%;
      left:1025px;
      border:3px solid white;
	  }
#b1
{
background-color:gold;
    color:black;
    width:30%;
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
	font-size:15px;
	margin-top:38%;
    margin-left:35%;
	
	}
#b1:hover{
background-color:orange;
}
</style>

 </head>
 <body>
<div class="BGIMG">
     <div class="menu"> 
	      <div class="leftmenu">

          </div>
      
	     <div class="rightmenu">
          <ul>
          <li><a href="home.php">HOME</a></li>
		  <li><a href="login.php">LOGIN</a></li>
		  <li><a href="signup.php">SIGNUP</a></li>
		  <li><a style="color:orange;" href="manager.php">MANAGER LOGIN</a></li>
		  <li><a href="#">ABOUT</a></li>
		  <li><a href="#">CONTACT</a></li>
          </ul>		 
         </div> 
     </div> 
 
  
  <div class="add">ADD 
  <p class="detail">Add Money to you Wallet</p><img src="addmoney.jpg" class="avatar">
  </div>
  <div class="addbuttondiv"><button class="button" onclick="location.href='add.php';">CLICK</button></div>
  
  <div class="withdraw">WITHDRAW 
  <p class="detail">Withdraw Money from you Wallet</p><img src="withdraw.jpg" class="avatar">
  </div>
  <div class="wbuttondiv"><button class="button" onclick="location.href='withdraw.php';">CLICK</button></div>
  
  <div class="delete">DELETE ACCOUNT 
  <p class="detail">If you want to delete your account</p><img src="delete.jpg" class="avatar">
  </div>
  <div class="dbuttondiv"><button class="button" onclick="location.href='delete.php';">CLICK</button></div>
 
  <div class="update">UPDATE ACCOUNT 
  <p class="detail">If you want to update your detail</p><img src="update.jpg" class="avatar">
  </div>
  <div class="ubuttondiv"><button class="button" onclick="location.href='update.php';">CLICK</button></div>
  
  <div class="HOME"><button id="b1" onclick="location.href='manager.php';">LOGOUT</button></div>
  
 
 
</div>
</div>
 </body>
 </html>