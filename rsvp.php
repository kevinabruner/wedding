<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/header.php"; include_once($path); ?>


<div class="eventcontent">
	
    <h2>Please let us know if you can attend!</h2>
	<form id = "rsvpform" style="padding: 40px 10% 80px 10%" action="save_rsvp.php" method="get">
		
<label for = "name">Your full name:</label>
				<input name = "name" type="text">
		
			<label for = "email">Your email address:</label>
				<input name = "email" type="text">
		
		<label>Are you able to attend our wedding?</label>
			
		<div id ="attbuttons">
			<input name = "attbool" id="attyes"  value = "true" type="radio" 	style="display:inline-block">Yes, I'm happy to attend!<br />

			<input name = "attbool" id="attno" value = "false" type="radio" style="display:inline-block">No, I must regretfully decline	
		</div>
					
		<div class ="rsvp_content">
			<div style="float:left; width:40%">								

				<label for = "phone">Your phone number:</label>
				<input name = "phone" type="text">
			</div>
			<div id="guestbuttons" style="float:right; width:40%; ">
				<label>Will you be bringing a spouse, partner or guest?</label>
				<input checked="checked" name = "plusbool" id="plusno" value = "false" type="radio" style="display:inline-block">No			
				<input  name = "plusbool" id="plusyes"  value = "true" type="radio" style="display:inline-block">Yes<br />
				<div class ="guest">
					<label for = "plus1name">Please kindly provide their name:</label>
					<input name = "plus1name" type="text">
				</div>
			</div>
			<div class="clearfix"></div>
			<br />

			<div style="float:left; width:40%">
				<label>Please select a dish for the evening:</label>
					<input name = "dinner" value = "chicken" type="radio" style="display:inline-block">Tomato basil chicken<br />
					<input name = "dinner" value = "mushroom" type="radio" style="display:inline-block">Stuffed portabello
				<br />
			</div>
			<div class ="guest" style="float:right; width:40%;">
				<label>Please select a dish for your guest:</label>
					<input name = "gdinner" value = "chicken" type="radio" style="display:inline-block">Tomato basil chicken<br />
					<input name = "gdinner" value = "mushroom" type="radio" style="display:inline-block">Stuffed portabello
			</div>
			<div class="clearfix"></div>

			<label for = "allergy">Please indicate if you have any allergies, concerns or, other special needs.</label>
			<textarea name = "allergy" rows="4" cols="50"></textarea>			
			<br />
			<br />
		</div>
		<input type="submit" value="Send RSVP" style="margin-top:20px">	
	</form>
	<script type="text/javascript">		
		$(document).ready(function(){
			$(".guest input").attr('disabled', true);			
$('.guest').css('color', 'gray');
			$(".rsvp_content").hide();
$('#guestbuttons > input[type="radio"]').click(function(){
				if ($(this).attr("value") == "true"){$(".guest input").attr("disabled", false);
$('.guest').css('color', '');
}
				else {$(".guest input").attr("disabled", true);
$('.guest').css('color', 'gray');
}
	  		});		
			$('#attbuttons > input[type="radio"]').click(function(){
				if ($(this).attr("value") == "true"){$(".rsvp_content").show();}
				else {$(".rsvp_content").hide();}
	  		});
			
		});
	</script>
	
	
	


    </div>
</div>
<?php $path = $_SERVER['DOCUMENT_ROOT']; $path .= "/footer.php"; include_once($path); ?>
