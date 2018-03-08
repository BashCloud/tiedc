import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Home from "@/components/Home";
import Srishti from "@/components/Srishti";
import Aditya from "@/components/Aditya";
Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [{
            path: '/about',
            name: 'HelloWorld',
            component: HelloWorld
        },
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/new',
            name: 'newname',
            component: Srishti
        },
        {
            path: '/aditya',
            name: 'Tiedc',
            component: Aditya
        }
    ]
})