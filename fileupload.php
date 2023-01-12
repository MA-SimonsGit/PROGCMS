<?php include '../../private/init.php'; ?>
<?php include SHARED_PATH . '/header.php'; ?>
<h1>
    FIle upload
</h1>
<form action="uploads.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Upload">
</form>

<?php include SHARED_PATH . '/footer.php'; ?>
