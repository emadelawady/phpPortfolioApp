import AppButton from "./AppButton.js";

let app = {
    components: {
        'app-button': AppButton
    }
};



Vue.createApp(app).mount('#app');