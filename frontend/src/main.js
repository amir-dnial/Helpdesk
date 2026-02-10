import { createApp } from "vue";
import "./style.css";
import Login from "./views/Login.vue";
import router from "./router";

createApp(Login).use(router).mount("#app");
