import{c as i,w as r,o as t,a as s,u as n,X as c,f as l,r as m,F as u,e as f,t as a,l as d,b as p}from"./app-21227ed3.js";import{_}from"./GuestLayout-bb0632b6.js";import"./ApplicationLogo-9cd85d0f.js";const C={name:"Clients",props:{clients:Array},setup(o){return(h,k)=>(t(),i(_,null,{default:r(()=>[s(n(c),{title:"Clients"}),(t(!0),l(u,null,m(o.clients,e=>(t(),l("div",{key:e.id},[s(n(d),{href:`/clients/${e.id}`},{default:r(()=>[f(a(e.firstname)+" "+a(e.lastname)+" "+a(e.phone),1)]),_:2},1032,["href"]),p("div",null,a(e.email),1)]))),128))]),_:1}))}};export{C as default};