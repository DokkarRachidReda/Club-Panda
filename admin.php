<?php
//11-24-16

require('includes/header.php');

if($admin)
{
    echo '<div class="w3-row w3-padding-32">';
    echo '<div class="w3-twothird w3-container">';

    include('user/users.php');

    echo '</div><div class="w3-third w3-container">';

    include('user/profile.php');
    echo '</div></div>';

    echo '<div class="w3-row w3-padding-32">';
    echo '<div class="w3-twothird w3-container">';
    include('user/editUser.php');


    echo '</div><div class="w3-third w3-container">';
    include('user/newUser.php');
    echo '</div></div>';
}
else
{
    include('includes/profile.php');
}
require('includes/footer.php');