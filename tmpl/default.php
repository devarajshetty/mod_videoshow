<?php 
// No direct access echo $this->baseurl;
defined('_JEXEC') or die;
//echo $video_show;
?>
<!--<div class="video_show_conatainer" style="background:url('<?php echo $video_show; ?>');background-repeat: no-repeat;background-size: 100% 100%;height: 500px;"></div>-->
<video autoplay="autoplay" loop="loop" muted="" width="100%" style="width: 100%;" type="video/mpeg"><source src="<?php echo $video_show; ?>" type="video/mp4"></video>