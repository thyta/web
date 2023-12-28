<?php
session_start();
// Check if the user is logged in


if (!isset($_SESSION['user_id'])) {
    header("Location: ../../app/view/homepage.php");
}

// IF not session or not logged in
if (isset($_SESSION['user_type'])==2) {
    echo "<script> alert'bạn không phải admin'</script>";
    header("Location: ../../app/view/homepage.php");
}
?>