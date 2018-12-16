<html>
 <head>
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="style.css">
 
<style>
.updateform
{background:rgba(0,0,0,0.6);
position:absolute;
top:25%;
left:10%;
width:80%;
height:11%;
}
h1
{
font-family:'Montserrat',sans-serif;
text-align:center;
margin-top:10px;
margin-bottom:30px;
font-size:50px;
 }
 
.updateform th
{
font-family:'Montserrat',sans-serif;
font-size:17px;
font-weight:bold;
text-align:center;
color:orange;
}
 
.updateform input
{margin-top:11px;
width:80%;
font-family:'Open Sans',sans-serif;
}	
 
.updateform input[type="text"]
{
font-family:'Montserrat',sans-serif;	
border:none;
border-bottom:1px solid white;
background:transparent;
outline:none;
height:40px;
}

form
{
color:white;
font-size:20px;
text-align:center;
}



.result
{background-color:rgba(256,256,256,0.2);
position:absolute;
top:45%;
left:10%;
width:80%;
height:50%;

}
.result th
{
font-family:'Montserrat',sans-serif;
font-size:17px;
font-weight:bold;
text-align:center;
color:black;
background-color:orange;
}
.result td
{ background-color:black;
font-family:'Montserrat',sans-serif;
}
#b1
{
background-color:orange;
    color:black;
 
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
}
#b1:hover
{
background-color:gold;
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
 
<h1>UPDATE</h1> 
 <div class="updateform">
<table width="100%">
	 <form action="update.php" method="post">
     <tr>
	  <th>Enter Name :</th>
	  <td><input type="text" placeholder="Name" name="name" required/></td>
	  <th>Email :</th>
	  <td><input type="text" placeholder="Email" name="email" required/></td>
	<td><input id="b1" type="submit" value="SEARCH" name="button"/></td>
	</tr>
	  </form>
   </table>
   </div>
  
   </div> 
 </body>
 </html>
 
 
 
 <?php
 if(isset($_POST['button']))
 {
include('datacon.php');
$name=$_POST['name'];
$email=$_POST['email'];
$sql="SELECT * FROM `customer` WHERE `name`LIKE '$name' AND `email` LIKE '$email'";
$run= mysqli_query($con,$sql);
if(mysqli_num_rows($run)<1)
{
?>	
	<script>
		alert('NO RECORD FOUND!!');
		window.open('update.php','_self');
     </script>
<?php
}

else
{
	$count=0;
	while($data=mysqli_fetch_assoc($run))
	{
		$count++;
		?>
<div class="result">		
<table width="100%" border="2px" cellspacing="0px" cellpadding="3px">
<tr>
<th>S.no</th>
<th>Name</th>
<th>Age</th>
<th>Mobile</th>
<th>Email</th>
<th>Edit</th>
</tr>		
<tr>
<td><?php echo $count;?></td>
<td><?php echo $data['name'];?></td>
<td><?php echo $data['age'];?></td>
<td><?php echo $data['mobile'];?></td>
<td><?php echo $data['email'];?></td>
<td><a href="updateform.php?sid=<?php echo $data['id'];?>">Update</a></td>
</tr>
<?php
	}
}
 }
?>
</table>
</div>