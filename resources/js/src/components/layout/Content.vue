<template>
    <div class="flex">
        <div class="mr-4 flex-1" style="width: 400px;">
            <div class="relative block" style="width: 540px; line-height: 19px;">
                <div class="pt-3.5 pr-0 pb-0 pl-0 relative text-center">
                    <div class="font-bold mb-2 font-mono"
                         style="font-size: 22px; line-height: 26px; font-family: Noto Sans Armenian Noto Sans Bengali Noto Sans Cherokee Noto Sans Devanagari,arial,Tahoma,verdana,sans-serif">ВПереписке для мобильных
                        устройств
                    </div>
                    <div class="text-sm" style="color: #626d7a;">
                        Установите официальное мобильное приложение ВКонтакте и оставайтесь<br>в
                        курсе новостей ваших друзей, где бы вы ни находились.
                    </div>
                    <div class="whitespace-nowrap pt-8" style="font-size: 0;">
                        <div
                            class="bg-no-repeat bg-scroll bg-none bg-auto bg-origin-padding bg-clip-border relative no-underline decoration-solid decoration-current decoration-auto inline-block"
                            style="width: 183px; background-position-x: 0; background-position-y: 8px; padding-top: 405px;">
                            <img class="absolute left-0 top-0 w-full h-auto"
                                 style="color: transparent; border:0;"
                                 src="/public/img/android.png" alt="ВП для Android">
                        </div>
                        <div
                            class="bg-no-repeat bg-scroll bg-none bg-auto bg-origin-padding bg-clip-border relative no-underline decoration-solid decoration-current decoration-auto inline-block"
                            style="width: 198px; margin-left: -31px; background-position-x: 0; background-position-y: 0; padding-top: 405px;">
                            <img class="absolute left-0 top-0 w-full h-auto"
                                 style="color: transparent; border:0;"
                                 src="/public/img/ios.png" alt="ВП для Ios">
                        </div>
                    </div>
                    <a class="inline-flex items-center no-underline decoration-solid decoration-current decoration-auto cursor-pointer group hover:underline"
                       style="line-height: 15px; margin-top: 24px; color: #2a5885;"
                       href="/info">
                        Узнай больше о VK
                        <svg
                            class="opacity-80 transform transition-transform duration-300 ease-in-out group-hover:translate-x-1"
                            style="margin-left: 2px; margin-top: 2px;"
                            xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                            fill="currentColor" viewBox="0 0 12 12">
                            <path fill-rule="evenodd"
                                  d="M4.22 2.47a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 0 1-1.06-1.06L6.69 6 4.22 3.53a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!--Column Registration and Authorization-->
        <div class="" style="width: 320px; min-height: 625px;">
            <div class="first:mt-0 rounded-xl relative bg-white"
                 style="padding: 32px 24px; box-shadow: none;">
                <div class="">
                    <div class="h-12 flex justify-center" style="color: #0077ff;">
                        <!--Icon-->
                        <svg fill="none" height="48" viewBox="0 0 49 48" width="49"
                             xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                  d="M3.87 3.37C.5 6.75.5 12.17.5 23.04v1.92c0 10.86 0 16.3 3.37 19.67C7.25 48 12.67 48 23.54 48h1.92c10.86 0 16.3 0 19.67-3.37 3.37-3.38 3.37-8.8 3.37-19.67v-1.92c0-10.86 0-16.3-3.37-19.67C41.75 0 36.33 0 25.46 0h-1.92C12.68 0 7.24 0 3.87 3.37zm4.74 11.3c.25 12.48 6.82 20 17.65 20h.63v-7.15c3.95.4 6.89 3.35 8.09 7.15h5.69a15.8 15.8 0 0 0-8.03-10.03c2.48-1.49 6-5.09 6.83-9.97h-5.18c-1.08 3.97-4.31 7.57-7.4 7.91v-7.91h-5.26v13.85c-3.2-.8-7.37-4.68-7.54-13.85z"
                                  fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="text-center mt-4 mb-5 font-medium font-sans"
                         style="font-size: 20px; line-height: 24px; font-family: Noto Sans Armenian Noto Sans Bengali Noto Sans Cherokee Noto Sans Devanagari,arial,Tahoma,verdana,sans-serif">Вход Впереписке
                    </div>
                    <form class="m-0 p-0" @submit.prevent="handleSubmit">

                        <!-- Ввод логина (телефон или почта) -->
                        <input
                            class="outline-none outline-current outline-0 box-border w-full h-9 leading-5 rounded-lg text-ellipsis"
                            style="font-size: 13px; font-family: Noto Sans Armenian Noto Sans Bengali Noto Sans Cherokee Noto Sans Devanagari,arial,Tahoma,verdana,sans-serif; box-shadow: none; padding: 8px 12px; border: 1px solid rgb(211, 213, 215); background-color: #f0f2f5;"
                            :class="{ 'border-red-500': showError }"
                            :style="{ backgroundColor: showError && !emailOrPhone.trim() ? '#faebeb' : '#f0f2f5', borderColor: showError ? '#ff0000' : 'rgb(211, 213, 215)' }"
                            @mousedown="handleMouseDown"
                            id="index_email"
                            type="text"
                            name="login"
                            v-model="emailOrPhone"
                            placeholder="Телефон или почта"
                            autocomplete="username"
                        />

                        <!-- Ввод пароля (при клике на логин, появляется этот блок с паролем -->
                        <input
                            v-if="passwordVisible"
                            class="outline-none outline-current outline-0 box-border w-full h-9 leading-5 rounded-lg text-ellipsis"
                            style="margin-top: 12px; font-size: 13px; font-family: Noto Sans Armenian Noto Sans Bengali Noto Sans Cherokee Noto Sans Devanagari,arial,Tahoma,verdana,sans-serif; box-shadow: none; padding: 8px 12px; border: 1px solid rgb(211, 213, 215); background-color: #f0f2f5;"
                            id="password"
                            type="password"
                            name="password"
                            v-model="password"
                            placeholder="Пароль"
                            autocomplete="current-password"
                        />

                        <div v-if="showError" class="text-red-500 mt-2 leading-4">Не указаны телефон или почта</div>

                            <div class="mt-3 flex items-center">
                                <div class="relative whitespace-nowrap">
                                    <input class="absolute w-px h-px opacity-0 inline" type="checkbox" name="save_user" id="index_save_user_checkbox" checked="" value="">
                                    <label class="flex w-full cursor-pointer inline" for="index_save_user_checkbox">
                                        <!-- SVG без галочки -->
                                        <span id="checkboxOffSpan" class="" style="color:#aeb7c2;" aria-hidden="true">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.05 2.53C4.79 2.13 5.52 2 7.13 2h5.74c1.61 0 2.34.14 3.08.53.65.35 1.17.87 1.52 1.52.4.74.53 1.47.53 3.08v5.74c0 1.61-.14 2.34-.53 3.08a3.64 3.64 0 0 1-1.52 1.52c-.74.4-1.47.53-3.08.53H7.13c-1.61 0-2.34-.14-3.08-.53a3.64 3.64 0 0 1-1.52-1.52c-.4-.74-.53-1.47-.53-3.08V7.13c0-1.61.14-2.34.53-3.08.35-.65.87-1.17 1.52-1.52Zm3.08.97c-1.53 0-1.96.14-2.38.36-.38.2-.69.5-.9.9-.21.4-.35.84-.35 2.37v5.74c0 1.53.14 1.96.36 2.38.2.38.5.69.9.9.4.21.84.35 2.37.35h5.74c1.53 0 1.96-.14 2.38-.36.38-.2.69-.5.9-.9.21-.4.35-.84.35-2.37V7.13c0-1.53-.14-1.96-.36-2.38-.2-.38-.5-.69-.9-.9-.4-.21-.84-.35-2.37-.35H7.13Z" fill="currentColor"></path></svg>
                                        </span>
                                        <!-- SVG с галочкой -->
                                        <span id="checkboxOnSpan" class="hidden" style="color: #0077ff;" aria-hidden="true">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.44 4.18C2 5.04 2 6.16 2 8.4v3.2c0 2.24 0 3.36.44 4.22a4 4 0 0 0 1.74 1.74c.86.44 1.98.44 4.22.44h3.2c2.24 0 3.36 0 4.22-.44a4 4 0 0 0 1.74-1.74c.44-.86.44-1.98.44-4.22V8.4c0-2.24 0-3.36-.44-4.22a4 4 0 0 0-1.74-1.74C14.96 2 13.84 2 11.6 2H8.4c-2.24 0-3.36 0-4.22.44a4 4 0 0 0-1.74 1.74Zm12.2 3.8a.9.9 0 1 0-1.28-1.27L8.7 11.38 6.64 9.33a.9.9 0 0 0-1.28 1.27l2.7 2.69a.9.9 0 0 0 1.27 0l5.3-5.3Z" fill="currentColor"></path></svg>
                                        </span>
                                        <span class="ml-1.5 select-none" style="color: #818c99; font-size: 13px; line-height: 19px;">Сохранить вход</span>
                                    </label>
                                </div>
                                <!-- Всплывающее окно -->
                                <QuestionIcon />
                            </div>
                        <ButtonLogin />
                        <div class="pt-5 mt-6 -mb-2 border-t max-w-xs h-20 relative">

                        </div>
                    </form>
                </div>
            </div>
            <!-- Создание аккаунта -->
            <CreateAccount :router="$router"/>
        </div>
    </div>
</template>

<script>
import QuestionIcon from "@/components/layout/QuestionIcon.vue";
import ButtonLogin from "@/components/layout/ButtonLogin.vue";
import CreateAccount from "@/components/layout/CreateAccount.vue";
export default {
    name: "Content",
    components: {
        QuestionIcon,
        ButtonLogin,
        CreateAccount
    },

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
            emailOrPhone: '',
            password: '',
            showError: false,
            passwordVisible: false
        };
    },

    methods: {
        handleMouseDown() {
            this.showError = false; // Сбросить переменную showError на false при вводе данных
            this.passwordVisible = true;
        },
        handleSubmit() {
            if (!this.emailOrPhone.trim()) {
                this.showError = true;
            } else {
                // Ваша логика обработки формы, если данные заполнены
            }
        },
        showPasswordInput() {
            this.passwordVisible = !this.passwordVisible
        }
    }
}
</script>

<style scoped>

</style>
