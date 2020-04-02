<template>
    <div>
        <section id="chat">
            <div class="container">
                <div class="row justify-content-center" >
                    <div class="col-lg-8 mt-5 mb-3" style="background: #17a2b8; border-radius: 3px" >
                        <h1>chat history</h1>

                    </div>


                </div>
                <div class="row justify-content-center" v-for="chat in chats">
                    <div class="col-lg-6">
                        <p><router-link class="chatboxto" :to="`/chat/a=100&a=rentplus&&locale=en${chat.to}`">Massagelink-1 {{chat.from}} sent massage {{chat.to}}</router-link></p>
                        <p><router-link class="chatboxfrom" :to="`/chat/a=100&a=rentplus&&locale=en${chat.from}`">Massagelink-2 {{chat.from}} sent massage {{chat.to}}</router-link></p>

                    </div>

                </div>



            </div>

        </section>
    </div>
</template>

<script>
    export default {
        name: "chatlist",
        data(){
            return{
                chats:[],
                msg: this.$route.params.name

            }
        },
        created() {
            axios.get(`/chatlist/${this.$route.params.name}`)
                .then((response) => {
                    this.chats = response.data.chatdata;


                })
        }
    }
</script>

<style scoped>
    .chatboxfrom{
        background: #143d59;
        border-radius: 5px;
        padding: 5px 5px 5px 5px;
        color: white;
    }
    .chatboxto{
        background: #f49f1c;
        border-radius: 5px;
        padding: 5px 5px 5px 5px;
    }

</style>