
<?php
session_start();
@include '../config.php';

if (!isset($_SESSION['valid'])) {
    header("Location: login/login.php");
    exit();
}

if (isset($_GET['id']) && isset($_GET['imagename'])) {
    // Getting information about the medecin
    $id = $_GET['id'];
    $imagename = $_GET['imagename'];
   
    // Delete the image from the server
    if ($imagename != "") {
        $img_upload_path = '../images/' . $imagename;
        if (file_exists($img_upload_path)) {
            $remove = unlink($img_upload_path);
            if (!$remove) {
                $_SESSION['delete'] = "Failed to delete image from directory.";
                header("Location: médecins_index.php");
                exit();
            }
        }
    }
   
    // Delete the medecin from the database
    $sql = "DELETE FROM medecin WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['delete'] = "médecin has been deleted successfully.";
    } else {
        $_SESSION['delete'] = "Failed to delete medecin from the database.";
    }

    // Redirect to the medecin index after deletion
    header("Location: médecins_index.php");
    exit();
} else {
    // If the id is not found or other parameters are missing
    $_SESSION['delete'] = "An unknown error occurred.";
    header("Location: médecins_index.php");
    exit();
}
?>
