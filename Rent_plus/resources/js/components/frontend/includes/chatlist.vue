<template>
    <div>
        <div>
            <ul v-for="chat in chats">
                <li v-if="chat.to != msg"><a >{{chat.to}}</a></li>
                <li v-if="chat.from != msg"><a >{{chat.from}}</a></li>

            </ul>
        </div>
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
                    console.log(this.chats)

                })
        }
    }
</script>

<style scoped>

</style>