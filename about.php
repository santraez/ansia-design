<?php

    require 'includes/functions.php';

    addTemplate('header');

?>

<section>

    <div class="container about">

        <div class="about__image">

            <picture>

                <source srcset="build/img/thumb/logo.avif" type="image/avif">
                <source srcset="build/img/thumb/logo.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/thumb/logo.jpg" alt="cover image">

            </picture>

        </div>

        <div class="about__text">

            <h2 class="about__text--title">Title about</h2>
            <p class="about__text--content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorum magnam impedit praesentium temporibus deleniti magni, distinctio asperiores dignissimos exercitationem nobis eius quo aut omnis! Fugit, eius? Quia, aliquid reiciendis!</p>

        </div>

    </div>

</section>

<?php

    addTemplate('faqs');
    addTemplate('footer');

?>