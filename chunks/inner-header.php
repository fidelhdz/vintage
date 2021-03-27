<?php
    if ($variable_image){
?>
<div class="inner-header" style="background-image: url('<?php echo $server_name; ?>assets/images/top/<?php echo $variable_image; ?>');"></div>
<?php
    } else {
?>
<div class="inner-header" style="background-image: url('assets/images/header.jpg');"></div>
<?php
    }
?>