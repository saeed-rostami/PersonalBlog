<template>
        <div class="about row d-flex align-content-center">
            <div>
                <h1 v-for="about in abouts" v-bind:key="about.id" class="title-text">{{about.title}}</h1>
            </div>

            <div class="col-12">
                <ul class="breadcrumb">
                    <li v-for="about in abouts" v-bind:key="about.id">{{about.details}}</li>
                </ul>
            </div>

            <div class="col-12 bio">
                <h6 v-for="about in abouts" v-bind:key="about.id" class="bio-text text-justify">{{about.info}}</h6>
            </div>

            <div class="col-12">
                <hr class="bio-line">
            </div>

            <div class="col-12 services">
                <div class="row">

                    <div class="col-md-6 mt-4" v-for="about in abouts" v-bind:key="about.id">






                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front ">
                                    <div class="service-title">
                                        <h4>{{about.about_skill_title}}</h4>
                                    </div>

                                    <div class="service-icon">
                                        <i v-bind:class="about.about_skill_socials"></i>
                                    </div>

                                </div>
                                <div class="flip-box-back">
                                    <div class="service-info">
                                        <h6>{{about.about_skill_info}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>


        </div>

</template>

<script>
    export default {
        name: "About",
        computed: {
            abouts() {
                return this.$store.getters.getAbouts;
            },
        },

        created() {
            this.$store.dispatch("getAboutsFromServer");
        }
    }
</script>

<style scoped>
    /* Style the list */
    ul.breadcrumb {
        padding: 10px 16px;
        list-style: none;
        background-image: radial-gradient(circle, #469cff, #174dad);
    }

    /* Display list items side by side */
    ul.breadcrumb li {
        display: inline;
        /*font-size: 18px;*/
    }

    /* Add a slash symbol (/) before/behind each list item */
    ul.breadcrumb li + li:before {
        padding: 5px;
        color: #bbecff;
        content: "/\00a0";
    }

    /* Add a color to all links inside the list */
    ul.breadcrumb li {
        /*color: #2a608b;*/
        color: #bbecff;
        text-decoration: none;
        font-style: italic;

    }

    .title-text {
        color: #888b80;
        font-family: Inconsolata;
        font-size: 5rem;
    }

    .bio-text {
        color: #888b80;
        font-style: italic;
        /*font-size: 1.2rem;*/
    }

    .bio-line {
        background-color: #174dad;
    }

    .service-icon i {
        color: mintcream;

    }

    .service-title {
        color: mintcream;
        font-style: italic;
    }

    .service-info {
        color: mintcream;
        font-style: italic;
    }

    @media screen and (max-width: 600px) {
        .title-text {
            color: #888b80;
            font-style: italic;
            font-size: 3rem;
        }
        .about{
            margin-left: 1rem;
        }
    }

    @media screen and (max-width: 768px) {
        .title-text {
            color: #888b80;
            font-style: italic;
            font-size: 3rem;
        }
        .about{
            margin-left: 1rem;
        }
    }



    .flip-box {
        background-color: transparent;
        width: 300px;
        height: 150px;
        border: 1px solid #f1f1f1;
        perspective: 1000px;
    }

    .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);
    }

    .flip-box-front, .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-box-front {
        background-image: radial-gradient(circle, #469cff, #174dad);
        color: black;
    }

    .flip-box-back {
        background-image: radial-gradient(circle,#174dad, #469cff);
        color: mintcream;
        transform: rotateY(180deg);
    }
</style>
