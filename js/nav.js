// Event listeners for nav links
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('mouseover', () => {
            const bgUrl = link.getAttribute('data-bg');
            if (bgUrl !== currentTexture) {
                hoverTimeout = setTimeout(() => {
                    setTexture(bgUrl);
                    currentTexture = bgUrl;
                }, 3000); // 3-second delay
            }
        });

        link.addEventListener('mouseleave', () => {
            clearTimeout(hoverTimeout); // Clear the timeout if mouse leaves before 3 seconds
        });
    });

    // تغيير صورة خلفية القائمة عند الوقوف عليها بالماوس
    const navbar = document.querySelector('.navba');
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('mouseover', () => {
            const bgUrl = link.getAttribute('data-bg');
            navbar.style.backgroundImage = `url('${bgUrl}')`;
        });
        link.addEventListener('mouseleave', () => {
            navbar.style.backgroundImage = "url('images/nav/nav.png')";
        });
    });

    // Function to handle toggling the navbar
   function toggleNavbar() {
       navbar.classList.toggle('show');
       navbar.classList.toggle('bg-black'); // Toggle the background color
   }

   // Event listener for the toggle button
   toggleButton.addEventListener('click', () => {
       toggleNavbar();
   });