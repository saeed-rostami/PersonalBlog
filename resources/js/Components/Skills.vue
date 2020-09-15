<template>
    <section class="container">
        <div class="row mb-2">

            <div class="col-12" v-for="skill in skills" v-bind:key="skill.id">
                <h1 class="skills-text">{{skill.title}}</h1>
            </div>


            <div class="row col-12 lang-skills" v-for="skill in skills">
                <div class="col-12">
                    <i v-bind:class="skill.skill_socials"></i>
                    <label>{{skill.skill_option}}</label>
                    <div class="progress">
                        <div class="progress-bar" v-bind:style="{width: skill.skill_option_qnt + '%'}"></div>
                    </div>

                </div>

            </div>

        </div>
    </section>

</template>

<script>

    export default {
        name: "Educate",
        computed : {
            skills(){
               return  this.$store.getters.getSkills;
            },
        },

        created() {
            this.$store.dispatch("getSkillsFromServer");
        }
    }
</script>

<style scoped>
    .skills-text {
        color: #888b80;
        font-family: Inconsolata;
        font-size: 5rem;
    }

    .progress-bar {
        background-color: #174dad;
        border: mintcream 2px solid;
    }

    label {
        color: #174dad;
        margin: 2px;
    }

    i {
        color: #174dad;
        margin: 2px;
    }

    @media screen and (max-width: 600px) {
        .skills-text {
            color: #888b80;
            font-family: Inconsolata;
            font-size: 3rem;

        }

        .lang-skills {
            margin-left: 1rem;
        }
    }

    @media screen and (max-width: 768px) {
        .lang-skills {
            margin-left: 1rem;
        }
    }
</style>
