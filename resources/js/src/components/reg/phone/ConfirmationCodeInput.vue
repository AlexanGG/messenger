<template>
    <div id="root" class="vkui__root">
        <div class="vkuiAppRoot">
            <div class="vkc__Auth__pageBox vkc__Auth__pageBoxSingleCol">
                <div class="vkc__AuthRoot__rootContainer">
                    <div class="vkuiSplitLayout vkuiPopoutRoot">
                        <div class="vkc__AuthRoot__root vkc__AuthRoot__rootSingleCol vkuiSplitLayout__inner">
                            <div class="vkc__AuthRoot__col vkc__AuthRoot__contentCol vkc__AuthRoot__translateSingleColAfterQrBlockRender vkc__AuthRoot__singleCol vkc__AuthRoot__lightBorder vkuiSplitCol"
                                style="width: 100%; max-width: 360px;">
                                <div class="vkc__AuthRoot__contentIn undefined">
                                    <div class="VKIDPanel vkuiPanel vkuiPanel--sizeX-regular">
                                        <div class="vkuiPanel__in" data-tooltip-container="true">
                                            <div class="vkuiPanel__in-before"></div>
                                            <div class="vkc__ContentHeader__wrap">
                                                <div class="vkc__ContentHeader__header vkc__ContentHeader__transitionalFixup">
                                                    <button type="button" class="vkc__PureButton__button vkc__ContentHeader__navigationButton" aria-label="Назад" @click="goBack">
                                                        <div class="vkc__ContentHeader__navigationIconWrapper">
                                                            <svg width="28" height="28"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <g fill="none" fill-rule="evenodd">
                                                                    <path d="M28 0H0v28h28z"></path>
                                                                    <path d="M12.293 6.293a1 1 0 011.414 1.414L8.414 13H22a1 1 0 01.993.883L23 14a1 1 0 01-1 1H8.414l5.293 5.293a1 1 0 01.083 1.32l-.083.094a1 1 0 01-1.414 0l-7-7-.073-.082A1.005 1.005 0 015 14l.004.09A1.006 1.006 0 015 14.02V14a1.02 1.02 0 01.125-.484.878.878 0 01.071-.111.999.999 0 01.097-.112l-.08.09c.025-.031.051-.062.08-.09z"
                                                                        fill="currentColor" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                    <div class="vkc__ContentHeader__logo">
                                                        <span class="vkc__VKConnectLogo__body">
                                                            <svg
                                                        class="vkc__VKConnectLogo__logo" height="20" width="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><path
                                                        class="vkc__VKConnectLogo__defaultLogoColor"
                                                        d="M0 9.6C0 5.07452 0 2.81178 1.40589 1.40589C2.81178 0 5.07452 0 9.6 0H10.4C14.9255 0 17.1882 0 18.5941 1.40589C20 2.81178 20 5.07452 20 9.6V10.4C20 14.9255 20 17.1882 18.5941 18.5941C17.1882 20 14.9255 20 10.4 20H9.6C5.07452 20 2.81178 20 1.40589 18.5941C0 17.1882 0 14.9255 0 10.4V9.6Z"></path><path
                                                        d="M10.7375 14.33C6.22503 14.33 3.48727 11.2025 3.38 6H5.66547C5.73671 9.82165 7.47543 11.437 8.80828 11.77V6H10.9985V9.3C12.2841 9.15751 13.6298 7.65546 14.0821 6H16.2378C15.8928 8.0357 14.4279 9.5312 13.3928 10.15C14.4287 10.6503 16.0953 11.9613 16.7382 14.33H14.3686C13.8683 12.7466 12.6427 11.5265 10.9993 11.36V14.33H10.7375Z"
                                                        fill="white"></path></svg>
                                                            <svg
                                                        class="vkc__VKConnectLogo__letters" height="20"
                                                        viewBox="0 0 21 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><g fill="none" class="vkc__VKConnectLogo__letter">
                                                                <path d="M5.00098 16H7V4H5.00098V16Z"></path>
                                                                <path
                                                        d="M9.5 16H14.2688C17.9127 16 20.501 13.5149 20.501 9.99149C20.501 6.48511 17.9127 4 14.2688 4H9.5V16ZM11.5433 14.1277V5.87234H14.2688C16.7038 5.87234 18.3725 7.55745 18.3725 9.99149C18.3725 12.4426 16.7038 14.1277 14.2688 14.1277H11.5433Z"></path></g></svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="vkc__AuthSimpleScreen__container" novalidate="">
                                                <div class="vkc__StepInfo__body">
                                                    <div class="vkc__StepInfo__avatar vkc__StepInfo__hideAvatarMedia">
                                                        <div>
                                                            <svg aria-hidden="true" display="block"
                                                                 class="vkuiIcon vkuiIcon--192 vkuiIcon--w-192 vkuiIcon--h-120 vkuiIcon--illustration_confirmation_sms_120h"
                                                                 viewBox="0 0 192 120" width="192" height="120"
                                                                 style="width: 192px; height: 120px;">
                                                                <use xlink:href="#illustration_confirmation_sms_120h"
                                                                     style="fill: currentcolor;">
                                                                    <symbol xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 192 120" id="illustration_confirmation_sms_120h"><path fill="#07F" d="M121.53 32.36c-3.37-3.36-7.85-3.36-16-3.36H67.36c-8.14 0-12.62 0-16 3.36-3.38 3.36-3.36 7.85-3.36 16v9.85c0 8.13 0 12.61 3.36 16 2.45 2.46 5.56 3.12 10.22 3.3a19.55 19.55 0 0 0 2.11.06h.16c.18.65 1 4.48-2.76 8.27-2.92 2.91 7 2.28 12.09-.41a27.77 27.77 0 0 0 8.9-7.86h23.43c8.13 0 12.61 0 16-3.36 3.39-3.36 3.36-7.84 3.36-16v-9.85c.02-8.15.02-12.63-3.34-16Z"></path><path fill="#fff" d="M67.85 53.56h-3.48l2-3.19a.77.77 0 0 0-.25-1.07.79.79 0 0 0-1.08.25l-2 3.31-2-3.3a.782.782 0 0 0-1.33.82l2 3.18h-3.47a.78.78 0 0 0-.79.78.8.8 0 0 0 .79.78h3.48l-2 3.18a.79.79 0 0 0 .26 1.08.77.77 0 0 0 .41.11.79.79 0 0 0 .67-.37l2-3.3 2 3.29a.77.77 0 0 0 .66.37.8.8 0 0 0 .42-.11.79.79 0 0 0 .25-1.08l-2-3.18h3.48a.8.8 0 0 0 .78-.79.78.78 0 0 0-.8-.76Zm14.64 0h-3.48l2-3.19a.78.78 0 0 0-.841-1.166.79.79 0 0 0-.49.346l-2 3.31-2-3.3a.78.78 0 0 0-1.079-.25.77.77 0 0 0-.25 1.07l2 3.18h-3.61a.78.78 0 0 0 0 1.56h3.48l-2 3.18a.78.78 0 0 0 1.05 1.093.761.761 0 0 0 .28-.273l2-3.3 2.05 3.29a.76.76 0 0 0 .66.37.74.74 0 0 0 .41-.11.79.79 0 0 0 .26-1.08l-2-3.18h3.48a.8.8 0 0 0 .78-.79.78.78 0 0 0-.7-.76Zm14.64 0h-3.48l2-3.19a.78.78 0 0 0-.841-1.166.79.79 0 0 0-.49.346l-2 3.31-2-3.3a.78.78 0 0 0-1.319.82l2 3.18h-3.48a.78.78 0 0 0 0 1.56H91l-2 3.18a.79.79 0 0 0 .25 1.08.77.77 0 0 0 .41.11.78.78 0 0 0 .67-.37l2-3.3 2 3.29a.789.789 0 0 0 .67.37.77.77 0 0 0 .41-.11.777.777 0 0 0 .25-1.08l-2-3.18h3.48a.8.8 0 0 0 .78-.79.78.78 0 0 0-.79-.76Zm14.61 0h-3.47l2-3.19a.78.78 0 0 0-.255-1.075.78.78 0 0 0-1.075.255l-2 3.31-2.05-3.3a.765.765 0 0 0-.786-.359.768.768 0 0 0-.284.11.781.781 0 0 0-.26 1.07l2 3.18h-3.48a.782.782 0 0 0-.78.78.78.78 0 0 0 .78.78h3.48l-2 3.18a.776.776 0 0 0-.1.591.778.778 0 0 0 .35.488.77.77 0 0 0 .41.11.79.79 0 0 0 .67-.37l2-3.3 2 3.29a.79.79 0 0 0 .67.37.77.77 0 0 0 .41-.11.775.775 0 0 0 .359-.794.776.776 0 0 0-.109-.286l-2-3.18h3.52a.798.798 0 0 0 .78-.79.782.782 0 0 0-.78-.76Z"></path><path fill="#212121" d="M119.45 48.53a20.001 20.001 0 0 0-18 29h4.06c8.13 0 12.61 0 16-3.36 3.39-3.36 3.36-7.84 3.36-16v-8.89a19.92 19.92 0 0 0-5.42-.75Z"></path><path fill="#07F" d="M108.93 59.09a.79.79 0 0 0 .67.37.77.77 0 0 0 .41-.11.774.774 0 0 0 .359-.794.776.776 0 0 0-.109-.286l-2-3.18h3.48a.799.799 0 0 0 .78-.79.792.792 0 0 0-.488-.724.784.784 0 0 0-.302-.056h-3.47l1.67-2.71a19.508 19.508 0 0 0-5.47 4.28h1l-2 3.18a.776.776 0 0 0-.1.592.777.777 0 0 0 .35.488.77.77 0 0 0 .41.11.79.79 0 0 0 .67-.37l2-3.3 2.14 3.3Z"></path><path fill="#00DC7F" d="M143.46 71.29a20.07 20.07 0 1 1-20-20.14 20.003 20.003 0 0 1 18.518 12.443 20.006 20.006 0 0 1 1.482 7.697Z"></path><path fill="#fff" d="m113.62 68.87 10 5.35-3.42.42 12.81-13a.842.842 0 0 1 1.151-.084.838.838 0 0 1 .149 1.144l-10.25 15.11-.07.11a2.184 2.184 0 0 1-1.6.945 2.194 2.194 0 0 1-1.75-.625l-8-8a.852.852 0 0 1-.079-1.103.851.851 0 0 1 1.079-.247l-.02-.02Z"></path></symbol>
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <h1 class="vkc__VKDisplayTitle__title vkc__VKDisplayTitle__demiboldWeight vkc__VKDisplayTitle__titleLevel2"
                                                        data-test-id="step-info-title">
                                                        <div class="">
                                                            <span data-test-id="otp-title">
                                                                <span>Введите код из SMS</span>
                                                            </span>
                                                        </div>
                                                    </h1>
                                                    <h3 class="vkc__StepInfo__description vkuiHeadline vkuiHeadline--android vkuiHeadline--sizeY-compact vkuiHeadline--l-1 vkuiHeadline--w-regular">
                                                        <div class="vkc__Description__description">
                                                            <span>SMS-сообщение отправлено на номер <br>
                                                                <b>
                                                                    <span data-key="phone"></span>
                                                                </b>
                                                            </span>
                                                        </div>
                                                    </h3>
                                                </div>
                                                <div class="vkc__ConfirmPhone__input">
                                                    <div>
                                                        <div class="vkc__TextField__codeInputWrapper">
                                                            <input id="otp"
                                                                   name="otp"
                                                                   type="text"
                                                                   class="vkc__TextField__input vkc__TextField__error vkc__TextField__codeInput"
                                                                   inputmode="numeric"
                                                                   placeholder="Код из SMS"
                                                                   autocomplete="off"
                                                                   value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vkc__AuthSimpleScreen__bottom">
                                                    <div class="vkc__Bottom__bottom">
                                                        <button type="submit" disabled="" class="vkuiButton vkuiButton--sz-l vkuiButton--lvl-primary vkuiButton--clr-accent vkuiButton--aln-center vkuiButton--sizeY-compact vkuiButton--stretched vkuiTappable vkuiTappable--sizeX-regular vkuiTappable--hasHover vkuiTappable--mouse">
                                                            <span class="vkuiButton__in">
                                                                <span class="vkuiButton__content vkuiText vkuiText--sizeY-compact vkuiText--w-2">
                                                                    <span>Продолжить</span>
                                                                </span>
                                                            </span>
                                                            <span aria-hidden="true" class="vkuiTappable__hoverShadow"></span>
                                                        </button>

                                                        <div
                                                            v-if="!resendButtonVisible"
                                                            class="vkc__ResendCodeBlock__resendCodeSeconds vkc__Bottom__resendCodeBlock">
                                                            <span>SMS придёт в течение <span :data-key="timeDataKey">{{ formattedTime }}</span></span>
                                                        </div>
                                                        <!--Меняентся по таймеру-->
                                                        <div v-if="resendButtonVisible" class="vkc__ResendCodeBlock__resendCodeLink vkc__Bottom__resendCodeBlock">
                                                            <button type="button"
                                                                    data-test-id="confirmPhoneResendCodeLink"
                                                                    class="vkuiButton vkuiButton--sz-l vkuiButton--lvl-tertiary vkuiButton--clr-accent vkuiButton--aln-center vkuiButton--sizeY-compact vkuiButton--stretched vkuiTappable vkuiTappable--sizeX-regular vkuiTappable--hasHover vkuiTappable--hasActive vkuiTappable--mouse"
                                                                    @click="resendSMS">
                                                                <span class="vkuiButton__in bg-color-hover">
                                                                    <span class="vkuiButton__content vkuiText vkuiText--sizeY-compact vkuiText--w-2">
                                                                        <span>Отправить ещё раз</span>
                                                                    </span>
                                                                </span>
                                                                <span aria-hidden="true" class="vkuiTappable__hoverShadow"></span>
                                                                <span aria-hidden="true" class="vkuiFocusVisible vkuiFocusVisible--outside"></span>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </form>
                                            <div class="vkuiPanel__in-after"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="https://id.vk.com/promo" target="_blank"
                               class="vkc__AuthRoot__singleColPromoLink vkuiLink vkuiTappable vkuiTappable--sizeX-regular vkuiTappable--hasActive vkuiTappable--mouse">
                                <span>Узнать больше о&nbsp;VK&nbsp;ID</span>
                            </a>
                        </div>
                        <div class="vkuiPopoutRoot__modal"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Footer from "@/components/layout/Footer.vue";

export default {
    name: "ConfirmationCodeInput",
    components: {Footer},

    data() {
        return {
            timeLeft: 60, // Время в секундах
            resendButtonVisible: false, // Показывать ли кнопку отправки ещё раз
            timeDataKey: "time" // Сохраняем значение data-key
        };
    },
    mounted() {
        this.startTimer();
    },
    computed: {
        formattedTime() {
            if (!this.resendButtonVisible) {
                const minutes = Math.floor(this.timeLeft / 60);
                const seconds = this.timeLeft % 60;
                return `${this.formatTimeComponent(minutes)}:${this.formatTimeComponent(seconds)}`;
            } else {
                return '';
            }
        }
    },

    methods: {
        goBack() {
            this.$router.go(-1); // Переход на предыдущую страницу
        },
        startTimer() {
            const interval = setInterval(() => {
                if (this.timeLeft > 0) {
                    this.timeLeft--;
                } else {
                    clearInterval(interval);
                    this.resendButtonVisible = true;
                }
            }, 1000);
        },
        formatTimeComponent(component) {
            return component < 10 ? `0${component}` : component;
        },
        resendSMS() {
            // Здесь должен быть код для повторной отправки SMS
            // После отправки можно снова запустить таймер
            this.timeLeft = 60;
            this.resendButtonVisible = false;
            this.startTimer();
        }
    }
}
</script>

<style scoped>
#root {
    height: 100vh; /* Высота контейнера на весь экран */
}

.vkui__root {
    color: #000;
    font-family: -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
}

.vkui__root {
    height: 100%;
    margin: 0;
    padding: 0;
}

@supports (padding-top:env(safe-area-inset-top)) {
    .vkui__root {
        --safe-area-inset-top: env(safe-area-inset-top);
        --safe-area-inset-right: env(safe-area-inset-right);
        --safe-area-inset-bottom: env(safe-area-inset-bottom);
        --safe-area-inset-left: env(safe-area-inset-left);
    }
}

@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 2dppx) {
    .vkui__root {
        --thin-border: 0.5px;
    }
}

.vkui__root {
    --font-common: -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
    --font-tt: "TT Commons", -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
    --font-display: "VK Sans Display", -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
    --ios-easing: cubic-bezier(0.36, 0.66, 0.04, 1);
    --android-easing: cubic-bezier(0.4, 0, 0.2, 1);
    --tabbar_height: 48px;
    --panelheader_height: 56px;
    --panelheader_height_ios: 52px;
    --panelheader_height_vkcom: 48px;
    --search_default_height: 36px;
    --popover-safe-zone-padding: 8px;
    --formitem_padding: 16px;
    --white: #fff;
    --blue_200: #5c9ce6;
    --duration: 0.7s;
}

.vkuiAppRoot {
    height: 100%;
}

.vkc__Auth__pageBox.vkc__Auth__pageBoxSingleCol {
    background-color: #ebedf0;
}

@media (min-width: 768px) and (min-height: 501px) {
    .vkc__Auth__pageBox {
        width: 100%;
        height: 100%;
    }
}

.vkc__Auth__pageBox {
    min-height: 100%;
    overflow-y: auto;
    overflow-x: hidden;
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -moz-box-pack: start;
    justify-content: flex-start;
    -moz-box-align: center;
    align-items: center;
}

.vkc__AuthRoot__rootContainer {
    height: 100%;
    width: 100%;
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -moz-box-pack: center;
    justify-content: center;
    -moz-box-align: center;
    align-items: center;
}

.vkuiSplitLayout {
    font-family: -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
    height: 100%;
    position: relative;
    width: 100%;
}

.vkc__AuthRoot__rootSingleCol {
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
}

.vkc__AuthRoot__root {
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;
}

.vkuiSplitLayout__inner {
    display: flex;
    height: 100%;
    width: 100%;
}

.vkc__AuthRoot__translateSingleColAfterQrBlockRender.vkc__AuthRoot__singleCol {
    animation-name: vkc__AuthRoot__translateAfterQrBlockRender;
    animation-duration: .5s;
    animation-fill-mode: forwards;
}

.vkc__AuthRoot__singleCol.vkc__AuthRoot__lightBorder {
    border-radius: 12px;
}

.vkc__AuthRoot__singleCol {
    height: auto;
    border: 0;
    -moz-box-flex: 0;
    flex: 0 0 auto;
    z-index: 1;
    max-height: 100%;
}

.vkc__AuthRoot__contentCol {
    border-radius: 0 12px 12px 0;
    background: #ffffff;
}

.vkc__AuthRoot__col {
    margin: 20px 0;
}

.vkuiSplitCol {
    position: relative;
}

.vkc__AuthRoot__contentIn {
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    box-sizing: border-box;
    padding: 28px;
    height: 100%;
    width: auto;
}

.vkuiPanel.vkuiPanel--sizeX-regular .vkuiPanel__in, .vkuiPanel.vkuiPanel--sizeX-regular::after {
    background-color: initial;

}

.vkuiPanel--centered .vkuiPanelHeader, .vkuiPanel::after {
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.vkuiPanel::after {
    content: "";
    height: 100%;
    z-index: 1;
}

.vkuiPanel.vkuiPanel--sizeX-regular .vkuiPanel__in {
    background-color: initial;
}

.vkuiPanel__in {
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    min-height: 100%;
    position: relative;
    width: 100%;
    z-index: 2;
}

.vkuiPanel__in-before {
    height: 1px;
    margin-bottom: -1px;
}

.vkc__ContentHeader__wrap {
    height: 0;
}

@media screen and (min-width: 768px) {
    .vkc__ContentHeader__header {
        background: none;
    }
}

.vkc__ContentHeader__transitionalFixup {
    padding: 0 28px;
    margin: 0 -28px;
    top: -28px;
}

.vkc__ContentHeader__header {
    width: 100%;
    height: 56px;
    color: #000;
    position: absolute;
    left: 0;
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;
}

.vkui__root button {
    font-family: inherit;
}

.vkc__ContentHeader__navigationButton {
    display: flex;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;
}

.vkc__ContentHeader__navigationButton {
    position: absolute;
    cursor: pointer;
    top: 5px;
    left: 4px;
    width: 48px;
    height: 48px;
    color: #99a2ad;
}

.vkc__PureButton__button {
    margin: 0;
    padding: 0;
    border: 0;
    text-decoration: none;
    text-align: left;
    -webkit-appearance: none;
    box-sizing: border-box;
    background: rgba(0, 0, 0, 0);
}

.vkc__ContentHeader__navigationIconWrapper {
    width: 100%;
    height: 100%;
}

.vkc__ContentHeader__navigationIconWrapper {
    display: flex;
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: center;
    justify-content: center;
}

.vkc__AuthSimpleScreen__container {
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -moz-box-flex: 1;
    flex-grow: 1;
    height: auto;
}

.vkc__StepInfo__body {
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -moz-box-align: center;
    align-items: center;
    text-align: center;
    padding: 0 0 16px;
}

.vkc__StepInfo__avatar {
    display: block;
    margin-bottom: 16px;
}

.vkc__VKDisplayTitle__demiboldWeight {
    font-weight: 500;
}

.vkc__VKDisplayTitle__titleLevel2 {
    font-size: 20px;
    line-height: 24px;
}

.vkc__VKDisplayTitle__titleLevel2 {
    font-family: VK Sans Display, -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
}

.vkc__VKDisplayTitle__title {
    display: block;
    margin: 0;
}

.vkuiHeadline--sizeY-compact.vkuiHeadline--l-1 {
    font-size: 15px;
    line-height: 20px;
}

.vkc__StepInfo__description {
    margin-top: 8px;
    color: #818c99;
}

.vkuiHeadline--w-regular {
    font-weight: 400;
}

.vkuiHeadline {
    display: block;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
}

.vkc__ConfirmPhone__input {
    margin-bottom: 12px;
}

.vkc__TextField__codeInputWrapper {
    position: relative;
    width: 100%;
    height: auto;
    overflow: visible;
    border-radius: 8px;
}

.vkc__TextField__input::placeholder {
    color: #818c99;
}

.vkui__root input {
    font-family: inherit;
}

.vkc__TextField__codeInput, .vkc__TextField__input {
    width: 100%;
    height: 36px;
    border: .5px solid #f2f3f5;
    background-color: #f2f3f5;
    border-radius: 8px;
    box-sizing: border-box;
    margin: 0;
    padding: 0 42px 0 12px;
    color: #000;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.33;
    appearance: none;
}

.vkc__AuthSimpleScreen__bottom {
    margin-top: auto;
}

.vkc__Bottom__bottom {
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -moz-box-align: center;
    align-items: center;
}

.vkuiButton--lvl-primary[disabled]:not(.vkuiButton--clr-overlay):not(.vkuiButton--clr-negative):not(.vkuiButton--clr-positive) {
    opacity: .64;
}

.vkuiButton--lvl-primary.vkuiButton--clr-accent {
    color: #fff;
}

.vkuiButton--lvl-primary.vkuiButton--clr-accent {
    background-color: #2d81e0;
}

.vkuiTappable[disabled] {
    cursor: default;
}

.vkui__root button {
    font-family: inherit;
}

.vkuiButton--sz-l {
    min-height: 36px;
}

.vkuiButton--stretched {
    display: block;
    flex-basis: 0;
    flex-grow: 1;
    width: 100%;
}

.vkuiButton {
    border: none;
    border-radius: 8px;
    box-sizing: border-box;
    margin: 0;
    max-width: 100%;
    min-width: 80px;
    padding: 0;
    position: relative;
    text-decoration: none;
    user-select: none;
}

.vkuiTappable--mouse {
    transition: opacity .15s ease-out;
}

.vkuiButton__in {
    align-items: center;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    min-height: inherit;
    text-align: center;
    width: 100%;
}

.vkuiButton--sz-l .vkuiButton__content:last-child {
    padding-right: 20px;
}

.vkuiButton--sz-l .vkuiButton__content:first-child {
    padding-left: 20px;
}

.vkuiButton__content {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.vkuiText--w-2 {
    font-weight: 500;
}

.vkuiText--sizeY-compact {
    font-size: 15px;
    line-height: 20px;
}

.vkuiText {
    display: block;
    margin: 0;
}

.vkuiTappable--mouse .vkuiTappable__hoverShadow {
    transition: background-color .15s ease-out;

}

.vkuiTappable__hoverShadow {
    border-radius: inherit;
    bottom: 0;
    left: 0;
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    right: 0;
    top: 0;
}

.vkc__Bottom__resendCodeBlock {
    margin-top: 12px;
    width: 306px;
    height: 36px;
    -moz-box-align: center;
    align-items: center;
}

.vkc__ResendCodeBlock__resendCodeLink {
    display: flex;
    -moz-box-pack: center;
    justify-content: center;
    font-size: 14px;
}

.vkuiButton--lvl-tertiary.vkuiButton--clr-accent {
    color: #2d81e0;
}

.vkui__root button {
    font-family: inherit;
}

.vkuiButton--sz-l {
    min-height: 36px;
}

.vkuiButton--lvl-tertiary {
    background-color: rgba(0, 0, 0, 0);
}

.vkuiButton--stretched {
    display: block;
    flex-basis: 0;
    flex-grow: 1;
    width: 100%;
}

.vkuiButton {
    border: none;
    border-radius: 8px;
    box-sizing: border-box;
    margin: 0;
    max-width: 100%;
    min-width: 80px;
    padding: 0;
    position: relative;
    text-decoration: none;
    user-select: none;
}

.vkuiTappable--mouse {
    transition: opacity .15s ease-out;
}

.vkuiTappable--hasActive, .vkuiTappable--hasHover {
    cursor: pointer;
}

.vkuiButton__in {
    align-items: center;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    min-height: inherit;
    text-align: center;
    width: 100%;
}

.vkuiButton--lvl-tertiary.vkuiButton--sz-l .vkuiButton__content:last-child {
    padding-right: 16px;
}

.vkuiButton--lvl-tertiary.vkuiButton--sz-l .vkuiButton__content:first-child {
    padding-left: 16px;
}

.vkuiButton__content {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.vkuiText--sizeY-compact {
    font-size: 15px;
    line-height: 20px;
}

.vkuiText {
    display: block;
    margin: 0;
}

.vkuiTappable--mouse .vkuiTappable__hoverShadow {
    transition: background-color .15s ease-out;
}

.vkuiTappable__hoverShadow {
    border-radius: inherit;
    bottom: 0;
    left: 0;
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    right: 0;
    top: 0;
}

.vkuiPanel__in-after {
    height: 1px;
    margin-top: -1px;
}

.vkuiPanel.vkuiPanel--sizeX-regular::after {
    background-color: initial;
}

.vkuiPanel::after {
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}

.vkuiPanel::after {
    content: "";
    height: 100%;
    z-index: 1;
}

.vkc__AuthRoot__singleColPromoLink {
    margin-top: 5px;
    font-size: 13px;
    font-weight: 500;
    color: #6d7885;
}

.vkuiLink {
    background: none;
    border: 0;
    border-radius: 0;
    cursor: pointer;
    display: inline;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
    padding: 0;
    text-decoration: none;
}

.vkuiTappable--mouse {
    transition: opacity .15s ease-out;
}

.vkuiTappable--hasActive, .vkuiTappable--hasHover {
    cursor: pointer;
}

.vkuiTappable {
    border-radius: 8px;
    cursor: default;
    position: relative;
    transition: background-color .15s ease-out;
}

.vkc__Bottom__resendCodeBlock {
    margin-top: 12px;
    width: 306px;
    height: 36px;
    -moz-box-align: center;
    align-items: center;
}

.vkc__ResendCodeBlock__resendCodeSeconds {
    display: flex;
}

.vkc__ResendCodeBlock__resendCodeSeconds {
    -moz-box-pack: center;
    justify-content: center;
    color: #909499;
    font-size: 14px;
}

.vkc__ResendCodeBlock__resendCodeSeconds span {
    display: flex;
}

.vkc__Description__description b {
    color: #000000;
}

b {
    font-weight: 500;
}

.vkc__Bottom__resendCodeBlock {
    margin-top: 12px;
    width: 306px;
    height: 36px;
    -moz-box-align: center;
    align-items: center;
}
.vkc__ResendCodeBlock__resendCodeLink {
    display: flex;
    -moz-box-pack: center;
    justify-content: center;
    font-size: 14px;
}

.vkuiButton--lvl-tertiary.vkuiButton--clr-accent {
    color: #2d81e0;
}

.vkui__root button {
    font-family: inherit;
}

.vkuiButton--sz-l {
    min-height: 36px;
}

.vkuiButton--lvl-tertiary {
    background-color: rgba(0,0,0,0);
}

.vkuiButton--stretched {
    display: block;
    flex-basis: 0;
    flex-grow: 1;
    width: 100%;
}

.vkuiButton {
    border: none;
    border-radius: 8px;
    box-sizing: border-box;
    margin: 0;
    max-width: 100%;
    min-width: 80px;
    padding: 0;
    position: relative;
    text-decoration: none;
    user-select: none;
}
.vkuiTappable--mouse {
    transition: opacity .15s ease-out;
}
.vkuiTappable--hasActive, .vkuiTappable--hasHover {
    cursor: pointer;
}

.vkuiButton__in {
    align-items: center;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    min-height: inherit;
    text-align: center;
    width: 100%;
}

.vkuiButton--lvl-tertiary.vkuiButton--sz-l .vkuiButton__content:last-child {
    padding-right: 16px;
}

.vkuiButton--lvl-tertiary.vkuiButton--sz-l .vkuiButton__content:first-child {
    padding-left: 16px;
}

.vkuiButton__content {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.vkuiText--w-2 {
    font-weight: 500;
}
.vkuiText--sizeY-compact {
    font-size: 15px;
    line-height: 20px;
}
.vkuiText {
    display: block;
    margin: 0;
}

.vkuiTappable--mouse .vkuiTappable__hoverShadow {
    transition: background-color .15s ease-out;
}
.vkuiTappable__hoverShadow {
    border-radius: inherit;
    bottom: 0;
    left: 0;
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    right: 0;
    top: 0;
}

/*таймер для повторной отправки кода*/
.vkc__ResendCodeBlock__resendCodeSeconds span span[data-key="time"] {
    width: 41px;
    display: block;
    margin-left: 4px;
}

/*фокус для ввода кода*/
.vkc__TextField__input:focus {
    border-color: #2688eb;
}

.vkc__TextField__input:focus {
    outline: none;
}

/*!*Error, если ввели не правильный код*!*/
/*.vkc__TextField__error {*/
/*    background-color: #faebeb;*/
/*    border-color: #e64646;*/
/*}*/

.bg-color-hover:hover {
    background-color: #f2f3f5;
    border-radius: 8px;
}
</style>
