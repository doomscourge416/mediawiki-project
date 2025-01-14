"use strict";const s=require("vue"),t=require("./Icon.js"),m=require("./CdxButton.js"),f=require("./constants.js"),v=require("./_plugin-vue_export-helper.js");require("./useIconOnlyButton.js");require("./useSlotContents.js");require("./useWarnOnce.js");const p={notice:t.K3,error:t.e3,warning:t.m5,success:t.D7},y=s.defineComponent({name:"CdxMessage",components:{CdxButton:m,CdxIcon:t.CdxIcon},props:{type:{type:String,default:"notice",validator:f.statusTypeValidator},inline:{type:Boolean,default:!1},icon:{type:[String,Object],default:null},fadeIn:{type:Boolean,default:!1},dismissButtonLabel:{type:String,default:""},autoDismiss:{type:[Boolean,Number],default:!1,validator:e=>typeof e=="boolean"||typeof e=="number"&&e>0}},emits:["user-dismissed","auto-dismissed"],setup(e,{emit:o}){const n=s.ref(!1),l=s.computed(()=>e.inline===!1&&e.dismissButtonLabel.length>0),c=s.computed(()=>e.autoDismiss===!1||e.type==="error"?!1:e.autoDismiss===!0?4e3:e.autoDismiss),u=s.computed(()=>({"cdx-message--inline":e.inline,"cdx-message--block":!e.inline,"cdx-message--user-dismissable":l.value,["cdx-message--".concat(e.type)]:!0})),i=s.computed(()=>e.icon&&e.type==="notice"?e.icon:p[e.type]),a=s.ref("");function r(d){n.value||(a.value=d==="user-dismissed"?"cdx-message-leave-active-user":"cdx-message-leave-active-system",n.value=!0,o(d))}return s.onMounted(()=>{e.type==="error"&&e.autoDismiss!==!1?s.warn('CdxMessage: Message with type="error" cannot use auto-dismiss'):c.value&&setTimeout(()=>r("auto-dismissed"),c.value)}),{dismissed:n,userDismissable:l,rootClasses:u,leaveActiveClass:a,computedIcon:i,onDismiss:r,cdxIconClose:t.Q5}}});const g=["aria-live","role"],C={class:"cdx-message__content"};function b(e,o,n,l,c,u){const i=s.resolveComponent("cdx-icon"),a=s.resolveComponent("cdx-button");return s.openBlock(),s.createBlock(s.Transition,{name:"cdx-message",appear:e.fadeIn,"leave-active-class":e.leaveActiveClass},{default:s.withCtx(()=>[e.dismissed?s.createCommentVNode("",!0):(s.openBlock(),s.createElementBlock("div",{key:0,class:s.normalizeClass(["cdx-message",e.rootClasses]),"aria-live":e.type!=="error"?"polite":void 0,role:e.type==="error"?"alert":void 0},[s.createVNode(i,{class:"cdx-message__icon--vue",icon:e.computedIcon},null,8,["icon"]),s.createElementVNode("div",C,[s.renderSlot(e.$slots,"default")]),e.userDismissable?(s.openBlock(),s.createBlock(a,{key:0,class:"cdx-message__dismiss-button",weight:"quiet",type:"button","aria-label":e.dismissButtonLabel,onClick:o[0]||(o[0]=r=>e.onDismiss("user-dismissed"))},{default:s.withCtx(()=>[s.createVNode(i,{icon:e.cdxIconClose,"icon-label":e.dismissButtonLabel},null,8,["icon","icon-label"])]),_:1},8,["aria-label"])):s.createCommentVNode("",!0)],10,g))]),_:3},8,["appear","leave-active-class"])}const _=v._export_sfc(y,[["render",b]]);module.exports=_;