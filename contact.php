<?php

    require 'includes/functions.php';

    addTemplate('header');

?>

<section class="container contact-us">

    <h3 class="contact-us__title">

            Contact Us

    </h3>

    <p>
        We want to hear from you
    </p>
    

    <div class="contact-us__input">

        <label for="" class="contact-us-label">Email</label>
        <input

            type="email"
            id=""
            name=""
            class="contact-us-input"
            placeholder=""
            value=""

        >

        <label for="" class="contact-us-label">Subject</label>
        <input

            type="text"
            id=""
            name=""
            class="contact-us-input"
            placeholder=""
            value=""

        >

        <label for="descripcion">Message</label>
        <textarea id="descripcion" name="descripcion"></textarea>

        <input 
            
            type="submit"
            value="Log in"
            class="contact-us-submit"
                
        >

    </div>

    <p>Have any questions or suggestions?</p>
    <p>Reach out to us ..</p>

</section>

<?php

    addTemplate('footer-contact');

?>