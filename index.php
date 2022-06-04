<?php

require 'includes/functions.php';
addTemplate('header');

?>

<main class="container cover">

    <article class="cover__text">

        <div>

            <h1 class="title">title</h1>

            <h2>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, architecto harum quasi, praesentium quisquam nihil voluptatibus atque consequatur, facilis enim officiis itaque error deleniti eos magnam voluptatem amet sint autem?

            </h2>

        </div>

        <div class="input-cover">

            <fieldset class="input-cover__fieldset">

                <legend>&nbsp;your purchase code&nbsp;</legend>
                
                <input 

                    type="text"
                    class="input-cover__input"
                    placeholder="ID -"
                    value=""

                >
            
            </fieldset>

            <div class="input-cover__button">

                <input
                
                    type="submit"
                    class="input-cover__submit"
                    value="Claim"

                >
            
            </div>

        </div>


    </article>

    <div class="cover__image">

        <picture>

            <source srcset="build/img/thumb/logo.avif" type="image/avif">
            <source srcset="build/img/thumb/logo.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="build/img/thumb/logo.jpg" alt="cover image">

        </picture>

    </div>

</main>

<section class="container gallery">

    <h3 class="title gallery__title">Gallery</h3>

    <div class="gallery__container">

        <ul class="gallery-panel">

            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>
            <li class="gallery-nft">
                <?php include 'includes/templates/nft-card.php' ?>
            </li>

        </ul>
        
    </div>

</section>

<?php

addTemplate('faqs');
addTemplate('footer');

?>