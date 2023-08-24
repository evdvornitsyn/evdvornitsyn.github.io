let val = document.getElementById("modno");
val = "Получить консультацию бесплатно";
let pow;
let drop;
let span;

for (let i = 0; i < 31; i++) {
    setTimeout(function(){
        pow = val[i];
        span = document.createElement("span");
        document.querySelector(".watsap_link").appendChild(span);
        span.classList.add("button_span", "dop_span");
        console.log(pow);
    }, i * 1000); 
}