let korvonal = function(){
    let elonezetek = document.getElementsByClassName("elonezet");
    let xTengely;
    let xTengelyPont;
    let kozeppont;
    let szamitX;
    let szamitY;
    for(let i = 0; i < elonezetek.length; i++){
        console.log(elonezetek[i].clientWidth);
        let kicsik = elonezetek[i].getElementsByClassName("kicsi");
        xTengely = elonezetek[i].clientWidth;
        kozeppont = xTengely*0.5;
        xTengelyPont=xTengely/kicsik.length;
        for(let j = 0; j<kicsik.length; j++){
            szamitX = xTengelyPont * (j);
            szamitY = (Math.sqrt(Math.pow(kozeppont, 2) - Math.pow((xTengelyPont * (j+1))-kozeppont, 2)))*0.5;
            kicsik[j].style.setProperty("left", `${szamitX}px`);
            kicsik[j].style.setProperty("bottom", `${szamitY}px`);
        }
    }
};

window.addEventListener("load", korvonal);
window.addEventListener('resize', korvonal);