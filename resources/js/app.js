require("./bootstrap");

import Vue from "vue";

Vue.component("front", require("./components/Front.vue").default);

const app = new Vue({
    el: "#app",
});
