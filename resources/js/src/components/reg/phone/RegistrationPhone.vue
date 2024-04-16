<template>
    <!--Регистрация по номеру телефона-->
    <div id="root" class="vkui__root">
        <div class="vkuiAppRoot">
            <div class="vkc__Auth__pageBox">
                <div class="vkc__AuthRoot__rootContainer">
                    <div class="vkuiSplitLayout vkuiPopoutRoot">
                        <div class="vkc__AuthRoot__root vkuiSplitLayout__inner">
                            <div class="vkc__AuthRoot__col vkc__AuthRoot__contentCol vkuiSplitCol"
                                 style="width: 100%; max-width: 360px;">
                                <div class="vkc__AuthRoot__contentIn">
                                    <div class="VKIDPanel vkuiPanel vkuiPanel--sizeX-regular">
                                        <div class="vkuiPanel__in" data-tooltip-container="true">
                                            <div class="vkuiPanel__in-before"></div>
                                            <div>
                                                <div class="vkc__ContentHeader__wrap">
                                                    <div
                                                        class="vkc__ContentHeader__header vkc__ContentHeader__transitionalFixup">
                                                        <div class="vkc__ContentHeader__logo"><span
                                                            class="vkc__VKConnectLogo__body"><svg
                                                            class="vkc__VKConnectLogo__logo" height="20" width="20"
                                                            viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"><path
                                                            class="vkc__VKConnectLogo__defaultLogoColor"
                                                            d="M0 9.6C0 5.07452 0 2.81178 1.40589 1.40589C2.81178 0 5.07452 0 9.6 0H10.4C14.9255 0 17.1882 0 18.5941 1.40589C20 2.81178 20 5.07452 20 9.6V10.4C20 14.9255 20 17.1882 18.5941 18.5941C17.1882 20 14.9255 20 10.4 20H9.6C5.07452 20 2.81178 20 1.40589 18.5941C0 17.1882 0 14.9255 0 10.4V9.6Z"></path><path
                                                            d="M10.7375 14.33C6.22503 14.33 3.48727 11.2025 3.38 6H5.66547C5.73671 9.82165 7.47543 11.437 8.80828 11.77V6H10.9985V9.3C12.2841 9.15751 13.6298 7.65546 14.0821 6H16.2378C15.8928 8.0357 14.4279 9.5312 13.3928 10.15C14.4287 10.6503 16.0953 11.9613 16.7382 14.33H14.3686C13.8683 12.7466 12.6427 11.5265 10.9993 11.36V14.33H10.7375Z"
                                                            fill="white"></path></svg><svg
                                                            class="vkc__VKConnectLogo__letters" height="20"
                                                            viewBox="0 0 21 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"><g fill="none"
                                                                                                  class="vkc__VKConnectLogo__letter"><path
                                                            d="M5.00098 16H7V4H5.00098V16Z"></path><path
                                                            d="M9.5 16H14.2688C17.9127 16 20.501 13.5149 20.501 9.99149C20.501 6.48511 17.9127 4 14.2688 4H9.5V16ZM11.5433 14.1277V5.87234H14.2688C16.7038 5.87234 18.3725 7.55745 18.3725 9.99149C18.3725 12.4426 16.7038 14.1277 14.2688 14.1277H11.5433Z"></path></g></svg></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="vkc__DefaultSkin__contentMobile vkc__DefaultSkin__content"
                                                  novalidate="">
                                                <div>
                                                    <div class="vkc__StepInfo__body">
                                                        <div
                                                            class="vkc__StepInfo__avatar vkc__StepInfo__hideAvatarMedia">
                                                            <div class="vkc__DefaultSkin__avatar">
                                                                <div class="vkc__ServiceAvatar__serviceAvatar">
                                                                    <div class="vkc__ServiceAvatar__img">
                                                                        <svg style="display: block;" width="48"
                                                                             height="48" fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             viewBox="0 0 20 20" role="img"
                                                                             aria-hidden="true">
                                                                            <path
                                                                                d="M0 9.6c0-4.5 0-6.8 1.4-8.2C2.8 0 5.1 0 9.6 0h.8c4.5 0 6.8 0 8.2 1.4C20 2.8 20 5.1 20 9.6v.8c0 4.5 0 6.8-1.4 8.2-1.4 1.4-3.7 1.4-8.2 1.4h-.8c-4.5 0-6.8 0-8.2-1.4C0 17.2 0 14.9 0 10.4v-.8Z"
                                                                                fill="#07F"></path>
                                                                            <path
                                                                                d="M10.7 14.3c-4.5 0-7.2-3.1-7.3-8.3h2.3c0 3.8 1.8 5.4 3.1 5.8V6H11v3.3c1.3-.1 2.6-1.6 3-3.3h2.2c-.3 2-1.8 3.5-2.8 4.2 1 .5 2.7 1.8 3.3 4.1h-2.3c-.5-1.6-1.8-2.8-3.4-3v3h-.3Z"
                                                                                fill="#fff"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h1 class="vkc__VKDisplayTitle__title vkc__VKDisplayTitle__demiboldWeight vkc__VKDisplayTitle__titleLevel2"
                                                            data-test-id="step-info-title">
                                                            <div class="">Введите номер</div>
                                                        </h1>
                                                        <h3 class="vkc__StepInfo__description vkuiHeadline vkuiHeadline--android vkuiHeadline--sizeY-compact vkuiHeadline--l-1 vkuiHeadline--w-regular">
                                                            Ваш номер телефона будет использоваться для входа в
                                                            аккаунт</h3>
                                                    </div>
                                                    <section class="vkc__DefaultSkin__form">
                                                        <div class="vkc__DefaultSkin__input">
                                                            <div style="padding: 0px;"
                                                                 class="vkuiFormItem vkuiFormItem--android vkuiFormItem--default vkuiFormItem--sizeY-compact">
                                                                <div role="presentation"
                                                                     class="vkc__LoginInput__loginInput vkuiInput vkuiInput--sizeY-compact vkuiFormField vkuiFormField--default vkuiFormField--status-default vkuiFormField--sizeY-compact">
                                                                    <input placeholder="Введите номер телефона"
                                                                           name="phone" autocomplete="off"
                                                                           type="tel" class="vkuiInput__el" value="+7"
                                                                           v-model="formattedPhoneNumber"
                                                                           @input="formatPhoneNumber">
                                                                    <div role="presentation" class="vkuiFormField__border"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vkc__DefaultSkin__saveUser">
                                                            <div class="vkc__SaveUserCheckbox__wrap">
                                                                <div class="vkc__SaveUserCheckbox__inner"
                                                                     data-tooltip-container="true">
                                                                    <label class="vkc__Checkbox__label vkc__SaveUserCheckbox__saveUser">
                                                                    <input
                                                                    type="checkbox" name="save_user"
                                                                    class="vkc__Checkbox__srOnly vkc__Checkbox__input"
                                                                    checked="">
                                                                    <div class="vkc__Checkbox__wrapper">
                                                                        <div
                                                                            class="vkc__Checkbox__icon vkc__Checkbox__checkboxOn">
                                                                            <input class="absolute w-px h-px opacity-0 inline" type="checkbox" name="save_user" id="index_save_user_checkbox" checked="" value="">
                                                                            <label class="flex w-full cursor-pointer inline" for="index_save_user_checkbox">
                                                                                <!-- SVG без галочки -->
                                                                                <span id="checkboxOffSpan" class="" style="color:#aeb7c2;" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.05 2.53C4.79 2.13 5.52 2 7.13 2h5.74c1.61 0 2.34.14 3.08.53.65.35 1.17.87 1.52 1.52.4.74.53 1.47.53 3.08v5.74c0 1.61-.14 2.34-.53 3.08a3.64 3.64 0 0 1-1.52 1.52c-.74.4-1.47.53-3.08.53H7.13c-1.61 0-2.34-.14-3.08-.53a3.64 3.64 0 0 1-1.52-1.52c-.4-.74-.53-1.47-.53-3.08V7.13c0-1.61.14-2.34.53-3.08.35-.65.87-1.17 1.52-1.52Zm3.08.97c-1.53 0-1.96.14-2.38.36-.38.2-.69.5-.9.9-.21.4-.35.84-.35 2.37v5.74c0 1.53.14 1.96.36 2.38.2.38.5.69.9.9.4.21.84.35 2.37.35h5.74c1.53 0 1.96-.14 2.38-.36.38-.2.69-.5.9-.9.21-.4.35-.84.35-2.37V7.13c0-1.53-.14-1.96-.36-2.38-.2-.38-.5-.69-.9-.9-.4-.21-.84-.35-2.37-.35H7.13Z" fill="currentColor"></path></svg></span>
                                                                                <!-- SVG с галочкой -->
                                                                                <span id="checkboxOnSpan" class="hidden" style="color: #0077ff;" aria-hidden="true">
                                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.44 4.18C2 5.04 2 6.16 2 8.4v3.2c0 2.24 0 3.36.44 4.22a4 4 0 0 0 1.74 1.74c.86.44 1.98.44 4.22.44h3.2c2.24 0 3.36 0 4.22-.44a4 4 0 0 0 1.74-1.74c.44-.86.44-1.98.44-4.22V8.4c0-2.24 0-3.36-.44-4.22a4 4 0 0 0-1.74-1.74C14.96 2 13.84 2 11.6 2H8.4c-2.24 0-3.36 0-4.22.44a4 4 0 0 0-1.74 1.74Zm12.2 3.8a.9.9 0 1 0-1.28-1.27L8.7 11.38 6.64 9.33a.9.9 0 0 0-1.28 1.27l2.7 2.69a.9.9 0 0 0 1.27 0l5.3-5.3Z" fill="currentColor"></path></svg></span>
                                                                                <span class="ml-1.5 select-none" style="color: #818c99; line-height: 19px;">Сохранить вход</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                    <button type="button" aria-pressed="false"
                                                                            aria-label="Подробнее"
                                                                            class="vkc__SaveUserCheckbox__iconButton vkuiIconButton vkuiIconButton--sizeY-compact vkuiTappable vkuiTappable--sizeX-regular vkuiTappable--hasHover vkuiTappable--hasActive vkuiTappable--mouse">
                                                                        <svg aria-hidden="true" display="block"
                                                                             class="vkuiIcon vkuiIcon--16 vkuiIcon--w-16 vkuiIcon--h-16 vkuiIcon--help_16 vkc__SaveUserCheckbox__icon"
                                                                             viewBox="0 0 16 16" width="16" height="16"
                                                                             style="width: 16px; height: 16px;">
                                                                            <use xlink:href="#help_16"
                                                                                 style="fill: currentcolor;"></use>
                                                                        </svg>
                                                                        <span aria-hidden="true" class="vkuiTappable__hoverShadow"></span>
                                                                        <span aria-hidden="true" class="vkuiFocusVisible vkuiFocusVisible--inside"></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                                <div class="vkc__DefaultSkin__buttonContainer">
                                                    <div class="vkc__DefaultSkin__button">
                                                        <button type="submit" :disabled="!isValidPhoneNumber"
                                                                class="vkuiButton vkuiButton--sz-l vkuiButton--lvl-primary vkuiButton--clr-accent vkuiButton--aln-center vkuiButton--sizeY-compact vkuiButton--stretched vkuiTappable vkuiTappable--sizeX-regular vkuiTappable--hasHover vkuiTappable--mouse"
                                                                @click="redirectConfirmCode">
                                                            <span class="vkuiButton__in">
                                                                <span class="vkuiButton__content vkuiText vkuiText--sizeY-compact vkuiText--w-2">Продолжить</span>
                                                            </span>
                                                            <span aria-hidden="true" class="vkuiTappable__hoverShadow"></span>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <div class="vkc__Agreement__wrapper vkc__Agreement__centered">
                                                            <div>Нажимая «Продолжить», вы принимаете <a href="/terms?scheme=bright_light" data-test-id="agreement-link-0" class="vkc__Agreement__link" target="_blank">пользовательское соглашение</a>
                                                                и <a href="/privacy?scheme=bright_light" data-test-id="agreement-link-1" class="vkc__Agreement__link" target="_blank">политику конфиденциальности</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="vkuiPanel__in-after"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vkuiPopoutRoot__modal"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ConfirmationCodeInput from "@/components/reg/phone/ConfirmationCodeInput.vue";
export default {
    name: "CreateAccount",
    components: {ConfirmationCodeInput},
    mounted() {
        const checkbox = document.getElementById('index_save_user_checkbox');
        const checkboxOffSpan = document.getElementById('checkboxOffSpan');
        const checkboxOnSpan = document.getElementById('checkboxOnSpan');

        // Добавляем обработчик события change для чекбокса
        checkbox.addEventListener('change', function () {
            // Проверяем, был ли чекбокс отмечен
            if (checkbox.checked) {

                // Если чекбокс отмечен, то скрываем span с изображением без галочки
                checkboxOffSpan.classList.add('hidden');

                // Показываем span с изображением с галочкой
                checkboxOnSpan.classList.remove('hidden');
            } else {
                // Если чекбокс не отмечен, то скрываем span с изображением с галочкой
                checkboxOffSpan.classList.remove('hidden');

                // Показываем span с изображением без галочки
                checkboxOnSpan.classList.add('hidden');
            }
        });


    },
    data() {
        return {
            formattedPhoneNumber: '+7', // Изменяем начальное значение на '+7'
        };

    },
    computed: {
        isValidPhoneNumber() {
            // Проверка на соответствие формата номера телефона
            // В данном примере просто проверяем, что длина номера равна 16 символам (включая пробелы и знак "+")
            return this.formattedPhoneNumber.replace(/\D/g, '').length === 11;
        },
    },
    methods: {
        formatPhoneNumber(event) {
            // Максимальная длина номера телефона
            const maxLength = 11;

            // Удаляем все нечисловые символы из введенного номера
            let phoneNumber = event.target.value.replace(/\D/g, '').substring(0, maxLength);

            // Добавляем "+", если в начале строки нет "+"
            if (!phoneNumber.startsWith('+')) {
                phoneNumber = '+' + phoneNumber;
            }

            // Добавляем пробелы после каждого блока цифр, игнорируя символ "+"
            phoneNumber = phoneNumber.replace(/(\d{1,1})(\d{1,3})(\d{1,3})?(\d{1,2})?(\d{1,2})?/, function(match, p1, p2, p3, p4, p5) {
                let parts = [p1];
                if (p2) parts.push(' ' + p2);
                if (p3) parts.push(' ' + p3);
                if (p4) parts.push(' ' + p4);
                if (p5) parts.push(' ' + p5);
                return parts.join('');
            });

            // Обновляем модель данных
            this.formattedPhoneNumber = phoneNumber;
            // Обновляем значение phoneNumber в текущем компоненте
            this.phoneNumber = event.target.value;
        },
        async redirectConfirmCode() {
            try {
                const response = await axios.post('/remote-api/register', {
                    phone: this.formattedPhoneNumber // Данные, которые отправляем на бэкенд
                });
                console.log(response.data); // Выводим ответ от бэкенда в консоль
            } catch (error) {
                console.error(error);
            }
            this.$router.push('/selection/registration/confirmation')
        }
    },

}
</script>

<style scoped>
.vkui__root {
    color: #000;
    font-family: -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
}

.vkuiAppRoot {
    height: 100%;
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
    --font-common: palette-vk-font, -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
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
    --duration: 0.7s;
}

@media (min-width: 768px) and (min-height: 501px) {
    .vkc__Auth__pageBox {
        width: 100%;
        height: 100%;
        background-color: #ebedf0;
    }
}

.vkc__Auth__pageBox {
    min-height: 100%;
    height: 100%;
    overflow-y: auto;
    overflow-x: hidden;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -moz-box-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -webkit-align-items: center;
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
    margin-top: 50vh;
    transform: translateY(-50%);
}

.vkuiSplitLayout {
    font-family: -apple-system, system-ui, Helvetica Neue, Roboto, sans-serif;
    height: 100%;
    position: relative;
    width: 100%;
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

.vkc__AuthRoot__contentCol {
    border-radius: 12px;
    background: #ffffff;

}

.vkc__AuthRoot__col {
    margin: 20px 0;
    max-height: 456px;
}

.vkuiSplitCol {
    flex-grow: 1;
    flex-shrink: 1;
    height: 100%;
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

.vkui--sizeX-regular .VKIDPanel {
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -moz-box-flex: 1;
    flex-grow: 1;
    height: auto;
}

.vkuiPanel {
    position: relative;
    width: 100%;
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

.vkc__ContentHeader__logo {
    color: #07f;
}

.vkc__ContentHeader__logo {
    display: none;
}

.vkc__VKConnectLogo__body {
    display: flex;
}

.vkc__VKConnectLogo__logo {
    display: block;
}

.vkc__VKConnectLogo__defaultLogoColor {
    fill: #07f;
}

.vkc__VKConnectLogo__letters {
    display: block;
}

.vkc__VKConnectLogo__letter {
    fill: #000000;
}

.vkc__DefaultSkin__content {
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -moz-box-pack: justify;
    justify-content: space-between;
    height: 100%;
    box-sizing: border-box;
    -moz-box-flex: 1;
    flex-grow: 1;
}

.vkc__StepInfo__body {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    text-align: center;
    padding: 0 0 16px;
}

.vkc__StepInfo__avatar {
    display: block;
    margin-bottom: 16px;
}

.vkc__DefaultSkin__avatar {
    font-size: 0;
}

.vkc__ServiceAvatar__serviceAvatar {
    display: inline-block;
}

.vkc__ServiceAvatar__img {
    display: block;
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

.vkc__DefaultSkin__form {
    margin-bottom: 28px;
}

.vkc__DefaultSkin__input {
    margin-bottom: 16px;
}

.vkuiFormItem {
    display: block;
}

.vkc__LoginInput__loginInput {
    z-index: 0;
}

.vkuiInput {
    font-size: 16px;
    line-height: 20px;
    position: relative;
}

.vkuiFormField--sizeY-compact {
    min-height: 36px;
}

.vkuiFormField {
    align-items: center;
    box-sizing: border-box;
    display: flex;
}

.vkuiInput__el::placeholder {
    color: #818c99;
    opacity: 1;
}

.vkuiInput--sizeY-compact .vkuiInput__el {
    font-size: 15px;
    line-height: 20px;
}

.vkc__LoginInput__loginInput input {
    position: absolute;
    top: 0;
    height: 100%;
    border-radius: 8px;
    box-sizing: border-box;
}

.vkui__root input {
    font-family: inherit;
}

.vkuiInput__el {
    appearance: none;
    background: rgba(0, 0, 0, 0);
    border: none;
    box-shadow: none;
    color: #000;
    display: block;
    font-size: 16px;
    font-weight: 400;
    margin: 0;
    padding-left: 12px;
    padding-right: 12px;
    text-overflow: ellipsis;
    width: 100%;
    z-index: 6;
}

.vkuiFormField--default .vkuiFormField__border {
    background-color: #f2f3f5;
    border-color: rgba(0, 0, 0, .12);
}

.vkuiFormField__border {
    border: 1px solid rgba(0, 0, 0, 0);
    border-radius: 8px;
    box-sizing: border-box;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    transform-origin: left top;
    width: 100%;
    z-index: 1;
}

.vkc__DefaultSkin__saveUser {
    margin-top: -4px;
    margin-bottom: 16px;
}

.vkc__SaveUserCheckbox__wrap {
    display: flex;
}

.vkc__SaveUserCheckbox__inner {
    position: relative;
    white-space: nowrap;
}

.vkc__SaveUserCheckbox__saveUser {
    font-weight: 400;
    font-size: 16px;
    line-height: 20px;
    color: #818c99;
}

.vkc__Checkbox__label {
    display: block;
    cursor: pointer;
}

.vkc__Checkbox__srOnly {
    position: absolute;
    height: 1px;
    width: 1px;
    padding: 0;
    border: 0;
    overflow: hidden;
    opacity: 0;
}

.vkc__Checkbox__wrapper {
    display: flex;
}

.vkc__Checkbox__wrapper {
    -moz-box-align: center;
    align-items: center;
    -moz-box-pack: start;
    justify-content: flex-start;
}

.vkc__Checkbox__input:checked ~ .vkc__Checkbox__wrapper .vkc__Checkbox__checkboxOn {
    display: flex;
}

.vkc__Checkbox__checkboxOn {
    color: #2688eb;
}

.vkc__Checkbox__icon {
    flex-shrink: 0;
    box-sizing: border-box;
    margin-right: 12px;
    border-radius: 4px;
    line-height: 24px;
    cursor: pointer;
}

.vkc__Checkbox__input:checked ~ .vkc__Checkbox__wrapper .vkc__Checkbox__checkboxOff {
    display: none;
}

.vkc__Checkbox__checkboxOff {
    color: #b8c1cc;
}

.vkc__Checkbox__icon {
    box-sizing: border-box;
    margin-right: 12px;
    border-radius: 4px;
    line-height: 24px;
    cursor: pointer;
}

.vkc__Checkbox__content {
    -moz-box-flex: 1;
    flex-grow: 1;
}

html body .vkc__SaveUserCheckbox__iconButton {
    position: absolute;
    right: -36px;
    top: 50%;
    transform: translateY(-50%);
    margin-top: 1px;
}

.vkui__root button {
    font-family: inherit;
}

.vkuiIconButton--sizeY-compact {
    height: 44px;
}

.vkuiIconButton {
    appearance: none;
    background: none;
    border: none;
    border-radius: 9999px;
    box-shadow: none;
    color: currentColor;
    display: block;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
    padding: 0;
}

.vkuiTappable--mouse {
    transition: opacity .15s ease-out;
}

.vkuiTappable--hasActive, .vkuiTappable--hasHover {
    cursor: pointer;
}

.vkuiTappable--mouse {
    transition: opacity .15s ease-out;
}

.vkuiTappable--hasActive, .vkuiTappable--hasHover {
    cursor: pointer;
}

.vkuiIconButton--sizeY-compact .vkuiIcon--16 {
    padding: 14px;
}

.vkc__SaveUserCheckbox__icon {
    display: inline-block;
    vertical-align: middle;
    color: #b8c1cc;
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

.vkc__DefaultSkin__buttonContainer {
    -moz-box-flex: 1;
    flex-grow: 1;
    display: flex;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    -moz-box-pack: justify;
    justify-content: space-between;
}

.vkc__DefaultSkin__button {
    margin-bottom: 16px;
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

.vkc__Agreement__centered {
    text-align: center;
}

.vkc__Agreement__wrapper {
    font-size: 11px;
    line-height: 14px;
    color: #99a2ad;
    margin-top: 50px;

}

.vkc__Agreement__link {
    color: #6d7885;
    cursor: pointer;
    font-size: inherit;
    text-decoration: none;
}
</style>
