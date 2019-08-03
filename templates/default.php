<?php
$poster1 = empty($atts['poster1']) ? '' : $atts['poster1'];
$video1 = empty($atts['video1']) ? '' : $atts['video1'];
$poster2 = empty($atts['poster2']) ? '' : $atts['poster2'];
$video2 = empty($atts['video2']) ? '' : $atts['video2'];
?>
<div class="video-compare-container" style="height:250px">
  <video playsinline loop muted autoplay poster="<?php echo $poster1; ?>">
    <source type="video/mp4" src="<?php echo $video1; ?>">
  </video>
  <div class="video-clipper">
    <video playsinline loop muted autoplay poster="<?php echo $poster2; ?>">
      <source type="video/mp4" src="<?php echo $video2; ?>">
    </video>
  </div>
</div>
