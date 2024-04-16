<template>
    <button class="FlatButton hover:opacity-88 focus:opacity-88 focus:outline-none rounded-lg mt-5 w-full text-center box-border h-9 py-0 px-4 text-white inline-block align-middle cursor-pointer font-normal text-base leading-5 text-black bg-transparent border-0 border-solid border-transparent rounded-md appearance-none select-none"
            style="font-size: 14px; background-color: #0077ff;">
        <span class="flex items-center justify-center h-full">
            <span class="animate-focus-slide-down">Войти</span>
        </span>
    </button>
</template>

<script>
export default {
    name: "ButtonLogin"
}
</script>

<style scoped>
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

