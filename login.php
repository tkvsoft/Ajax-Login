<?php
/*
TKVSOFT
*/
if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
    // do user authentication as per your requirements
    // ...
    // ...
    // ...
    // based on successful authentication
    echo json_encode(array('success' => 1, 'name' => $_POST['username']));
} else {
    echo json_encode(array('success' => 0));
}

?>