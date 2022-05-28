<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="project description">

    <title>ansiaDesign</title>

    <!--preload-->
    <link rel="preload" href="build/css/app.css" as="style">

    <!--prefetch-->
    <link rel="prefetch" href="#" as="document">

	<!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;700&display=swap" rel="stylesheet"> 
	
    <!---icon-->
	<link rel="icon" type="image/png" href="build/img/thumb/logo.png"/>
    
    <!--styles-->
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="/build/fontello/font-css/fontello.css">

</head>
<body>

    <header class="header">

        <div class="container header__nav">

            <nav class="header__nav--navigation">
                
                <a href="/" class="logo-nav">

                    <picture>

			            <source srcset="build/img/thumb/logo.avif" type="image/avif">
			            <source srcset="build/img/thumb/logo.webp" type="image/webp">
			            <img loading="lazy" width="200" height="300" src="build/img/thumb/logo.jpg" alt="logo">
                   
                    </picture>

                </a>
                <a href="/" class="title-nav"><span>ansia</span>Design</a>
                <a href="/about.php">About</a>
                <a href="/collections.php">Collections</a>
                <a href="/store.php">Store</a>

            </nav>

            <div class="header__nav--access">

                <a href="/login.php">Log in</a>
                <a href="/signup.php" class="signup-nav">Sign up</a>

            </div>

        </div>

    </header>