"use strict";(globalThis.webpackChunkcookiez=globalThis.webpackChunkcookiez||[]).push([[4404],{85122(e,o,i){i.r(o),i.d(o,{default:()=>b});var a=i(78048),n=i(95231),t=i(86905),c=i(29230),l=i(49614),s=i(73500),r=i(17909),d=i(27723),k=i(10790);const h=(0,n.I)(a.A)`
	background-color: ${({theme:e})=>e.palette.background.default};
	display: flex;
	flex: 1;
	flex-direction: column;
	min-height: 0;
	width: 100%;
`,u=(0,n.I)(a.A)`
	display: flex;
	flex: 1;
	flex-direction: column;
	min-height: 0;
	overflow: auto;
`,b=()=>{const{completeOnboarding:e,currentStep:o,handleBack:i,handleContinue:a,isPersisting:n,isStepThree:b,showBack:p}=(0,s.zz)(),{createScanRequest:x}=(0,l.Bm)(),{isLoading:f}=x,w=o===t.A.StepThree?(0,d.__)("Start scan","cookiez"):(0,d.__)("Continue","cookiez");let S;switch(o){case t.A.StepOne:S=(0,k.jsx)(c.O1,{});break;case t.A.StepTwo:S=(0,k.jsx)(c.Yj,{});break;default:S=(0,k.jsx)(c.q1,{onStartScan:a})}return(0,k.jsxs)(h,{"aria-labelledby":r.p,role:"main",children:[(0,k.jsx)(u,{children:S}),(0,k.jsx)(c.ji,{backLabel:(0,d.__)("Back","cookiez"),continueLabel:w,isContinueDisabled:n,onBack:i,onContinue:a,onSkipForNow:b?e:void 0,showBack:p,disabled:f,skipForNowLabel:b?(0,d.__)("Skip for now","cookiez"):void 0})]})}}}]);