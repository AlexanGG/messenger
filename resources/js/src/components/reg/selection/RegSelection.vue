<template>
    <div class="vkuiPopoutRoot__modal">
        <div class="vkuiModalRoot vkuiModalRoot--android vkuiModalRoot--vkapps vkuiModalRoot--desktop">
            <div class="vkuiModalRoot__mask"></div>
            <div class="vkuiModalRoot__viewport">
                <div tabindex="-1" class="vkuiModalRoot__modal vkuiModalRoot__modal--active">
                    <div class="vkc__VerificationMethodSelector__modalHeightDesktop vkuiModalPage vkuiModalPage--sizeX-regular vkuiModalPage--desktop vkuiModalPage--s">
                        <div class="vkuiModalPage__in-wrap" style="opacity: 1;">
                            <div class="vkuiModalPage__in">
                                <div class="vkuiModalPage__header">
                                    <div tabindex="0"
                                         class="vkc__VerificationMethodSelector__placeholder vkuiPlaceholder">
                                        <div class="vkuiPlaceholder__in"><h2
                                            class="vkuiPlaceholder__header vkuiTitle vkuiTitle--l-2 vkuiTitle--w-2">
                                            <span>Выберите способ регистрации</span></h2>
                                            <h3 class="vkuiPlaceholder__text vkuiHeadline vkuiHeadline--android vkuiHeadline--sizeY-compact vkuiHeadline--l-1 vkuiHeadline--w-3">
                                                <span class="vkuiCaption vkuiCaption--l-1">
                                                    <span>В дальнейшем будет больше выбора для регистрации, а&nbsp; пока что вы можете выбрать :</span>
                                                </span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="vkuiModalPage__content-wrap">
                                    <div class="vkuiModalPage__content">
                                        <div class="vkuiModalPage__content-in">
                                            <div class="vkc__VerificationMethodSelector__containerDesktop">
                                                <div tabindex="0" role="button" aria-disabled="false"
                                                     class="vkuiSimpleCell vkuiSimpleCell--android vkuiSimpleCell--mult vkuiSimpleCell--sizeY-compact vkuiTappable vkuiTappable--sizeX-regular vkuiTappable--hasHover vkuiTappable--hasActive vkuiTappable--mouse"
                                                     data-test-id="verificationMethod_sms"
                                                     @click="showError = true" v-if="!showError">
                                                    <svg aria-hidden="true" display="block"
                                                         class="vkuiIcon vkuiIcon--28 vkuiIcon--w-28 vkuiIcon--h-28 vkuiIcon--phone_outline_28"
                                                         viewBox="0 0 28 28" width="28" height="28"
                                                         style="width: 45px; height: 45px;">
                                                        <use xlink:href="#phone_outline_28" style="fill: currentcolor;">
                                                            <symbol xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 28 28" id="phone_outline_28">
                                                                <g fill="none" fill-rule="nonzero">
                                                                    <path d="M0 0h28v28H0z"></path>
                                                                    <path fill="currentColor" d="m16.112 17.259-.734.734a.712.712 0 0 1-.75.166c-.73-.269-1.643-.95-2.74-2.047-1.095-1.096-1.778-2.01-2.045-2.74a.712.712 0 0 1 .164-.75l.736-.734c1.354-1.354 1.478-3.487.284-4.903l-.862-1.024c-.984-1.17-2.756-1.288-3.96-.264a3.319 3.319 0 0 0-.974 1.443 3.25 3.25 0 0 0-.159.752c-.44 3.272 1.137 6.707 4.733 10.303 3.596 3.596 7.03 5.174 10.303 4.733a3.318 3.318 0 0 0 2.195-1.134c1.024-1.202.905-2.976-.263-3.96l-1.025-.862c-1.417-1.192-3.55-1.067-4.903.287Zm-2.81-2.561c.525.523.982.92 1.35 1.191 2.124-2.123 5.428-2.317 7.652-.447l1.023.862c2.03 1.708 2.233 4.751.49 6.798-.896 1.036-2.156 1.687-3.442 1.808-3.982.536-7.987-1.303-11.984-5.3-3.997-3.998-5.837-8.004-5.31-11.896.036-.414.122-.822.257-1.22A5.33 5.33 0 0 1 4.91 4.174c2.037-1.732 5.079-1.53 6.785.5l.86 1.023c1.873 2.22 1.681 5.527-.4 7.608.227.413.624.87 1.148 1.394Z"></path>
                                                                </g>
                                                            </symbol>
                                                        </use>
                                                    </svg>
                                                    <div class="vkuiSimpleCell__main">
                                                        <div class="vkuiSimpleCell__content">
                                                            <span class="vkuiSimpleCell__children vkuiHeadline vkuiHeadline--android vkuiHeadline--sizeY-compact vkuiHeadline--l-1 vkuiHeadline--w-3">
                                                                <span>Номер телефона</span>
                                                            </span>
                                                        </div>
                                                        <div class="vkuiSimpleCell__content">
                                                            <span class="vkuiSimpleCell__text vkuiSimpleCell__subtitle vkuiCaption vkuiCaption--l-2">
                                                                <span>Получить SMS &nbsp;на&nbsp;номер</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vkuiSimpleCell__after">
                                                        <svg aria-hidden="true" display="block" class="vkuiIcon vkuiIcon--24 vkuiIcon--w-16 vkuiIcon--h-24 vkuiIcon--chevron_compact_right_24" viewBox="0 0 16 24" width="16" height="24" style="width: 16px; height: 24px;">
                                                            <use xlink:href="#chevron_compact_right_24"
                                                                 style="fill: currentcolor; color: #b8c1cc;">
                                                                <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 24" id="chevron_compact_right_24">
                                                                    <path fill="currentColor" d="M4.706 7.706a1 1 0 0 1 0-1.412l.088-.088a.997.997 0 0 1 1.414.002l5.084 5.084a.998.998 0 0 1 0 1.416l-5.084 5.084a1.002 1.002 0 0 1-1.414.002l-.088-.088a.995.995 0 0 1 0-1.412L9 12z"></path>
                                                                </symbol>
                                                            </use>
                                                        </svg>
                                                    </div>
                                                    <span aria-hidden="true" class="vkuiTappable__hoverShadow"></span>
                                                    <span aria-hidden="true" class="vkuiFocusVisible vkuiFocusVisible--inside"></span>
                                                </div>

                                                <!--Ошибка для регистрации по номеру телефона-->

                                                <div id="errorBlock" @click="toggleError" v-else>
                                                    <div tabindex="0" role="button" aria-disabled="false"
                                                         class="vkuiSimpleCell vkuiSimpleCell--mult vkuiSimpleCell--sizeY-compact vkuiTappable vkuiTappable--hasHover vkuiTappable--hasActive vkuiTappable--mouse"
                                                         data-test-id="verificationMethod_sms">
                                                        <div class="vkuiSimpleCell__main">
                                                            <div class="vkuiSimpleCell__content">
                                                            <span class="vkuiSimpleCell__text vkuiSimpleCell__subtitle vkuiCaption vkuiCaption--l-2"style="font-size: 16px; line-height: 18px">
                                                                <span>Регистрация по номеру временно недоступно, воспользуйтесь почтой</span>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--email-->
                                                <router-link to="/selection/registration-email" tabindex="0" role="button" aria-disabled="false"
                                                     class="vkuiSimpleCell vkuiSimpleCell--android vkuiSimpleCell--mult vkuiSimpleCell--sizeY-compact vkuiTappable vkuiTappable--sizeX-regular vkuiTappable--hasHover vkuiTappable--hasActive vkuiTappable--mouse"
                                                     data-test-id="verificationMethod_email">
                                                    <svg aria-hidden="true" display="block"
                                                         class="vkuiIcon vkuiIcon--28 vkuiIcon--w-28 vkuiIcon--h-28 vkuiIcon--mail_outline_28"
                                                         viewBox="0 0 28 28" width="28" height="28"
                                                         style="width: 45px; height: 45px;">
                                                        <use xlink:href="#mail_outline_28"
                                                             style="fill: currentcolor;">
                                                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" id="mail_outline_28">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M0 0h28v28H0z" opacity=".1"></path>
                                                                    <path fill="currentColor" fill-rule="nonzero" d="m8.128 4 12.049.002c1.574.019 2.396.195 3.248.65a4.634 4.634 0 0 1 1.923 1.923c.484.905.652 1.776.652 3.553v7.744c0 1.777-.168 2.648-.652 3.553a4.634 4.634 0 0 1-1.923 1.923c-.905.484-1.776.652-3.553.652H8.128c-1.777 0-2.648-.168-3.553-.652a4.634 4.634 0 0 1-1.923-1.923C2.168 20.52 2 19.65 2 17.872l.002-8.049c.019-1.574.195-2.396.65-3.248a4.634 4.634 0 0 1 1.923-1.923C5.48 4.168 6.35 4 8.128 4Zm15.56 3.728-6.86 6.858a4 4 0 0 1-5.497.15l-.16-.15-6.858-6.858c-.23.515-.313 1.104-.313 2.4v7.744c0 1.475.108 2.034.416 2.61.255.478.624.847 1.102 1.102.508.272 1.003.388 2.126.411l.484.005h11.744c1.475 0 2.034-.108 2.61-.416a2.635 2.635 0 0 0 1.102-1.102c.272-.508.388-1.003.411-2.126l.005-.484v-7.744c0-1.296-.083-1.885-.313-2.4ZM19.871 6H8.128c-1.296 0-1.885.083-2.4.313l6.858 6.859a2 2 0 0 0 2.701.116l.127-.116 6.858-6.86c-.515-.229-1.104-.312-2.4-.312Z"></path>
                                                                </g>
                                                            </symbol>
                                                        </use>
                                                    </svg>
                                                    <div class="vkuiSimpleCell__main">
                                                        <div class="vkuiSimpleCell__content"><span
                                                            class="vkuiSimpleCell__children vkuiHeadline vkuiHeadline--android vkuiHeadline--sizeY-compact vkuiHeadline--l-1 vkuiHeadline--w-3"><span>Электронная почта</span></span>
                                                        </div>
                                                        <div class="vkuiSimpleCell__content">
                                                            <span class="vkuiSimpleCell__text vkuiSimpleCell__subtitle vkuiCaption vkuiCaption--l-2">
                                                                <span>Получить код на&nbsp;почту</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vkuiSimpleCell__after">
                                                        <svg aria-hidden="true" display="block" class="vkuiIcon vkuiIcon--24 vkuiIcon--w-16 vkuiIcon--h-24 vkuiIcon--chevron_compact_right_24" viewBox="0 0 16 24" width="16" height="24" style="width: 16px; height: 24px;">
                                                            <use xlink:href="#chevron_compact_right_24"
                                                                 style="fill: currentcolor; color: #b8c1cc;">
                                                                <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 24" id="chevron_compact_right_24">
                                                                    <path fill="currentColor" d="M4.706 7.706a1 1 0 0 1 0-1.412l.088-.088a.997.997 0 0 1 1.414.002l5.084 5.084a.998.998 0 0 1 0 1.416l-5.084 5.084a1.002 1.002 0 0 1-1.414.002l-.088-.088a.995.995 0 0 1 0-1.412L9 12z"></path>
                                                                </symbol>
                                                            </use>
                                                        </svg>
                                                    </div>
                                                </router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
    </div>
</template>

<script>
export default {
    name: "RegSelection",

    data() {
        return {
            showError: false // Переменная для отображения/скрытия блока с ошибкой
        };
    },
    methods: {
        toggleError() {
            // Инвертируем значение переменной showError
            this.showError = !this.showError;
        }
    }
}
</script>

<style scoped>
.vkuiPopoutRoot__modal {
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99;
}

.vkuiModalRoot {
    height: 100%;
    width: 100%;
}

.vkuiModalRoot__mask {
    animation: vkui-animation-fadeIn .32s ease;
    /*background: rgba(0,0,0,.4);*/
    left: 0;
    opacity: 1;
    position: absolute;
    top: 0;
    transition: opacity 167ms ease-out;
    user-select: none;
}

.vkuiModalRoot__mask {
    height: 100%;
    width: 100%;
}

.vkuiModalRoot__viewport {
    bottom: 0;
    left: 0;
    pointer-events: none;
    position: absolute;
    right: 0;
    top: 0;
}

.vkuiModalRoot__modal {
    box-sizing: border-box;
    height: 100%;
    position: absolute;
    width: 100%;
    z-index: 1;
}

.vkuiModalPage--desktop {
    align-items: center;
    display: flex;
    justify-content: center;
}

.vkuiModalPage {
    box-sizing: border-box;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    width: 100%;
    z-index: 1;
}

.vkc__VerificationMethodSelector__modalHeightDesktop > div:first-child {
    max-height: 720px;
    max-width: 400px;
}

.vkuiModalPage--desktop .vkuiModalPage__in-wrap {
    align-items: normal;
    height: auto;
    margin: 32px 56px;
    position: relative;
    transform: none;
    transition: opacity .34s cubic-bezier(0.4, 0, 0.1, 2.1);
}

.vkuiModalPage__in-wrap {
    bottom: 0;
    display: flex;
    left: 0;
    pointer-events: auto;
    right: 0;
    width: 100%;
}

.vkuiModalPage--desktop .vkuiModalPage__in {
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    box-shadow: var(--vkui--elevation3, 0 0 2px rgba(0, 0, 0, .08), 0 4px 16px rgba(0, 0, 0, .08));
    height: 238px;
}

.vkuiModalPage__in {
    background-color: #fff;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    overflow: visible;
    position: relative;
    width: 100%;
}

.vkuiModalPage__header {
    width: 100%;
}

.vkc__VerificationMethodSelector__placeholder {
    padding: 24px 24px 16px;
}

.vkuiPlaceholder {
    align-items: center;
    display: flex;
    justify-content: center;
}

.vkc__VerificationMethodSelector__placeholder > div:first-child {
    padding: 0;
    text-align: left;
}

.vkuiPlaceholder__in {
    box-sizing: border-box;
    max-width: 100%;
    padding: 48px 32px;
}

.vkuiPlaceholder__header {
    color: #000;
}

.vkuiTitle--w-2 {
    font-weight: 500;
}

.vkuiTitle--l-2 {
    font-size: 20px;
    line-height: 24px;
}

.vkuiTitle {
    display: block;
    margin: 0;
}

.vkuiPlaceholder__header + .vkuiPlaceholder__text {
    margin-top: 8px;
}

.vkuiHeadline--sizeY-compact.vkuiHeadline--l-1 {
    font-size: 15px;
    line-height: 20px;
}

.vkuiPlaceholder__text {
    color: #818c99;
}

.vkuiHeadline--w-3 {
    font-weight: 400;
}

.vkuiHeadline {
    display: block;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
}

.vkuiCaption--l-1 {
    font-size: 14px;
    font-weight: 400;
    line-height: 16px;
}

.vkuiCaption {
    display: block;
    margin: 0;
}

.vkc__VerificationMethodSelector__modalHeightDesktop .vkuiModalPage__content-wrap {
    height: auto;
}

.vkuiModalPage__content-wrap {
    border-bottom-left-radius: inherit;
    border-bottom-right-radius: inherit;
    overflow: hidden;
    position: relative;
}

.vkuiModalPage__content {
    box-sizing: border-box;
    height: 100%;
    overflow-x: hidden;
}

.vkuiModalPage--desktop .vkuiModalPage__content {
    overflow-y: auto;
}

.vkuiModalPage__content-in {
    padding-bottom: 0;
    position: relative;
}

.vkc__VerificationMethodSelector__containerDesktop {
    padding: 0 8px 14px;
}

.vkuiSimpleCell--sizeY-compact {
    min-height: 44px;
}

.vkuiSimpleCell--mult {
    white-space: normal;
}

.vkuiSimpleCell {
    align-items: center;
    color: #000;
    display: flex;
    padding-left: 16px;
    padding-right: 16px;
    text-decoration: none;
}

.vkuiSimpleCell:hover {
    background-color: #f5f5f5;
}

.vkuiSimpleCell:active {
    transform: scale(0.99) translateZ(1px); /* Уменьшаем размер блока */
}

.vkuiTappable--mouse {
    transition: opacity .15s ease-out;
}

.vkuiTappable--hasActive, .vkuiTappable--hasHover {
    cursor: pointer;
}

.vkuiTappable {
    border-radius: 8px;
    position: relative;
}

.vkuiSimpleCell > .vkuiIcon--28 {
    padding-right: 16px;
}

.vkuiSimpleCell > .vkuiIcon {
    color: #2688eb;
    flex-shrink: 0;
    padding-bottom: 10px;
    padding-top: 10px;
}

.vkuiSimpleCell--sizeY-compact .vkuiSimpleCell__main {
    padding-bottom: 10px;
    padding-top: 10px;
}

.vkuiSimpleCell__main {
    flex-grow: 1;
    max-width: 100%;
    min-width: 0;
    overflow: hidden;
}

.vkuiSimpleCell .vkuiSimpleCell__content {
    align-content: flex-start;
    align-items: center;
    display: flex;
    justify-content: space-between;
    max-width: 100%;
}

.vkuiSimpleCell--mult .vkuiSimpleCell__children {
    flex: 1 1 auto;
}

.vkuiSimpleCell--mult .vkuiSimpleCell__children {
    text-overflow: clip;
}

.vkuiHeadline--sizeY-compact.vkuiHeadline--l-1 {
    font-size: 17px;
    line-height: 20px;
}

.vkuiSimpleCell__children {
    color: inherit;
    display: block;
    overflow: hidden;
}

.vkuiHeadline--w-3 {
    font-weight: 400;
}

.vkuiHeadline {
    margin: 0;
}

.vkuiSimpleCell__main > :not(:first-child) {
    margin-top: 2px;
}

.vkuiSimpleCell .vkuiSimpleCell__content {
    align-content: flex-start;
    align-items: center;
    display: flex;
    justify-content: space-between;
    max-width: 100%;
}

.vkuiSimpleCell__subtitle {
    color: #818c99;
}

.vkuiCaption {
    display: block;
    margin: 0;
}

.vkuiSimpleCell__after {
    align-items: center;
    color: #2688eb;
    display: flex;
    flex-shrink: 0;
}

.vkuiSimpleCell__subtitle {
    color: #818c99;
}

.vkuiSimpleCell__text {
    overflow: hidden;
    text-overflow: ellipsis;
}

.vkuiCaption--l-2 {
    font-size: 15px;
    font-weight: 400;
    line-height: 15px;
}

.vkuiCaption {
    display: block;
    margin: 0;
}
</style>
