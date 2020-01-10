<template>
    <div class="row justify-content-center text-center">
        <div class="massenger  mb-5">

            <h1 v-if="show" @click="show=!show" title="Getting problem? ask here."><a href="#"><i class="fab fa-facebook-messenger"></i></a></h1>
            <div class="chatbot" v-else="">
                {{conversation}}
                <h6 v-if="conversation == 'hi'">

                    <p>How can we help you?</p>
                </h6>
                <h6 v-if="conversation == 'HI'">

                    <p>How can we help you?</p>
                </h6>
                <h6 v-if="conversation == 'HI HOW ARE YOU'">

                    <p>FINE</p>
                </h6>
                <h6 v-if="conversation == 'HOW ARE YOU'">

                    <p>FINE</p>
                </h6>
                <h6 v-if="conversation == 'how are you'">

                    <p>FINE</p>
                </h6>
                <h6 v-if="conversation == 'hi how to post a rent?'">
                <p>please sir login with your id and password and then goto post rent then goto pay option then you can post sir</p>
                </h6>
                <h6 v-if="conversation == 'how to postrent'">
                    <p>please sir login with your id and password and then goto post rent then goto pay option then you can post sir</p>
                </h6>

                <input v-model="conversation">
                <button @click="show=!show">cancel</button>
            </div>

        </div>

    </div>
</template>

<script>
    export default {
        data:function () {

            return{

                show:true,
                conversation:''

            }


        }
    }
</script>

<style scoped>

    .massenger{
        margin-left: 1700px;
        padding-bottom: 500px;
    }
    a{
      text-decoration: none;
    }
    p{
        color: #1e7e34;
    }

</style>