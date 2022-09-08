document.addEventListener("DOMContentLoaded",()=>{
    console.log("Loaded")
    const msg = "Server : "
    const el = document.querySelector("address")
    el.prepend(msg)
})