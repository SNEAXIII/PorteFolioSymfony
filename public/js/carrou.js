document.body.onload = function () {
    function clicGauche() {
        p = (p + 1) % n;
        if (p === 1) {
            p -= n;
        }
        moove();
    }
    function clicDroit() {
        p = (p - 1) % n;
        moove();
    }
    n = tab.length
    p = index;

    container = document.getElementById("container");

    g = document.getElementById("g");
    d = document.getElementById("d");

    container.style.width = (800 * n) + "px";
    for (let image of tab) {
        div = document.createElement("div");
        div.className = "photo";
        div.style.backgroundImage = "url(" + image + ")";
        container.appendChild(div);
    }
    g.onclick = function () {
        clicGauche()
    }
    d.onclick = function () {
        clicDroit()
    }
    function moove() {
        container.style.transform = "translate(" + p * 800 + "px)";
        container.style.transition = "all 0.5s ease"
    }
}