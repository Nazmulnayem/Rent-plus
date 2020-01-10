import homecomponent from './components/admin/adminhome'
import profilecomponent from './components/admin/adminprofile'
import postadcomponent from './components/frontend/postad/postadcontent'
export const routes = [

    {
      path:'/home',
        component: homecomponent
    },
    {
        path:'/profile',
        component: profilecomponent
    },
    {
        path:'/postad',
        component: postadcomponent
    },


]