<template>
    <div class="experience row d-flex align-content-center">
        <div>
            <h1 class="title-text">experience</h1>
        </div>


        <div class="col-12 services">
            <div class="row">


                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2 class="title-ex">Car Gallery</h2>
                            </div>
                            <div class="flip-box-back">
                             <p>Car Gallery by vanishing features, completely responsive...Html5 $ CSS3 and
                                 Bootstrap4</p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <h2 class="title-ex">Question and Answer Application</h2>
                            </div>
                            <div class="flip-box-back">
                                <p>Question and Answer Application with registration form, voting and favoring
                                    system, delete and edit questions and answers by certain user, made with laravel
                                and vuejs</p>
                            </div>
                        </div>
                    </div>



            </div>
        </div>


    </div>
</template>

<script>
    export default {
        name: "Experience"
    }
</script>

<style scoped>

    .title-ex{
        color: mintcream;
    }
    .title-text {
        color: #888b80;
        font-family: Inconsolata;
        font-size: 5rem;
    }


    @media screen and (max-width: 600px) {
        .title-text {
            color: #888b80;
            font-style: italic;
            font-size: 3rem;
        }
        .experience{
            margin-left: 1rem;
        }
    }

    @media screen and (max-width: 768px) {
        .title-text {
            color: #888b80;
            font-style: italic;
            font-size: 3rem;
        }
        .experience{
            margin-left: 1rem;
        }
    }


    .flip-box {
        background-color: transparent;
        width: 300px;
        height: 200px;
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
        color: white;
        transform: rotateY(180deg);
    }
</style>
