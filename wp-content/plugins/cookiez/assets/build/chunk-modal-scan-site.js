"use strict";(globalThis.webpackChunkcookiez=globalThis.webpackChunkcookiez||[]).push([[5848],{55076(e,i,n){n.d(i,{A:()=>I});var o=n(78048),a=n(93248),s=n(55984),t=n(85848),c=n(95231),l=n(10790);const r=(0,c.I)(o.A)`
	display: flex;
	flex-direction: column;
	align-items: flex-start;
`,d=(0,c.I)(t.A)`
	margin-block-end: ${({theme:e})=>e.spacing(1.5)};

	font-weight: ${({theme:e})=>e.typography.fontWeightBold};
`,I=({value:e,label:i,description:n,disabled:o})=>(0,l.jsx)(a.A,{value:e,disabled:o,control:(0,l.jsx)(s.A,{size:"small",color:"info",sx:{padding:0,marginInlineEnd:1}}),label:(0,l.jsxs)(r,{children:[(0,l.jsx)(d,{variant:"subtitle1",component:"p",children:i}),n]}),sx:{marginInline:0,alignItems:n?"flex-start":"center",...o&&{opacity:.5}}})},89845(e,i,n){n.r(i),n.d(i,{default:()=>ze});var o=n(50602),a=n(77374),s=n(74456),t=n(76656),c=n(27957),l=n(27531),r=n(49614),d=n(18525),I=n(19258),g=n(686),m=n(2689),j=n(31151),p=n(36984),u=n(8354);const h=u.Ikc({type:u.k5n(l.ay),urls:u.YOg(u.YjP()),excludeUrls:u.YOg(u.YjP())});var x=n(58479),y=n(86087),A=n(27723),M=n(10790);const z=(0,y.createContext)(void 0),S=({children:e})=>{const{error:i}=(0,d.mu)(),{activeScan:n,setActiveScan:o,startScan:a,createScanRequest:s,cancelScanRequest:t,fetchScansRequest:c}=(0,r.Bm)(),{fetchCookiesRequest:u}=(0,r.J9)(),{fetchScriptsRequest:S}=(0,r.Sb)(),k=(0,g.A)(async e=>await m.A.getById(e)),{isLoading:b}=s,{execute:C}=t,{execute:v}=k,D=(e,i="")=>{d.KY.sendEvent(d.mk.scanResultsTriggered,{scan_status:e.status,scan_results:[e],duration:String(e.duration??0),error:i})},N=(0,p.m)({type:l.ay.Homepage,urls:[],excludeUrls:[]},{onSubmit:async()=>{const e=(0,x.Se)()??j.xW.CookieManagement;try{await a(N.values.type,e,N.values.urls,N.values.excludeUrls)}catch(e){console.error("Scan creation error: ",e),i((0,A.__)("Scan creation error","cookiez"))}},schema:h});(0,y.useEffect)(()=>{if(!n||n.status!==l.Sd.InProgress)return;const e=setInterval(async()=>{try{const i=await v(n.id);i.status!==l.Sd.InProgress&&(clearInterval(e),o(i),D(i),await Promise.allSettled([u.execute(),S.execute(),c.execute()]))}catch(e){console.error("Scan polling error: ",e)}},15e3);return()=>clearInterval(e)},[n?.id,n?.status]);const f=(0,I.A)(!1);return(0,M.jsx)(z.Provider,{value:{form:N,isLoading:b,handleStop:async()=>{if(n)try{const e=(await C(n.id)).scan??{...n,status:l.Sd.Cancelled};o(e),D(e),await Promise.allSettled([u.execute(),S.execute(),c.execute()])}catch(e){console.error("Scan stopping error: ",e),i((0,A.__)("Scan stopping error","cookiez"))}},cancelScanDialog:f},children:e})},k=()=>{const e=(0,y.useContext)(z);if(void 0===e)throw new Error("useScanSiteForm must be used within ScanSiteFormProvider");return e};var b=n(50024),C=n(21127),v=n(94382),D=n(42645),N=n(71271),f=n(68856),_=n(21370),Z=n(78048),w=n(26368),P=n(85848),L=n(95231),B=n(89896),T=n(96914);const W=(0,L.I)(Z.A)`
	display: flex;
	flex-direction: column;

	gap: ${({theme:e})=>e.spacing(1.5)};
	padding: ${({theme:e})=>e.spacing(2,2.5)};

	border: 1px solid ${({theme:e})=>e.palette.divider};
	border-radius: ${({theme:e})=>e.shape.borderRadius}px;
`,G=({children:e})=>(0,M.jsx)(W,{children:e}),Y=[{category:B.J.Necessary,label:(0,A.__)("Necessary","cookiez")},{category:B.J.Functional,label:(0,A.__)("Functional","cookiez")},{category:B.J.Analytics,label:(0,A.__)("Analytics","cookiez")},{category:B.J.Advertising,label:(0,A.__)("Advertisement","cookiez")},{category:B.J.Unclassified,label:(0,A.__)("Unclassified","cookiez")}],O={[l.sC.QuotaExceeded]:(0,A.__)("Some of the pages didn't scan since the quota finished","cookiez"),[l.sC.DomainNotReachable]:(0,A.__)("Some of the pages are not reachable","cookiez"),[l.sC.AccessError]:(0,A.__)("Some of the pages couldn't be accessed","cookiez"),[l.sC.NotFound]:(0,A.__)("Some of the pages were not found","cookiez"),[l.sC.PageTooBig]:(0,A.__)("Some of the pages are too large to scan","cookiez"),[l.sC.UnsupportedMediaType]:(0,A.__)("Some of the pages have an unsupported content type.","cookiez"),[l.sC.Generic]:(0,A.__)("Some of the pages couldn't be scanned","cookiez")},H=O[l.sC.Generic],U=(0,L.I)(Z.A)`
	display: flex;
	flex-direction: column;

	gap: ${({theme:e})=>e.spacing(2)};
`,J=(0,L.I)(f.Ay)`
	border: 1px solid ${({theme:e})=>e.palette.divider};
	font-weight: ${({theme:e})=>e.typography.fontWeightMedium};
`,R=(0,L.I)(Z.A)`
	display: flex;
	justify-content: space-between;
`,E=(0,L.I)(Z.A)`
	display: flex;
	flex-direction: column;

	margin: 0;
	padding: 0;

	list-style: none;
`,Q=(0,L.I)(Z.A)`
	display: flex;
	justify-content: flex-start;
	align-items: center;

	gap: ${({theme:e})=>e.spacing(1)};

	.MuiSvgIcon-root {
		fill: ${({theme:e})=>e.palette.error.main};
	}
`,V=({open:e,scan:i,onClose:n})=>{const t=i.urls.filter(e=>e.status!==l.Sd.Completed),r=Array.from(new Set(t.map(e=>{return(i=e.errorCode)&&O[i]||H;var i}))),d=i.status===l.Sd.Completed&&0===t.length,I=i.status===l.Sd.Failed,g=!d&&!I,m=i.status===l.Sd.Cancelled,j=t.some(e=>e.errorCode===l.sC.QuotaExceeded);return(0,M.jsxs)(a.A,{open:e,onClose:n,fullWidth:!0,maxWidth:"xs","aria-labelledby":"scan-site-dialog-title",children:[(0,M.jsx)(c.A,{logo:!1,onClose:n,children:(0,M.jsx)(b.s,{children:(0,A.__)("Scan results","cookiez")})}),(0,M.jsx)(b.n,{dividers:!0,children:(0,M.jsxs)(U,{children:[d&&(0,M.jsx)(J,{severity:"success",variant:"outlined",icon:(0,M.jsx)(N.A,{fontSize:"small"}),children:(0,M.jsx)(_.A,{children:(0,A.__)("Scan successfully completed","cookiez")})}),g&&(0,M.jsxs)(J,{severity:"warning",variant:"outlined",icon:(0,M.jsx)(D.A,{fontSize:"small"}),children:[(0,M.jsx)(_.A,{children:(0,A.__)("Partial scan","cookiez")}),m&&(0,M.jsx)(P.A,{variant:"body2",children:(0,A.__)("Scan stopped in the middle of the process","cookiez")}),j&&(0,M.jsxs)(M.Fragment,{children:[(0,M.jsx)(P.A,{variant:"body2",children:(0,A.__)("Upgrade your plan or wait until quota is renewed","cookiez")}),(0,M.jsx)(o.A,{size:"small",variant:"text",color:"promotion",href:T.o7,target:"_blank",rel:"noopener noreferrer",sx:{paddingInline:0,marginBlockStart:.5},children:(0,A.__)("Compare plans","cookiez")})]})]}),I&&(0,M.jsx)(J,{severity:"error",variant:"outlined",icon:(0,M.jsx)(v.A,{fontSize:"small"}),children:(0,M.jsx)(_.A,{children:(0,A.__)("Scan failed","cookiez")})}),(0,M.jsxs)(G,{children:[(0,M.jsx)(P.A,{variant:"subtitle2",component:"p",children:(0,A.__)("Scan summary","cookiez")}),(0,M.jsxs)(R,{children:[(0,M.jsx)(P.A,{variant:"body2",component:"span",children:(0,A.__)("Pages scanned","cookiez")}),(0,M.jsx)(P.A,{variant:"subtitle1",component:"span",children:i.scannedUrls})]})]}),(0,M.jsxs)(G,{children:[(0,M.jsx)(P.A,{variant:"subtitle2",component:"p",children:(0,A.__)("Cookies summary","cookiez")}),Y.map(({category:e,label:n})=>(0,M.jsxs)(R,{children:[(0,M.jsx)(P.A,{variant:"caption",component:"span",children:n}),(0,M.jsx)(P.A,{variant:"subtitle2",component:"span",children:i.cookiesByCategory[e]??0})]},e)),(0,M.jsx)(w.A,{}),(0,M.jsxs)(R,{children:[(0,M.jsx)(P.A,{variant:"subtitle2",component:"span",children:(0,A.__)("Total cookies found","cookiez")}),(0,M.jsx)(P.A,{variant:"subtitle2",component:"span",children:i.cookiesCount})]})]}),r.length>0&&(0,M.jsxs)(G,{children:[(0,M.jsx)(P.A,{variant:"subtitle2",component:"p",children:(0,A.__)("Errors","cookiez")}),(0,M.jsx)(E,{component:"ul",children:r.map(e=>(0,M.jsxs)(Q,{component:"li",children:[(0,M.jsx)(C.A,{fontSize:"tiny"}),(0,M.jsx)(P.A,{variant:"caption",color:"text.primary",children:e})]},e))})]})]})}),(0,M.jsx)(s.A,{children:(0,M.jsx)(o.A,{variant:"contained",size:"medium",color:"primary",onClick:n,children:(0,A.__)("See cookies","cookiez")})})]})};n(51609);var F=n(23136);const $=({open:e,onClose:i})=>{const{handleStop:n,isLoading:l}=k();return(0,M.jsxs)(a.A,{open:e,onClose:i,fullWidth:!0,maxWidth:"xs","aria-labelledby":"stop-scan-dialog-title",children:[(0,M.jsx)(c.A,{logo:!1,onClose:i,children:(0,M.jsx)(F.A,{id:"stop-scan-dialog-title",children:(0,A.__)("Stop scan","cookiez")})}),(0,M.jsx)(t.A,{children:(0,M.jsx)(P.A,{variant:"body2",component:"p",children:(0,A.__)("Scanning is in progress and credits have been used. Would you like to stop the scan?","cookiez")})}),(0,M.jsxs)(s.A,{children:[(0,M.jsx)(o.A,{variant:"text",color:"secondary",size:"medium",onClick:i,disabled:l,children:(0,A.__)("Keep scanning","cookiez")}),(0,M.jsx)(o.A,{variant:"contained",color:"error",size:"medium",onClick:()=>{n(),i()},disabled:l,children:(0,A.__)("Stop scanning","cookiez")})]})]})},X=(0,L.I)(Z.A)`
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;

	padding: ${({theme:e})=>e.spacing(6,0)};
`,K=(0,L.I)(P.A)`
	margin-block-start: ${({theme:e})=>e.spacing(3)};

	color: ${({theme:e})=>e.palette.text.primary};
`,q=()=>{const{isLoading:e,cancelScanDialog:i}=k(),{isOpen:n,open:t,close:l}=i;return(0,M.jsxs)(a.A,{open:!0,onClose:t,fullWidth:!0,maxWidth:"xs","aria-labelledby":"scan-site-dialog-title",children:[(0,M.jsx)(c.A,{logo:!1,onClose:t,children:(0,M.jsx)(b.s,{children:(0,A.__)("Scan site","cookiez")})}),(0,M.jsx)(b.n,{dividers:!0,children:(0,M.jsxs)(X,{children:[(0,M.jsx)("img",{src:"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNDYiIGhlaWdodD0iMTQ4IiBmaWxsPSJub25lIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB2aWV3Qm94PSIwIDAgMjQ2IDE1MCI+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBmaWxsPSIjZjJmMmYyIiBkPSJNMy45MTggMTUuNDY3aDIzOC4zOTh2MTMwLjk2MkgzLjkxOHoiLz48ZyBjbGlwLXBhdGg9InVybCgjYikiPjxhbmltYXRlTW90aW9uIGZpbGw9ImZyZWV6ZSIgY2FsY01vZGU9InNwbGluZSIgZHVyPSIzcyIga2V5UG9pbnRzPSIwOyAwOyAxOyAxIiBrZXlTcGxpbmVzPSIwLjQyIDAgMSAxOyAwIDAgMSAxOyAwIDAgMSAxIiBrZXlUaW1lcz0iMDsgMC4yNTsgMC42NjY2Njc7IDEiIHBhdGg9Ik0gMCAwIEwgLTAuMDk0IC0xMTQuODMiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIi8+PGcgZmlsbD0iI2Q3ZDdkNyIgdHJhbnNmb3JtPSJtYXRyaXgoMS4yNjU1OCAwIDAgMSAtMy4zMTYgNzgpIj48cmVjdCB3aWR0aD0iMTA4LjY3NSIgaGVpZ2h0PSI1LjcyIiB4PSIxMi40ODYiIHk9IjM2Ljc4NSIgcng9IjIuODYiLz48cmVjdCB3aWR0aD0iNjIuMjAyIiBoZWlnaHQ9IjUuNzIiIHg9IjEyLjQ4NiIgeT0iNDguMjI1IiByeD0iMi44NiIvPjwvZz48cmVjdCB3aWR0aD0iNjIuNjk0IiBoZWlnaHQ9Ijk1Ljc1IiB4PSIxNjkuOTI4IiB5PSIzNi4xMTkiIGZpbGw9IiNkN2Q3ZDciIHJ4PSI2LjMzIiByeT0iNi4zMyIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIC4wMDIzNiAxIC0uMTk5IC4yNjcpIi8+PHJlY3Qgd2lkdGg9IjEzNy41NjEiIGhlaWdodD0iNjguODc3IiB4PSIxMi40OTMiIHk9IjM2LjcwNSIgZmlsbD0iI2Q3ZDdkNyIgcng9IjYuMjc0Ii8+PC9nPjxnIGNsaXAtcGF0aD0idXJsKCNiKSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMCAxMTgpIj48ZyBmaWxsPSIjZDdkN2Q3IiB0cmFuc2Zvcm09Im1hdHJpeCgxLjI2NTU4IDAgMCAxIC0zLjMxNiA3OCkiPjxyZWN0IHdpZHRoPSIxMDguNjc1IiBoZWlnaHQ9IjUuNzIiIHg9IjEyLjQ4NiIgeT0iMzYuNzg1IiByeD0iMi44NiIvPjxyZWN0IHdpZHRoPSI2Mi4yMDIiIGhlaWdodD0iNS43MiIgeD0iMTIuNDg2IiB5PSI0OC4yMjUiIHJ4PSIyLjg2Ii8+PC9nPjxyZWN0IHdpZHRoPSI2Mi42OTQiIGhlaWdodD0iOTUuNzUiIHg9IjE2OS45MjgiIHk9IjM2LjExOSIgZmlsbD0iI2Q3ZDdkNyIgcng9IjYuMzMiIHJ5PSI2LjMzIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgLjAwMjM2IDEgLS4xOTkgLjI2NykiLz48cmVjdCB3aWR0aD0iMTM3LjU2MSIgaGVpZ2h0PSI2OC44NzciIHg9IjEyLjQ5MyIgeT0iMzYuNzA1IiBmaWxsPSIjZDdkN2Q3IiByeD0iNi4yNzQiLz48YW5pbWF0ZU1vdGlvbiBmaWxsPSJmcmVlemUiIGNhbGNNb2RlPSJzcGxpbmUiIGR1cj0iM3MiIGtleVBvaW50cz0iMDsgMDsgMTsgMSIga2V5U3BsaW5lcz0iMC40MiAwIDAuNTggMTsgMCAwLjU1IDAuNDUgMTsgMCAwIDEgMSIga2V5VGltZXM9IjA7IDAuNjsgMC45OyAxIiBwYXRoPSJNIDAgMCBMIC0wLjA5NCAtMTE3Ljg0OCIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiLz48L2c+PC9nPjxnIHN0eWxlPSJ0cmFuc2Zvcm0tb3JpZ2luOjEyM3B4IDkwLjMwNXB4IDAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC4wMDIgLTkzLjAxKSI+PHBhdGggZmlsbD0idXJsKCNjKSIgZD0iTTMuOTk4IDY5LjAxaDIzOC40djQyLjQ5SDMuOTk4eiIvPjxwYXRoIGZpbGw9IiMyYzczZmYiIGQ9Im00LjAwNyAxMTAuMjcgMjM4LjM5My0uMDZzMCAxLjQuMDA3IDEuMzg5YzAgMC0yMzguMzE1LS4wNDQtMjM4LjM5LS4xMjEiLz48YW5pbWF0ZU1vdGlvbiBmaWxsPSJmcmVlemUiIGJlZ2luPSIwLjAycyIgY2FsY01vZGU9ImxpbmVhciIgZHVyPSIzcyIga2V5UG9pbnRzPSIwOyAwLjUzOyAxIiBrZXlUaW1lcz0iMDsgMC40OTMzMzsgMSIgcGF0aD0iTSAwIDAgTCAtMS4wMzggMTczLjM3OCIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiLz48L2c+PHBhdGggZmlsbD0iIzAwMCIgZD0iTTMuOSAyLjU3NUEyLjU3NiAyLjU3NiAwIDAgMSA2LjQ3NyAwaDIzMy4yNDVhMi41OCAyLjU4IDAgMCAxIDIuNTc4IDIuNTc1djE0LjI2M0gzLjl6Ii8+PGNpcmNsZSBjeD0iMTQuOTQ1IiBjeT0iOC4zNjkiIHI9IjMuODYzIiBmaWxsPSIjZmZmIi8+PGNpcmNsZSBjeD0iMjUuODg4IiBjeT0iOC4zNjkiIHI9IjMuODYzIiBmaWxsPSIjZmZmIi8+PGNpcmNsZSBjeD0iMzYuODMyIiBjeT0iOC4zNjkiIHI9IjMuODYzIiBmaWxsPSIjZmZmIi8+PGRlZnM+PGNsaXBQYXRoIGlkPSJhIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMy45MTggMTYuNDY3aDIzOC4zOThWMTQwLjM3YTcuMDYgNy4wNiAwIDAgMS03LjA1OCA3LjA1OEgxMC45NzZhNy4wNiA3LjA2IDAgMCAxLTcuMDU4LTcuMDU4eiIvPjwvY2xpcFBhdGg+PGNsaXBQYXRoIGlkPSJiIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMy45MTggMTYuNDY3aDIzOC4zOTh2MTMwLjk2MkgzLjkxOHoiLz48L2NsaXBQYXRoPjxsaW5lYXJHcmFkaWVudCBpZD0iYyIgeDE9IjExNi44MzMiIHgyPSIxMTYuODMzIiB5MT0iNjkuMDEiIHkyPSIxMTEuNTAxIiBncmFkaWVudFRyYW5zZm9ybT0ibWF0cml4KDEuMDAwODEgMCAwIDEgLS4wMDMgMCkiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBzdG9wLWNvbG9yPSIjMmM3M2ZmIiBzdG9wLW9wYWNpdHk9IjAiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiMyYzczZmYiIHN0b3Atb3BhY2l0eT0iLjciLz48L2xpbmVhckdyYWRpZW50PjwvZGVmcz48L3N2Zz4=",alt:""}),(0,M.jsx)(K,{variant:"h6",component:"h3",children:(0,A.__)("Scanning your site…","cookiez")}),(0,M.jsx)(P.A,{variant:"body1",component:"p",children:(0,A.__)("We'll have your results soon.","cookiez")})]})}),(0,M.jsx)(s.A,{children:(0,M.jsx)(o.A,{variant:"contained",size:"medium",color:"primary",disabled:e,onClick:()=>{t(),d.KY.sendEvent(d.mk.scanStopClicked)},children:(0,A.__)("Stop scan","cookiez")})}),(0,M.jsx)($,{open:n,onClose:l})]})};var ee=n(13581),ie=n(97579),ne=n(76992),oe=n(73916),ae=n(84162),se=n(73928),te=n(55076),ce=n(21637),le=n(92810),re=n(30638),de=n(69930);const Ie=(0,L.I)(Z.A)`
	box-sizing: border-box;

	width: 100%;
	min-width: 0;

	display: flex;
	flex-direction: column;
	align-items: flex-start;
	gap: ${({theme:e})=>e.spacing(.5)};

	padding: ${({theme:e})=>e.spacing(1,1.5)};
	min-height: 80px;
	max-height: 185px;
	overflow-y: auto;

	border: 1px solid ${({theme:e})=>e.palette.divider};
	border-radius: ${({theme:e})=>e.shape.borderRadius}px;
	cursor: text;
	transition: border-color 300ms ease-in-out;

	&:focus-within {
		border-color: ${({theme:e})=>e.palette.info.main};
		outline: none;
	}
`,ge=(0,L.I)("input")`
	width: 100%;

	border: none;
	outline: none;
	background: transparent;
	font-size: ${({theme:e})=>e.typography.body2.fontSize};
	font-family: ${({theme:e})=>e.typography.fontFamily};
	color: ${({theme:e})=>e.palette.text.primary};

	&::placeholder {
		color: ${({theme:e})=>e.palette.action.disabled};
	}
`,me=({value:e,onChange:i,placeholder:n})=>{const[o,a]=(0,y.useState)(""),s=(0,y.useRef)(null),t=n=>{const o=n.split(/[\s,\n]+/).filter(Boolean).filter(de.A).filter(i=>!e.includes(i));o.length>0&&i([...e,...o]),a("")};return(0,M.jsxs)(Ie,{onClick:()=>s.current?.focus(),children:[e.map(n=>(0,M.jsx)(le.A,{label:(0,re.x)(n,70),size:"small",onDelete:()=>(n=>{i(e.filter(e=>e!==n))})(n)},n)),(0,M.jsx)(ge,{ref:s,value:o,placeholder:0===e.length?n:void 0,onChange:e=>a(e.target.value),onKeyDown:n=>{"Enter"===n.key&&(n.preventDefault(),t(o)),"Backspace"===n.key&&!o&&e.length>0&&i(e.slice(0,-1))},onPaste:e=>{e.preventDefault(),t(o+" "+(e.clipboardData?.getData("text")??""))}})]})},je=(0,L.I)(ae.A)`
	gap: ${({theme:e})=>e.spacing(2)};
`,pe=(0,L.I)(o.A)`
	position: relative;
	left: ${({theme:e})=>e.spacing(-1)};
	top: ${({theme:e})=>e.spacing(.5)};
`,ue=(0,L.I)(ee.A,{shouldForwardProp:e=>"$rotated"!==e})`
	transition: transform 300ms ease-in-out;
	transform: rotate(${({$rotated:e})=>e?"180deg":"0deg"});
`,he=(0,L.I)(Z.A)`
	min-width: 0;

	margin-block-start: ${({theme:e})=>e.spacing(1)};
	padding-inline-start: ${({theme:e})=>e.spacing(3)};
`,xe=(0,L.I)(P.A)`
	display: inline-flex;

	gap: ${({theme:e})=>e.spacing(1)};
`,ye=(0,L.I)(P.A)`
	font-weight: ${({theme:e})=>e.typography.fontWeightBold};
	color: ${({theme:e})=>e.palette.text.secondary};
`,Ae=()=>{const{form:e}=k(),i=(0,ce.V)(e,e=>e.type,e=>i=>{i.type=e}),n=(0,ce.V)(e,e=>e.urls,e=>i=>{i.urls=e}),o=(0,ce.V)(e,e=>e.excludeUrls,e=>i=>{i.excludeUrls=e}),[a,s]=(0,y.useState)(!1);return(0,y.useEffect)(()=>{i.value!==l.ay.Full&&s(!1)},[i.value]),(0,M.jsxs)(je,{value:i.value,onChange:(e,n)=>i.onChange(n),children:[(0,M.jsx)(te.A,{value:l.ay.Homepage,label:(0,A.__)("Homepage","cookiez"),description:(0,M.jsx)("span",{})}),(0,M.jsxs)(Z.A,{children:[(0,M.jsx)(te.A,{value:l.ay.Full,label:(0,A.__)("Full scan","cookiez"),description:(0,M.jsxs)(M.Fragment,{children:[(0,M.jsx)(ye,{variant:"body2",component:"span",children:(0,A.__)("Scans your entire website for cookies","cookiez")}),(0,M.jsx)(pe,{size:"medium",variant:"text",color:"info",endIcon:(0,M.jsx)(ue,{fontSize:"small",$rotated:a}),onClick:e=>{e.preventDefault(),i.onChange(l.ay.Full),s(e=>!e)},children:(0,A.__)("Exclude URL","cookiez")})]})}),(0,M.jsx)(ne.A,{in:a,children:(0,M.jsx)(he,{children:(0,M.jsx)(me,{value:o.value,onChange:o.onChange,placeholder:(0,A.__)("Add URLs here","cookiez")})})})]}),(0,M.jsxs)(Z.A,{children:[(0,M.jsx)(te.A,{value:l.ay.Custom,label:(0,A.__)("Custom Scan","cookiez"),description:(0,M.jsxs)(xe,{variant:"body2",component:"p",children:[(0,M.jsx)(ye,{variant:"body2",component:"span",children:(0,A.__)("Scans only the page(s) that you specify","cookiez")}),(0,M.jsx)(se.A,{title:(0,A.__)("Enter one or more specific page URLs to scan.","cookiez"),placement:"top",children:(0,M.jsx)(oe.A,{size:"small","aria-label":(0,A.__)("Custom scan info","cookiez"),sx:{padding:0},children:(0,M.jsx)(ie.A,{fontSize:"small"})})})]})}),(0,M.jsx)(ne.A,{in:i.value===l.ay.Custom,children:(0,M.jsx)(he,{children:(0,M.jsx)(me,{value:n.value,onChange:n.onChange,placeholder:(0,A.__)("Add URLs here","cookiez")})})})]})]})},Me=({open:e,onClose:i})=>{const{activeScan:n,setActiveScan:d}=(0,r.Bm)(),{form:I,isLoading:g}=k();if(n&&n.status!==l.Sd.InProgress){const o=()=>{d(null),i()};return(0,M.jsx)(V,{open:e,onClose:o,scan:n})}return n?(0,M.jsx)(q,{}):(0,M.jsxs)(a.A,{open:e,onClose:i,fullWidth:!0,maxWidth:"sm","aria-labelledby":"scan-site-dialog-title",scroll:"paper",children:[(0,M.jsx)(c.A,{logo:!1,onClose:i,children:(0,M.jsx)(b.s,{children:(0,A.__)("Scan site","cookiez")})}),(0,M.jsx)(t.A,{dividers:!0,children:(0,M.jsx)(Ae,{})}),(0,M.jsxs)(s.A,{children:[(0,M.jsx)(o.A,{variant:"text",color:"secondary",size:"medium",onClick:i,disabled:g,children:(0,A.__)("Cancel","cookiez")}),(0,M.jsx)(o.A,{variant:"contained",color:"primary",size:"medium",onClick:I.submit,disabled:g,children:(0,A.__)("Scan now","cookiez")})]})]})},ze=({open:e,onClose:i})=>(0,M.jsx)(S,{children:(0,M.jsx)(Me,{open:e,onClose:i})})},50024(e,i,n){n.d(i,{n:()=>c,s:()=>t});var o=n(76656),a=n(23136),s=n(95231);const t=(0,s.I)(a.A)`
	font-weight: ${({theme:e})=>e.typography.fontWeightBold};
`,c=(0,s.I)(o.A)`
	padding: ${({theme:e})=>e.spacing(2,4)};
`}}]);