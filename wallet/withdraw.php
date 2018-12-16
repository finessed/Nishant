<html>
 <head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="style.css">
 <style>

 .wbox
{background:rgba(0,0,0,0.6);
position:absolute;
top:23%;
left:38%;
width:320px;
height:490px;

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

.wbox h1
{
font-family:'Montserrat',sans-serif;
text-align:center;
margin-top:60px;
margin-bottom:30px;
 }

.wbox input{
width:90%;
margin-bottom:5px;
font-family:'Open Sans',sans-serif;
}	

.wbox input[type="text"],input[type="password"],input[type="number"]
{
border:none;
border-bottom:1px solid white;
background:transparent;
outline:none;
height:40px;
}

.wbox p
{margin-bottom:-15px;
margin-top:20px;
margin-left:20px;
font-family:'Montserrat',sans-serif;
font-size:17px;
font-weight:bold;
text-align:left;
}	
 form
{
color:white;
font-size:20px;
text-align:center;
}

#b1
{
background-color:gold;
    color:black;
 
	font-weight:bold;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    text-align: center;
    border-radius:12px;
    margin-top:-20px;
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
 
    <div class="wbox">
	<img src="withdraw.jpg" class="avatar">
	<h1>WITHDRAW</h1>
     <form action="withdraw.php" method="post">
      <p>NAME</p><br/><input type="text" placeholder="Name" name="name"/>
	  <p>PASSWORD</p> <br/><input type="password" placeholder="Password" name="password"/>
       <p>WITHDRAW MONEY FROM WALLET </p><br/><input type="number" placeholder="Enter Amount(Rs.)" name="withdraw"/>
	  <br/><br/><br/><input id="b1" type="submit" value="WITHDRAW MONEY" name="button"/>
	  </form>
    </div> 
 
    </div>

 </body>
 </html>
 <?php
 if(isset($_POST['button']))
 {
	 $name=$_POST['name'];
	 $password=$_POST['password'];
	 $withdraw=$_POST['withdraw'];
	 include('datacon.php');
	 $qry="SELECT `id`, `balance` FROM `customer` WHERE `name`LIKE'$name' AND `password`LIKE '$password'";
	 $run= mysqli_query($con,$qry);
	 
	 if($run==true)
	 {
	while($data=mysqli_fetch_assoc($run))
	{
		$bal=$data['balance'];
		if($bal>=$withdraw)
		{
		?>
		<script>
		alert('Withdraw Successfully!!');
		window.open('wd.php?sid=<?php echo $data['id'];?>&wd=<?php echo $withdraw;?>','_self');
		</script>
<?php
		}
		else
	 {
		 ?>
		<script>
	alert('You have not enough balance');
	window.open('withdraw.php','_self');
	</script> 
	<?php
	 }
	}
    }
	 

 }
 
 ?>
 
 
 
 