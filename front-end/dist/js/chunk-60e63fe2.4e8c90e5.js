(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-60e63fe2"],{"361e":function(t,a,i){"use strict";i.r(a);var n=function(){var t=this,a=t.$createElement,n=t._self._c||a;return n("div",{staticClass:"wiki-body"},[n("div",{staticClass:"wiki-col"},[n("SplashComponent")],1),n("div",{staticClass:"wiki-col"},[n("div",{staticClass:"wiki-container"},[n("div",{staticClass:"wiki-box"},[n("div",{staticClass:"wiki-box-col"},[n("v-img",{attrs:{src:i("4c2d"),contain:"",width:"500"}})],1),n("div",{staticClass:"wiki-box-col"},[n("h5",[t._v("Erro 404")]),n("p",[t._v("Oops! Página não encontrada!")]),n("small",[t._v("Desculpe, não podemos encontrar a página que você está procurando.")]),n("div",{staticClass:"text-center"},[n("v-btn",{staticClass:"ma-5",attrs:{rounded:"",loading:t.loading,disabled:t.loading,color:"primary"},on:{click:function(a){t.loader="loading"}}},[t._v(" Página Inicial ")])],1)])])]),n("footer",{staticClass:"wiki-foot wiki-foot-content"},t._l(t.arrayUnits,(function(a,e){return n("div",{key:e,staticClass:"wiki-foot-item"},[n("div",{attrs:{align:"center"}},[n("v-img",{attrs:{src:i("e107")("./"+a.icon_footer),width:"40"}})],1),n("a",{attrs:{href:a.site,target:"_blank"}},[t._v(t._s(a.unit_name))])])})),0),n("v-footer",{attrs:{dark:"",tile:"",elevation:"24"}},[n("v-col",{staticClass:"text-center",attrs:{cols:"12"}},[t._v(" © Todos os direitos reservados - Departamento de Tecnologia da Informação - "+t._s((new Date).getFullYear())+" ")])],1)],1)])},e=[],o=i("2909"),s=i("1da1"),r=(i("96cf"),i("bc3a")),c=i.n(r),l=i("801c"),d="http://localhost/wiki/api/v1",u={name:"Default",components:{SplashComponent:l["a"]},data:function(){return{arrayUnits:[],loader:null,loading:!1,loading2:!1,loading3:!1,loading4:!1,loading5:!1}},created:function(){this.getUnitsAll()},watch:{loader:function(){var t=this,a=this.loader;this[a]=!this[a],setTimeout((function(){t[a]=!1,t.redirectSite()}),3e3),this.loader=null}},methods:{getUnitsAll:function(){var t=this;return Object(s["a"])(regeneratorRuntime.mark((function a(){return regeneratorRuntime.wrap((function(a){while(1)switch(a.prev=a.next){case 0:return a.next=2,c.a.get(d+"/unidades").then((function(a){t.arrayUnits=Object(o["a"])(a.data.data)})).catch((function(t){console.log(t)}));case 2:case"end":return a.stop()}}),a)})))()},redirectSite:function(){window.location.href="/"}}},f=u,v=(i("7502"),i("2877")),w=i("6544"),g=i.n(w),h=i("8336"),p=i("62ad"),m=i("553a"),k=i("adda"),C=Object(v["a"])(f,n,e,!1,null,null,null);a["default"]=C.exports;g()(C,{VBtn:h["a"],VCol:p["a"],VFooter:m["a"],VImg:k["a"]})},7502:function(t,a,i){"use strict";i("94d9")},"94d9":function(t,a,i){}}]);
//# sourceMappingURL=chunk-60e63fe2.4e8c90e5.js.map