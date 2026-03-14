function iniciarMusica(){
document.getElementById("musica").play();
}

function acepto(){

document.getElementById("final").style.display="block";

for(let i=0;i<30;i++){
crearCorazon();
}

}

function crearCorazon(){

let corazon=document.createElement("div");

corazon.classList.add("corazon");

corazon.innerHTML="❤";

corazon.style.left=Math.random()*100+"vw";

corazon.style.fontSize=(Math.random()*20+20)+"px";

document.body.appendChild(corazon);

setTimeout(()=>{
corazon.remove();
},5000);

}

let botonNo=document.getElementById("no");

botonNo.addEventListener("touchstart",mover);
botonNo.addEventListener("mouseover",mover);

function mover(){

let x=Math.random()*200-100;
let y=Math.random()*200-100;

botonNo.style.transform=`translate(${x}px,${y}px)`;

}