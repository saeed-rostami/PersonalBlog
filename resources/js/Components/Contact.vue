<template>
    <section class="container">
        <div class="row">

            <div class="col-12 contact-title mb-5">
                <h1 v-for="contact in contacts" v-bind:key="contact.id" class="contact-text">{{contact.title}}</h1>
            </div>

            <div class="row contact">

                <div class="col-12 col-md-6 text-white mb-3" v-for="contact in contacts" v-bind:key="contact.id">
                    <i v-bind:class="contact.socials"></i>
                    <label>{{contact.info}}</label>
                </div>

            </div>

        </div>
    </section>
</template>

<script>

    export default {
        name: "Contact",
        computed:{
            contacts(){
                return this.$store.getters.getContacts;
            }
        },
        created() {
            this.$store.dispatch('getContactsFromServer');
        }
    }
</script>

<style scoped>
    .contact-text {
        color: #888b80;
        font-family: Inconsolata;
        font-size: 5rem;
    }

    .text-white i {
        color: #174dad;
    }

    .text-white label {
        color: #888b80;
        font-style: italic;
    }

    @media screen and (max-width: 600px) {
        .contact-text {
            color: #888b80;
            font-style: italic;
            font-size: 3rem;
        }

        .contact {
            margin-left: 8px;
        }
    }

    @media screen and (max-width: 768px) {
        .contact-text {
            color: #888b80;
            font-family: Inconsolata;
            font-size: 3rem;
        }

        .contact {
            margin-left: 8px;
        }
    }
</style>
