<head>
<body>
<link rel="stylesheet" href="loginstyle.css">
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">

                <h1 class="opacity">LOGIN</h1>
                <form method="post" action="">
                    <input type="text" name ="username" placeholder="USERNAME" />
                    <input type="password" name = "pass" placeholder="PASSWORD" />
                
                    <button name= "submit" id ="submit" class="opacity">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <!--<a href="">SIGN UP</a>
                    <a href="">FORGOT PASSWORD</a>-->
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>
<?php
if(isset($_POST['submit']))
{
 include 'dbconnect.php';
$conn=mysqli_connect($server,$username,$password,$dbname);
$a=$_POST['username'];
$b=$_POST['pass'];


$sqlview="select * from users where username='$a' and pass='$b' ";
  $res=mysqli_query($conn,$sqlview);
  $n=mysqli_num_rows($res);
  if($n==1)
  {
    header('location:index1.php');
  }
  else if($a==''&&$b=='')
  {
    echo "<script type='text/javascript'>alert('Please Enter Details properly');window.location='loginpage.php';</script>";

  }
  else if($a=='')
  {
    echo "<script type='text/javascript'>alert('Please Enter Username');window.location='loginpage.php';</script>";

  }
  else if($b=='')
  {
    echo "<script type='text/javascript'>alert('Please Enter Password');window.location='loginpage.php';</script>";

  }
  else
  {
    echo "<script type='text/javascript'>alert('Invalid credentials');window.location='loginpage.php';</script>";

  }

}


?>
<script>
const themes = [
    /*{
        background: "#1A1A2E",
        color: "#FFFFFF",
        primaryColor: "#0F3460"
    },
    {
        background: "#461220",
        color: "#FFFFFF",
        primaryColor: "#E94560"
    },
    {
        background: "#192A51",
        color: "#FFFFFF",
        primaryColor: "#967AA1"
    },
    {
        background: "#F7B267",
        color: "#000000",
        primaryColor: "#F4845F"
    },
    {
        background: "#F25F5C",
        color: "#000000",
        primaryColor: "#642B36"
    },
    {
        background: "#231F20",
        color: "#FFF",
        primaryColor: "#BB4430"
    }
    */
];

const setTheme = (theme) => {
    const root = document.querySelector(":root");
    root.style.setProperty("--background", theme.background);
    root.style.setProperty("--color", theme.color);
    root.style.setProperty("--primary-color", theme.primaryColor);
    root.style.setProperty("--glass-color", theme.glassColor);
};

const displayThemeButtons = () => {
    const btnContainer = document.querySelector(".theme-btn-container");
    themes.forEach((theme) => {
        const div = document.createElement("div");
        div.className = "theme-btn";
        div.style.cssText = `background: ${theme.background}; width: 25px; height: 25px`;
        btnContainer.appendChild(div);
        div.addEventListener("click", () => setTheme(theme));
    });
};

displayThemeButtons();
</script>
</head>
