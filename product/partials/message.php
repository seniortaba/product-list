<?php if(isset($_GET['error']) && $_GET['error'] !== 'null'):?>
    <div class="alert alert-danger" role="alert">
        <?=$_GET['error'];?>
    </div>
<?php endif ?>
<?php if(isset($_GET['success']) && $_GET['success'] === 'true'):?>
    <div class="alert alert-success" role="alert">
        Product Added Successfully
    </div>
<?php endif ?>
