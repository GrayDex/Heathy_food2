<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die; ?>

<?php $this->SetViewTarget('form_catalog'); ?>
<div class="catalog-detail__form" js-form-feedback data-aos="fade-up">
    <div class="catalog-detail__form-title">задать вопрос по продукту или&nbsp;оставить заявку на закупку
    </div>
    <div class="catalog-detail__form-content">
        <form js_form_feed class="partners-requisites__form" data-form="catalog-detail">
            <div class="partners-requisites__form-top">
                <?= bitrix_sessid_post() ?>
                <div class="input-wrapper" data-input-parent="">
                    <div class="input-wrapper__placeholder">Имя</div>
                    <input class="input" name="name" data-input="" required data-mask-text="" data-parsley-pattern="^[А-Яа-яЁё -]+$" placeholder="Имя" value="Сергей">
                </div>
                <div class="input-wrapper" data-input-parent="">
                    <div class="input-wrapper__placeholder">Телефон</div>
                    <input class="input" name="mobile" data-input="" required type="tel" placeholder="Телефон" data-mask-phone="" value="71212121212">
                </div>
                <div class="input-wrapper" data-input-parent="">
                    <div class="input-wrapper__placeholder">E-mail</div>
                    <input class="input" name="email" required type="email" placeholder="E-mail" value="dekker48st@gmail.com">
                </div>
            </div>
            <div class="partners-requisites__form-area">
                <div class="input-wrapper input-wrapper_textarea" data-input-parent="">
                    <div class="input-wrapper__placeholder placeholder_background">Комментраий к заявке
                    </div>
                    <textarea class="textarea" data-input="" name="comment" type="text" placeholder="Комментраий к заявке"></textarea>
                </div>
            </div>
            <?php
            foreach ($arResult['FORM_DATA'] as $arElemName => $arFormVal) : ?>
                <input hidden js_form_feed_data name="<?= $arElemName ?>" value="<?= $arFormVal ?>">
            <?php endforeach; ?>
            <div class="partners-requisites__form-bot">
                <div class="partners-requisites__form-policy">Нажимая на кнопку «Отправить», вы даете согласие с
                    <a class="partners-requisites__form-link" href="#"> политикой в отношении обработки персональных данных</a>
                </div>
                <button js_form_feed_but class="partners-requisites__form-btn btn-hover_parent">
                    <div class="btn-hover_circle"></div>
                    <span>Отправить</span>
                </button>
            </div>
        </form>
    </div>
</div>
<?php $this->EndViewTarget('form_catalog'); ?>

<?php $this->SetViewTarget('form_catalog_popup'); ?>
<div class="popup popup-vacancies" data-popup-wrapper="catalog-detail" data-overlay-on>
	<div class="about-production__popup-btn" data-popup-close="catalog-detail">
		<div class="btn-hover_parent">
			<div class="btn-hover_circle white"></div>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
				<path d="M6.69678 6.69671L17.3034 17.3033" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
				<path d="M6.69662 17.3033L17.3032 6.69671" stroke="#0068FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
			</svg>
		</div>
	</div>
	<div class="popup-vacancies__send" data-form-send="catalog-detail">
		<div class="popup-vacancies__send-inner">
			<div class="popup-vacancies__send-logo">
				<svg width="100" height="99" viewbox="0 0 100 99" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M35.2969 11.3709C39.5183 -3.42101 60.4814 -3.42101 64.7028 11.3709C66.0509 16.0947 70.9041 18.8967 75.669 17.7023C90.5899 13.9622 101.071 32.1167 90.372 43.1685C86.9551 46.6979 86.9551 52.3018 90.372 55.8312C101.071 66.883 90.5899 85.0376 75.669 81.2975C70.9041 80.1031 66.0509 82.905 64.7028 87.6288C60.4814 102.421 39.5183 102.421 35.2969 87.6288C33.9488 82.905 29.0957 80.1031 24.3307 81.2975C9.40981 85.0376 -1.07173 66.883 9.62775 55.8312C13.0446 52.3018 13.0446 46.6979 9.62776 43.1685C-1.07173 32.1167 9.40981 13.9622 24.3307 17.7023C29.0957 18.8967 33.9488 16.0947 35.2969 11.3709ZM68.8767 39.1055C69.9705 37.7929 69.7932 35.8421 68.4806 34.7482C67.168 33.6544 65.2172 33.8317 64.1233 35.1443L49.8361 52.2889C48.3066 54.1244 47.3674 55.2399 46.5936 55.9386C46.2347 56.2626 46.0219 56.3918 45.9198 56.4411C45.8991 56.4512 45.8843 56.4572 45.875 56.4607C45.8657 56.4572 45.8509 56.4512 45.8302 56.4411C45.7281 56.3918 45.5153 56.2626 45.1564 55.9386C44.3827 55.2399 43.4434 54.1244 41.9139 52.2889L35.8767 45.0443C34.7828 43.7317 32.832 43.5544 31.5194 44.6482C30.2068 45.7421 30.0295 47.6929 31.1233 49.0055L37.2922 56.4082C38.6472 58.0345 39.8686 59.5006 41.0096 60.5308C42.251 61.6518 43.8146 62.6502 45.875 62.6502C47.9354 62.6502 49.499 61.6518 50.7404 60.5308C51.8814 59.5006 53.1028 58.0345 54.4577 56.4082L68.8767 39.1055Z" fill="#00FFE0"></path>
				</svg>
			</div>
			<div js_form_feed_stat class="popup-vacancies__send-title">Отправлено!</div>
			<div js_form_feed_mess class="popup-vacancies__send-text">Спасибо. Мы свяжемся с вами в ближайшее время.</div>
			<div class="popup-vacancies__send-btn btn-hover_parent" data-popup-close="catalog-detail">
				<div class="btn-hover_circle"></div>
				<span>Закрыть</span>
			</div>
		</div>
	</div>
</div>
<?php $this->EndViewTarget('form_catalog_popup'); ?>