<form method='post' action='/auth/check'><fieldset>
	<input type="text" name="name" value="" id="name">
	<input type="password" name="pass" value="" id="pass">
	<input type="hidden" name="referer" value="<?php echo $this->session->userdata('redirect_to') ? $this->session->userdata('redirect_to') : '' ?>" id="referer">
</fieldset></form>