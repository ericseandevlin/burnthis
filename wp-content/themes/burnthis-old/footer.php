

<?php wp_footer(); ?>

<?php if (get_field('custom_js')) : ?>
	<script type="text/javascript">
	// custom ACF js
		<?php the_field('custom_js'); ?>
	</script>
<?php endif; ?>


</body>
</html>
