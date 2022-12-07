<?php
function get_file($user)
{
    return "./accounts/$user.txt";
}

function get_funds($user)
{
    $filename = get_file($user);

    if (file_exists($filename)) {
        $amount = file_get_contents($filename);
        return (float) $amount;
    } else {
        return 0.0;
    }
}

function set_funds($user, $amount)
{
    $filename = get_file($user);
    file_put_contents($filename, $amount) or print_r(error_get_last());
}
