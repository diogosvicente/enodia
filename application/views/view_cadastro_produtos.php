<a href="<?= base_url('page'); ?>"><i class="fa fa-back" aria-hidden="true" style="margin: 15px">← Voltar</i></a>


<?php 
foreach($css_files as $file):
$file_new_path = str_replace("index.php/", "",$file);
?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file_new_path; ?>" />
<?php endforeach; ?>

<div style='height:20px;'></div>  
<div style="padding: 10px">
    <?php echo $output; ?>
</div>
<?php foreach($js_files as $file):
$file_new_path = str_replace("index.php/", "",$file);
?>
    <script src="<?php echo $file_new_path; ?>"></script>
<?php endforeach; ?>