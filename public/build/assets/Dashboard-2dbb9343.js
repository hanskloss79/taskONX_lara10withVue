import{_ as i}from"./AuthenticatedLayout-774dbf6f.js";import{f as e,a as n,u as c,w as o,F as r,o as l,X as h,b as t,r as u,t as a}from"./app-21227ed3.js";/* empty css                      */import"./ApplicationLogo-9cd85d0f.js";const _=t("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"},"Dashboard",-1),m={class:"py-12"},b={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},p={class:"bg-white overflow-hidden shadow-sm sm:rounded-lg"},g=t("div",{class:"p-6 text-gray-900"},"Jesteś zalogowany!",-1),f=t("div",{class:"row"},[t("div",{class:"col-lg-12 margin-tb"},[t("div",{class:"text-center"},[t("h2",null,"Baza danych klientów")]),t("div",{class:"pull-right mb-2"},[t("a",{class:"btn btn-success",href:"/clients/create"},"Dodaj klienta")])])],-1),x={id:"tableComponent",class:"table table-bordered"},w=t("thead",null,[t("tr",null,[t("th",null,"Nr klienta"),t("th",null,"Imię"),t("th",null,"Nazwisko"),t("th",null,"Email"),t("th",null,"Akcje")])],-1),y=["href"],j={name:"Dashboard",props:{clients:Array},setup(d){return(v,k)=>(l(),e(r,null,[n(c(h),{title:"Dashboard"}),n(i,null,{header:o(()=>[_]),default:o(()=>[t("div",m,[t("div",b,[t("div",p,[g,f,t("table",x,[w,t("tbody",null,[(l(!0),e(r,null,u(d.clients,s=>(l(),e("tr",{key:s.id},[t("td",null,a(s.id),1),t("td",null,a(s.firstname),1),t("td",null,a(s.lastname),1),t("td",null,a(s.email),1),t("td",null,[t("a",{class:"btn btn-warning",href:/clients/+s.id},"Szczegóły",8,y)])]))),128))])])])])])]),_:1})],64))}};export{j as default};
