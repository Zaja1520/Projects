<!DOCTYPE html>
<html lang="en">
<head>
<!-- <link rel="stylesheet" href="includes\css\navbar.css"> -->
</head>
<body>    
    <header class="nav-container">
        <img class="logo" src="logo" alt="logo">
        <nav>
            <ul class="nav_links">
                <li><a href="../pages\register.php">Signup</a></li>
              
            </ul>
        </nav>
        <a href="includes\logout.php"><button>Logout</button></a>
    </header>
</body>
<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

header {
    box-sizing: border-box;
    margin: 0;
    padding: 5px 10%;
    background-color: #24252A;
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
    padding: 5px;
    text-decoration: none;
}

.logo {
    margin-right: auto;
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

header button {
    padding: 9x 25px;
    background-color: rgba(0,136,169,1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}
header button:hover{
    background-color: rgb(29, 128, 153);
}

</style>
</html>