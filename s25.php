<?php



// echo "<pre>";
// print_r($_SERVER);

?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="username">
    <input type="file" name="img[]" multiple>
    <input type="submit">
</form>