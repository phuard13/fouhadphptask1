<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

 <h3>Contact Me</h3>
<form action="processform.php" method="post">
  <p>
    <label for="first_name">First Name</label> <br />
    <input
      type="text"
      name="firstname"
      placeholder="enter your firstname"
    />
  </p>

  <p>
    <label for="last_name">Last Name</label> <br />
    <input type="text" name="lastname" placeholder="enter your lastname" />
  </p>
  <p>
    <label for="email">Email</label> <br />
    <input
      type="email"
      name="email"
      placeholder="enter your email"
      alt="required"
    />
  </p>

  <p>
    <label for="gender">Gender</label>
    <input type="radio" name="gender" /> Female
    <input type="radio" name="gender" /> Male
  </p>

  <p>
    <label for="your_message">Your Message</label> <br />
    <textarea name="" id="" cols="30" rows="10"></textarea>
  </p>
  <button type="submit">Send Message</button>

  <p>
    <input type="checkbox" name="terms" required /> By Checking this box you
    agree to our terms and conditions
  </p>
</form>

   
<? php

?>
</body>
</html>