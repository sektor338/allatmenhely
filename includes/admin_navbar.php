<script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              text: "var(--text)",
              background: "var(--background)",
              primary: "var(--primary)",
              secondary: "var(--secondary)",
              accent: "var(--accent)",
            },
            keyframes: {
        active: {
          "0%": { width: "0px" },
          "100%": { width: "100%" },
        },
      },
      animation: {
        active: "active 0.3s ease-in",
      },
          },
        },
      };
    </script>
<nav class="p-4 border-b-2 border-accent fixed z-50 top-0 left-0 w-full bg-background">
      <div class="text-text container mx-auto flex justify-between">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
        <a href="./admin_panel.php" aria-label="Admin panel"><img src="images/logo.png" alt="Logó" class="w-20 h-20" /></a>
          <a href="./admin_panel.php" aria-label="Admin panel">
            <span class="text-2xl font-bold text-accent max-md:hidden">
              Admin panel</span></a>
        </div>
        <button aria-label="burgir"
          class="max-md:absolute right-10 top-8 max-md:flex hidden flex-col gap-3"
          onclick="hmenu()">
          <div class="w-16 h-2 bg-white"></div>
          <div class="w-16 h-2 bg-white"></div>
          <div class="w-16 h-2 bg-white"></div>

        </button>
        <!-- az legyen aláhúzva amelyik témát a felhasználó látja -->
        <div
          class="max-md:opacity-0 max-md:-translate-y-3 transition-all max-md:pointer-events-none items-center text-lg flex space-x-6 max-md:absolute max-md:flex-col max-md:top-[107%] max-md:left-0 max-md:bg-background max-md:w-full max-md:py-9 max-md:gap-7"
          id="menu"
        >
   
        </div>
      </div>
</nav>
<style type="text/tailwindcss">
    @layer utilities {
      .active{
        @apply relative after:absolute after:w-full after:-bottom-1 after:left-0 after:h-0.5 after:bg-accent after:animate-active;
      }
    }
  </style>
<script defer>
var path = window.location.pathname;
var page = path.split("/").pop();
const routes = [
  ["Kijelentkezés", "adminlogin.php"],
];

routes.map(([label, to]) => {
  const anchor = document.createElement("a");
  anchor.textContent = label;
  anchor.href = to;
  if (to == page )anchor.classList.add("active")
  menu.appendChild(anchor);

});



</script>