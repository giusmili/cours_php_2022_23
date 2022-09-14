document.addEventListener("DOMContentLoaded",(e)=>{
    e.preventDefault();
    console.log("Loaded");
    const msg = "Server : ";
    const el = document.querySelector("address");
    el.prepend(msg);
})