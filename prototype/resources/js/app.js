require("./bootstrap");

import { createApp } from "vue";
import MenuComponent from "./components/menu-component";
import SideMenuPushComponent from "./components/side-menu-push-component";

createApp({
    name: 'App',
    components: {
        MenuComponent,
        SideMenuPushComponent
    }
}).mount("#app");