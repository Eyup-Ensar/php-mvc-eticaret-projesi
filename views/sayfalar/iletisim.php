<?php require "views/header.php"; ?>

<!-- contact-page -->
<div class="contact">
	<div class="container">
		<div class="contact-info">
			<h2>BİZİ BURADA BULUN</h2>
		</div>
		<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>
		</div>
		<div class="contact-form">
			<div class="contact-info">
				<h3>İLETİŞİM FORMU</h3>
			</div>
            <div id="iletisimUyari"></div>
			<?php Form::_form(["id"=>"iletisimForm"]) ?>
				<div class="contact-left">
					<?php Form::input(["type"=>"text", "placeholder"=>"Ad", "name"=>"ad"]); 
					Form::input(["type"=>"text", "placeholder"=>"E-posta", "name"=>"mail"]); 
					Form::input(["type"=>"text", "placeholder"=>"Konu", "name"=>"konu"]) ?>
				</div>
				<div class="contact-right">
					<?php Form::textarea(["placeholder"=>"Mesaj", "name"=>"mesaj"]) ?> 
				</div>
				<div class="clearfix"></div>
				<?php Form::input(["type"=>"button", "id"=>"iletisimBtn", "value"=>"Gönder"]) ?> 
			</form>
		</div>
	</div>
</div>
<!-- //contact-page -->

<?php require "views/footer.php"; ?>
