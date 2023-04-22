<?php
if (isset($_SESSION['add'])) {
?>
    <div class="msg">
        <?= $_SESSION['add']; ?>
        <div class='custom-progress'></div>
    </div>
<?php
    unset($_SESSION['add']);
}
if (isset($_SESSION['edit'])) {
?>
    <div class="msg">
        <?= $_SESSION['edit']; ?>
        <div class='custom-progress'></div>
    </div>
<?php
    unset($_SESSION['edit']);
}
?>
<?php
if (isset($_SESSION['delete'])) {
?>
    <div class="msg">
        <?= $_SESSION['delete']; ?>
        <div class='custom-progress'></div>
    </div>
<?php
    unset($_SESSION['delete']);
}
?>