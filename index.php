<!DOCTYPE html>
<html lang="en">
<head>
<title>AJAX WITH PHP LOGIN</title>
<link rel="shortcut icon" type="image/x-icon" href="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="robots" content="noindex" >
<script src="https://code.jquery.com/jquery-3.3.1.js" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
 
                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                    location.href = 'home.php?name='+jsonData.name;
                }
                else
                {
                    alert('User does not exist!');
                }
           }
       });
     });
});
</script>
</head>
<body>

<form id="loginform" method="post">
    <div style="padding:20px;border:solid 1px #666666;">
        <strong>Username:</strong>
        <input type="text" name="username" id="username" />
        <strong>Password:</strong>
        <input type="password" name="password" id="password" />    
        <input type="submit"  value="LogIn" />
    </div>
</form>

</body>
</html>
