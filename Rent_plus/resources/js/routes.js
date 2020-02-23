import homecomponent from './components/admin/adminhome'
import postadcomponent from './components/frontend/postad/postadcontent'
import profile from './components/frontend/includes/profile'
import profilepostedit from './components/frontend/includes/profilepostedit'
import postdetails from './components/frontend/postad/postadetails'
import postsearch from './components/frontend/postad/postadSearch'
import chat from './components/frontend/includes/chat'
import chatlist from './components/frontend/includes/chatlist'
import postadnotifications from './components/frontend/postad/postnotificationsconfirm'
import postnotificationsshow from './components/frontend/postad/postnotificationsshow'
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
        path:'/postad/:name',
        component: postadcomponent
    },
    {
        path:'/postadetails/:id',
        component: postdetails
    },
    {
        path:'/postad/search',
        component: postsearch
    },
    {
        path:'/chat/:name',
        component: chat
    },
    {
        path:'/chatlist/:name',
        component: chatlist
    },
    {
        path:'/postadlike/:id',
        component: postadnotifications

    },
    {
        path:'/notifications/:name',
        component: postnotificationsshow

    }

]