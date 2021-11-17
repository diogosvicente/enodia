<a href="<?= base_url('page'); ?>"><i class="fa fa-back" aria-hidden="true" style="margin: 15px">← Voltar</i></a>


<?php 
foreach($css_files as $file):
$file_new_path = str_replace("index.php/", "",$file);
?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file_new_path; ?>" />
<?php endforeach; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

<div style='height:20px;'></div>  
<div style="padding: 10px">
    <?php echo $output; ?>
</div>
<?php foreach($js_files as $file):
$file_new_path = str_replace("index.php/", "",$file);
?>
    <script src="<?php echo $file_new_path; ?>"></script>
<?php endforeach; ?>

<script type="text/javascript">
    $(function(){
       $(".mascara").maskMoney({
          prefix: 'R$ ',
          allowNegative: true,
          thousands: '.',
          decimal: ','
       });
    }); 
</script>