<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System</title>
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
</head>
<header>
    <nav>
       
        <ul class="nav nav-list">
            <li  class="nav-item"> <a class="nav-link active" href="#Myinformation">Home</a></li>
            <li  class="nav-item" ><a class="nav-link" href="#LoginPart">Login</a></li>
            <li  class="nav-item" ><a class="nav-link" href="#RegistrationPart">Register</a></li>
        </ul>
    </nav>
</header>

<body>
    
    <section id="Myinformation">
    <h1 class="aboutlogo" >About Me</h1>
    <div class="aboutMyself">
    <div class="MyPersonalInfo">
    <div>
    <p>
        Hi, my name is Jay Cee Cruz I'm a second-year IT student at Don Honorio Ventura State University. I'm now working on 
        improving my Web Development skills. I'm also doing some basic backend development and am eager 
        to learn and participate in trainings.
    </p>
    </div>
    </div>

    <div class="Aboutthiswebsite">
        <div class="thiswebsite">
            
        <div>
        <h1>About this website</h1>
        <p>
            This website is a simple registration system that allows users to register and login. 
            This website is created using HTML, CSS, PHP, JavaScript and MySQL.
        </p>
        </div>
        <div>
        <img class="logos" src="assets/Logo.png" alt="Programming language" width="350px">
        
    </div>
    </div>
    </div>          
    </div>
    </section>

    <section id="LoginPart">
    <div>
        <form action="" method="post">                
        <div class="container">
            <h1 style="font-size: 45px; margin-bottom: 30px; text-align: center; color:#1f7f55;">Login your account</h1>
            <label for="uname"><b>Username</b></label>
            <input type="text" name="uname" required>

            <label for="pwd"><b>Password</b></label>
            <input type="password" name="pwd" required>
                            
            <button type="submit">Login</button>
        </div>
                    
        </form>
                
        </div>
    </section>

    <section id="RegistrationPart">
        <div>
        <form action="Register.php" method="post">                
            <div class="container">
            <h1 style="font-size: 35px; margin-bottom: 20px; text-align: center; color: #1f7f55;">Register Account</h1>
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" required>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" required>
            <label for="age"><b>Age</b></label>
            <input type="number" name="age" required>
            <label for="sex">Sex</label><br>
            <select name="sex" id="sex" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" required>              
            <button type="submit">Register</button>
            </div>
                
        </form>
            
      </div>
    </section>


<script type="text/javascript" src="script/main.js"></script>


</body>
</html>