<?php
function logged_in()
{
    $ci = get_instance();
    if ($ci->session->userdata('username')) {
        return true;
    } else {
        return false;
    }
}
