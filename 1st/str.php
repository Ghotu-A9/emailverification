

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="shaf.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #00ffff;}

input[type=text], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #00ffff;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover { 
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
   background-color:  rgba(255, 0, 0, 0.5);
}

.div1 {
  text-align: center;
  margin: auto;
  padding-top:5%;
}

img.avatar {
  width: 10%;
  border-radius: 30%;
  margin: auto;
  position: relative;
  box-shadow:0 3px 3px 0 pink;
  
  
}
.avatar{animation:shake; }
.container {
  padding: 16px;
}

 

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body style="background-image:url(bim1.jfif);background-repeat:no-repeat;background-size:cover; background-position: center; margin:0;padding:0;">

<h2 style="color:rgb(0, 255, 64);border:1.3px solid gold; background-image:linear-gradient(-154deg,rgba(232, 233, 231, 0.836),rgba(280, 210, 210, 0.753)); margin-left:15%;margin-right:15%; ">Submit Your Email</h2>
 
<form action="check.php" method="post" style=" backdrop-filter: blur(30px);margin-left:15%;margin-right:15%;" >
  <div class="div1"
    style="background-image: radial-gradient(rgba(232, 233, 231, 0.836),rgba(217, 218, 210, 0.753),rgba(61, 223, 55, 0.473)); ">
    <img src="png1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container" style="background-image: radial-gradient(rgba(81, 255, 0, 0.644),rgba(13, 255, 53, 0.692),rgba(21, 243, 76, 0.678));">
    <input type="text" name="name" id="name" placeholder="Enter your name"
      style="background-image: radial-gradient(rgba(0, 255, 179, 0.788),rgba(31, 255, 218, 0.836),rgba(0, 255, 157, 0.555)); ">

    <input type="email" name="email" id="email" placeholder="Enter your email"
      style="background-image: radial-gradient(rgba(0, 255, 179, 0.788),rgba(31, 255, 218, 0.836),rgba(0, 255, 157, 0.555));">
        
      <input type="checkbox"  name=remember  >GET SUBSCRIBED</label>
  </div>

  <div class="container"
    style=" background-image: radial-gradient(rgba(232, 233, 231, 0.836),rgba(217, 218, 210, 0.753),rgba(61, 223, 55, 0.473)); ">
    
    <button class="submit"style="width: auto; background-color: rgba(172, 255, 47, 0.5);font-size: larger; width: 100%;border:2px solid rgba(255, 255,0, 0.76);box-shadow:0 2px 2px 0 rgba(255, 255,0, 0.76);">Submit</button>
      <button type="button" class="cancelbtn" style="width: 50%;margin-left:50%; display: inline-block; border:2px solid pink;box-shadow:0 2px 2px 0 pink;">Cancel</button>   
  </div>
</form>
</body>
</html>

