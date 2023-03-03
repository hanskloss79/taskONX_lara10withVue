import{A as D}from"./ApplicationLogo-c6e47131.js";import{p as M,q as N,h as v,s as L,o as d,f as m,b as e,m as c,i as k,x as $,a,w as o,n as u,u as l,T as B,c as y,l as b,e as f,t as _,g as E}from"./app-2876e9d2.js";const j={class:"relative"},z={name:"Dropdown",props:{align:{default:"right"},width:{default:"48"},contentClasses:{default:()=>["py-1","bg-white"]}},setup(n){const s=n,t=g=>{i.value&&g.key==="Escape"&&(i.value=!1)};M(()=>document.addEventListener("keydown",t)),N(()=>document.removeEventListener("keydown",t));const r=v(()=>({48:"w-48"})[s.width.toString()]),p=v(()=>s.align==="left"?"origin-top-left left-0":s.align==="right"?"origin-top-right right-0":"origin-top"),i=L(!1);return(g,h)=>(d(),m("div",j,[e("div",{onClick:h[0]||(h[0]=w=>i.value=!i.value)},[c(g.$slots,"trigger")]),k(e("div",{class:"fixed inset-0 z-40",onClick:h[1]||(h[1]=w=>i.value=!1)},null,512),[[$,i.value]]),a(B,{"enter-active-class":"transition ease-out duration-200","enter-from-class":"transform opacity-0 scale-95","enter-to-class":"transform opacity-100 scale-100","leave-active-class":"transition ease-in duration-75","leave-from-class":"transform opacity-100 scale-100","leave-to-class":"transform opacity-0 scale-95"},{default:o(()=>[k(e("div",{class:u(["absolute z-50 mt-2 rounded-md shadow-lg",[l(r),l(p)]]),style:{display:"none"},onClick:h[2]||(h[2]=w=>i.value=!1)},[e("div",{class:u(["rounded-md ring-1 ring-black ring-opacity-5",n.contentClasses])},[c(g.$slots,"content")],2)],2),[[$,i.value]])]),_:3})]))}},C={name:"DropdownLink",setup(n){return(s,t)=>(d(),y(l(b),{class:"block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"},{default:o(()=>[c(s.$slots,"default")]),_:3}))}},S={name:"NavLink",props:["href","active"],setup(n){const s=n,t=v(()=>s.active?"inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out":"inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out");return(r,p)=>(d(),y(l(b),{href:n.href,class:u(l(t))},{default:o(()=>[c(r.$slots,"default")]),_:3},8,["href","class"]))}},x={name:"ResponsiveNavLink",props:["href","active"],setup(n){const s=n,t=v(()=>s.active?"block w-full pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out":"block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out");return(r,p)=>(d(),y(l(b),{href:n.href,class:u(l(t))},{default:o(()=>[c(r.$slots,"default")]),_:3},8,["href","class"]))}},V={class:"min-h-screen bg-gray-100"},A={class:"bg-white border-b border-gray-100"},O={class:"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"},T={class:"flex justify-between h-16"},P={class:"flex"},q={class:"shrink-0 flex items-center"},R={class:"hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"},U=f(" Dashboard "),F={class:"hidden sm:flex sm:items-center sm:ml-6"},G={class:"ml-3 relative"},H={class:"inline-flex rounded-md"},I={type:"button",class:"inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"},J=e("svg",{class:"ml-2 -mr-0.5 h-4 w-4",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor"},[e("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),K=f(" Profile "),Q=f(" Log Out "),W={class:"-mr-2 flex items-center sm:hidden"},X={class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},Y={class:"pt-2 pb-3 space-y-1"},Z=f(" Dashboard "),ee={class:"pt-4 pb-1 border-t border-gray-200"},te={class:"px-4"},se={class:"font-medium text-base text-gray-800"},oe={class:"font-medium text-sm text-gray-500"},ne={class:"mt-3 space-y-1"},ae=f(" Profile "),re=f(" Log Out "),ie={key:0,class:"bg-white shadow"},le={class:"max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"},ce={name:"AuthenticatedLayout",setup(n){const s=L(!1);return(t,r)=>(d(),m("div",null,[e("div",V,[e("nav",A,[e("div",O,[e("div",T,[e("div",P,[e("div",q,[a(l(b),{href:t.route("dashboard")},{default:o(()=>[a(D,{class:"block h-9 w-auto fill-current text-gray-800"})]),_:1},8,["href"])]),e("div",R,[a(S,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:o(()=>[U]),_:1},8,["href","active"])])]),e("div",F,[e("div",G,[a(z,{align:"right",width:"48"},{trigger:o(()=>[e("span",H,[e("button",I,[f(_(t.$page.props.auth.user.name)+" ",1),J])])]),content:o(()=>[a(C,{href:t.route("profile.edit")},{default:o(()=>[K]),_:1},8,["href"]),a(C,{href:t.route("logout"),method:"post",as:"button"},{default:o(()=>[Q]),_:1},8,["href"])]),_:1})])]),e("div",W,[e("button",{onClick:r[0]||(r[0]=p=>s.value=!s.value),class:"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"},[(d(),m("svg",X,[e("path",{class:u({hidden:s.value,"inline-flex":!s.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),e("path",{class:u({hidden:!s.value,"inline-flex":s.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])])])]),e("div",{class:u([{block:s.value,hidden:!s.value},"sm:hidden"])},[e("div",Y,[a(x,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:o(()=>[Z]),_:1},8,["href","active"])]),e("div",ee,[e("div",te,[e("div",se,_(t.$page.props.auth.user.name),1),e("div",oe,_(t.$page.props.auth.user.email),1)]),e("div",ne,[a(x,{href:t.route("profile.edit")},{default:o(()=>[ae]),_:1},8,["href"]),a(x,{href:t.route("logout"),method:"post",as:"button"},{default:o(()=>[re]),_:1},8,["href"])])])],2)]),t.$slots.header?(d(),m("header",ie,[e("div",le,[c(t.$slots,"header")])])):E("",!0),e("main",null,[c(t.$slots,"default")])])]))}};export{ce as _};
