(()=>{const e=document.getElementsByClassName("click-to-copy");for(let t=0;t<e.length;t++){const o=e[t];o.querySelector("button").addEventListener("click",(async()=>{var e;const t=o.querySelector("span"),c=o.querySelector("textarea"),n=null!==(e=c?.textContent)&&void 0!==e?e:"";t&&c&&n&&navigator.clipboard.writeText(n).then((()=>{t.style.opacity="1",setTimeout((()=>{t.style.opacity="0"}),1500)}),(e=>{console.error(e)}))}))}})();