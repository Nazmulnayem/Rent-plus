<template>
    <div>
        <section>
            <div class="container">
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">notifications</th>

                        </tr>
                        </thead>
                        <tbody v-for="notification in notifications" >
                        <tr>
                            <th scope="row" ><router-link :to="`/postadetails/a=100&a=rentplus&&locale=en${notification.post_id}`">You Liked {{notification.Housename}} {{notification.created_at}}</router-link></th>

                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "postnotificationsshow",
        data(){
            return{
              notifications:[],
                user_from:this.$route.params.name
            }
        },
    created(){
        axios.get(`/postad/notification/${this.$route.params.name}`)
            .then((response) => {

                console.log(response.data.likeinfos)

                this.notifications= response.data.likeinfos
            })
    }
    }
</script>

<style scoped>

</style>