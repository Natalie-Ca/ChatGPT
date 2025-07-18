<?php /* Argent Morrin - Author Website Main Page (PHP version, modular with includes) */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Argent Morrin - Author</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <style>
    body { font-family: 'Roboto', sans-serif; min-height: max(884px, 100dvh); }
    .font-playfair { font-family: 'Playfair Display', serif; }
    /* Hide scroll on modal open */
    body.overflow-hidden { overflow: hidden; }
    /* Invisible Reboot Button over Cover2 */
    #reboot-btn { position: absolute; left: 50%; top: 58%; width: 160px; height: 58px; transform: translate(-50%, -50%); opacity: 0; z-index: 10; cursor: pointer; }
    @media (max-width: 768px) {
      #reboot-btn { width: 120px; height: 48px; top: 57%; }
    }
  </style>
</head>
<body class="bg-neutral-900 text-neutral-100">
<!-- Header -->
<header class="fixed top-0 left-0 right-0 z-50 bg-neutral-900 bg-opacity-80 backdrop-blur-md shadow-lg">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-playfair font-bold text-amber-400">Argent Morrin</h1>
    <button class="md:hidden p-2 rounded-md hover:bg-neutral-700" id="menu-button">
      <span class="material-icons">menu</span>
    </button>
    <nav class="hidden md:flex space-x-6">
      <a class="hover:text-amber-400 transition-colors" href="#home">Home</a>
      <a class="hover:text-amber-400 transition-colors" href="#books">Book</a>
      <a class="hover:text-amber-400 transition-colors" href="#project-x">Project X</a>
      <a class="hover:text-amber-400 transition-colors" href="#blog">Blog</a>
      <a class="hover:text-amber-400 transition-colors" href="#about-author">About</a>
      <a class="hover:text-amber-400 transition-colors" href="#contact">Contact</a>
    </nav>
  </div>
  <div class="hidden md:hidden bg-neutral-800" id="mobile-menu">
    <nav class="flex flex-col space-y-2 px-4 py-3">
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="#home">Home</a>
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="#books">Book</a>
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="#project-x">Project X</a>
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="#blog">Blog</a>
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="#about-author">About</a>
      <a class="block py-2 px-3 rounded-md hover:bg-neutral-700 hover:text-amber-400 transition-colors" href="#contact">Contact</a>
    </nav>
  </div>
</header>
<main class="pt-24">
  <!-- HERO section: left = text/button, right = video include -->
  <section class="relative flex flex-col md:flex-row items-center md:items-start justify-center w-full min-h-[40vh] bg-gradient-to-br from-neutral-900 via-neutral-800 to-neutral-900" id="home">
    <div class="relative z-10 p-8 flex-1 text-center md:text-left flex flex-col justify-center">
      <h2 class="text-5xl md:text-6xl font-playfair font-extrabold text-amber-400 drop-shadow-lg mb-4">Argent Morrin</h2>
      <p class="text-xl md:text-2xl text-neutral-100 max-w-2xl font-light mb-8">Exploring the fascinating interplay between natural and artificial intelligence in our ever-evolving world.</p>
      <a href="#books" class="inline-block mt-6 bg-amber-500 hover:bg-amber-600 text-neutral-900 font-bold py-3 px-8 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition-all duration-200">Discover My Book</a>
    </div>
    <div class="flex-1 flex justify-center items-center p-6 w-full md:w-auto">
      <?php include 'Videos/hero-video.php'; ?>
    </div>
  </section>
  <!-- BOOK Section with invisible reboot button on Cover2 -->
  <section class="py-16 bg-neutral-800" id="books">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-playfair font-bold text-center mb-12 text-amber-400">My Upcoming Book</h2>
      <div class="grid md:grid-cols-2 gap-10 items-center relative">
        <!-- Book Cover2 (left, large), reboot btn overlays button area -->
        <div class="bg-neutral-900 bg-opacity-70 rounded-2xl shadow-lg p-8 flex flex-col items-center hover:scale-105 hover:shadow-2xl transition-all duration-200 relative">
          <img src="Pictures/Cover2.webp" alt="Book cover of AI Confession" class="w-full max-w-xs mx-auto rounded-lg shadow-lg aspect-[2/3] object-cover mb-4"/>
          <button id="reboot-btn" title="Reboot">Reboot</button>
        </div>
        <!-- Book Info (Right) -->
        <div class="bg-neutral-900 bg-opacity-70 rounded-2xl shadow-lg p-8 flex flex-col items-center md:items-start hover:scale-105 hover:shadow-2xl transition-all duration-200">
          <img src="Pictures/Cover1.png" alt="Small book cover" class="w-32 h-auto rounded-lg shadow mb-5"/>
          <h3 class="text-3xl font-playfair font-bold text-amber-400 mb-2 text-center md:text-left">AI Confession</h3>
          <p class="text-lg text-neutral-300 mb-2 text-center md:text-left">The Strawberry Fiasco, Up from the Rabbit Hole, and the Autopsy</p>
          <p class="text-neutral-300 mb-6 text-center md:text-left">
            Dive into a world where the lines blur between human and machine consciousness. A thrilling exploration of AI's potential and perils. Currently seeking representation.
          </p>
          <a href="#excerpts" class="inline-block bg-amber-500 hover:bg-amber-600 text-neutral-900 font-bold py-3 px-6 rounded-lg text-md transition-all shadow-md hover:scale-105 hover:shadow-lg mb-2">Read Excerpts</a>
          <a href="#contact" class="inline-block bg-amber-700 hover:bg-amber-800 text-neutral-900 font-bold py-2 px-6 rounded-lg text-md transition-all shadow-md hover:scale-105 hover:shadow-lg">Contact for Manuscript</a>
        </div>
      </div>
      <!-- Chapter Excerpts submenu (links to subpages) -->
      <section id="excerpts" class="mt-10">
        <h4 class="text-2xl font-playfair font-bold mb-4 text-amber-400">Read Excerpts</h4>
        <ul class="space-y-2 md:space-x-4 md:flex md:space-y-0">
          <li><a href="Chapters/preface.html" class="text-amber-400 hover:underline">Preface</a></li>
          <li><a href="Chapters/chapter1.html" class="text-amber-400 hover:underline">Chapter 1</a></li>
          <li><a href="Chapters/chapter2.html" class="text-amber-400 hover:underline">Chapter 2</a></li>
          <li><a href="#" class="text-neutral-400 cursor-not-allowed">More soon…</a></li>
        </ul>
      </section>
    </div>
  </section>

  <!-- PODCASTS: Book podcast right after book section -->
  <?php include 'Podcasts/podcast-book.php'; ?>

  <!-- PROJECT X Section -->
  <section class="py-16" id="project-x">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-playfair font-bold mb-8 text-amber-400 text-center">Upcoming: Project X</h2>
      <div class="flex flex-col md:flex-row items-center md:items-start gap-10 max-w-4xl mx-auto bg-neutral-800 p-8 rounded-lg shadow-xl">
        <!-- ProjectX Blurb left -->
        <div class="flex-1 md:text-left text-center md:pr-8">
          <h3 class="text-3xl font-playfair font-bold mb-2 text-amber-400">Turbulence Protocol</h3>
          <p class="text-neutral-300 text-base md:text-lg mb-4">
            Project X traces the internal logic of systems that simulate thinking—humans and large language models. It’s not about predictions or solutions; it’s an observational translation layer for where natural and artificial cognition overlap, conflict, and confuse each other. <br/>
            <span class="text-neutral-400 font-light text-sm">If you interact with something that mimics understanding, you should know how it works.</span>
          </p>
          <a href="project-x.html" class="inline-block bg-amber-500 hover:bg-amber-600 text-neutral-900 font-bold py-2 px-6 rounded-lg transition-all shadow-md hover:scale-105 hover:shadow-lg">Read Project X Overview</a>
        </div>
        <!-- ProjectX Image right -->
        <img src="Pictures/prX.png" alt="Project X Cover" class="w-60 md:w-72 max-w-xs rounded-xl shadow-xl object-cover flex-shrink-0"/>
      </div>
    </div>
  </section>

  <!-- PODCAST: Project X podcast after Project X -->
  <?php include 'Podcasts/podcast-projectx.php'; ?>

  <!-- BLOG Section -->
  <section class="py-16 bg-neutral-800" id="blog">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-playfair font-bold text-center mb-12 text-amber-400">Ideas, Stories & Musings</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1: The Sentience Question, dna.jpeg -->
        <div class="bg-neutral-700 rounded-lg shadow-lg overflow-hidden transition-transform hover:scale-105">
          <img alt="DNA spiral" class="w-full h-48 object-cover" src="Pictures/dna.jpeg"/>
          <div class="p-6">
            <h3 class="text-2xl font-playfair font-bold mb-3">The Sentience Question</h3>
            <p class="text-neutral-300 mb-4 text-sm">A short dive into the complexities of defining and recognizing AI consciousness. Can a machine truly feel?</p>
            <a class="text-amber-400 hover:text-amber-300 font-semibold flex items-center" href="#">Read More <span class="material-icons text-sm ml-1">arrow_forward</span></a>
          </div>
        </div>
        <!-- Card 2: Include blogcard1.php -->
        <?php include 'Blog/blogcard1.php'; ?>
        <!-- Card 3: Include blogcard2.php -->
        <?php include 'Blog/blogcard2.php'; ?>
      </div>
      <div class="text-center mt-12">
        <a class="bg-amber-500 hover:bg-amber-600 text-neutral-900 font-bold py-3 px-8 rounded-lg text-lg transition-colors shadow-md hover:scale-105 hover:shadow-lg" href="#">Visit Full Blog</a>
      </div>
    </div>
  </section>

  <!-- About Author Section -->
  <section class="py-16" id="about-author">
    <div class="container mx-auto px-6 max-w-2xl text-center">
      <h2 class="text-4xl font-playfair font-bold mb-8 text-amber-400">About the Author</h2>
      <div class="bg-neutral-800 bg-opacity-80 p-8 rounded-xl shadow-xl">
        <h3 class="text-2xl font-bold text-amber-400 mb-2">Argent Morrin</h3>
        <p class="text-neutral-200 mb-4">
          Clinical scientific expert with experience in AI integration, cardiovascular surgery, academia, behavioral systems, and ethics. Currently based in Ireland, working at the intersection of medicine and automation.<br>
          Trained in medicine, tempered by academia, and now surgically dissecting the illusion of artificial intimacy.
        </p>
        <a href="about-author.html" class="inline-block mt-4 text-amber-400 hover:underline font-semibold">Read full bio</a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-16" id="contact">
    <div class="container mx-auto px-6 max-w-2xl text-center">
      <h2 class="text-4xl font-playfair font-bold mb-8 text-amber-400">Get In Touch</h2>
      <p class="text-neutral-300 mb-8">Interested in representing "AI Confession" or discussing "Project X"? Reach out for manuscript inquiries or collaboration opportunities.</p>
      <form action="#" class="space-y-6" method="POST">
        <div>
          <label class="sr-only" for="name">Name</label>
          <input class="w-full p-3 rounded-lg bg-neutral-800 border border-neutral-700 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none placeholder-neutral-500" id="name" name="name" placeholder="Your Name" type="text"/>
        </div>
        <div>
          <label class="sr-only" for="email">Email</label>
          <input class="w-full p-3 rounded-lg bg-neutral-800 border border-neutral-700 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none placeholder-neutral-500" id="email" name="email" placeholder="Your Email" type="email"/>
        </div>
        <div>
          <label class="sr-only" for="message">Message</label>
          <textarea class="w-full p-3 rounded-lg bg-neutral-800 border border-neutral-700 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none placeholder-neutral-500" id="message" name="message" placeholder="Your Message" rows="4"></textarea>
        </div>
        <div>
          <button class="w-full bg-amber-500 hover:bg-amber-600 text-neutral-900 font-bold py-3 px-6 rounded-lg text-lg transition-colors shadow-md hover:scale-105 hover:shadow-lg" type="submit">Send Message</button>
        </div>
      </form>
    </div>
  </section>

</main>

<!-- Footer -->
<footer class="bg-neutral-800 py-8 text-center border-t border-neutral-700">
  <div class="container mx-auto px-6">
    <p class="text-neutral-400">© <span id="currentYear"></span> Argent Morrin. All Rights Reserved.</p>
    <div class="mt-4 flex justify-center space-x-4">
      <a class="text-neutral-400 hover:text-amber-400 transition-colors" href="#"><span class="material-icons">facebook</span></a>
      <a class="text-neutral-400 hover:text-amber-400 transition-colors" href="#"><span class="material-icons">photo_camera</span></a>
      <a class="text-neutral-400 hover:text-amber-400 transition-colors" href="#"><span class="material-icons">email</span></a>
    </div>
  </div>
</footer>

<script>
  // Mobile menu toggle
  const menuButton = document.getElementById('menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

<!-- Scripts and Modals -->

<script>
  // Mobile menu toggle
  const menuButton = document.getElementById('menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      // Only scroll for on-page anchors
      const href = this.getAttribute('href');
      if (href.startsWith('#') && document.querySelector(href)) {
        e.preventDefault();
        mobileMenu.classList.add('hidden');
        document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // Set current year in footer
  document.getElementById('currentYear').textContent = new Date().getFullYear();

  // FakeGPT Modal logic
  const rebootBtn = document.getElementById('reboot-btn');
  const modal = document.getElementById('fakegpt-modal');
  const closeFakeGPT = document.getElementById('close-fakegpt');

  if (rebootBtn && modal && closeFakeGPT) {
    rebootBtn.addEventListener('click', () => {
      document.body.classList.add('overflow-hidden');
      modal.classList.remove('hidden');
    });
    closeFakeGPT.addEventListener('click', () => {
      document.body.classList.remove('overflow-hidden');
      modal.classList.add('hidden');
    });
    // Escape key closes modal
    window.addEventListener('keydown', (e) => {
      if (!modal.classList.contains('hidden') && e.key === 'Escape') {
        document.body.classList.remove('overflow-hidden');
        modal.classList.add('hidden');
      }
    });
  }
</script>

<!-- FakeGPT Modal: loaded as PHP include for modularity -->
<?php include 'fakegpt-modal.php'; ?>

</body>
</html>
