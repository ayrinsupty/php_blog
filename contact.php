<?php
	include 'inc/header.php';
?>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$fname = $fm -> validation($_POST['firstname']);
		$lname = $fm -> validation($_POST['lastname']);
		$email = $fm -> validation($_POST['email']);
		$body  = $fm -> validation($_POST['body']);

		$fname = mysqli_real_escape_string($db->link, $fname);
		$lname = mysqli_real_escape_string($db->link, $lname);
		$email = mysqli_real_escape_string($db->link, $email);
		$body  = mysqli_real_escape_string($db->link, $body);

		$error = "";
		if(empty($fname)){
			$error = "Insert First Name!";
		} elseif(!filter_var($fname, FILTER_SANITIZE_SPECIAL_CHARS)){
			$error = "Invalid first name!";
		} elseif(empty($lname)){
			$error = "Insert last Name!";
		} elseif(empty($email)){
			$error = "Insert Email Address!";
		} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = "Invalid Email Address!";
		} elseif(empty($body)){
			$error = "Insert Your Message!";
		} else {
			$msg = "Okay!";
		}
	}
?>
<div class="contentsection contemplete clear">
	<div class="maincontent clear">
		<div class="about">
			<h2>Contact us</h2>
			<?php
				if(isset($error)){
					echo "<span style='color:red'>$error</span>";
				}
				if(isset($msg)){
					echo "<span style='color:green'>$msg</span>";
				}
			?>
		<form action="" method="post">
			<table>
			<tr>
				<td>Your First Name:</td>
				<td>
				<input type="text" name="firstname" placeholder="Enter first Name"/>
				</td>
			</tr>
			<tr>
				<td>Your Last Name:</td>
				<td>
				<input type="text" name="lastname" placeholder="Enter Last Name"/>
				</td>
			</tr>
			
			<tr>
				<td>Email Address:</td>
				<td>
				<input type="text" name="email" placeholder="Enter Email Address"/>
				</td>
			</tr>
			<tr>
				<td>Your Message:</td>
				<td>
				<textarea name="body"></textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
				<input type="submit" name="submit" value="Send"/>
				</td>
			</tr>
			</table>
		<form>				
	</div>
</div>

<?php
	include 'inc/sidebar.php';
	include 'inc/footer.php';
?>		
