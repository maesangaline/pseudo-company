<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="Header">
    <meta name="keywords" content="">
    <meta name="author" content="Mae Sangaline">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="formFunction.js"></script>
</head>
<!-- Header navigation -->
<header>
    <nav>
        <ul class="left-nav">
            <li><a href="index.php" class="nav-button">Home</a></li>
            <li><a href="details.php" class="nav-button">Details</a></li>
            <li><a href="examples.php" class="nav-button">Examples</a></li>
            <li><a href="find-us.php" class="nav-button">Find Us</a></li>
        </ul>
        <ul class="right-nav">
            <li><a href="about.php" class="nav-button">About</a></li>
            <li>
                <form class="search-form" action=".php" method="get">
                <input type="text" class="search-input" placeholder="Search.." name="search">
                <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                </form>
            </li>
        </ul>
    </nav>
</header>
<!-- Body -->
<body>
    <div id="container">
<!-- Content begins -->