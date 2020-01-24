<template>
    <div>
        <section class="All_rents position-relative" id="Allrents" >
            <div class="container pb-5">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <div class="section_head1 pb-5 mb-5">
                            <h2 class="shadow-lg">My posts </h2>

                        </div>
                    </div>
                </div>

                <div class="row shadow-sm">


                    <div class="col-lg-4 col-sm-6 pt-3 pb-3 allrentsshad" v-for="postad in posts">

                        <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">
                            <img :src="postadImg(postad.image_name)" style="height: 200px; width: 200px; position: center">

                            <p class="mt-5"><i class="fas fa-user-tie"></i> Avaiable floor: {{postad.availablefloor}}</p>
                            <p ><i class="fas fa-check-circle"></i> Type: {{postad.type_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> budget: {{postad.budget_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> Rent-From: {{postad.availablefrom}}</p>
                            <p ><i class="fas fa-check-circle"></i> Location:{{postad.Areaselect}},{{postad.Cityselect}}, {{postad.Divisionselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> Update-at: {{postad.updated_at}}</p>
                            <p ><i class="fas fa-check-circle"></i> Created-at: {{postad.created_at}}</p>
                            <p ><i class="fas fa-check-circle"></i> click here for details</p>
                            <div class="">
                              <router-link :to="`/profile/profile-edit/${postad.id}`"><a  class="mr-5" role="button" title="Update" style="font-size: 26px;"><i class="fas fa-edit"></i></a></router-link>
                               <a href="" @click.prevent="deletepost(postad.id)" class="mr-5" role="button" title="Delete" style="font-size: 26px;"><i class="fas fa-trash-alt"></i></a>

                            </div>
                        </div>


                    </div>
                    <nav aria-label="...">

                    </nav>
                </div>

                <div class="row justify-content-center text-center">
                    <div class="col-lg-10 ">
                        <div class="section_head2 pt-3">
                            <a href="">See More <i class="fas fa-external-link-square-alt"></i></a>

                        </div>
                    </div>
                </div>


            </div>





        </section>
    </div>
</template>

<script>
    export default {

        data(){
            return{
                posts:{},

            }
        },

        mounted() {

        },
        created(){
            var vm = this;
            axios.get(`profile/${this.$route.params.name}`)
                .then(function (response) {
                    vm.posts = response.data.postads;

                })
                .catch(function (error) {
                    console.log(error);
                });
        },


        computed:{

        },
        methods:{
            postadImg(img){
                return "uploadimage/"+img;
            },

            deletepost(id){
                var vm = this;
                axios.get('/profile/deletepost/'+id)
                    .then(function (response) {
                        window.alert('delete successful')
                        location.reload()

                    })
                    .catch(function (error) {
                        console.log(error);
                    });

            }




        }
    }
</script>

<style scoped>

</style>