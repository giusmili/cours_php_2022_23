document.addEventListener("DOMContentLoaded", e => {
  e.preventDefault();
  console.log(e.target);
  const msg = "Server : ";
  const el = document.querySelector("address");
  el.prepend(msg);

  /**
   * 
   * @param {*} n 
   * @returns 
   */
  const calc = n => {
    return n * n;
  };
  /**
   * 
   * @param {*} a 
   * @param {*} b 
   */
  let x = (a, b) => {};
});