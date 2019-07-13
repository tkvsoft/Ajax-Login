<!DOCTYPE html>
<html lang="en">
<head>
<title>AJAX LOGIN</title>
<link rel="shortcut icon" type="image/x-icon" href="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="">
<meta name="robots" content="noindex" >
<script src="jquery-3.3.1.js" language="javascript"></script>
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

</body>
</html>