import{_ as i}from"./AppLayout-a69c5eff.js";import o from"./DeleteTeamForm-571ec877.js";import{S as r}from"./SectionBorder-1983e518.js";import l from"./TeamMemberManager-0cd693ce.js";import n from"./UpdateTeamNameForm-28737019.js";import{o as m,c,w as s,a,b as t,d as p,F as d,e as f}from"./app-091ab88b.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./Modal-7363c5e5.js";import"./SectionTitle-23ab92fc.js";import"./ConfirmationModal-7ba7a819.js";import"./DangerButton-af34dc9f.js";import"./SecondaryButton-2e08180d.js";import"./ActionMessage-835636c3.js";import"./DialogModal-659ee4a5.js";import"./FormSection-24809965.js";import"./TextInput-89577028.js";import"./InputLabel-e5fc8b02.js";import"./PrimaryButton-90d3662e.js";const u=a("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Team Settings ",-1),x={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},D={__name:"Show",props:{team:Object,availableRoles:Array,permissions:Object},setup(e){return(b,h)=>(m(),c(i,{title:"Team Settings"},{header:s(()=>[u]),default:s(()=>[a("div",null,[a("div",x,[t(n,{team:e.team,permissions:e.permissions},null,8,["team","permissions"]),t(l,{class:"mt-10 sm:mt-0",team:e.team,"available-roles":e.availableRoles,"user-permissions":e.permissions},null,8,["team","available-roles","user-permissions"]),e.permissions.canDeleteTeam&&!e.team.personal_team?(m(),p(d,{key:0},[t(r),t(o,{class:"mt-10 sm:mt-0",team:e.team},null,8,["team"])],64)):f("",!0)])])]),_:1}))}};export{D as default};
