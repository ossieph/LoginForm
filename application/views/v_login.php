<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
  *{
    padding: 0; margin: 0;
}
h2{
  color: blue;
  text-align: center;
  font-family: arial;
  text-transform: uppercase;
  border: 3px solid grey;
  padding: 5px;
  width: 490px;
  margin: auto;
  margin-bottom: 10px;
  margin-top: 20px;
}
form {
    border: 3px solid grey;
    font-family: arial;
    width: 500px;
    margin: auto;
}

input[type=username], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid blue;
    box-sizing: border-box;
}
label{
  color:blue;
  text-transform: uppercase;
}
button {
    background-color: blue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.9;
}

.cancelbutton {
    width: auto;
    padding: 10px 18px;
    background-color: blue;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.profil {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 20px;

}
span{
  color:black;
}
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbutton {
       width: 100%;
    }
}
</style>
<body>

<h2>Login Form </h2>

<form action="login/aksi_login" method="post">
  <div class="imgcontainer">
  </div>
  <div class="w3-panel w3-pale-red w3-border">  
        <?php echo $this->session->flashdata('msg'); ?>  
  </div>
  <div class="container">
    <label><b>Username</b></label>
    <input type="username" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"><span>Remember me</span>
  </div>
</form>

</body>
</html>