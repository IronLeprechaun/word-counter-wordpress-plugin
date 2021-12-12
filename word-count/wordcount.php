<?php
/**
 * Plugin Name: Word Counter
 * Description: Word Counter to count words in a paragraph
 * Version:     1.0.0
 * Author:      Ethan Shelton, Victor Valero
 * Author URI:  https://www.thespikeworks.com
 */
 

add_action('admin_menu', 'word_count_menu');
 
function word_count_menu(){
    add_menu_page( 'Word Count Page', 'Word Counter Settings', 'manage_options', 'word-counter-plugin', 'init' );
}
 
function init(){
	?>

	<h2>Word Counter</h2>
	<!--
	<h4>We want to apoligize for so litle content. We have spent hours trying to do stuff but have been unable to succesfully figure it out.
	</br>Because of this we have decided to release this shorter less ambitious plugin and include the plugin code for other stuff I tried to do
	</br>You can find a readme related to this submitted with the other stuff
	</br>-->
	</br>
	<textarea id="contentbox" style="width:95%;"></textarea>
	<div id="count">0</div>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/
	ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#contentbox").keyup(function()
		{
		var words = this.value.match(/\S+/g).length;
		$('#count').html(words);
		
		return false;
		});

	});
	</script>
			
<?php
}
 




 