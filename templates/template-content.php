<?php
/**
 * Template Name: template-content
 */  
?>
<?php  $new_img = get_field('img');
// $content_img = $new_img['sizes']['large'];
if (!empty($new_img) && isset($new_img['sizes']['large'])) {
    $content_img = $new_img['sizes']['large'];
} else {
    $content_img = ''; 
}
$file = get_field('file_upload');
if(!empty($file) && isset($file['url'])){
   $file_url = $file['url'];
   $file_name = $file['filename'];
} else{
   $file = '';
}
?>
 <div class="hello">
    
    <?php if($content_img){?>
    <img src="<?php echo $content_img;?>" alt="<?php echo $new_img['alt'];?>">
 <?php  }?>

  <?php if($file){?>
   <a href="<?php echo $file_url; ?> "><?php echo $file_name;?></a>
 <?php  }?>

 <?php if($embed){?>
   <a href="#"><?php echo $embed;?></a>
 <?php  }?>
 <?php if($colors): ?>
    <select name="select" id="select">
      <?php foreach($colors as $color): ?>
        <option value=""><?php echo implode(',', $color); ?></option>
      <?php endforeach; ?>
    </select>
<?php endif; ?>


<?php if($checks):?>
   <?php foreach($checks as $check)?>
   <?php echo implode(',', $check);?>

<?php endif;?>

<?php if($radios):?>
   <?php foreach($radios as $radio):?>
   <?php echo  $radio;?>
<?php endforeach;?>
<?php endif;?>



<?php if($choices):?>
   <?php echo implode(',', $choices); ?>
   
<?php endif;?>


 </div>

