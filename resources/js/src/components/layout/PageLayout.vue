<template>
    <div>
        <div class="text-left" style="/*width: 1528px*/">
            <!--Header-->
            <HeaderPage />
            <!--Content-->
            <div class="static pt-0 pb-0 mt-0 mb-0 mr-auto ml-auto"
                 style="width: 960px; padding-right: 15px; padding-left: 15px;">
                <div class="mt-12 float-right" style="width: 960px; font-size: 13px;">
                    <div class="h-0 overflow-x-hidden overflow-y-hidden"></div>
                    <div id="spa-root">
                        <div id="ui-spa-root" class="h-full m-0 p-0"></div>
                    </div>
                    <div id="wrap-3">
                        <div id="content" class="px-0 pb-9 relative" style="padding-top: 18px;">
                            <Content />
                            <!-- Подвал -->
                            <Footer />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Footer from "@/components/layout/Footer.vue";
import HeaderPage from "@/components/layout/HeaderPage.vue";
import Content from "@/components/layout/Content.vue";

export default {
    name: "PageLayout",
    components: {
        Content,
        HeaderPage,
        Footer
    },

}
</script>

<style scoped>

</style>
