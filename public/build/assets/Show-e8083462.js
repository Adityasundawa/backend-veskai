import{_ as c}from"./AppLayout-a69c5eff.js";import p from"./DeleteUserForm-a5752cf6.js";import l from"./LogoutOtherBrowserSessionsForm-424850e6.js";import{S as s}from"./SectionBorder-1983e518.js";import f from"./TwoFactorAuthenticationForm-ee6d4b4b.js";import u from"./UpdatePasswordForm-f282b23d.js";import d from"./UpdateProfileInformationForm-58faa0a0.js";import{o,c as _,w as n,a as i,d as r,b as t,e as a,F as h}from"./app-091ab88b.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./Modal-7363c5e5.js";import"./SectionTitle-23ab92fc.js";import"./DangerButton-af34dc9f.js";import"./DialogModal-659ee4a5.js";import"./TextInput-89577028.js";import"./SecondaryButton-2e08180d.js";import"./ActionMessage-835636c3.js";import"./PrimaryButton-90d3662e.js";import"./InputLabel-e5fc8b02.js";import"./FormSection-24809965.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},G={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),_(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(d,{user:e.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{G as default};
