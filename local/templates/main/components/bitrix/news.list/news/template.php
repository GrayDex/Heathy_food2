<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="news-content__top">
    <h1 class="news-content__title"><?= $arResult['NAME'] ?></h1>
    <div class="title-rombs">
        <div class="title-rombs__item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
                      fill="#F64653"></path>
                <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
                      fill="#F64653"></path>
                <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
                      fill="#F64653"></path>
                <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
                      fill="#F64653"></path>
            </svg>
        </div>
        <div class="title-rombs__item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                <path d="M0.676674 9.3773C3.7119 9.6279 10.0934 11.1315 10.6292 19.3385C10.6659 19.9153 9.97245 20.222 9.562 19.8116L0.192768 10.4445C-0.22201 10.0297 0.0955527 9.32977 0.676674 9.3773Z"
                      fill="#F64653"></path>
                <path d="M10.6226 0.673481C10.372 3.70871 8.86846 10.0902 0.661469 10.626C0.0846682 10.6627 -0.222082 9.96926 0.188375 9.5588L9.55544 0.189576C9.97022 -0.227362 10.6701 0.0923602 10.6226 0.673481Z"
                      fill="#F64653"></path>
                <path d="M19.3243 9.3773C16.289 9.6279 9.90752 11.1315 9.37176 19.3385C9.33504 19.9153 10.0285 20.222 10.4389 19.8116L19.8082 10.4445C20.2229 10.0297 19.9054 9.32977 19.3243 9.3773Z"
                      fill="#F64653"></path>
                <path d="M9.37828 0.673481C9.62671 3.70871 11.1325 10.0902 19.3395 10.626C19.9163 10.6627 20.223 9.96926 19.8125 9.5588L10.4455 0.189576C10.0307 -0.227362 9.33075 0.0923602 9.37828 0.673481Z"
                      fill="#F64653"></path>
            </svg>
        </div>
    </div>
</div>
<div class="news-content__categories" data-aos="fade-up">
    <div class="news-content__categories-wrapper">
        <?php if ($arResult['SECTION_BY_ID'] and count($arResult['SECTION_BY_ID']) > 1): ?>

            <?php foreach ($arResult['SECTION_BY_ID'] as $arSection): ?>

                <a class="news-content__categories-item <?= $arSection['IS_ACTIVE'] ? 'active' : '' ?> btn-hover_parent no-scale"
                   href="<?= $arSection['SECTION_PAGE_URL'] ?>">
                    <div class="btn-hover_circle white"></div>
                    <span><?= $arSection['NAME'] ?></span>
                </a>

            <?php endforeach; ?>

        <?php endif; ?>

    </div>
</div>

<div class="news-content__listing" data-aos="fade-up">

    <?php if ($arParams["DISPLAY_TOP_PAGER"]): ?>
        <?= $arResult["NAV_STRING"] ?><br/>
    <?php endif; ?>

    <?php foreach ($arResult['ITEMS'] as $arItem): ?>

        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <a class="news-card" href="<?= $arItem['~DETAIL_PAGE_URL'] ?>">
                <div class="news-card__top">
                    <div class="news-card__plug"><?= $arItem['SECTION_NAME'] ?></div>
                    <div class="news-card__bg">
                        <picture class="picture">
<!--                            <source type="image/webp" srcset="">-->
                            <img class="picture__img" src="<?= $arItem['DETAIL_PICTURE']['RES_PIC_SRC'] ?>">
                        </picture>
                    </div>
                </div>
                <div class="news-card__bot">
                    <div class="news-card__date"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?></div>
                    <div class="news-card__title"><?= $arItem['~NAME'] ?></div>
                </div>
            </a>
        </div>


    <?php endforeach; ?>

    <?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
        <br/><?= $arResult["NAV_STRING"] ?>
    <?php endif; ?>
</div>

<!--<div class="news-content__more btn-hover_parent">-->
<!--	<div class="btn-hover_circle"></div>-->
<!--	<span>Показать еще</span>-->
<!--</div>-->



