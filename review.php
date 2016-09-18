<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<form method='post' class='review-form' action='<?=$APPLICATION->GetCurPageParam('',array());?>'>
<div id="reviewStars-input">
	<input id="star-5" type="radio" value='5' name="reviewStars"/>
    <label title="perfect" for="star-5"></label>
	
    <input id="star-4" type="radio" value='4' name="reviewStars"/>
    <label title="gorgeous" for="star-4"></label>

    <input id="star-3" type="radio" value='3' checked name="reviewStars"/>
    <label title="good" for="star-3"></label>

    <input id="star-2" type="radio" value='2' name="reviewStars"/>
    <label title="regular" for="star-2"></label>

    <input id="star-1" type="radio" value='1'  name="reviewStars"/>
    <label title="poor" for="star-1"></label>    
</div>

<button type='submit' class='review-form__button' > Кнопка </button>
</form>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>