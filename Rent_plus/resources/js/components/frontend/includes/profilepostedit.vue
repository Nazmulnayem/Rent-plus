<template>
    <section class="signin_form">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 bg-white form_class shadow-lg">
                    <div class="text-center mt-4">
                        <h1 >Update your Rent</h1>


                    </div>
                    <form role="form" enctype="multipart/form-data" @submit.prevent="updatePost()">
                        <div class="form-row align-items-center username_margin">
                            <div class="col-lg-10">
                                <label class="sr-only">


                                </label>
                                <div class="input-group" >
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-user-circle"></i></div>
                                    </div>
                                    <p></p>
                                    <input type="text"  class="form-control" placeholder="Renter Username" name="RenterUsername" v-model="form.RenterUsername" @click="Rent =! Rent" disabled>

                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-user-circle"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="Housename" placeholder="House Name" v-model="form.Housename">
                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-phone"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Phone Number" v-model="form.phonenumber">
                                </div>
                            </div>


                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-building"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Month Available from" v-model="form.availablefrom" >
                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-building"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Available floor" v-model="form.availablefloor" >
                                </div>
                            </div>


                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-tasks"></i></div>
                                    </div>
                                    <select class="form-control" v-model="form.type_rent">
                                        <option v-for="type in types" :selected="type == 'Bachelor'">{{type}}</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-money-check"></i></div>
                                    </div>
                                    <select class="form-control" v-model="form.budget_rent">

                                        <option v-for="budget in budgets">{{budget}}</option>
                                        <option v-for="n in 20">{{n}}k <</option>

                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-archway"></i></div>
                                    </div>
                                    <select class="form-control"
                                            v-model="form.Divisionselect">
                                        <option v-for="division in divisions">{{ division }}</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-city"></i></div>
                                    </div>
                                    <select class="form-control" v-model="form.Cityselect">
                                        <option v-if="form.Divisionselect =='Dhaka'"
                                                v-for="dhakacity in dhakacitys">{{dhakacity}}</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-chart-area"></i></div>
                                    </div>
                                    <select class="form-control" v-model="form.Areaselect">
                                        <option v-if="form.Cityselect =='Dhaka'"
                                                v-for="dhakaarea in dhakaareas">{{dhakaarea}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-house-damage"></i></div>
                                    </div>
                                    <textarea  class="form-control" placeholder="full Address" v-model="form.full_address"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-home"></i></div>
                                    </div>
                                    <textarea  class="form-control" placeholder="about Rent" v-model="form.About_rent"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div>
                                    <input @change ="changePhoto($event)" name="image_name" type="file">

                                </div>


                                <img :src="updateImage()" alt="" width="80" height="80">


                            </div>


                            <div class="col-lg-10 mt-3">
                                <div class="submit_form">
                                    <button type="submit" class="form-control">Update</button>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>
</template>
<script>
    import { required, minLength, between } from 'vuelidate/lib/validators'
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


                }),

                types: ['Type', 'Family', 'Bachelor', 'Sub-let-family', 'sub-let-bechelor', 'sub-let-jobholder(Male)', 'sub-let-jobholder(Female)', 'sub-let-female', 'sub-let(husband-wife)', 'hostel-room', 'hostel-seat'],
                budgets: ['Budget', 'Confirm after discussion'],
                divisions: ['Division', 'Dhaka', 'Chottogram', 'Sylet', 'Barishal', 'Rajshahi', 'Khulna', 'Rangpur'],
                dhakacitys: ['City', 'Dhaka', 'Ghazipur', 'Kishoreganj', 'Manikganj', 'Munshiganj', 'Narayanganj','Narsingdi','Tangail','Faridpur','Gopalganj','Madaripur','Rajbari','Shariatpur'],
                dhakaareas: ['Area', 'Mirpur', 'Mohammadpur', 'Sher-e-Bangla Nagar', 'Pallabi', 'Adabor', 'Kafrul', 'Dhaka Cantonment', 'Tejgaon', 'Tejgaon Industrial Area', 'Gulshan', 'Rampura', 'Banani', 'Bimanbandar', 'Khilkhet', 'Vatara', 'Badda', 'Uttara', 'Uttar Khan', 'Hatirjheel','Paltan', 'Motijheel', 'Jatrabari', 'Kotwali', 'Sutrapur', 'Bangsal', 'Wari', 'Ramna', 'Gendaria', 'Chowkbazar', 'Lalbagh', 'Hazaribagh', 'Dhanmondi', 'Kalabagan', 'Shahbagh', 'New Market', 'Khilgaon', 'Sabujbagh','Demra', 'Shyampur', 'Kamrangirchar'],

            }
        },

        created() {
            axios.get(`/profile/profile-edit/${this.$route.params.id}`)
                .then((response) => {

                    this.form.fill(response.data.postads)
                })
        },

        methods:{
            changePhoto(event){
                let file = event.target.files[0];
                if(file.size>1048576){

                }else{
                    let reader = new FileReader();
                    reader.onload = event => {
                        this.form.image_name = event.target.result

                    };
                    reader.readAsDataURL(file);
                }
            },

            updatePost(){
                this.form.post(`/update/${this.$route.params.id}`)
                    .then(()=>{
                        this.$router.push('/')
                        toast({
                            type: 'success',
                            title: 'Post Updated successfully'
                        })
                    })
                    .catch(()=>{
                    })
            },
            updateImage(){
                let img = this.form.image_name;
                if(img.length>100){
                    return  this.form.image_name
                }else{
                    return `uploadimage/${this.form.image_name}`
                }
            }
        }
    }
</script>

<style scoped>

</style>