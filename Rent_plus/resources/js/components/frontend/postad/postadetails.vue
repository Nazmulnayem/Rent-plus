<template>
    <div>
        <section class="All_rents position-relative" id="Allrents" >
            <div class="container pb-5">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <div class="section_head1 pb-5 mb-5">
                            <h2 class="shadow-lg">Post Details</h2>

                        </div>
                    </div>
                </div>

                <div class="row shadow-sm">


                    <div class="col-lg-4 col-sm-6 pt-3 pb-3 allrentsshad">

                        <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">


                            <p class="mt-5"><i class="fas fa-user-tie"></i> Avaiable floor: {{form.availablefloor}}</p>


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
        }


    }
</script>

<style scoped>

</style>