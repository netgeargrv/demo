<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="<?php echo $home ; ?>/js/jquery.js"></script>
<script src="<?php echo $home ; ?>/js/popper.min.js"></script>
<script src="<?php echo $home ; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $home ; ?>/js/jquery.fancybox.js"></script>
<script src="<?php echo $home ; ?>/js/jquery-ui.js"></script>
<script src="<?php echo $home ; ?>/js/wow.js"></script>
<script src="<?php echo $home ; ?>/js/appear.js"></script>
<script src="<?php echo $home ; ?>/js/select2.min.js"></script>
<script src="<?php echo $home ; ?>/js/slick.min.js"></script>
<script src="<?php echo $home ; ?>/js/slick-animation.min.js"></script>
<script src="<?php echo $home ; ?>/js/owl.js"></script>
<script src="<?php echo $home ; ?>/js/script.js"></script>

<script src="<?php echo $home ; ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo $home ; ?>/js/jquery.form.min.js"></script>
<script>
	(function($) {
		$("#contact_form").validate({
			submitHandler: function(form) {
				var form_btn = $(form).find('button[type="submit"]');
				var form_result_div = '#form-result';
				$(form_result_div).remove();
				form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
				var form_btn_old_msg = form_btn.html();
				form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
				$(form).ajaxSubmit({
					dataType:  'json',
					success: function(data) {
						if( data.status == 'true' ) {
							$(form).find('.form-control').val('');
						}
						form_btn.prop('disabled', false).html(form_btn_old_msg);
						$(form_result_div).html(data.message).fadeIn('slow');
						setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
					}
				});
			}
		});
	})(jQuery);
</script>