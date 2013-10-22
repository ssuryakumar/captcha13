<?php
include 'db.inc.php';

$db=mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) or die('unable to connect . ');

mysql_select_db(MYSQL_DB,$db) or die(mysql_error($db));

$fullname=(isset($_POST['name']))?trim($_POST['name']):'';
$email=(isset($_POST['email']))?trim($_POST['email']):'';
$sex=(isset($_POST['sex'])?trim($_POST['sex']):'');
$phone_no=(isset($_POST['phone_no']))?trim($_POST['phone_no']):'';
$year=(isset($_POST['year']))?trim($_POST['year']):'';
$department=(isset($_POST['department']))?trim($_POST['department']):'';
$college_name=(isset($_POST['college_name']))?trim($_POST['college_name']):'';


if(isset($_POST['submit']) && ($_POST['submit'] == 'submit'))
{
     $errors=array();
    
    if(empty($fullname))
    {
        $errors[]='ENTER YOUR NAME';
    }
     elseif(empty($email))
    {
        $errors[]='ENTER YOUR EMAIL';
    }
    elseif(empty($sex)) {
    	 $errors[]='ENTER YOUR SEX';
    }
	 elseif(empty($phone_no)) {
    	 $errors[]='ENTER YOUR PHONE NUMBER';
    }
 	elseif(empty($year)) {
    	 $errors[]='ENTER YOUR YEAR';
    }
	 elseif(empty($department)) {
    	 $errors[]='ENTER YOUR DEPARTMENT';
    }
	 elseif(empty($college_name)) {
    	 $errors[]='ENTER YOUR COLLEGE NAME';
    }
    elseif(count($errors) >0)
    {
        echo'<p style="color: white;"> Unable to process </p>';
        echo '<ul style="color: white;">';
        foreach($errors as $error)
        {
            echo'<li>'.$error.'</li>';
        }
        echo '</ul>';
    }
    else{
        $query='SELECT * FROM register WHERE email="'.$email.'"';
        $result=mysql_query($query,$db) or die(mysql_error($db));
        $rows =mysql_num_rows($result);
       
        if($rows > 0)
        {     /*     
            $_SESSION['logged']=1;
            $_SESSION['username']="$username";
            header('Refresh: 0; URL=home2.php');
            echo '<head><link rel="stylesheet" href="css/style.css"  /></head><body style="color: white;">YOU ARE BEING REDIRECTED TO MAIN PAGE . PLEASE WAIT .......</body>';
           */
           echo 'You have already registered with us . Thank you :) ';
            die();
        }
        else{
        	$random=rand(121212,999999);
           $query1='INSERT INTO register(name,random_number,email,sex,phone_no,year,department,college_name) 
							VALUES
							(
								"'.$fullname.'",
								"'.$random.'",
								"'.$email.'",
								"'.$sex.'",
								"'.$phone_no.'",
								"'.$year.'",
								"'.$department.'",
								"'.$college_name.'"							
							)';
				$results=mysql_query($query1, $db) or die(mysql_error($db));
				$headers=array();
				$headers[]='MIME-Version: 1.0';
				$headers[]='Content-type: text/html; charset=iso-8859-1';
				$headers[]='Content-Transfer-Encoding: 7bit';
				$headers[]='From : no-reply@captcha13.in';
				$from_address='From:'.'no-reply@captcha13.in'."\r\n";
				$subject ='CAPTCHA-13 Registration';
				$message = "Congratulations</h1><br /><h2>You have been successfully registered for CAPTCHA'13.Keep looking forward for exciting experience on the day.
				 Your unique id is<b> ".$random
				." Bring your college id along with the unique id . <br />Visit: http://www.captcha13.in  for further details";
				$success= mail($email, $subject, $message, join("\r\n",$headers));
				
				if($success){
					echo '<h1>CONGRATULATIONS</h1>';
					echo "<p>You have been registered to CAPTCHA'13 and email has been sent to you</p>";
					
				}
			
			echo '<h1>success</h1>';
			die();
						
			
        }
    }
}


?>



<!DOCTYPE html>
<html>
	<head>
			<style type="text/css">
					h1{
							display: inline-block;
							font-size: 20px;		
							color: white;	
							text-shadow: 0px 0px 10px black;	
					}
                    #submit{
                    
                    text-align: center;
                    font-size: 20px;
                    height: 100px;
                    width: 200px;
                    background: black;
                    color: white;
                    }
			</style>
			 			  <script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
			 			  
			<script type="text/javascript" >
				function validation_form(){
						var name=document.form1.name.value;
						var email=document.form1.email.value;
						var sex=document.form1.sex.value;
						var phone_no=document.form1.phone_no.value;
						var year=document.form1.year.value;
						var department=document.form1.department.value;
						var college=document.form1.college_name.value;
						
						if(name == "" || name==null){
							alert("Enter your name");			
								return false;
						}	
						else if(email==""|| email==null){
								alert("Enter your email address");		
									return false;	
						}		
						
						else if(phone_no==""|| phone_no==null){
								alert("Enter your phone number");	
									return false;			
						}	
					
						else if(department ==""|| department==null){
								alert("Enter your department");		
									return false;		
						}	
						else if(college == ""|| college==null){
								alert("Enter your college name");	
										return false;		
						}		
				}
			</script>
	</head>
	<body>
			<form action="register.php" name="form1" method="post" onsubmit="return validation_form()">
			<table>
				<tr>
				<td><h1>FullName:</h1> </td><td><input type="text" name="name" /></td>
				</tr>
				<tr>
				<td><h1>Email :</h1></td><td> <input type="email" name="email" /></td>
				</tr>
				<tr>
				<td><h1>Sex:</h1></td><td><input type="radio" name="sex" value="male" checked="checked" /><h1>Male</h1><br /> <input type="radio" name="sex" value="female" /><h1>Female</h1></td>
				</tr>
				<tr>
				<td><h1>Phone No:</h1></td><td> <input type="text" name="phone_no" /></td>
				</tr>
				<tr>
				<td><h1>Year :</h1></td><td><input type="radio" name="year" value="1" checked="checked" /><h1>1st Year </h1><br />
						<input type="radio" name="year" value="2" /><h1>2nd Year</h1> <br />
						<input type="radio" name="year" value="3" /><h1>3rd Year </h1><br />
						 <input type="radio" name="year" value="4" /><h1>4th Year</h1></td>
				</tr>
				<tr>	<td><h1>Department:</h1></td><td>  <select name="department"  style="border-radius: 3px; padding-top: 1px;">
                                                            <option value="information_technology">Information Technology</option>
                                                            <option value="computer_science">Computer Science And ENGG.</option>
                                                            <option value="aeronautical">Aeronautical Engineering</option>
                                                            <option value="automobile">Automobile Engineering</option>
                                                            <option value="biomedical">Bio Medical ENGG</option>
                                                            <option value="biotechnology">Bio-Technology</option>
                                                            <option value="chemical">Chemical Engineering</option>
                                                            <option value="civil">Civil Engineering</option>
                                                            <option value="eee">Electrical And Electronics ENGG.</option>
                                                            <option value="ece">Electronics And Communication ENGG.</option>
                                                            <option value="eie">Electronics And Instrumentation ENGG.</option>
                                                            <option value="mechanical">Mechanical Engineering</option>
                                                            <option value="production">Production Engineering</option>
                                                            <option value="other">Other</option>
                                                        </select></td>
				</tr>
				<tr>	<td><h1>College Name:</h1></td><td> <input type="text" name="college_name" size="50"/></td>
				</tr>
				
				<!----captcha -------->
				<tr>
				<td>
							 <script type="text/javascript"
       src="http://www.google.com/recaptcha/api/challenge?k=6LfYGecSAAAAACuY-UTR_CwLZGGDuCto6iwkC7cQ">
    </script>
    <noscript>
       <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LfYGecSAAAAACuY-UTR_CwLZGGDuCto6iwkC7cQ"
           height="300" width="500" frameborder="0"></iframe><br>
       <textarea name="recaptcha_challenge_field" rows="3" cols="40">
       </textarea>
       <input type="hidden" name="recaptcha_response_field"
           value="manual_challenge">
    </noscript>
				
			<td><input type="submit" value="submit" name="submit" id="submit"/><td></tr>
			</table>
 			 </form>

	</body>
</html>
