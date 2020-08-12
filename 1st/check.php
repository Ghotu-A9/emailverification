
<?php
$conn = mysqli_connect("localhost","root","","emails");
if (!$conn) {
trigger_error(mysqli_connect_error());
} 
       
       if(empty($_POST['name'])||empty($_POST['email'])){echo '<h1 style="font-family:cursive; background-image:linear-gradient(-154deg,rgba(232, 233, 231, 0.836),rgba(280, 210, 210, 0.753));">Please,Enter Name and Email </h1>';
         }
          
     
   
    
 
       else{
           $name = $_POST['name'];
           $email = $_POST['email'];
          

                 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo '<h1  style="font-family:cursive;background-image:linear-gradient(-154deg,rgba(232, 233, 231, 0.836),rgba(280, 210, 210, 0.753))">Enter a Valid Name or Email!</h1>';
                  }
                elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo '<h1  style="font-family:cursive;background-image:linear-gradient(-154deg,rgba(232, 233, 231, 0.836),rgba(280, 210, 210, 0.753))">Enter a Valid Name or Email!</h1>';
                                                  }
                 
         
        else{
       $sql = "SELECT * FROM email WHERE mail='$email'" ;

       $result = mysqli_query( $conn,$sql ) ;

           if( mysqli_num_rows( $result ) > 0 )
           {
           echo '<h1 style="font-family:cursive; background-image:linear-gradient(-154deg,rgba(232, 233, 231, 0.836),rgba(280, 210, 210, 0.753));">Sorry,You have already submitted that email! </h1>';
            
           } 
           else{echo'<h1 style="font-family:cursive;background-image:linear-gradient(-154deg,rgba(232, 233, 231, 0.836),rgba(280, 210, 210, 0.753))">Thanks,for submitting <p> (we will never share it with anybody)</p></h1>';
           $sql1="INSERT INTO emails.email(`name`,`mail`,`date`) VALUES ('$name', '$email', current_timestamp());";
                  if($conn->query($sql1) == true){
                          $insert=false;}
                  else{
                    echo "ERROR: $sql1 <br> $conn->error";}

$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($email,"My subject",$msg);

                    }
$conn->close();}} 


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
    button:hover { 
  opacity: 0.8;
}button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius:10px;
  cursor: pointer;
  width: 50%;
  border: 2px solid grey;
  
}

.d1{margin-top:0%;
    padding:0;
    width:auto;
    height:auto;}
   
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
  <body style="background-image:url(bim1.jfif);background-repeat:no-repeat;background-size:cover;  background-position: center;margin:0; padding:0;"> 
   
        <button class="submit"style="display:flex; width: auto; background-color:rgb(75, 236, 233);font-size: larger; width: 40% ;margin-left:auto;margin-right:auto;" onclick="window.location.href='http://localhost/xampp/html.php'"> Back </button>
        <button type="button" class="cancelbtn" style="width: auto;margin-left:auto;margin-right:auto;  display:flex; border:2px solid grey; font-size: larger;">Cancel</button>   
     
    
  </body>
</html>