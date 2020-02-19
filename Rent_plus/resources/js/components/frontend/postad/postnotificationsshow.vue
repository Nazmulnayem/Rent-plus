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
                            <th scope="row" ><a href="">You Liked {{notification.Housename}} {{notification.created_at}}</a></th>

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