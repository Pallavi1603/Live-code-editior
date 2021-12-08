const left=document.querySelector(".left");
    right=document.querySelector(".right");
    bar=document.querySelector(".bar");
    editior=document.querySelector(".editior");
    run=document.querySelector(".btn-run");
    iframe=document.querySelector(".iframe");
    darkMode=document.querySelector(".btn-dark");
    lightMode=document.querySelector(".btn-light");


    const drag=(e)=>{
        e.preventDefault();
        document.selection ? document.selection.empty():
        window.getSelection().removeAllRanges();
        left.style.width=(e.pageX-bar.offsetWidth/3)+"px";
        editior.resize();
    }

    bar.addEventListener("mousedown",()=>{
        document.addEventListener("mousemove",drag)
    })

    bar.addEventListener("mouseup",()=>{
        document.removeEventListener("mousemove",drag)
    })

    //run btn event listener
    run.addEventListener("click",()=>{
        const html=editior.textContent;
        iframe.src="data:text/html;charset=utf-8,"+encodeURI
        (html);
    })

    //set darkMode
    darkMode.addEventListener("click",()=>{
        editior.style.backgroundColor="#363836";
        editior.style.color="#eee";
    })

    //set lightMode
    lightMode.addEventListener("click",()=>{
        editior.style.backgroundColor="";
        editior.style.color="";
    })

    //Live code
    document.getElementById("live").onclick=function(){
        if(this.checked){
            editior.addEventListener("keyup",()=>{
                const html=editior.textContent;
                iframe.src="data:text/html;charset=utf-8,"+encodeURI
                (html);
            })
        
        }
    }