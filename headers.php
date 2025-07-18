<!-- /inc/header.php : Universal menu with hamburger (Argent Morrin) -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
  .font-playfair { font-family: 'Playfair Display', serif; }
  header { font-family: 'Roboto', sans-serif; }
</style>
<header class="fixed top-0 left-0 right-0 z-50 bg-neutral-900 bg-opacity-80 backdrop-blur-md shadow-lg">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <a href="/" class="text-2xl font-playfair font-bold">Argent Morrin</a>
    <button class="md:hidden p-2 rounded-md hover:bg-neutral-700" id="menu-button" aria-label="Open Menu">
      <span class="material-icons">menu</span>
    </button>
    <nav class="hidden md:flex space-x-6">
      <a class="hover:text-amber-400 transition-colors" href="/">Home</a>
      <a class="hover:text-amber-400 transition-colors" href="/#books">Book</a>
      <a class="hover:text-amber-400 transition-colors" href="/#project-x">Project X</a>
      <a class="hover:text-amber-400 transition-colors" href="/#blog">Blog</a>
      <a class="hover:text-amber-400 transition-colors" href="/#contact">Contact</a>
    </nav>
  </div>
  <div class="hidden md:hidden bg-neutral-800" id="mobile-menu">
    <nav class="flex flex-col space-y-2 px-4 py-3">
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="/">Home</a>
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="/#books">Book</a>
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="/#project-x">Project X</a>
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="/#blog">Blog</a>
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="/#contact">Contact</a>
    </nav>
  </div>
</header>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (menuButton && mobileMenu) {
      menuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
      });
    }
    // Optional: Hide mobile menu on nav click
    document.querySelectorAll('#mobile-menu a').forEach(link => {
      link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
    });
  });
</script>
<!-- add a top margin to main content if needed: pt-24 or pt-20 -->
