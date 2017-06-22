<div id="<?php echo $configs['timeline']['data']; ?>" class="timeline" style="width: 100%; height: 500px"></div>
<script type="text/javascript">
 var options = {
    initial_zoom: 5,
	marker_width_min: 150
  }
    window.timeline = new TL.Timeline("<?php echo $configs['timeline']['data']; ?>", "/church-awakens/plugins/ChurchAwakensTimeline/files/<?php echo $configs['timeline']['data']; ?>.json", options);
</script>