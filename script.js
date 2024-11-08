const hamburger = document.getElementById("span");
const submenu = document.getElementById("submenu");

hamburger.addEventListener("click", ()=>{
    submenu.style.visibility = "visible";
    submenu.style.opacity = "100";
})
function hideBtn(){
    submenu.style.visibility = "hidden";
    submenu.style.opacity = "0";
}
