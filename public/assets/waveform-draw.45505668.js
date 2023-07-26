var D=(v,e,n)=>{if(!e.has(v))throw TypeError("Cannot "+n)};var E=(v,e,n)=>{if(e.has(v))throw TypeError("Cannot add the same private member more than once");e instanceof WeakSet?e.add(v):e.set(v,n)};var O=(v,e,n)=>(D(v,e,"access private method"),n);var W,H,B,b;class T{constructor(){E(this,W);E(this,B);this._defineProperties(),this._init()}_defineProperties(){this.BAR_WIDTH=2,this.BAR_SPACE=2,this.BAR_COLOR="#2b2b2b",this.SHADOW_BAR_COLOR="#bcbcbc",window.homeCanvasColor&&(this.BAR_COLOR="#1B95E0",this.SHADOW_BAR_COLOR="#8FCBF0"),this.ACTIVE_BAR_COLOR="#1B95E0",this.ACTIVE_SHADOW_BAR_COLOR="#8FCBF0",this.SIMPLIFY_TYPE="AVERAGE",this.PADDING_WAVEFORM=20,this.HAS_SHADOW=!0,this.resizeTimer}_init(){O(this,W,H).call(this);var e=this;window.onresize=function(){e.triggerResizeWaveform()},this.handleAddWaveformContainerResizeObserver(),document.querySelectorAll(".js--audio-waveform-canvas").forEach(i=>{i.addEventListener("mousemove",t=>this.handleWaveformCanvasOnMouseMove(t)),i.addEventListener("mouseleave",t=>this.handleWaveformCanvasOnMouseLeave(t))})}getMousePos(e,n){var i=e.getBoundingClientRect();return{x:n.clientX-i.left,y:n.clientY-i.top}}drawWaveformItem(e,n=0){var g,c;let i=0;try{i=JSON.parse(e.dataset.waveformjson);var t=(g=e==null?void 0:e.dataset)!=null&&g.colors?JSON.parse((c=e==null?void 0:e.dataset)==null?void 0:c.colors):null}catch(a){console.log(a),console.log("unable to fetch music data");return}let r=t&&t.barColor?t.barColor:this.BAR_COLOR,d=t&&t.shadowBarcolor?t.shadowBarcolor:this.SHADOW_BAR_COLOR,s=t&&t.activeBarColor?t.activeBarColor:this.ACTIVE_BAR_COLOR,w=t&&t.activeShadowBarColor?t.activeShadowBarColor:this.ACTIVE_SHADOW_BAR_COLOR,f=i.heights.length;var o=e.getContext("2d");o.beginPath(),o.lineWidth=this.BAR_WIDTH,o.imageSmoothingEnabled=!1,o.mozImageSmoothingEnabled=!1;var I=[];for(let a=0;a<f;a++){let h=parseInt(e.height/2)-i.heights[a]*e.height/i.margin.high+1;h=Math.max(parseInt(h),2),I.push([(this.BAR_SPACE+this.BAR_WIDTH)*a,h])}let R=parseInt(e.width/(this.BAR_SPACE+this.BAR_WIDTH));if(this.SIMPLIFY_TYPE==="DOUGLAS_PEUCKER")var u=window.simplifyDouglasPeucker(I,R+1);else if(this.SIMPLIFY_TYPE==="AVERAGE"){let a=I.map(l=>l[1]),h=O(this,B,b).call(this,a,R+1);u=[];for(let l=0;l<R+1;l++)u.push([(this.BAR_SPACE+this.BAR_WIDTH)*l,h[l]])}let m=parseInt(n*e.width/(e.width+this.PADDING_WAVEFORM));o.strokeStyle=s;for(let a=0;a<u.length;a++){let h=Math.abs(u[a][1]-parseInt(e.height/2)),l=(this.BAR_SPACE+this.BAR_WIDTH)*a;l>=m&&(o.stroke(),o.beginPath(),o.strokeStyle=r),u[a][1]+h>parseInt(e.height/2)&&(h=0,u[a][1]=parseInt(e.height/2)),h<1&&(u[a][1]-=1-h,h=1);let A=parseInt(l+this.BAR_WIDTH-1),C=parseInt(u[a][1]),S=parseInt(l+this.BAR_WIDTH-1),_=parseInt(u[a][1]+2*h);this.HAS_SHADOW&&(_=parseInt(u[a][1]+h)),o.moveTo(A,C),o.lineTo(S,_)}if(this.HAS_SHADOW){o.strokeStyle=w;for(let a=0;a<u.length;a++){let h=(this.BAR_WIDTH+this.BAR_SPACE)*a;h>=m&&(o.stroke(),o.beginPath(),o.strokeStyle=d);let l=Math.abs(u[a][1]-parseInt(e.height/2)),A=parseInt(h+this.BAR_WIDTH-1),C=parseInt(e.height/2),S=parseInt(h+this.BAR_WIDTH-1),_=parseInt(e.height/2)+l;o.moveTo(A,C),o.lineTo(S,_)}}}drawWaveform(e){var n=document.getElementsByClassName(e),i=0;for(let t of n){do i=t.parentElement.offsetWidth,t.width=t.parentElement.offsetWidth-1;while(i!==t.parentElement.offsetWidth);t.width-=this.PADDING_WAVEFORM,t.width,t.height=t.parentElement.offsetHeight,t.nextElementSibling?this.drawWaveformItem(t,t.nextElementSibling.offsetWidth):this.drawWaveformItem(t,t.parentElement.offsetWidth)}}triggerResizeWaveform(){if(document.querySelectorAll(".waveform-container").length>0){var e=this;clearTimeout(this.resizeTimer),this.resizeTimer=setTimeout(function(){e.drawWaveform("js--audio-waveform-canvas")},100)}}handleWaveformCanvasOnMouseMove(e){let n=document.getElementById(e.target.id),i=this.getMousePos(n,e);this.drawWaveformItem(n,i.x)}handleWaveformCanvasOnMouseLeave(e){let n=document.getElementById(e.target.id),i=document.getElementById(e.target.id).parentElement.querySelector(".blue-waveform-container").offsetWidth;this.drawWaveformItem(n,i)}handleAddWaveformContainerResizeObserver(){document.querySelectorAll(".waveform-container").length>0&&new ResizeObserver(()=>{this.triggerResizeWaveform()}).observe(document.querySelectorAll(".waveform-container")[0])}}W=new WeakSet,H=function(){var e=function(t){return t*t},n=function(t,r){return e(t[0]-r[0])+e(t[1]-r[1])},i=function(t,r){this.p1=t,this.p2=r,this.lengthSquared=n(t,r)};i.prototype={getRatio:function(t){var r=this.p1,d=this.p2,s=this.lengthSquared;return s===0?n(t,r):((t[0]-r[0])*(d[0]-r[0])+(t[1]-r[1])*(d[1]-r[1]))/s},distanceToSquared:function(t){var r=this.p1,d=this.p2,s=this.getRatio(t);return s<0?n(t,r):s>1?n(t,d):n(t,[r[0]+s*(d[0]-r[0]),r[1]+s*(d[1]-r[1])])},distanceTo:function(t){return Math.sqrt(this.distanceToSquared(t))}},window.simplifyDouglasPeucker=function(t,r){var d=new Date().getTime(),s=[],w=t.length;function f(m,g){if(g>m+1){for(var c=new i(t[m],t[g]),a=-1,h=0,l,A=m+1;A<g;A+=1)l=c.distanceToSquared(t[A]),l>a&&(a=l,h=A);s[h]=a,f(m,h),f(h,g)}}f(0,w-1),s[0]=1/0,s[w-1]=1/0;var o=s.slice();o.sort(function(m,g){return g-m});var I=o[r-1],R=t.filter(function(m,g){return s[g]>=I}),u=new Date().getTime();return window.simplifyDouglasPeucker.stats[r]=u-d,R},window.simplifyDouglasPeucker.stats={}},B=new WeakSet,b=function(e,n){let i=e.length,t=i-n,r=0,d=[];for(;t--;){if(r>=i-1)if(e=[...d,...e.slice(r)],i=e.length,t>=parseInt(i/2))r=0,d=[];else{let w=parseInt(i/t);for(let f=0;f<i&&t--;f+=w)e[f]=parseInt((e[f]+e[f+1])/2),e[f+1]=-1;return e=e.filter(f=>f>-1),e}let s=parseInt((e[r]+e[r+1])/2);d.push(s),r+=2}return e=[...d,...e.slice(r)],e};window.waveformHandler=new T;window.addEventListener("contentChanged",v=>{window.waveformHandler&&(window.waveformHandler={},window.waveformHandler=new T)});