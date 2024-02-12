const menu = document.getElementById("menu");

const hmenu = () => {
  menu.classList.toggle("max-md:opacity-0");
  menu.classList.toggle("max-md:pointer-events-none");
  menu.classList.toggle("max-md:-translate-y-3");
};
