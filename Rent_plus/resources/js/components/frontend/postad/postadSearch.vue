<template>
    <div>
        <section class="about_part" id="Toprents">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10 ">
                        <div class="section_head pb-5 mb-5">
                            <h2 class="shadow-lg">Top Rents</h2>

                        </div>
                    </div>
                </div>

                <div class="row shadow-sm">
                    <div class="col-lg-6 col-sm-6 pt-3 pb-3"  v-for="postad in Searchallpost">
                        <div class="about_inner1 pl-5 pr-5 pt-5 pb-5" style="background:linear-gradient(to right,#d3ca27,rgba(43,43,43,0.43));">
                            <img :src="postadImg(postad.image_name)" style="height: 300px; width: 400px;">
                            <p class="mt-5"><i class="fas fa-user-tie"></i> Avaiable floor: {{postad.availablefloor}}</p>
                            <p ><i class="fas fa-check-circle"></i> Type: {{postad.type_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> budget: {{postad.budget_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> Location:{{postad.Areaselect}},{{postad.Cityselect}}, {{postad.Divisionselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> Upload: {{postad.created_at}}</p>

                            <p ><i class="fas fa-check-circle"></i> click here for details</p>
                            <div class="">
                                <a href="" class="mr-5" role="button" title="Send A  Rent Request" style="font-size: 26px;"><i class="fa fa-user"></i></a>
                                <a href="" class="mr-5" role="button" title="Send Message" style="font-size: 26px;"><i class="far fa-comments"></i></a>

                                <router-link :to="`/postadetails/${postad.id}`"><a  class="mr-5" role="button" title="Details" style="font-size: 26px;"><i class="fas fa-eye"></i></a></router-link>
                            </div>
                        </div>


                    </div>



                </div>
            </div>

        </section>
    </div>
</template>

<script>
    export default {
        name: "postadSearch",
        data(){
            return{


                form: new Form({
                    RenterUsername: '',
                    Housename: '',
                    availablefrom: '',
                    phonenumber: '',
                    availablefloor: '',
                    type_rent: '',
                    budget_rent: '',
                    Divisionselect: '',
                    Cityselect: '',
                    Areaselect: '',
                    full_address: '',
                    About_rent: '',
                    image_name: ''


                })


            }

        },
        mounted() {
            this.$store.dispatch("searchallPost")
        },
        computed:{
            Searchallpost(){
                return this.$store.getters.searchPost
            }

        },
        methods: {
            postadImg(img) {
                return "uploadimage/" + img;
            }
        }

    }
</script>

<style scoped>

</style>