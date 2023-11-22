document.body.onload=function (){

    n = tab.length
    p = 0;
    container=document.getElementById("container");
    g=document.getElementById("g");
    d=document.getElementById("d");
    container.style.width=(800*n)+"px";
    for(let image of tab){
        div = document.createElement("div");
        div.className="photo";
        div.style.backgroundImage="url("+image+")";
        container.appendChild(div);
    }
    g.onclick=function (){
        p = (p+1)%n;
        moove();
    }
    d.onclick = function () {
        p = (p-1)%n;
        moove();
    }
    function moove(){
        container.style.transform = "translate(" + p * 800 + "px)";
        container.style.transition="all 0.5s ease"
    }
}