<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/header.php"; include_once($path); ?>
<script type="text/javascript">
$(document).ready(function(){
    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
});
</script>

<div class="eventcontent">
	
<?php include_once('resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('gallery-images'); ?>

	


    </div>
</div>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/footer.php"; include_once($path); ?>
