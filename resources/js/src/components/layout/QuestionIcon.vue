<template>
    <div>
        <!-- Основной контейнер -->
        <div class="main-container" @mouseleave="hideTooltip">
            <!-- Значок -->
            <div class="question-icon" @mouseover="showTooltip">
                <!-- SVG значка -->
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M6 12A6 6 0 1 0 6 0a6 6 0 0 0 0 12zm.64-5c-.08.36-.28.57-.66.57-.45 0-.71-.32-.71-.76v-.07c0-.64.32-1.06.95-1.43.68-.41.89-.68.89-1.17 0-.53-.4-.9-.99-.9-.52 0-.87.26-1.04.74-.13.35-.37.5-.7.5-.41 0-.67-.27-.67-.68 0-.23.05-.43.16-.64C4.2 2.46 5.05 2 6.19 2c1.5 0 2.52.84 2.52 2.09 0 .81-.39 1.36-1.13 1.81-.7.41-.87.64-.94 1.1zm.22 2.16A.85.85 0 0 1 6 10a.85.85 0 0 1-.86-.84.85.85 0 0 1 .86-.85.85.85 0 0 1 .87.85z" fill="currentColor"></path></svg>
            </div>
            <!-- Рамка с текстом -->
            <transition name="fade">
                <div v-if="isTooltipVisible" class="tooltip" @mouseenter="tooltipHovered = true" @mouseleave="hideTooltip">
                    <div class="tooltip-header">Сохранить вход</div>

                    <div>Выберите, чтобы сохранить данные аккаунта для быстрого входа на этом устройстве</div>
                </div>
            </transition>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isTooltipVisible: false,
            tooltipHovered: false
        };
    },
    methods: {
        showTooltip() {
            this.isTooltipVisible = true;
        },
        hideTooltip() {
            if (!this.tooltipHovered) {
                this.isTooltipVisible = false;
            }
        }
    }
};
</script>

<style scoped>
/* Стили для основного контейнера */
.main-container {
    position: relative;
}

/* Стили для значка */
.question-icon {
    color: #aeb7c2;
    margin-left: 5px;
}

/* Стили для всплывающего окна */
.tooltip {
    position: absolute;
    top: calc(100% + 5px); /* располагаем окно под значком */
    left: 0;
    width: 260px;
    background-color: #ffffff;
    border: 1px solid #dce1e6;
    border-radius: 8px;
    box-shadow: 0 20px 40px rgba(0,0,0,.3), 0 0 1px 0 rgba(0,20,51,.4);
    padding: 11px 12px;
    font-size: 13px;
    line-height: 1.35;
    white-space: normal;
    z-index: 110;
    opacity: 0;
    visibility: hidden;
}

/* Стили для анимации плавного появления и исчезновения */
.fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s, visibility 0.5s;
}

.fade-enter, .fade-leave-to {
    opacity: 1;
}

/* Стили для показа всплывающего окна */
.question-icon:hover + .tooltip,
.tooltip:hover {
    opacity: 1;
    visibility: visible;
}

.tooltip-header {
    font-weight: 500;
    margin-bottom: 6px;
}

</style>
