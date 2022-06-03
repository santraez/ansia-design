<?php

    include '../includes/templates/header.php'

?>

<section class="container profile">

    <div class="profile__user">

        <div class="profile__user--info">

            <div class="profile-logo"></div>
            <p class="profile-name">name</p>

        </div>

        <div class="profile__user--option">

            <a class="profile-cancel" href="/users/my-collection.php">Cancel</a>
            <input class="profile-save" type="submit" value="Save">

        </div>

    </div>

    <div class="profile__config">

        <h3 class="profile__config--title">Edit your profile</h3>

        <form class="profile__config--form" action="">

            <label class="profile-label" for="">Change display name</label>
            <input class="profile-input" type="text" placeholder="name">

            <label class="profile-label" for="">Change email</label>
            <input class="profile-input" type="email" placeholder="email@email.com">

            <label class="profile-label" for="">Change password</label>
            <input class="profile-input" type="text" placeholder="Enter current password">
            <input class="profile-input" type="text" placeholder="Enter new password">
            <input class="profile-input" type="text" placeholder="Re-type new password">

            <div class="profile__config--option">

                <input class="profile-close" type="submit" value="Close account">
                <div>

                    <a class="profile-cancel" href="/users/my-collection.php">Cancel</a>
                    <input class="profile-save" type="submit" value="Save">
            
                </div>

            </div>

        </form>

    </div>

</section>

<?php

    include '../includes/templates/footer-access.php'

?>