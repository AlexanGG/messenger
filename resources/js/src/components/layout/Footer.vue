<template>
    <div style="margin-top:20px">
        <div id="index_footer_wrap" class="footer_wrap index_footer_wrap">
            <div class="footer_nav flex justify-between items-center text-gray-600">
                <div class="footer_copy"><a href="/about" class="text-blue-500">ВПереписке</a> © 2024</div>
                <div class="footer_links">
                    <a href="/about" class="bnav_a mr-2">О Нас</a>
                    <a href="/terms" class="bnav_a">Правила</a>
                </div>
            </div>
            <div class="footer_bench clear text-sm"></div>
        </div>
    </div>

</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>
.index_page .index_footer_wrap {
    position: static;
    padding: 0;
    border-top: none;
    width: auto;
    margin-top: 8rem;
}

.footer_wrap {
    @apply text-center box-border;
    line-height: 1.36em;
}

.footer_nav {
    @apply flex justify-between items-center;
    color: #4b5563;
}

a {
    @apply cursor-pointer;
    color: #2a5885;
}

a:hover {
    @apply underline;
}

.clear {
    @apply clear-both;
}

.footer_bench {
    @apply pt-1 text-sm;
}

.footer_nav {
    color: #626d7a;
}
</style>

