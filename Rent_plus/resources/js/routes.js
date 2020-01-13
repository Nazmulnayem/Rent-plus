import homecomponent from './components/admin/adminhome'
import postadcomponent from './components/frontend/postad/postadcontent'
import profile from './components/frontend/includes/profile'
import profilepostedit from './components/frontend/includes/profilepostedit'
export const routes = [

    {
      path:'/',
        component: homecomponent
    },
    {
        path:'/profile/:name',
        component: profile
    },
    {
        path:'/profile/profile-edit/:id',
        component: profilepostedit
    },
    {
        path:'/postad',
        component: postadcomponent
    },


]