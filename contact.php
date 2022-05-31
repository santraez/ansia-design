<?php

    require 'includes/functions.php';

    addTemplate('header');

?>

<section class="container contact-us">

    <h3 class="contact-us__title">

            Contact Us

    </h3>

    <p class="contact-us-text1">
        We want to hear from you.
    </p>
    
    <form class="contact-us__input" method="post" action="">

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

        <label class="contact-us-label" for="">Message</label>
        <textarea class="contact-us-message" id="" name="" rows="10"></textarea>

        <input 
            
            type="submit"
            value="Submit"
            class="contact-us-submit"
                
        >

    </form>

    <p class="contact-us-text2">Have any questions or suggestions?</p>
    <p class="contact-us-text3">Reach out to us ..</p>

</section>

<?php

    addTemplate('footer-contact');

?>