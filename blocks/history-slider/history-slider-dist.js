document.addEventListener("DOMContentLoaded",(function(){const e=new Glide("#history-slider",{type:"carousel",focusAt:"center",perView:3,gap:30,animationTimingFunc:"ease-in-out"}),t=document.getElementById("display-image"),n=document.getElementById("display-text");e.on(["mount.after","run.after"],(()=>{const i=document.querySelector("#history-slider .glide__slide--active"),d=i.dataset.image,o=i.dataset.text;t.src=d,n.textContent=o;const s=document.querySelectorAll("#history-slider .glide__slide");s.forEach((e=>e.classList.remove("active")));s[e.index].classList.add("active")})),e.mount()}));