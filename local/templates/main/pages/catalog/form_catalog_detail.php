<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die; ?>

<?php $this->SetViewTarget('mycontent'); ?>
<form js_form_feed class="catalog-detail__form" js-form-feedback data-aos="fade-up">
    <div class="catalog-detail__form-title">задать вопрос по продукту или&nbsp;оставить заявку на закупку
    </div>
    <div class="catalog-detail__form-content">
        <form class="partners-requisites__form" data-form="catalog-detail">
            <div class="partners-requisites__form-top">
                <?= bitrix_sessid_post() ?>
                <div class="input-wrapper" data-input-parent="">
                    <div class="input-wrapper__placeholder">Имя</div>
                    <input class="input" name="name" data-input="" required data-mask-text="" data-parsley-pattern="^[А-Яа-яЁё -]+$" placeholder="Имя">
                </div>
                <div class="input-wrapper" data-input-parent="">
                    <div class="input-wrapper__placeholder">Телефон</div>
                    <input class="input" name="mobile" data-input="" required type="tel" placeholder="Телефон" data-mask-phone="">
                </div>
                <div class="input-wrapper" data-input-parent="">
                    <div class="input-wrapper__placeholder">E-mail</div>
                    <input class="input" name="email" required type="email" placeholder="E-mail">
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
                <button js_form_feed_but class="partners-requisites__form-btn btn-hover_parent" type="submit">
                    <div class="btn-hover_circle"></div>
                    <span>Отправить</span>
                </button>
            </div>
        </form>
    </div>
</form>
<div class="catalog-hero__filters-text" id="response"></div>
<?php $this->EndViewTarget('mycontent'); ?>