<?php

require 'includes/functions.php';
addTemplate('header');

?>

<main class="container cover">

    <article class="text-cover">

        <div>

            <h1 class="title">title</h1>

            <h2>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, architecto harum quasi, praesentium quisquam nihil voluptatibus atque consequatur, facilis enim officiis itaque error deleniti eos magnam voluptatem amet sint autem?

            </h2>

        </div>

        <div class="border-input">

            <fieldset class="input-cover">

                <legend>&nbsp;your purchase code&nbsp;</legend>
                
                <input 

                    type="text"
                    class="cover-text"
                    placeholder="ID -"
                    value=""

                >
            
            </fieldset>

            <div class="border-button">

                <input
                
                    type="submit"
                    class="cover-button"
                    value="Claim"

                >
            
            </div>

        </div>


    </article>

    <div class="img-cover">

        <picture>

            <source srcset="build/img/normal/example.avif" type="image/avif">
            <source srcset="build/img/normal/example.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="build/img/normal/example.jpg" alt="cover image">

        </picture>

    </div>

</main>

<section class="container gallery">

    <h3 class="title">Gallery</h3>

    <div>

        

    </div>
</section>

<?php

addTemplate('faqs');
addTemplate('footer');

?>