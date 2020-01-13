<template>
    <section class="signin_form">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 bg-white form_class shadow-lg">
                    <div class="text-center mt-4">
                        <h1 >Post A Rent {{this.$route.params.id}}</h1>


                    </div>
                    <form>
                        <div class="form-row align-items-center username_margin">
                            <div class="col-lg-10">
                                <label class="sr-only">


                                </label>
                                <div class="input-group" :class="{ 'input-group--error': $v.RenterUsername.$error }">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-user-circle"></i></div>
                                    </div>
                                    <p></p>
                                    <input type="text" @input="setName($event.target.value)" class="form-control" placeholder="Renter Username" v-model="{{}}" @click="Rent =! Rent">

                                </div>
                            </div>
                            <div class="col-lg-10">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <div class="error text-danger" v-if="!$v.RenterUsername.required">Field is required.RenterUsername must be unique as signin</div>
                                    <div class="error" v-if="!$v.RenterUsername.minLength">Name must have at least {{$v.name.$params.minLength.min}} letters.</div>

                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group" :class="{ 'input-group--error': $v.RenterUsername.$error }">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-user-circle"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="House Name" v-model="Housename">
                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-phone"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Phone Number" v-model="phonenumber" @click="phone =! phone">
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <p v-if="phone"></p>
                                    <p id="phone" v-else="phone">Your phone number is: {{phonenumber}}</p>

                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-building"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Month Available from" v-model="availablefrom" >
                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-building"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Available floor" v-model="availablefloor" >
                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-tasks"></i></div>
                                    </div>
                                    <select class="form-control" v-model="type_rent">
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
                                    <select class="form-control" v-model="budget_rent">

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
                                            v-model="Divisionselect">
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
                                    <select class="form-control" v-model="Cityselect">
                                        <option v-if="Divisionselect =='Dhaka'"
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
                                    <select class="form-control" v-model="Areaselect">
                                        <option v-if="Cityselect =='Dhaka'"
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
                                    <textarea  class="form-control" placeholder="full Address" v-model="full_address"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-home"></i></div>
                                    </div>
                                    <textarea  class="form-control" placeholder="about Rent" v-model="About_rent"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div>
                                    <input type="file" @change="onImageChange" class="form-control">

                                </div>


                                <img :src="image" alt="">
                            </div>


                            <div class="col-lg-10 mt-3">
                                <div class="submit_form">
                                    <button  class="form-control" @click.prevent="postsave">submit</button>

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
                posts:[],
                RenterUsername: '',
                Housename: '',
                phonenumber: '',
                availablefrom:'',
                availablefloor:'',
                types: ['Type','Family', 'Bachelor','Sub-let-family','sub-let-bechelor','sub-let-jobholder(Male)','sub-let-jobholder(Female)','sub-let-female','sub-let(husband-wife)','hostel-room','hostel-seat'],
                type_rent:'Type',
                budgets: ['Budget', 'Confirm after discussion'],
                budget_rent:'Budget',
                Divisionselect: 'Division',
                Cityselect: 'City',
                Areaselect: 'Area',
                divisions: ['Division', 'Dhaka', 'Chottogram', 'Sylet', 'Barishal', 'Rajshahi', 'Khulna', 'Rangpur'],
                dhakacitys: ['City', 'Dhaka', 'manikgong', 'keranigonj', 'kishorgonj', 'shavar', 'narayongonj'],
                dhakaareas: ['Area','Abdullahpur', 'biharicamp', 'Mohakhali', 'gulshan', 'banani', 'dhanmondi'],
                full_address:'',
                About_rent:'',
                phone: true,
                Rent: true,
                image:'',
                Datasave:'data save successfully',
                submitStatus:null
            }
        },
        validations: {
            RenterUsername: {
                required,
                minLength: minLength(4)
            }

        },
        created(){
            var vm = this;
            axios.get(`/profile/profile-edit/${this.$route.params.id}`)
                .then(function (response) {
                    vm.posts = response.data.postads;
                   console.log(vm.posts)

                })
                .catch(function (error) {
                    console.log(error);
                });

        },
        methods: {
            postsave() {


                axios.post('/postad/save', {
                    RenterUsername: this.RenterUsername,
                    Housename: this.Housename,
                    availablefrom: this.availablefrom,
                    phonenumber: this.phonenumber,
                    availablefloor: this.availablefloor,
                    type_rent: this.type_rent,
                    budget_rent: this.budget_rent,
                    Divisionselect: this.Divisionselect,
                    Cityselect: this.Cityselect,
                    Areaselect: this.Areaselect,
                    full_address: this.full_address,
                    About_rent: this.About_rent,
                    image:this.image
                })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                location.reload();

            },
            setRenterUsername(value) {
                this.RenterUsername = value
                this.$v.RenterUsername.$touch()


            },
            onImageChange(event){
                let file = event.target.files[0];

                if(file.size>1048576){

                }
                else{
                    let vm = this;
                    let reader = new FileReader();
                    reader.onload = event => {

                        vm.image =event.target.result
                    };

                    reader.readAsDataURL(file);
                }


            }
        }

    }
</script>

<style scoped>

</style>