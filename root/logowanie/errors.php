<!-- obsługa błędów -->

<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>			<!-- przekazanie opisu błędu -->
		<?php endforeach ?>
	</div>
<?php  endif ?>
