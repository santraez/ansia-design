<?php

    require 'includes/functions.php';

    addTemplate('header');

?>

<section class="register">

    <div class="register__info">

        <h3>Register Title</h3>

        <p>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nam numquam commodi ipsa corporis atque mollitia porro, pariatur voluptas quo, tempore expedita esse debitis veniam sapiente deleniti consequatur saepe amet.

        </p>

    </div>

    <div class="register__signup">

        <h3 class="register__signup--title">

            Sign up to ansiaDesign

        </h3>

        <div class="register__signup--input">

            <label for="" class="register-label">Display name</label>
            <input

                type="text"
                id=""
                name=""
                class="register-input"
                placeholder=""
                value=""

            >

            <label for="" class="register-label">Email</label>
            <input

                type="email"
                id=""
                name=""
                class="register-input"
                placeholder=""
                value=""

            >

            <label for="" class="register-label">Password</label>
            <input

                type="text"
                id=""
                name=""
                class="register-input"
                placeholder=""
                value=""

            >

            <label for="" class="register-label">Confirm Password</label>
            <input

                type="text"
                id=""
                name=""
                class="register-input"
                placeholder=""
                value=""

            >

            <input 
            
                type="submit"
                value="Sign Up"
                class="register-submit"
                
            >

        </div>

        <p class="register__signup--login">

            Already have an account?
            <a href="/login.php">
                Log in
            </a>

        </p>

    </div>

</section>

<?php

    addTemplate('footer-access');

?>