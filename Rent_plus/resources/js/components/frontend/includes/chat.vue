<template>

      <section id="chat">
          <div class="container">
              <div class="row" >
                  <div class="col-lg-8 mt-5 mb-3" style="background: #17a2b8; border-radius: 3px" >
                      <h1>{{this.$route.params.name}}</h1>

                  </div>


              </div>
              <div class="row" v-for="chat in chats">
                  <div class="col-lg-3 fa-blender-phone">
                      <h3 >{{chat.from}}</h3>
                      <p class="chatboxto">{{chat.massage}}</p>

                  </div>

              </div>

              <form>
              <div class="row mb-5">
                  <div class="col-lg-8">
                          <textarea @keydown.enter="sendMessage" style="border: 1px solid #17a2b8" placeholder="Write and hit enter" class="form-control" name="massage" v-model="massage"></textarea>
                  </div>

              </div>
              </form>


          </div>

      </section>

</template>

<script>
    export default {
        name: "chat",
        data() {
            return {
                chats: [],
                massage: '',
                userTo: this.$route.params.name

            }
        },
        created() {
            axios.get(`/chat/${this.$route.params.name}`)
                .then((response) => {
                    this.chats = response.data.chatdata


                })
        },
        methods: {
            sendMessage(e){
                e.preventDefault();
                if(this.message != '' ){

                    axios.post('/massages/save',{
                        massage : this.massage,
                        user_to : this.$route.params.name
                    })
                        .then(response=>{
                            console.log(response.data)
                            location.reload()
                        })
                }
            }
        }
    }
</script>

<style scoped>
    h1{
        color: #28334aff;
    }
    .chatboxto{
        background: #f49f1c;
        border-radius: 5px;
        padding: 5px 5px 5px 5px;
    }
    .chatboxfrom{
        background: #143d59;
        border-radius: 5px;
        padding: 5px 5px 5px 5px;
        color: white;
    }

    button{

        background: #fddb27ff;
        color:#1d68a7;
    }
    .chatscrool{
        overflow-y: scroll;
    }

</style>