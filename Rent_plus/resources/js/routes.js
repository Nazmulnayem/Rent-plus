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
        path:'/profile/a=100&a=rentplus&&locale=en:name',
        component: profile
    },
    {
        path:'/profile/profile-edit/a=100&a=rentplus&&locale=en:id',
        component: profilepostedit
    },
    {
        path:'/postad/a=100&a=rentplus&&locale=en:name',
        component: postadcomponent
    },
    {
        path:'/postadetails/a=100&a=rentplus&&locale=en:id',
        component: postdetails
    },
    {
        path:'/postad/search',
        component: postsearch
    },
    {
        path:'/chat/a=100&a=rentplus&&locale=en:name',
        component: chat
    },
    {
        path:'/chatlist/a=100&a=rentplus&&locale=en:name',
        component: chatlist
    },
    {
        path:'/postadlike/a=100&a=rentplus&&locale=en:id',
        component: postadnotifications

    },
    {
        path:'/notifications/a=100&a=rentplus&&locale=en:name',
        component: postnotificationsshow

    }

]