var a=(t,e,o)=>{if(!e.has(t))throw TypeError("Cannot "+o)};var d=(t,e,o)=>{if(e.has(t))throw TypeError("Cannot add the same private member more than once");e instanceof WeakSet?e.add(t):e.set(t,o)};var s=(t,e,o)=>(a(t,e,"access private method"),o);const l=document.querySelector("body"),c=768;var n,r;class u{constructor(){d(this,n);s(this,n,r).call(this)}closeAllModals(){document.querySelectorAll(".clip-wrapper").forEach(e=>{window.innerWidth<c&&(l.style.overflow="auto"),e.classList.remove("opened-add-to-collection"),e.style.pointerEvents="auto"})}}n=new WeakSet,r=function(){let e=this;document.querySelectorAll(".add-to-collection-button").forEach(o=>{o.addEventListener("click",p=>{window.innerWidth<c&&(l.style.overflow="hidden"),o.closest(".clip-wrapper").classList+=" opened-add-to-collection",document.querySelectorAll(".clip-wrapper").forEach(i=>{i.classList.contains("opened-add-to-collection")||(i.style.pointerEvents="none")})})}),document.addEventListener("click",function(o){o.target.closest(".opened-add-to-collection")||e.closeAllModals()}),window.addEventListener("resize",function(o){document.querySelectorAll(".opened-add-to-collection").length&&(l.style.overflow=window.innerWidth<c?"hidden":"auto")},!0)};window.clipActions=new u;