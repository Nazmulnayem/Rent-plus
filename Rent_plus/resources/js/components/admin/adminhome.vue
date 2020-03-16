<template>
    <div>
        <section id="banner" class="position-relative">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">


                    <div class="carousel-item active" style="background:linear-gradient(to right,#0c5460,#4e555b);">
                        <div class="carousel-caption">
                            <h1 class="bounceIn mb-5">Search here your expected query</h1>
                            <p></p>
                            <form>

                                <div class="form-row justify-content-center">
                                    <div class="form-row justify-content-center">
                                        <div class="form-group col-md-3">
                                            <label  ><h3 style="color:#1c7430;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700">Division</h3></label>
                                            <select  class="form-control" v-model="selectDivision">
                                                <option v-for="division in divisions">{{division}}</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label  ><h3  style="color:#ba8b00;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700; border: 1px #a71d2a">City</h3></label>
                                            <select  class="form-control" v-model="selectCity">
                                                <option v-if="selectDivision =='Dhaka'"
                                                        v-for="dhakacity in dhakacitys">{{dhakacity}}</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label ><h3 style="color:#a71d2a;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700">Area</h3></label>
                                            <select  class="form-control" v-model="selectArea">
                                                <option v-if="selectCity =='Dhaka'"
                                                        v-for="dhakaarea in dhakaareas">{{dhakaarea}}</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label  ><h3 style="color:#1c7430;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700">Type</h3></label>
                                            <select  class="form-control" v-model="type_rent">
                                                <option v-for="type in types">{{type}}</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div  class="form-group btn_search">
                                            <button type="submit" class="btn btn-primary mt-3" @click.prevent="searchPost" @click="search =! search">Search</button>
                                        </div>


                                    </div>

                                </div>
                            </form>


                        </div>
                    </div>


                </div>


            </div>




        </section>
        <section class="about_part" id="serachresult" v-if="search">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10 ">
                        <div class="section_head pb-5 mb-5">
                            <h2 class="shadow-lg">Search Result</h2>

                        </div>
                    </div>
                </div>

                <div class="row shadow-sm">
                    <div class="col-lg-6 col-sm-6 pt-3 pb-3"  v-for="postad in posts">
                        <div class="about_inner1 pl-5 pr-5 pt-5 pb-5" style="background:linear-gradient(to right,#d3ca27,rgba(43,43,43,0.43));">
                            <img :src="postadImg(postad.image_name)" style="height: 300px; width: 400px;">
                            <p class="mt-5"><i class="fas fa-user-tie"></i> Available floor: {{postad.availablefloor}}</p>
                            <p ><i class="fas fa-check-circle"></i> Type: {{postad.type_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> budget: {{postad.budget_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> Location:{{postad.Areaselect}},{{postad.Cityselect}}, {{postad.Divisionselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> Upload: {{postad.created_at}}</p>

                            <p ><i class="fas fa-check-circle"></i> click here for details</p>
                            <div class="">
                                <router-link :to="`/postadlike/${postad.id}`"><a  class="mr-5" role="button" title="Save this post" style="font-size: 26px;"><i class="fa fa-user"></i></a></router-link>
                                <router-link to="/chat"><a class="mr-5" role="button" title="Send Message" style="font-size: 26px;"><i class="far fa-comments"></i></a></router-link>

                                <router-link :to="`/postadetails/${postad.id}`"><a  class="mr-5" role="button" title="Details" style="font-size: 26px;"><i class="fas fa-eye"></i></a></router-link>
                            </div>
                        </div>


                    </div>



                </div>
            </div>

        </section>
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
                    <div class="col-lg-6 col-sm-6 pt-3 pb-3"  v-for="postad in getallpost" v-if="postad.publication_status=='1'">
                        <div class="about_inner1 pl-5 pr-5 pt-5 pb-5" style="background:linear-gradient(to right,#d3ca27,rgba(43,43,43,0.43));">
                            <img :src="postadImg(postad.image_name)" style="height: 300px; width: 400px;">
                            <p class="mt-5"><i class="fas fa-user-tie"></i> Avaiable floor: {{postad.availablefloor}}</p>
                            <p ><i class="fas fa-check-circle"></i> Type: {{postad.type_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> budget: {{postad.budget_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> Location:{{postad.Areaselect}},{{postad.Cityselect}}, {{postad.Divisionselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> Upload: {{postad.created_at}}</p>

                            <p ><i class="fas fa-check-circle"></i> click here for details</p>
                            <div class="">
                                <router-link :to="`/postadlike/${postad.id}`"><a  class="mr-5" role="button" title="Save this post" style="font-size: 26px;"><i class="fa fa-user"></i></a></router-link>
                                <router-link :to="`/chat/${postad.RenterUsername}`"><a class="mr-5" role="button" title="Send Message" style="font-size: 26px;"><i class="far fa-comments"></i></a></router-link>

                                <router-link :to="`/postadetails/${postad.id}`"><a  class="mr-5" role="button" title="Details" style="font-size: 26px;"><i class="fas fa-eye"></i></a></router-link>
                            </div>
                        </div>


                    </div>



                </div>
            </div>

        </section>
        <section class="All_rents position-relative" id="Allrents" >
            <div class="container pb-5">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <div class="section_head1 pb-5 mb-5">
                            <h2 class="shadow-lg">All Rents</h2>

                        </div>
                    </div>
                </div>

                <div class="row shadow-sm">


                    <div class="col-lg-4 col-sm-6 pt-3 pb-3 allrentsshad" v-for="postad in getallpost" v-if="postad.publication_status== '0'">

                        <div class="about_inner1 pl-5 pr-5 pt-5 pb-5" >
                            <img :src="postadImg(postad.image_name)" style="height: 200px; width: 200px; position: center">
                            <p class="mt-5"><i class="fas fa-user-tie"></i> Avaiable floor: {{postad.availablefloor}}</p>
                            <p ><i class="fas fa-check-circle"></i> Type: {{postad.type_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> budget: {{postad.budget_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> Rent-From: {{postad.availablefrom}}</p>
                            <p ><i class="fas fa-check-circle"></i> Location:{{postad.Areaselect}},{{postad.Cityselect}}, {{postad.Divisionselect}}</p>

                            <p ><i class="fas fa-check-circle"></i> click here for details</p>
                            <div class="">
                                <router-link :to="`/postadlike/${postad.id}`"><a  class="mr-5" role="button" title="Like this post" style="font-size: 26px;"><i class="fa fa-user"></i></a></router-link>
                                <router-link :to="`/chat/${postad.RenterUsername}`"><a class="mr-5" role="button" title="Send Message" style="font-size: 26px;"><i class="far fa-comments"></i></a></router-link>
                                <router-link :to="`/postadetails/${postad.id}`"><a  class="mr-5" role="button" title="Details" style="font-size: 26px;"><i class="fas fa-eye"></i></a></router-link>
                            </div>
                        </div>


                    </div>
                    <nav aria-label="...">

                    </nav>
                    </div>

                <div class="row justify-content-center text-center">
                    <div class="col-lg-10 ">
                        <div class="section_head2 pt-3">


                        </div>
                    </div>
                </div>


            </div>





        </section>


    </div>

</template>

<script>
    export default {
        data:function () {

            return{

                 posts:[],
                divisions: ['Division', 'Dhaka', 'Chottogram', 'Sylet', 'Barishal', 'Rajshahi', 'Khulna', 'Rangpur'],
                dhakacitys: ['City', 'Dhaka', 'Ghazipur', 'Kishoreganj', 'Manikganj', 'Munshiganj', 'Narayanganj','Narsingdi','Tangail','Faridpur','Gopalganj','Madaripur','Rajbari','Shariatpur'],
                dhakaareas: ['Area', 'Mirpur', 'Mohammadpur', 'Sher-e-Bangla Nagar', 'Pallabi', 'Adabor', 'Kafrul', 'Dhaka Cantonment', 'Tejgaon', 'Tejgaon Industrial Area', 'Gulshan', 'Rampura', 'Banani', 'Bimanbandar', 'Khilkhet', 'Vatara', 'Badda', 'Uttara', 'Uttar Khan', 'Hatirjheel','Paltan', 'Motijheel', 'Jatrabari', 'Kotwali', 'Sutrapur', 'Bangsal', 'Wari', 'Ramna', 'Gendaria', 'Chowkbazar', 'Lalbagh', 'Hazaribagh', 'Dhanmondi', 'Kalabagan', 'Shahbagh', 'New Market', 'Khilgaon', 'Sabujbagh','Demra', 'Shyampur', 'Kamrangirchar'],
                selectDivision:'Division',
                selectCity:'City',
                selectArea:'Area',
                types: ['Type','Family', 'Bachelor','Sub-let-family','sub-let-bechelor','sub-let-jobholder(Male)','sub-let-jobholder(Female)','sub-let-female','sub-let(husband-wife)','hostel-room','hostel-seat'],
                type_rent:'Type',
                budgets: ['Budget', 'Confirm after discussion'],
                budget_rent:'Budget',
                Post_where:['Top-Rent'],
                search:false
            }



        },
        name:"adminhome",

        mounted() {
            this.$store.dispatch("allPost")
        },
        computed:{
               getallpost(){
                    return this.$store.getters.getPost
               }

        },
        methods:{
            postadImg(img){
                return "uploadimage/"+img;
            },
            searchPost(){
                axios.get('/postad/search', {
                    params: {
                        selectDivision: this.selectDivision,
                        selectCity: this.selectCity,
                        selectArea: this.selectArea,
                        type_rent:this.type_rent,
                    }

                })
                    .then( (response) =>{

                        this.posts = response.data.postads


                    })
                    .catch(function (error) {
                        console.log();
                    })


            }


        }

    }
</script>

<style scoped>

</style>