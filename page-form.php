<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<main class="container" role="main">
		<form method="POST" id="formx" action="javascript:void(null);" onsubmit="call()">
		<legend>Test From</legend>
		<label for="name">Name:</label><input id="name" name="name" value="" type="text">
		<label for="email">Email:</label><input id="email" name="email" value="" type="text">
		<input value="Send" type="submit">
		</form>
		<div id="results">вывод</div>
	</main><!-- #main -->
	<script type="text/javascript" language="javascript">
 	function call() {
 	  var msg   = $('#formx').serialize();
        $.ajax({
          type: 'POST',
          url: '../../metal/wp-content/themes/metal/res.php',
          data: msg,
          success: function(data) {
            $('#results').html(data);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
    }
</script>
<?php get_footer(); ?>
