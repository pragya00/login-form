<!DOCTYPE html>
<html>
    <style>
        body{
            font-family: Helvetica;
            
        }
        .div{
            height: 680px;
            widows: 100%;
            margin-top: -20px;
            
            background-color:plum;
        }
        .div1{
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 350px;
            width: 500px; 
            border-radius: 10px;
            background-color:white;
        }
        
        .lbl{
            font-size: 25px;
            margin-left: -200px;
        }
        .inpt{
            font-size: 20px;
            height: 30px;
            margin-left: 20px;
            width: 400px;
            border:none;
            border-bottom: 2px solid palevioletred;
        }
        .btn{
            margin-left: 20px;
             font-size: 30px;
             height: 40px;
             width: 400px;
             border-radius: 15px;
             margin-top: 20px;
             background-color: blueviolet;
        }
        
    </style>
    <body>
        
        <div class="div">
           <center>     
            <form action="logic.php" method="POST">
                
                <div class="div1">
                       <center><h1>Login Form</h1></center>
                    <label class="lbl">Enter Username</label><br>
                    <input class="inpt" type="text"  name="username" required><br>
                    <label class="lbl">Enter Password</label><br>
                    <input class="inpt" type="password"  name="pass" required><br>
                    <button type="submit" class="btn">Login</button><br>
                    <label style="margin-left: 20px;">
                        <input type="checkbox" checked="checked" name="remember">
                    Rememeber me!</label>
                </div>
            </form></center>
        </div>
    </body>
</html>