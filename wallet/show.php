<html>
 <head>
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="style.css">
 
 <style>

table
{
color:black;
border:none;
border-color:black;
font-size:20px;
margin-left:10px;
margin-bottom:-5px;
margin-top:20px;
}
input
{
font-size:15px;

}


.loginbox
{background:rgba(0,0,0,0.6);
position:absolute;
top:22%;
left:38%;
width:400px;
height:510px;

}

.avatar{
	width:100px;
	height:100px;
	border-radius:50%;
	position:absolute;
	top:-50px;
	left:calc(50% - 50px);
	border:2px solid white;
}
.loginbox h1
{
font-family:'Montserrat',sans-serif;
text-align:center;
margin-top:60px;
margin-bottom:10px;
 }

.loginbox tr
{
font-family:'Montserrat',sans-serif;
font-size:17px;
font-weight:bold;

} 
.loginbox td
{
font-family:'Montserrat',sans-serif;
padding:5px;
font-size:17px;
}
 
#b1
{
background-color:gold;
    color:black;
    width:95%;
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
	font-size:15px;
}
#b1:hover{
background-color:orange;
}

.td1
{
	color:orange;
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
		  <li><a style="color:orange;" href="login.php">LOGIN</a></li>
		  <li><a href="signup.php">SIGNUP</a></li>
		  <li><a href="manager.php">MANAGER LOGIN</a></li>
		  <li><a href="#">ABOUT</a></li>
		  <li><a href="#">CONTACT</a></li>
          </ul>		 
         </div> 
     </div> 
	
<?php
include('datacon.php');

$sid=$_GET['sid'];
$sql="SELECT * FROM `customer` WHERE `id`='$sid'";
$run=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($run);
?>
<div class="loginbox">
	<img src="signupavatar.png" class="avatar">
	<h1>USER DETAIL</h1>
	<hr>
<div class="d2">
<table>
<tr>
<td class="td1">NAME</td>
<td><?php echo $data['name'];?></td>
</tr>
<tr>
<td class="td1">ADDRESS</td>
<td><?php echo $data['address'];?></td>
</tr>
<tr>
<td class="td1">AGE</td>
<td><?php echo $data['age'];?></td>
</tr>
<tr>
<td class="td1">MOBILE</td>
<td><?php echo $data['mobile'];?></td>
</tr>
<tr>
<td class="td1">EMAIL</td>
<td><?php echo $data['email'];?></td>
</tr>
<tr>
<td class="td1">PASSWORD</td>
<td><?php echo $data['password'];?></td>
</tr>
<tr>
<td class="td1">BALANCE</td>
<td><?php echo $data['balance'];?></td>
</tr>
<td colspan="2"></br></br></br></br><button id="b1" onclick="location.href='Login.php';">LOGOUT</button></td>
</table>
</div>	
	 
</div>
</body>
</html>
