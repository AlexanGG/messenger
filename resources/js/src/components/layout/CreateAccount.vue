<template>
    <div id="page_block" class="mt-4 py-8 px-6 rounded-xl shadow-none relative bg-white mt-15">
        <div id="JoinForm">
            <div id="JoinForm_in">
                <div id="JoinForm_form">
                        <button class="FlatButton mt-0 rounded-lg w-full text-center box-border text-white" style="font-size: 14px; height: 36px; padding: 0 16px; background-color: #4bb34b;" type="button" @click="goToCreateAccount">
                        <span class="FlatButton__in">
                            <span class="FlatButton__content animate-focus-slide-down">Создать аккаунт</span>
                        </span>
                        </button>
                </div>
                <div class="JoinForm__connectAgreement">
                    После регистрации вы получите доступ ко&nbsp;всем возможностям VP&nbsp;ID
                    <br>
                    <a style="color: #626d7a;" href="#" target="_blank">Узнать больше</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CreateAccount",

    methods: {
        goToCreateAccount() {
            this.$router.push('/selection');
        }
    }
}
</script>

<style scoped>
.FlatButton {
    @apply bg-transparent appearance-none border-none;
    @apply inline-block cursor-pointer;
    @apply select-none;
    @apply text-base font-normal;
    @apply rounded-md;
    font-family: inherit; /* Добавлено свойство font-family */
    @apply py-0 px-0;
    @apply flex items-center justify-center; /* Добавлены классы для центрирования */
}

.FlatButton__in {
    @apply flex items-center justify-center;
    height: inherit;
}

.FlatButton__content {
    @apply whitespace-nowrap overflow-hidden overflow-ellipsis mb-1;
}

.JoinForm__connectAgreement {
    @apply text-center text-gray-400 leading-5 mt-3;
}

.JoinForm__connectAgreement a:hover {
    text-decoration: underline;
}

.FlatButton:hover,
.FlatButton:focus {
    opacity: 0.88;
    text-decoration: none;
}

:focus {
    outline: 0;
}

@keyframes focus-slide-down {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(1px); /* Смещаем на 2px вниз */
    }
}

.FlatButton:active .animate-focus-slide-down {
    animation: focus-slide-down 0.2s ease-out;
}
</style>
