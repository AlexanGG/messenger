import PageLayout from "@/components/layout/PageLayout.vue";
import ConfirmationCodeInput from "@/components/reg/phone/ConfirmationCodeInput.vue";
import RegistrationPhone from "@/components/reg/phone/RegistrationPhone.vue";
import RegistrationEmail from "@/components/reg/email/RegistrationEmail.vue";
import RegSelection from "@/components/reg/selection/RegSelection.vue";
import ConfirmationCodeEmail from "@/components/reg/email/ConfirmationCodeEmail.vue";

const routes = [
    {
        path: '/',
        component: PageLayout
    },

    {
        path: '/selection',
        component: RegSelection
    },

    {
        path: '/selection/registration',
        component: RegistrationPhone
    },

    {
        path: '/selection/registration/confirmation',
        component: ConfirmationCodeInput
    },

    {
        path: '/selection/registration-email',
        component: RegistrationEmail
    },

    {
        path: '/selection/registration-email/verify-code',
        component: ConfirmationCodeEmail
    }
];

export default routes;
