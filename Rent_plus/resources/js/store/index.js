export default{
    state:{
          postad:[],

    },

    getters:{
          getPost(state){
          return state.postad
     }

    },
    actions:{
        allPost(context){
            axios.get('/postad/manage/save/vue/abcd&kjhkhjkkhjnazmulHasan')
                .then(function (response) {
                    context.commit('postadall',response.data.postads)
                })


        }


    },
    mutations:{

        postadall(state,data){
            return state.postad = data
        }

    }
}