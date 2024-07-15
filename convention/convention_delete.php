
<?php
session_start();
@include '../config.php';

if (!isset($_SESSION['valid'])) {
    header("Location: login/login.php");
    exit();
}

if (isset($_GET['id']) && isset($_GET['imagename'])) {
    // Getting information about the convention
    $id = $_GET['id'];
    $imagename = $_GET['imagename'];
   
    // Delete the image from the server
    if ($imagename != "") {
        $img_upload_path = '../images/' . $imagename;
        if (file_exists($img_upload_path)) {
            $remove = unlink($img_upload_path);
            if (!$remove) {
                $_SESSION['delete'] = "Failed to delete image from directory.";
                header("Location: convention_index.php");
                exit();
            }
        }
    }
   
    // Delete the convention from the database
    $sql = "DELETE FROM convention WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['delete'] = "Convention has been deleted successfully.";
    } else {
        $_SESSION['delete'] = "Failed to delete convention from the database.";
    }

    // Redirect to the convention index after deletion
    header("Location: convention_index.php");
    exit();
} else {
    // If the id is not found or other parameters are missing
    $_SESSION['delete'] = "An unknown error occurred.";
    header("Location: convention_index.php");
    exit();
}
?>
