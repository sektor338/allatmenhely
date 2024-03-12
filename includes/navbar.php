<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Roboto Slab", serif;
      font-optical-sizing: auto;
      font-weight: 300;
      font-style: normal;
    }

    h1, h2, h3, h4, h5, h6, p{
      font-family: "Be Vietnam Pro", sans-serif;
      font-weight: 500;
      font-style: normal;
      font-size: 10px;
    }
    span{
      font-family: "Roboto Slab", sans-serif;
      font-weight: 500;
      font-style: normal;
      font-size: 18px;
    }
    input{
      font-family: "Roboto Slab", serif;
      font-weight: 400;
      font-style: normal;
      font-size: 18px;
    }
    a, div{
      font-family: "Be Vietnam Pro", sans-serif;;
      font-weight: 500;
      font-style: normal;
      font-size: 16px;
    }
    .title{
      font-family: "Be Vietnam Pro", sans-serif;
      font-weight: 700;
      font-style: normal;
      font-size: 24px;
    }
    .ggver {
      transition: all 0.3s;
    }
    .ggver:hover {
      color: var(--secondary);
    }

    body {
  --sb-track-color: #232e33;
  --sb-thumb-color: #6baf8d;
  --sb-size: 14px;
}

body::-webkit-scrollbar {
  width: var(--sb-size);
}

body::-webkit-scrollbar-track {
  background: var(--sb-track-color);
  border-radius: 3px;
}

body::-webkit-scrollbar-thumb {
  background: var(--sb-thumb-color);
  border-radius: 3px;
}

@supports not selector(::-webkit-scrollbar) {
  body {
    scrollbar-color: var(--sb-thumb-color) var(--sb-track-color);
  }
}

  </style>

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
        <a href="/aaaa" aria-label="Fradisták Az Állatokért"><img src="images/logo.png" alt="Logó" class="w-20 h-20" /></a>
          <a href="/aaaa" aria-label="Fradisták Az Állatokért">
            <span class="ggver max-md:hidden title">
              Fradisták Az Állatokért</span></a>
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
      .cella {
          @apply flex-grow bg-secondary rounded-lg p-5 mb-4 shadow-xl;
        }
        .section {
          @apply flex-grow flex flex-col p-5 bg-primary rounded-lg min-h-[500px];
        }
    }

      @layer base {
        :root {
          --text: #ffd899;
          --background: #131313;
          --primary: #1e6726;
          --secondary: #61a352;
          --accent: #dfa553;
        }}
  </style>
<script defer>
var path = window.location.pathname;
var page = path.split("/").pop();
const routes = [
  ["Támogatóink", "supporters.php"],
  ["Rólunk", "about.php"],
  ["Adományozás", "donation.php"],
  ["Jelentkezz önkéntesnek", "volunteer.php"],
];

routes.map(([label, to]) => {
  const anchor = document.createElement("a");
  anchor.textContent = label;
  anchor.href = to;
  if (to == page )anchor.classList.add("active")
  menu.appendChild(anchor);

});

const hmenu = () => {
  menu.classList.toggle("max-md:opacity-0");
  menu.classList.toggle("max-md:pointer-events-none");
  menu.classList.toggle("max-md:-translate-y-3");
};


</script>