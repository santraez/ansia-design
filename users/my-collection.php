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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate doloremque quod officiis! Sunt ipsum eligendi consequatur commodi velit voluptatem, sapiente corporis quidem magni debitis, amet quia quaerat recusandae omnis a!</p>

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

        <label class="show-collection-label" for=""></label>
        
        <input 

            type="text" 
            name=""
            id=""
            class="show-collection-input"

        >

    </div>

    <div class="show-collection__nft">

        <p>You have no NFTs</p>

    </div>

</section>

<?php

    include '../includes/templates/footer-access.php'

?>