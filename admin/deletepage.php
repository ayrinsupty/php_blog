<?php
    include '../lib/Session.php';
    Session::checkSession();
?>

<?php include '../config/config.php';?>
<?php include '../lib/Database.php';?>

<?php
	$db = new Database();
?>
<?php
    if(!isset($_GET['delpage']) || $_GET['delpage'] == NULL){
        echo "<script>window.location='index.php';</script>";
    } else {
        $pageid = $_GET['delpage'];

        $delquery = "delete from tbl_page where id = '$pageid'";
        $delData = $db->delete($delquery);
        if($delData){
            //echo "<script> alert('Page Deleted Successfully!'); <script/>";
            //echo "<script> window.location='index.php'; </script>";

            echo "<span class='success'>Page Deleted Successfully.</span>";
            header("Location: index.php");
        } else {
            //echo "<script> alert('Page Not Deleted!'); <script/>";
            //echo "<script> window.location='index.php'; </script>";

            echo "<span class='error'>Page Deleted Successfully.</span>";
            header("Location: index.php");
        }
    }
?>