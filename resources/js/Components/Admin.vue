<template>
    <section class="container">
        <div class="row banner">
            <div class="col-12">
               <form method="post" v-on:submit.prevent="Add">
                   <label><h3 class="font-weight-bolder text-white">Banner Panel</h3></label>
                   <input type="text" class="form-control" placeholder="title" v-model="banners.title">
                   <br>
                   <input type="text" class="form-control" placeholder="info" v-model="banners.info">
                   <br>
                   <input type="text" class="form-control" placeholder="socials" v-model="banners.socials">
                   <br>
                   <button type="submit" class="btn btn-block btn-outline-success">Submit</button>
               </form>
            </div>
        </div>
    </section>
</template>

<script>
    import axios from 'axios';
    export default {
        name: "Admin",
        data(){
            return {
                banners : {
                    'id' : "",
                    'title' : "",
                    'info' : "",
                    'socials' : "",
                }
            }
        },
        methods:{
            Add(){
                axios.post("http://127.0.0.1:8000/api/store/banners",
                    this.banners,
                    {headers: {
                            'Content-Type': 'application/json'
                        }
                    }
                ).then(() => {
                   alert("Successfully Done")
                })
            }
        }

    }
</script>

<style scoped>

</style>