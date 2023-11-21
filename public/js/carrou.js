document.body.onload=function (){
    n = 2
    p = 0;
    container=document.getElementById("container");
    g=document.getElementById("g");
    d=document.getElementById("d");
    container.style.width=(800*n)+"px";
    let tab = ["./public/images/projets/SuperBreaker/Menu_Super_Breaker.png","./public/images/projets/SpaceInvader/Menu_Space_Invader.png"];
    for(let image of tab){
        div = document.createElement("div");
        div.className="photo";
        div.style.backgroundImage="url("+image+")";
        container.appendChild(div);
    }
    afficherMasquer();
    g.onclick=function (){
        if (p<0)
            p++;
        container.style.transform="translate("+p*800+"px)";
        container.style.transition="all 0.5s ease"
        afficherMasquer();
    }
    d.onclick = function () {
        if (p>-n+1)
            p--;
        container.style.transform = "translate(" + p * 800 + "px)";
        container.style.transition="all 0.5s ease"
        afficherMasquer();
    }
    function afficherMasquer(){
        if (p==-n+1)
            d.style.visibility="hidden"
        else
            d.style.visibility="visible"
        if (p == 0)
            g.style.visibility="hidden"
        else
            g.style.visibility="visible"
    }
}