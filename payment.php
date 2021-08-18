<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>CSS Payment Card</title>
        <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
<?php
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
    header("Location: dashboard.php");
}
?>
    	<div class="demo">
		<form class="payment-card" action="" method="post">
			<div class="bank-card">
				<div class="bank-card__side bank-card__front">
					<i class="bank-card__icon bank-card__icon_mastercard"></i>
					<i class="bank-card__icon bank-card__icon_visa"></i>
					<div class="bank-card__inner">
						<label class="bank-card__label bank-card__label_fullwidth">
							<span class="bank-card__hint">Holder of card</span>
							<input type="text" class="bank-card__field" placeholder="Holder of card" pattern="[A-Za-z, ]{2,}" name="holder-card" required>
						</label>
					</div>
					<div class="bank-card__inner">
						<label class="bank-card__label bank-card__label_fullwidth">
							<span class="bank-card__hint">Number of card</span>
							<input type="text" class="bank-card__field" placeholder="Number of card" name="number-card" required>
						</label>
					</div>          
					<div class="bank-card__inner">
						<span class="bank-card__caption">valid thru</span>
					</div>
					<div class="bank-card__inner">
						<label class="bank-card__label">
							<span class="bank-card__hint">Month</span>
							<input type="text" class="bank-card__field" placeholder="MM" maxlength="2" pattern="[0-9]{2}" name="mm-card" required>
						</label>
						<span class="bank-card__separator">/</span>
						<label class="bank-card__label">
							<span class="bank-card__hint">Year</span>
							<input type="text" class="bank-card__field" placeholder="YY" maxlength="2" pattern="[0-9]{2}" name="year-card" required>
						</label>						
					</div>					
				</div>
				<div class="bank-card__side bank-card__back">
					<div class="bank-card__inner">
						<label class="bank-card__label">
							<span class="bank-card__hint">CVC</span>
							<input type="text" class="bank-card__field" placeholder="CVC" maxlength="3" pattern="[0-9]{3}" name="cvc-card" required>
						</label>
					</div>
				</div>				
			</div>
			<input type="submit" name="submit" value="Send" class="demo__button">

		</form>
	</div>
<a href="https:stas-melnikov.ru" class="melnik909"></a>
    
    
    <?php
    
?>
    
  </body>
</html>
