<template>
    <div>
        <section id="banner" >
            <diV class="container">
                <div class="row justify-content-center text-center mt-5">
                    <div class="col-lg-10 ">
                        <div class="section_head pb-5 mb-5">
                            <h2 class="shadow-lg">Snaps of post from <mark>{{form.Housename}}</mark></h2>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center mt-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <img :src="postadImg(form.image_name)" class="img-fluid" id="img">
                            </div>
                            <div class="carousel-item">
                                <img  :src="postadImg(form.image_name)" alt="First slide" id="img1">
                            </div>
                        </div>
                    </div>

                </div>

            </diV>




        </section>
        <section id="maincontent" >
            <diV class="container">

                <div class="row justify-content-center text-center mt-3">
                    <div class="col-lg-10 ">
                        <div class="section_head pb-3 mb-3">
                            <h2 class="shadow-lg">Post Details</h2>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-lg-10 ">
                        <div class="section_head pb-5 mb-3">
                            <h3 class="mt-3">Owner Name: <marK>{{form.RenterUsername}}</marK></h3>

                            <h3 class="mt-3">Abailable from: <marK>{{form.availablefrom}}</marK></h3>

                            <h3 class="mt-3">Abailabe floor: <marK>{{form.availablefloor}}</marK></h3>
                            <h3 class="mt-3">Budget: <marK>{{form.budget_rent}}</marK></h3>
                            <h3 class="mt-3">phone Number: <marK>{{form.phonenumber}}</marK></h3>


                            <h3 class="mt-3">Location: <marK>{{form.Areaselect}}-{{form.Cityselect}}-{{form.Divisionselect}}</marK></h3>


                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center mt-3">
                    <div class="col-lg-10 ">
                        <div class="section_head pb-3 mb-3">
                            <h2 class="shadow-lg">full address</h2>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center mt-3">
                    <div class="col-lg-10 ">
                        <div class="section_head pb-5 mb-3">
                            <h3 class="mt-3" id="fulladdress">{{form.full_address}}</h3>


                        </div>
                    </div>
                </div>

            </diV>





        </section>
    </div>
</template>

<script>

    export default {
        data: function () {
            return {
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

        created() {
            axios.get(`/postadetails/${this.$route.params.id}`)
                .then((response) => {

                    console.log(response.data.postads)
                    this.form.fill(response.data.postads)
                })
        },
        methods:{
            postadImg(img) {
                return "uploadimage/" + img;
            }
        }


    }
</script>

<style scoped>
#img{
    height: 350px;
    width: 600px;



}

#img1{
    height: 350px;
    width: 600px;

}
    h3,h2{
        color: #4c110f;
        font-family: 'Raleway', sans-serif;
    }
#fulladdress{
    color: #19692c;
    font-family: "Nunito", sans-serif;
    font-size: 40px;
}
</style>