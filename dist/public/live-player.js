!function(){const e=ECLW.apiUrl+"/next-video";let t=!1,n=parseInt(document.querySelector(".eclw-player").dataset.eventId);0!==n&&(async e=>{let{fn:t,interval:n,maxAttempts:o}=e,a=0;const r=async(e,l)=>{const s=await t();return a++,s?e(s):o&&a===o?l(new Error("Exceeded max attempts")):void setTimeout(r,n,e,l)};new Promise(r)})({fn:async()=>{fetch(e).then((e=>e.json())).then((e=>{t=!!e.id,console.log(e),e.id!==n&&e.should_refresh&&window.location.reload()}))},interval:ECLW.pollingInterval})}(ECLW);