<?php


?>



<html>
<head>
</head>
<body>
<center>
    <form method="post" action="">
        <table>
            <tr>
                <td>
                    <fieldset>
                        <legend>REGISTRATION</legend>

         ID:<br />
		<input type="text" placeholder="id" name="id"/><br />
		
		
		password:<br />
	    <input type="password" placeholder='password' name="pw"/>
		<br />
		confirm password:<br/>
	    <input type="password" placeholder='re_password' name="pws"/>
		<br/>
		
		Name:<br />
		<input type="text" placeholder='FullName' name="um"/>
		<br/>
		Email:<br />
	    <input type="mail" placeholder='Email' name="ema"/>
		<br/>
		
		User type[user,admin]:<br />
	
				     <select>
					 
					    <option>useer</option>
						<option>admin</option>
						
						
					 </select>
						 
		
		<br/>
		
	
	    
						<input type="submit" name="register" value="Signup"/>
						<a href="">Login</a>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</center>

</body>
</html>