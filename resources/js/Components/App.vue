<template>
    <section class="main">
        <div class="row m-0">
            <div class="col-2 col-md-1  mt-5">
                <navbar></navbar>
            </div>

            <div class="d-none d-md-block col-md-4">
                <Banner></Banner>
            </div>

            <div class="col-8 col-md-7">
                <transition enter-active-class="animated fadeInDown">
                    <router-view v-bind:key="$route.fullPath"></router-view>
                </transition>
            </div>

        </div>
    </section>
</template>

<script>

    import Navbar from "./Navbar";
    import Home from "./About";
    import Banner from "./Banner";
    import Contact from "./Contact";
    import Skills from "./Skills";
    import Admin from "./Admin"

    export default {
        name : 'App',
        components: {Contact, Banner, Home, Navbar, Skills, Admin}
    }
</script>

<style scoped>
    .main {
        background-color: mintcream;
        overflow: hidden;
    }
</style>
