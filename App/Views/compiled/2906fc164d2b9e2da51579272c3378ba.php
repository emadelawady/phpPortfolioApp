<!-- This is the button that toggles the theme -->
<button x-ref="content" class="js-theme-toggle">
    <span class="bg-primary dark:bg-red-400 p-1 px-2 rounded-full font-semibold tracking-wide block dark:hidden text-white">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
        </svg>

    
    </span>
    <span class="bg-primary dark:bg-red-400 p-1 px-2 rounded-full font-semibold tracking-wide hidden dark:block text-slate-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
        </svg>

    </span>
</button>

  
  
  
    <!-- This is the button that toggles that reverts to the system theme -->
  


  <script>
  
  
            // Start by getting the current theme value in localStorage
        let theme = localStorage.getItem('theme');
                
        // Grab the class of the element that you want users to click to toggle dark and light theme/modes
        const themeToggle = document.querySelector('.js-theme-toggle')

        // Grab the class of the element that you want users to click on to revert to their system theme/mode
        const themeRemove = document.querySelector('.js-theme-remove')

        // Adds ".dark" to the <html> element, and adds "theme: dark" to localStorage
        const goDark = function() {
            document.documentElement.classList.add('dark')
            localStorage.setItem('theme', 'dark');
        }

        // Adds ".dark" to the <html> element, and adds "theme: dark" to localStorage
        const goLight = function() {
            document.documentElement.classList.remove('dark')
            localStorage.setItem('theme', 'light');
        }

        // Removes the theme form local storage, and matches the mode to the user's default system theme/mode
        const goSystem = function() {
            localStorage.removeItem('theme')

            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }   

        // Toggling the theme when the element with `.js-theme-toggle` is clicked
        themeToggle.addEventListener('click', function() {
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                goLight();
            } else {
                goDark();
            }
        });

        if(themeRemove){
            // Reverting the theme to default when the element with `.js-theme-remove` is clicked
            themeRemove.addEventListener('click', function() {
                goSystem();
            });           
        }

  </script><?php /**PATH C:\laragon\www\phpPortfolioApp\App\Views/components/locals/admins/theme-switch.blade.php ENDPATH**/ ?>