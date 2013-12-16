<?php include 'core/init.php'; ?>
<!DOCTYPE html>
<head>
	<style>
		body{
			background:#333;
			font-family:Calibri, sans-serif;
			font-size:10pt;
			margin:0px;
			padding:0px;
			height:100%;
			border:0px solid green;
		}
		
		#mainDiv{
			width:99%;
			position:absolute;
			top:25%;
			margin:0px auto;
			border:0px solid red;
		}
		
		@media (max-height:400px){
			#mainDiv{
				position:absolute;
				top:5%;
			}
		}
		
		p{
			margin:10px 0px;
		}
		
		a, a:hover, a:active, a:focus, a:visited{
			color:#fff;
			font-weight:bold;
		}
		
		table{
			background:#111;
			color:#fff;
			padding:10px 25px;
			margin:0px auto;
			width:800px;
			height:290px;	
			border-radius:6px;
			box-shadow:0px 5px 30px rgba(0,0,0,0.5);
		}
		
		input{
			border:0px;
			border-radius:2px;
		}
		
		input[type="text"], input[type="password"], input[type="email"]{
			padding:8px 30px 8px 10px;
			transition:all 0.3s;
		}
		
		input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus{
			padding:8px 50px 8px 10px;
		}
		
		input[type="submit"], input[type="button"]{
			padding:8px 25px;
		}
	</style>
</head>
<body>
<div id="mainDiv">
	<table>
		<tr>
			<td style="width:49%; text-align:center;">
			<form action="" method="post">
				<input name="username" class="registerInputText" type="text" placeholder="Nome de utilizador" required/>
				<input name="password" class="registerInputText" type="password" placeholder="Palavra-passe" required/>
				<input name="repeatPassword" class="registerInputText" type="password" placeholder="Confirmar Palavra-passe" required/>
				<input name="email" class="registerInputText" type="email" placeholder="Email" required/>
				<p style="font-size:8pt;" /><input type="checkbox" required />Concordo com os <a href="#"> Termos e Serviços </a> da Store Portugal<sub style="font-size:18pt;">&reg;</sub>.
				<p style="position:absolute; bottom:3px;"/><input type="submit" value="Registar"/>
			</form>
			</td>
			
			<td style="background:#999; width:0.5px; border-radius:5px;">	
			<td>
			
			<td style="width:49%; text-align:center;">
			<form action="core/fuctions/login.php" method="post">
				<input type="text" name="username" placeholder="User" required/>
				<input type="password" name="password" placeholder="Password" required/>
				<p /><input type="checkbox" /> Manter sessão iniciada.
				<br /><br /><br /><br /><br /><br /><br />
				<p style="position:absolute; bottom:0px;"/>
					<input type="submit" value="Login"/>
					<input type="button" value="Esqueceu-se da password?"/>
			</form>
			</td>
		</tr>
	</table>
</div>
</body>
<html>

<?php require 'core/functions/register.php'; ?>