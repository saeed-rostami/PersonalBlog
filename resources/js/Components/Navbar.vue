<template>
    <nav class="myNav position-fixed col-2 col-md-1 d-flex flex-column align-items-center justify-content-center">

        <router-link tag="a" to="/">

            <a class="nav-item" data-toggle="popover" data-placement="left" title="About">
                <i class="fas fas fa-user fa-2x"></i>
            </a>
        </router-link>

        <router-link tag="a" to="/Skills">

            <a class="nav-item" data-toggle="popover" data-placement="left" title="Skills">
                <i class="fas fa-laptop fa-2x"></i>
            </a>
        </router-link>

        <router-link tag="a" to="/Experience">

            <a class="nav-item" data-toggle="popover" data-placement="left" title="Experience">
                <i class="fas fa-database fa-2x"></i>
            </a>
        </router-link>

        <router-link tag="a" to="/Contact">

            <a class="nav-item" data-toggle="popover" data-placement="left" title="Contact">
                <i class="fas fa-envelope fa-2x"></i>
            </a>
        </router-link>

        <a  class="btn btn-sm btn-dark nav-item" type="button" href="../Image/New%20Microsoft%20Word%20Document.docx"
            download> RESUME</a>

    </nav>
</template>

<script>
    export default {
        name: "Navbar",
    }
</script>

<style scoped>

    .myNav {
        background-image: radial-gradient(circle, #469cff, #174dad);
        align-items: center;
        height: 85vh;
        border-radius: 5px;
    }

    .myNav a {
        margin: 1rem 1rem;
        color: #bbecff;
    }

    .myNav a:hover {
        padding-left: 0.5rem;
        transition: 0.75s all ease-in-out;
        color: #adf5ff;
    }


</style>
