<?php

    include '../includes/templates/header.php'

?>

<section class="container collection">

    <div class="collection__profile">

        <div class="collection__profile--logo">

            <div class="collection__profile--logo-img"></div>

        </div>

        <div class="collection__profile--data">

            <h2>user name</h2>
            <p> NFTs amount</p>

        </div>

    </div>

    <div class="collection__nfts">

        <h3 class="collection__nfts--title">Your Nfts</h3>

        <div class="collection__nfts--table">

            <div class="collection-category">

                <p>Common</p>

                <div class="collection-category__amount">

                    <img src="" alt="">
                    <p id="common">0</p>

                </div>

            </div><!--collection-category-->

            <div class="collection-category">

                <p>Uncommon</p>

                <div class="collection-category__amount">

                    <img src="" alt="">
                    <p id="uncommon">0</p>

                </div>

            </div><!--collection-category-->

            <div class="collection-category">

                <p>Rare</p>

                <div class="collection-category__amount">

                    <img src="" alt="">
                    <p id="rare">0</p>

                </div>

            </div><!--collection-category-->

            <div class="collection-category">

                <p>Epic</p>

                <div class="collection-category__amount">

                    <img src="" alt="">
                    <p id="epic">0</p>

                </div>

            </div><!--collection-category-->

            <div class="collection-category">

                <p>Legendary</p>

                <div class="collection-category__amount">

                    <img src="" alt="">
                    <p id="legendary">0</p>

                </div>

            </div><!--collection-category-->

        </div>

    </div>

</section>

<section class="container show-collection">

    <div class="show-collection__menu">

        <p class="show-collection-label">Collections</p>
        
        <select name="vendedor" value="<?php echo $vendedorId; ?>">

                <option value="">--Seleccione--</option>
                
                <option value=""> 3</option>


            </select>

    </div>

    <?php include '../includes/templates/collection-menu.php'; ?>

    <div class="show-collection__nft">

        <p>You have no NFTs</p>

    </div>

</section>

<?php

    include '../includes/templates/footer-access.php'

?>