<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
 
<body>
<h2>Welcome to the Researcher Support Web Tool {{$user['fname']}}</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
<br/>
<a href="{{url('user/activation', $verify->token)}}">Verify Email</a>
</body>
 
</html>