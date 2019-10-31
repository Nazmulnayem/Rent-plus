<template>
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


        }
    }
</script>

<style scoped>

</style>