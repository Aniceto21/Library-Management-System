<?php
/**
 * Main entry point
 * Redirects to admin dashboard or login page
 */
require_once 'includes/config.php';

if (isset($_SESSION['admin_id'])) {
    // If logged in, redirect to dashboard
    header("Location: admin/index.php");
} else {
    // If not logged in, redirect to login
    header("Location: admin/login.php");
}
exit();
?>
