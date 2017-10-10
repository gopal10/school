<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link href="https://fonts.googleapis.com/css?family=Abel|Amatic+SC|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="icon" 
      type="image/jpg" 
      id="icon"
      href="logo5.jpg">
 
   <style>
      /* Form */
.form {
  position: relative;
  z-index: 1;
   background: url("") no-repeat center ;
  max-width: 300px;
  margin: 0 auto 100px;
  padding: 30px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  text-align: right;
}
.form .thumbnail {
  background: #fff;
  width: 150px;
  height: 150px;
  margin: 0 auto 30px;
  padding: 50px 30px;
 
  box-sizing: border-box;
}
.form .thumbnail img {
  display: block;
  width: 100%;
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  outline: 0;
  background: #EF3B3A;
  width: 100%;
  border: 0;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #FF6347;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
/* END Form */
/* Demo Purposes */
body {
  background: #fff;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body:before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  background: rgba(255, 255, 255, 0.8);
  width: 100%;
  height: 100%;
}
#video {
  z-index: -99;
  position: fixed;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}
/*old css data*/
#cover {
  background: url("maincover.jpg") no-repeat center ;
  background-size:cover;
  background-attachment:fixed;
  height: 1000px;
  position: relative;
  text-align: center;
  top: -55px;
  width: 100%;
}
.navigation {
  background-color: rgba(255, 255, 255, 0.9);
  overflow-y: auto;
  position: fixed;
  left: 0;
  top: 0;
  text-align: center;
  width: 100%;
  z-index: 10000;
}
ul {
  padding: 0;
}
li {
  color: #14213D;
  display: inline-block;
  font-family: 'Abel', sans-serif;
  font-size: 16px;
  font-weight: 300;
  margin: 16px 20px;
  text-transform: uppercase;
}
#logo {
  color: #FCA311;
  font-family: 'Raleway', sans-serif;
  font-size: 26px;
  padding: 0px 50px;
}
.cover-content {
  box-sizing: border-box;
 
  position: relative;
  text-align: right;
  top: 280px;
  width: 70%;
}
h1 {
  color: #FFF;
  font-family: 'Amatic SC', cursive;
  font-size: 72px;
  line-height: 60px;
  padding: 20px 10px;
  text-align: center;
}
h2 {
  color: #FF4500;
  font-family: 'Raleway', sans-serif;
  font-size: 42px;
  font-weight: 300;
  text-align: center;
}
h3 {
  color: #14213D;
  font-family: 'Abel', sans-serif;
  font-size: 28px;
  text-align: center;
  text-transform: uppercase;
}
h4 {
  color: #FCA311;
  font-family: 'Abel', sans-serif;
  font-size: 24px;
  margin: 0px 0px 50px 0px;
}
p {
  color: #333;
  font-family: 'Raleway', sans-serif;
  font-size: 16px;
  font-weight: 300;
}
a {
  text-decoration: none;
}
.btn {
 
  
  background-color: #ff4500;
  font-family: 'Raleway', sans-serif;
 
}
#btn{
background-color:#ff4500;
}
.products {
  background: #EEEFF1;
  box-sizing: border-box;
  width: 90%;
  margin: 20px auto;
  padding: 20px 0px;
  text-align: center;
}
.product {
  display: inline-block;
  margin: 0px 2% 80px 2%;
  text-align: center;
  width: 45%;
}
.product img {
  width: 100%;
}
.blue {
  color: #14213D !important;
}
.footer{
    background-color: #333;
  color: #fff;
  padding: 30px 100px ;
}
.footer p {
    font-family: 'Raleway', sans-serif;
    color:#EEEFF1;
  text-transform: uppercase;
  font-size: 20px;
  position:center;
}
.okok{
    padding-top: 0px;
    width:1400px;
        height:1600px;
      position: relative;
       margin-top: 10px; 
}
.caa{
color:#ff0000;
}
  </style>    
  
   
  
  
</head>
<body>


    
<div id="cover">
    <div class="cover-content">
     
<div class="form">

 
  <div class="login-form">
  <form action="logincon.php" method="POST">
    <input type="text" id="user" name="username" placeholder="Username"/>
    <input type="password" id="pass" name="password" placeholder="Password"/>
    <input type="submit" id="btn" value="Login" />
  </form>
   
  </div>
</div>

</div>
</div>
</body>

</html>