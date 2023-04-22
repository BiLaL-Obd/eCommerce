<?php
if (isset($_SESSION['add'])) {
?>
    <?= $_SESSION['add']; ?>
<?php
    unset($_SESSION['add']);
}
if (isset($_SESSION['edit'])) {
?>
     <?= $_SESSION['edit']; ?> 
<?php
    unset($_SESSION['edit']);
}
?>
<?php
if (isset($_SESSION['delete'])) {
?>
     <?= $_SESSION['delete']; ?> 
<?php
    unset($_SESSION['delete']);
}
?>