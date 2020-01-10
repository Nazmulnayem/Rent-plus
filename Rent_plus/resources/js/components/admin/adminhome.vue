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
                                        <div class="form-group col-md-2">
                                            <label ><h3 style="color:#a71d2a;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700">Area</h3></label>
                                            <select  class="form-control" v-model="selectArea">
                                                <option v-if="selectCity =='Dhaka'"
                                                        v-for="dhakaarea in dhakaareas">{{dhakaarea}}</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label  ><h3 style="color:#1c7430;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700">Type</h3></label>
                                            <select  class="form-control" v-model="type_rent">
                                                <option v-for="type in types">{{type}}</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label  ><h3  style="color:#ba8b00;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700; border: 1px #a71d2a">Budged</h3></label>
                                            <select  class="form-control" v-model="budget_rent">
                                                <option v-for="budget in budgets">{{budget}}</option>
                                                <option v-for="n in 20"> {{n}}k< </option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div  class="form-group btn_search">
                                            <button type="submit" class="btn btn-primary mt-3">Search</button>
                                        </div>


                                    </div>

                                </div>
                            </form>


                        </div>
                    </div>


                </div>


            </div>




        </section>
        <section class="about_part" id="Toprents">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10 ">
                        <div class="section_head pb-5 mb-5 shadow-sm">
                            <h2>Top Rents</h2>

                        </div>
                    </div>
                </div>

                <div class="row shadow-sm">
                    <div class="col-lg-6 col-sm-6 pt-3 pb-3" v-for="postad in getallpost">
                        <div class="about_inner1 pl-5 pr-5 pt-5 pb-5" style="background:linear-gradient(to right,#d3ca27,rgba(43,43,43,0.43));">
                            <h4 ><i class="fas fa-home mr-3" ></i> HouseName: <a href="">{{postad.Housename}}</a></h4>
                            <p ><i class="fas fa-user-tie"></i> HouseOwner: <a href="">{{postad.RenterUsername}}</a></p>
                            <p ><i class="fas fa-user-tie"></i> Avaiable floor: {{postad.availablefloor}}</p>
                            <p ><i class="fas fa-check-circle"></i> Type: {{postad.type_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> budget: {{postad.budget_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> Area: {{postad.Areaselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> City: {{postad.Cityselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> Division: {{postad.Divisionselect}}</p>
                            <p ><i class="fas fa-user-tie"></i> Phone number: {{postad.phonenumber}}</p>
                            <p ><i class="fas fa-check-circle"></i> click here for details</p>
                            <div class="">
                                <a href="" class="mr-5" role="button" title="Send A  Rent Request" style="font-size: 26px;"><i class="fa fa-user"></i></a>
                                <a href="" class="mr-5" role="button" title="Send Message" style="font-size: 26px;"><i class="far fa-comments"></i></a>
                                <a href="" class="" role="button" title="See Details" style="font-size: 26px;"><i class="fa fa-reply"></i></a>
                            </div>
                        </div>


                    </div>



                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-10 ">
                    <div class="section_head2 pt-3">
                        <a href="">See More <i class="fas fa-external-link-square-alt"></i></a>

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


                    <div class="col-lg-4 col-sm-6 pt-3 pb-3 allrentsshad" v-for="postad in getallpost">
                        <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">
                            <h4 ><i class="fas fa-home mr-3" ></i> HouseName: <a href="">{{postad.Housename}}</a></h4>
                            <p ><i class="fas fa-user-tie"></i> HouseOwner: <a href="">{{postad.RenterUsername}}</a></p>
                            <p ><i class="fas fa-user-tie"></i> Avaiable floor: {{postad.availablefloor}}</p>
                            <p ><i class="fas fa-check-circle"></i> Type: {{postad.type_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> budget: {{postad.budget_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> Area: {{postad.Areaselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> City: {{postad.Cityselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> Division: {{postad.Divisionselect}}</p>
                            <p ><i class="fas fa-user-tie"></i> Phone number: {{postad.phonenumber}}</p>
                            <p ><i class="fas fa-check-circle"></i> click here for details</p>
                            <div class="">
                                <a href="" class="mr-5" role="button" title="Send A  Rent Request" style="font-size: 26px;"><i class="fa fa-user"></i></a>
                                <a href="" class="mr-5" role="button" title="Send Message" style="font-size: 26px;"><i class="far fa-comments"></i></a>
                                <a href="" class="" role="button" title="See Details" style="font-size: 26px;"><i class="fa fa-reply"></i></a>
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

        <section class="post_add">
            <div class="jumbotron ">
                <div class="container">
                    <div class="row align-content-center text-center">
                        <div class="col-lg-12">

                            <h2 class="postadd_h1">Post your ads at free cost to reach more people in Online.</h2>
                            <button type="button" class="btn btn-info mt-3 shadow-lg"><a href="">Post Your Advertisement Here</a></button>


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
                divisions: ['Division', 'Dhaka', 'Chottogram', 'Sylet', 'Barishal', 'Rajshahi', 'Khulna', 'Rangpur'],
                dhakacitys: ['City', 'Dhaka', 'manikgong', 'keranigonj', 'kishorgonj', 'shavar', 'narayongonj'],
                dhakaareas: ['Area','Abdullahpur', 'biharicamp', 'Mohakhali', 'gulshan', 'banani', 'dhanmondi'],
                selectDivision:'Division',
                selectCity:'City',
                selectArea:'Area',
                types: ['Type','Family', 'Bachelor','Sub-let-family','sub-let-bechelor','sub-let-jobholder','sub-let-female'],
                type_rent:'Type',
                budgets: ['Budget', 'Confirm after discussion'],
                budget_rent:'Budget',
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

        }

    }
</script>

<style scoped>

</style>