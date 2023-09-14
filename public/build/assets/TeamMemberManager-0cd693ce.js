import{T as k,r as x,o as l,d as n,b as a,w as t,e as u,f as r,a as o,u as s,F as w,g as C,n as v,K as G,t as y,O as H}from"./app-091ab88b.js";import{_ as J}from"./ActionMessage-835636c3.js";import{_ as A}from"./Modal-7363c5e5.js";import{_ as B}from"./ConfirmationModal-7ba7a819.js";import{_ as L}from"./DangerButton-af34dc9f.js";import{_ as Q}from"./DialogModal-659ee4a5.js";import{_ as W}from"./FormSection-24809965.js";import{_ as X,a as P}from"./TextInput-89577028.js";import{_ as z}from"./InputLabel-e5fc8b02.js";import{_ as F}from"./PrimaryButton-90d3662e.js";import{_ as $}from"./SecondaryButton-2e08180d.js";import{S}from"./SectionBorder-1983e518.js";import"./SectionTitle-23ab92fc.js";import"./_plugin-vue_export-helper-c27b6911.js";const Y={key:0},Z=o("div",{class:"col-span-6"},[o("div",{class:"max-w-xl text-sm text-gray-600"}," Please provide the email address of the person you would like to add to this team. ")],-1),ee={class:"col-span-6 sm:col-span-4"},te={key:0,class:"col-span-6 lg:col-span-4"},se={class:"relative z-0 mt-1 border border-gray-200 rounded-lg cursor-pointer"},oe=["onClick"],ae={class:"flex items-center"},le={key:0,class:"ml-2 h-5 w-5 text-green-400",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor"},ne=o("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"},null,-1),re=[ne],ie={class:"mt-2 text-xs text-gray-600 text-left"},me={key:1},ce={class:"space-y-6"},de={class:"text-gray-600"},ue={class:"flex items-center"},ve=["onClick"],fe={key:2},be={class:"space-y-6"},ye={class:"flex items-center"},_e=["src","alt"],ge={class:"ml-4"},he={class:"flex items-center"},pe=["onClick"],ke={key:1,class:"ml-2 text-sm text-gray-400"},xe=["onClick"],we={key:0},Ce={class:"relative z-0 mt-1 border border-gray-200 rounded-lg cursor-pointer"},Te=["onClick"],Re={class:"flex items-center"},Me={key:0,class:"ml-2 h-5 w-5 text-green-400",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24","stroke-width":"1.5",stroke:"currentColor"},$e=o("path",{"stroke-linecap":"round","stroke-linejoin":"round",d:"M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"},null,-1),Se=[$e],je={class:"mt-2 text-xs text-gray-600"},qe={__name:"TeamMemberManager",props:{team:Object,availableRoles:Array,userPermissions:Object},setup(i){const g=i,c=k({email:"",role:null}),f=k({role:null}),T=k({}),R=k({}),h=x(!1),M=x(null),p=x(!1),_=x(null),V=()=>{c.post(route("team-members.store",g.team),{errorBag:"addTeamMember",preserveScroll:!0,onSuccess:()=>c.reset()})},O=d=>{H.delete(route("team-invitations.destroy",d),{preserveScroll:!0})},N=d=>{M.value=d,f.role=d.membership.role,h.value=!0},E=()=>{f.put(route("team-members.update",[g.team,M.value]),{preserveScroll:!0,onSuccess:()=>h.value=!1})},I=()=>{p.value=!0},U=()=>{T.delete(route("team-members.destroy",[g.team,G().props.auth.user]))},D=d=>{_.value=d},K=()=>{R.delete(route("team-members.destroy",[g.team,_.value]),{errorBag:"removeTeamMember",preserveScroll:!0,preserveState:!0,onSuccess:()=>_.value=null})},j=d=>g.availableRoles.find(m=>m.key===d).name;return(d,m)=>(l(),n("div",null,[i.userPermissions.canAddTeamMembers?(l(),n("div",Y,[a(S),a(W,{onSubmitted:V},{title:t(()=>[r(" Add Team Member ")]),description:t(()=>[r(" Add a new team member to your team, allowing them to collaborate with you. ")]),form:t(()=>[Z,o("div",ee,[a(z,{for:"email",value:"Email"}),a(X,{id:"email",modelValue:s(c).email,"onUpdate:modelValue":m[0]||(m[0]=e=>s(c).email=e),type:"email",class:"mt-1 block w-full"},null,8,["modelValue"]),a(P,{message:s(c).errors.email,class:"mt-2"},null,8,["message"])]),i.availableRoles.length>0?(l(),n("div",te,[a(z,{for:"roles",value:"Role"}),a(P,{message:s(c).errors.role,class:"mt-2"},null,8,["message"]),o("div",se,[(l(!0),n(w,null,C(i.availableRoles,(e,b)=>(l(),n("button",{key:e.key,type:"button",class:v(["relative px-4 py-3 inline-flex w-full rounded-lg focus:z-10 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500",{"border-t border-gray-200 focus:border-none rounded-t-none":b>0,"rounded-b-none":b!=Object.keys(i.availableRoles).length-1}]),onClick:q=>s(c).role=e.key},[o("div",{class:v({"opacity-50":s(c).role&&s(c).role!=e.key})},[o("div",ae,[o("div",{class:v(["text-sm text-gray-600",{"font-semibold":s(c).role==e.key}])},y(e.name),3),s(c).role==e.key?(l(),n("svg",le,re)):u("",!0)]),o("div",ie,y(e.description),1)],2)],10,oe))),128))])])):u("",!0)]),actions:t(()=>[a(J,{on:s(c).recentlySuccessful,class:"mr-3"},{default:t(()=>[r(" Added. ")]),_:1},8,["on"]),a(F,{class:v({"opacity-25":s(c).processing}),disabled:s(c).processing},{default:t(()=>[r(" Add ")]),_:1},8,["class","disabled"])]),_:1})])):u("",!0),i.team.team_invitations.length>0&&i.userPermissions.canAddTeamMembers?(l(),n("div",me,[a(S),a(A,{class:"mt-10 sm:mt-0"},{title:t(()=>[r(" Pending Team Invitations ")]),description:t(()=>[r(" These people have been invited to your team and have been sent an invitation email. They may join the team by accepting the email invitation. ")]),content:t(()=>[o("div",ce,[(l(!0),n(w,null,C(i.team.team_invitations,e=>(l(),n("div",{key:e.id,class:"flex items-center justify-between"},[o("div",de,y(e.email),1),o("div",ue,[i.userPermissions.canRemoveTeamMembers?(l(),n("button",{key:0,class:"cursor-pointer ml-6 text-sm text-red-500 focus:outline-none",onClick:b=>O(e)}," Cancel ",8,ve)):u("",!0)])]))),128))])]),_:1})])):u("",!0),i.team.users.length>0?(l(),n("div",fe,[a(S),a(A,{class:"mt-10 sm:mt-0"},{title:t(()=>[r(" Team Members ")]),description:t(()=>[r(" All of the people that are part of this team. ")]),content:t(()=>[o("div",be,[(l(!0),n(w,null,C(i.team.users,e=>(l(),n("div",{key:e.id,class:"flex items-center justify-between"},[o("div",ye,[o("img",{class:"w-8 h-8 rounded-full object-cover",src:e.profile_photo_url,alt:e.name},null,8,_e),o("div",ge,y(e.name),1)]),o("div",he,[i.userPermissions.canUpdateTeamMembers&&i.availableRoles.length?(l(),n("button",{key:0,class:"ml-2 text-sm text-gray-400 underline",onClick:b=>N(e)},y(j(e.membership.role)),9,pe)):i.availableRoles.length?(l(),n("div",ke,y(j(e.membership.role)),1)):u("",!0),d.$page.props.auth.user.id===e.id?(l(),n("button",{key:2,class:"cursor-pointer ml-6 text-sm text-red-500",onClick:I}," Leave ")):i.userPermissions.canRemoveTeamMembers?(l(),n("button",{key:3,class:"cursor-pointer ml-6 text-sm text-red-500",onClick:b=>D(e)}," Remove ",8,xe)):u("",!0)])]))),128))])]),_:1})])):u("",!0),a(Q,{show:h.value,onClose:m[2]||(m[2]=e=>h.value=!1)},{title:t(()=>[r(" Manage Role ")]),content:t(()=>[M.value?(l(),n("div",we,[o("div",Ce,[(l(!0),n(w,null,C(i.availableRoles,(e,b)=>(l(),n("button",{key:e.key,type:"button",class:v(["relative px-4 py-3 inline-flex w-full rounded-lg focus:z-10 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500",{"border-t border-gray-200 focus:border-none rounded-t-none":b>0,"rounded-b-none":b!==Object.keys(i.availableRoles).length-1}]),onClick:q=>s(f).role=e.key},[o("div",{class:v({"opacity-50":s(f).role&&s(f).role!==e.key})},[o("div",Re,[o("div",{class:v(["text-sm text-gray-600",{"font-semibold":s(f).role===e.key}])},y(e.name),3),s(f).role==e.key?(l(),n("svg",Me,Se)):u("",!0)]),o("div",je,y(e.description),1)],2)],10,Te))),128))])])):u("",!0)]),footer:t(()=>[a($,{onClick:m[1]||(m[1]=e=>h.value=!1)},{default:t(()=>[r(" Cancel ")]),_:1}),a(F,{class:v(["ml-3",{"opacity-25":s(f).processing}]),disabled:s(f).processing,onClick:E},{default:t(()=>[r(" Save ")]),_:1},8,["class","disabled"])]),_:1},8,["show"]),a(B,{show:p.value,onClose:m[4]||(m[4]=e=>p.value=!1)},{title:t(()=>[r(" Leave Team ")]),content:t(()=>[r(" Are you sure you would like to leave this team? ")]),footer:t(()=>[a($,{onClick:m[3]||(m[3]=e=>p.value=!1)},{default:t(()=>[r(" Cancel ")]),_:1}),a(L,{class:v(["ml-3",{"opacity-25":s(T).processing}]),disabled:s(T).processing,onClick:U},{default:t(()=>[r(" Leave ")]),_:1},8,["class","disabled"])]),_:1},8,["show"]),a(B,{show:_.value,onClose:m[6]||(m[6]=e=>_.value=null)},{title:t(()=>[r(" Remove Team Member ")]),content:t(()=>[r(" Are you sure you would like to remove this person from the team? ")]),footer:t(()=>[a($,{onClick:m[5]||(m[5]=e=>_.value=null)},{default:t(()=>[r(" Cancel ")]),_:1}),a(L,{class:v(["ml-3",{"opacity-25":s(R).processing}]),disabled:s(R).processing,onClick:K},{default:t(()=>[r(" Remove ")]),_:1},8,["class","disabled"])]),_:1},8,["show"])]))}};export{qe as default};
