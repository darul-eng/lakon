<?php

function is_logged_in()
{
    $darul = get_instance();
    if (!$darul->session->userdata('username')) {
        redirect('auth');
    }
}
