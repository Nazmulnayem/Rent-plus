<template>
    <section class="signin_form">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 bg-white form_class shadow-lg">
                    <div class="text-center mt-4">
                        <h1 >Post A Rent </h1>


                    </div>
                    <form>
                        <div class="form-row align-items-center username_margin">
                            <div class="col-lg-10">
                                <label class="sr-only">


                                </label>
                                <div class="input-group" :class="{ 'input-group--error': $v.RenterUsername.$error }">

                                    <p></p>
                                    <input type="hidden" @input="setName($event.target.value)" class="form-control" placeholder="Username" v-model="RenterUsername" @click="Rent =! Rent">

                                </div>
                            </div>
                            <div class="col-lg-10">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <div class="error text-danger" v-if="!$v.RenterUsername.required"></div>
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
                                    <select class="form-control" v-model="budget_rent" >

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
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-money-check"></i></div>
                                    </div>
                                    <select class="form-control" v-model="user_type">

                                        <option v-for="user_type in user_types">{{user_type}}</option>


                                    </select>
                                </div>
                                <div v-if="user_type=='Top-Rents'">
                                    <button type="button" data-toggle="modal" data-target="#exampleModalCenter"  class="form-control">Sir Pay only 21taka for show in Top</button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Payment 01xxxxxxxxx this number</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="col-lg-10 mt-3">
                                                <label class="sr-only">


                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text text-center"><i class="fa fa-tasks"></i></div>
                                                    </div>
                                                    <select class="form-control" v-model="payment_type">
                                                        <option v-for="type in payment_types" :selected="type =='select-payment-method'">{{type}}</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 mt-3">
                                                <label class="sr-only">


                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text text-center"><i class="fa fa-building"></i></div>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="Phone" v-model="phone" >
                                                </div>
                                            </div>
                                            <div class="col-lg-10 mt-3">
                                                <label class="sr-only">


                                                </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text text-center"><i class="fa fa-building"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="TransectionID" v-model="TransectionID" >
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-success" data-dismiss="modal" @click.prevent="cash">Payment submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                            <label class="sr-only">


                            </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-camera"></i></div>
                                    </div>
                                    <input type="file" @change="onImageChange" class="form-control">
                                </div>


                            <img :src="image_name" alt="">

                        </div>
                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group" hidden>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-money-check"></i></div>
                                    </div>
                                    <select  class="form-control" v-model="publication_status">

                                        <option value="1">Publish</option>
                                        <option value="0">UnPublish</option>


                                    </select>
                                </div>

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

                post:[],
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
                dhakacitys: ['City', 'Dhaka', 'Ghazipur', 'Kishoreganj', 'Manikganj', 'Munshiganj', 'Narayanganj','Narsingdi','Tangail','Faridpur','Gopalganj','Madaripur','Rajbari','Shariatpur'],
                dhakaareas: ['Area', 'Mirpur', 'Mohammadpur', 'Sher-e-Bangla Nagar', 'Pallabi', 'Adabor', 'Kafrul', 'Dhaka Cantonment', 'Tejgaon', 'Tejgaon Industrial Area', 'Gulshan', 'Rampura', 'Banani', 'Bimanbandar', 'Khilkhet', 'Vatara', 'Badda', 'Uttara', 'Uttar Khan', 'Hatirjheel','Paltan', 'Motijheel', 'Jatrabari', 'Kotwali', 'Sutrapur', 'Bangsal', 'Wari', 'Ramna', 'Gendaria', 'Chowkbazar', 'Lalbagh', 'Hazaribagh', 'Dhanmondi', 'Kalabagan', 'Shahbagh', 'New Market', 'Khilgaon', 'Sabujbagh','Demra', 'Shyampur', 'Kamrangirchar'],
                full_address:'',
                About_rent:'',
                phone: true,
                Rent: true,
                image_name:'',
                 user_types:['Top-Rents','All-Rents'],
                user_type:'All-Rents',
                Datasave:'data save successfully',
                submitStatus:null,
                payment_types:['select-payment-method','Bkash','Rocket','Nogod'],
                publication_status:'0',
                Username:this.$route.params.name,
                payment_type: '',
                phone:'',
                TransectionID:''
            }
        },
        validations: {
            RenterUsername: {
                required,
                minLength: minLength(4)
            }

        },
        methods: {
            postsave() {


                axios.post('/postad/save', {
                    RenterUsername: this.Username,
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
                    user_type:this.user_type,
                    image_name:this.image_name,
                    publication_status:this.publication_status,

                })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                location.reload();

            },

            onImageChange(event){
                let file = event.target.files[0];

                if(file.size>1048576){

                }
                else{
                    let vm = this;
                    let reader = new FileReader();
                    reader.onload = event => {

                        vm.image_name =event.target.result
                    };

                    reader.readAsDataURL(file);
                }


            },
            cash(){
                console.log('hi')
                axios.post('/postad/save/payment', {
                    payment_type  : this.payment_type,
                    phone : this.phone,
                    TransectionID:this.TransectionID


                })
                    .then((response) => {

                        console.log(response)


                    })

            }
        }

    }
</script>

<style scoped>
    #rent{
        color:#1e7e34;
    }
</style>