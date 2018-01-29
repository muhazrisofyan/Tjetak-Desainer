<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email Verification</title>
  </head>
  <body>
    <h1>Click the Link To Verify Your Email</h1>

    Click the following link to verify your email {{url('/verifyemail/'.$email_token)}}
  </body>
</html>
