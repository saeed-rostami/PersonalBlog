<template>
    <section class="banner container">
        <div class="text-center">
            <img src="../Image/Untitled.jpg" alt="" style="width: 250px; height: 250px" class="rounded-circle img-fluid shadow">
        </div>
        <div class="photo d-flex flex-column align-items-center justify-content-end">

            <div class="my-3">
                <h1 v-for="banner in banners" v-bind:key="banner.id"
                    class="text-uppercase font-weight-bolder text-center banner-title">{{banner.title}}</h1>
                <br>
                <hr>
                <strong class="str">Specialty: </strong>
                <h6 v-for="banner in banners" class="banner-info">
                    {{banner.info}}</h6>
                <hr>
                <strong class="str">Contact: </strong>
                <br>
                <i class="fa fa-mobile"></i> +989119381867
                <br>
                <i class="fas fa-envelope"></i> SaeedRostami1991@gmail.com
                <br>
                <i class="fas fa-envelope"></i> SaeedRostami1991@yahoo.com



            </div>



        </div>
    </section>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "Banner",
        data() {
            return {
                banners: [],
            }
        },

        created() {
            this.fetch();
        },
        methods: {
            fetch() {
                axios.get('http://127.0.0.1:8000/api/banners').then(response => {
                    this.banners = response.data;
                })
            },
        }
    }
</script>

<style scoped>
    .banner-title {
        color: #174dad;
        font-family: Inconsolata;
        font-size: 2rem;
    }

    .banner-info {
        font-style: italic;
        color: #888b80;
    }
    .str{
        color: #174dad;
    }
    i{
        color: #174dad;
    }
</style>
