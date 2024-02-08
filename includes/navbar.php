<nav class="p-4 border-b-2 border-accent absolute top-0 left-0 w-full">
      <div class="text-text container mx-auto flex justify-between">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="images/logo.png" alt="Logó" class="w-20" />
          <a href="index.php">
            <span class="text-2xl font-bold text-accent max-md:text-xl">
              Fradisták Az Állatokért</span></a>
        </div>
        <button
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
          <a href="supporters.php">Támogatóink</a>
          <a href="about.php">Rólunk</a>
          <a href="donation.php">Adományozás</a>
          <a href="volunteer.php">Jelentkezz önkéntesnek</a>
        </div>
      </div>
    </nav>