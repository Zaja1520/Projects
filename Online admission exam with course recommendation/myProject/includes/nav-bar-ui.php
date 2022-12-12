<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>    
    <header class="nav-container">
        <a href="../../myProject" class="logo" src="logo" alt="logo">OAECR </a>
        <nav>
            <ul class="nav_links">
                <li><a href="pages/login.php">Login</li>
                <li><a href="pages\register.php">Signup</a></li>
              
            </ul>
        </nav>
        <a href="includes\logout.php"><button>Logout</button></a>
    </header>
</body>
<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

.nav-container{
    height: auto;
}
header {
    box-sizing: border-box;
    margin: 0;
    padding: 10px 10% 10px 10%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

header li, header a, header button{
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    font-size: 16px;
    color: #edf0f1;
    display:inline-block;
    margin: 0px 10px 0px 0px;
    text-decoration: none;
}

.logo {
    margin-right: auto;
    text-decoration: none;
    font-size: 1.5rem;
}

.nav_links{
    list-style: none;
}

.nav_links li a{
    transition: all 0.3s ease 0s;
}
.nav_links li a:hover{
    color: #0088a9;
}

header a button {
    background-color: rgba(0,136,169,1);
    border: none;
    border-radius: 20px;
    cursor: pointer;
    padding: 3px;
    margin: 0px 0px 0px 10px;
    transition: all 0.3s ease 0s;
}
header button:hover{
    background-color: rgb(29, 128, 153);
}

</style>
</html>