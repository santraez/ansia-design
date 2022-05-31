<?php

    require 'includes/functions.php';

    addTemplate('header');

?>

<section class="container access">

    <h3 class="access__title">

            Log in to ansiaDesign

    </h3>

    <form class="access__input" method="post" action="">

        <label for="" class="access-label">Email</label>
        <input

            type="email"
            id=""
            name=""
            class="access-input"
            placeholder=""
            value=""

        >

        <div class="access-password">

            <label for="" class="access-label">Password</label>
            <a href="#" class="access-forgot">Forgot password?</a>

        </div>
        <input

            type="text"
            id=""
            name=""
            class="access-input"
            placeholder=""
            value=""

        >

        <input 
            
            type="submit"
            value="Log in"
            class="access-submit"
                
        >

    </form>

    <p class="access__signup">

        Don't have an account? 
        <a href="/signup.php">
            Sign up
        </a>

    </p>

</section>

<?php

    addTemplate('footer-access');

?>