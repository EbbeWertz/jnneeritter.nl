import './bootstrap';

import { createApp, defineAsyncComponent } from 'vue'
import Knop from './components/Knop.vue'
import NavbarLinkKnop from './components/NavbarLinkKnop.vue'
import Navbar from './components/Navbar.vue'




const app = createApp()


const icons = import.meta.glob('/resources/raw_icons/*.svg')
for (const path in icons) {
    const name = 'i-' + path.slice(path.lastIndexOf('/') + 1).replace('.svg', '')
    app.component(name, defineAsyncComponent(() => icons[path]()))
}



app.component('Knop', Knop)
app.component('Navlink', NavbarLinkKnop)
app.component('Navbar', Navbar)
app.mount('#app')
