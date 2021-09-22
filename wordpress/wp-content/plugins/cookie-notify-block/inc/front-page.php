<style>
	.alert {
		width: 100%;
		color: <?php echo sanitize_text_field($color); ?> ;
		background-color: <?php echo sanitize_text_field($bg); ?> ;
		position: fixed;
		<?php echo sanitize_text_field($css); ?> ;
		left: 0;
		z-index: 999999;
		text-align: center;
		font-size: 30px;
		padding: 10px 20px;
	}
	.alert button {
		border: 1px solid <?php echo sanitize_text_field($color); ?> ;
        background-color: transparent;
		font: inherit;
		font-size: 14px;
        color: <?php echo sanitize_text_field($color); ?> ;
		padding: 10px 20px;
		cursor: pointer;
	}
    .alert button:hover,
    .alert button:active,
    .alert button:focus {
		background-color: <?php echo sanitize_text_field($color); ?> ;
	    color:  <?php echo sanitize_text_field($bg); ?> ;
	    transition: 0.3s;
    }
</style>
<div class="alert">
	<div class="wrapper">
		<?php echo sanitize_text_field($text); ?>
		<br>
		<button class="alert__btn"><?php esc_html_e('I agree', 'cookie-notify-block'); ?></button>
	</div>
</div>
<script>
	const url = "<?php echo esc_url(admin_url('admin-ajax.php')) ?>";
	const btn = document.querySelector('.alert__btn');

	btn.addEventListener('click', function (e){
	    const data = new FormData();
	    data.append('action', 'cnb_coockie_ajax');
	    const xhr = new XMLHttpRequest()
		xhr.open('POST', url);
	    xhr.send(data);
		xhr.addEventListener('readystatechange', function (e){
		    if (xhr.readyState !== 4) {
		        return;
		    }
		    if (xhr.status === 200){
		        btn.parentElement.parentElement.remove();
		    }
		})
	});

</script>
