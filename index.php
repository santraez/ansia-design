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
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet"> 
	
    <!--styles-->
    <link rel="stylesheet" href="build/css/app.css">

</head>
<body>

    <header>

        <div class="container">

            <div>

                <picture>

			        <source srcset="build/img/normal/" type="image/avif">
			        <source srcset="build/img/normal/" type="image/webp">
			        <img loading="lazy" width="200" height="300" src="build/img/normal/" alt="logo">
		        
                </picture>

                <a href="/about.php">About</a>
                <a href="/collections.php">Collections</a>
                <a href="/store.php">Store</a>

            </div>

            <div>

                <a href="/login.php">Log in</a>
                <a href="/signup.php">Sign up</a>

            </div>

        </div>

    </header><!--header-->
    
    <footer>

        <div class="container">

            <div>

                <a href="/contact.php">Contact</a>

                <div>

                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>

                </div>
                
            </div>

            <div>

                <a href="/about.php">About</a>
                <a href="/collections.php">Collections</a>
                <a href="/store.php">Store</a>
                <a href="/login.php">Log in</a>
                <a href="/signup.php">Sign up</a>

            </div>

            <div>

                <p>

                    Todos los derechos Reservados <?php echo date('Y'); ?> &copy;

                </p>

            </div>
        </div>

    </footer><!--footer-->

    <!--scripts-->
    <script src="build/js/app.js"></script>
    <script src="build/js/modernizr.js"></script>

</body>
</html>