<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Z-Poc – Digital Solutions by Heinczinger Zorán</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-white text-gray-900 font-sans">
<!-- Header / Sticky Nav -->
<header id="navbar" class="w-full fixed top-0 left-0 z-50 text-white sticky-nav">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center py-6">
      <h1 class="text-2xl font-bold">Z-Poc</h1>
      <a href="#contact" class="text-white border border-white px-4 py-2 rounded hover:bg-white hover:text-black transition">Kapcsolat</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero-bg min-h-screen flex flex-col justify-center items-center text-center px-4 bg-gray-100 bg-blend-overlay bg-gray-800/60 text-white pt-24">
    <h1 class="text-4xl md:text-6xl font-bold mb-4">Z-Poc – Digital Solutions by Heinczinger Zorán</h1>
    <p class="text-lg md:text-xl max-w-xl">Fejlesztő és IT projektmenedzser. Egyedi weboldalak, digitális megoldások, és Proof of Concept alkalmazások.</p>
    <a href="#contact" class="mt-6 px-6 py-3 bg-white text-black rounded-xl hover:bg-gray-200 transition">Kapcsolatfelvétel</a>
  </section>

  <!-- About Section -->
  <section class="py-16 px-6 bg-white max-w-4xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6">Rólam</h2>
    <div class="flex flex-col md:flex-row items-center gap-6">
      <img src="/assets/photo.jpeg" alt="Heinczinger Zorán" class="w-48 h-48 object-cover rounded-full shadow-md" />
      <p class="text-lg leading-relaxed">Heinczinger Zorán vagyok, szenvedélyesen foglalkozom webfejlesztéssel és digitális megoldásokkal. A Z-Poc név mögött a kreativitás, a technológia iránti szeretet, és a megvalósítás iránti elkötelezettség áll. Számomra fontos, hogy az általam fejlesztett rendszerek letisztultak, stabilak és könnyen kezelhetőek legyenek.</p>
    </div>
  </section>

  <!-- References Section -->
  <section class="py-16 px-6 bg-gray-50">
    <h2 class="text-3xl font-semibold mb-10 text-center">Referenciák</h2>
    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
      <a href="https://archimood.hu" target="_blank" class="block bg-white shadow rounded-xl hover:shadow-lg transition overflow-hidden">
        <img src="/assets/ref-archimood.png" alt="Archimood" class="w-full h-60 object-cover" />
        <div class="p-4">
          <h3 class="text-xl font-bold mb-2">Archimood</h3>
          <p>Belsőépítészeti megoldások, modern bemutatkozó oldal.</p>
        </div>
      </a>
      <a href="https://kozmetikustimi.hu" target="_blank" class="block bg-white shadow rounded-xl hover:shadow-lg transition overflow-hidden">
        <img src="/assets/ref-kozmetikustimi.png" alt="Kozmetikus Timi" class="w-full h-60 object-cover" />
        <div class="p-4">
          <h3 class="text-xl font-bold mb-2">Kozmetikus Timi</h3>
          <p>Szolgáltatás-alapú kozmetikai oldal időpontfoglalással.</p>
        </div>
      </a>
      <a href="https://futalajhar.hu" target="_blank" class="block bg-white shadow rounded-xl hover:shadow-lg transition overflow-hidden">
        <img src="/assets/ref-futalajhar.png" alt="Fut a Lajhár" class="w-full h-60 object-cover" />
        <div class="p-4">
          <h3 class="text-xl font-bold mb-2">Fut a Lajhár</h3>
          <p>Közösségi futóesemény bemutató és nevezési oldal.</p>
        </div>
      </a>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-16 px-6 bg-white max-w-4xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6">Szolgáltatások</h2>
    <ul class="list-disc pl-6 space-y-2 text-lg">
      <li>Weboldalak és egyedi webalkalmazások fejlesztése</li>
      <li>Proof of Concept (POC) projektek készítése</li>
      <li>IT projektmenedzsment és tanácsadás</li>
      <li>Teljeskörű technológiai megvalósítás tervezéstől üzemeltetésig</li>
    </ul>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-16 px-6 bg-gray-100">
    <h2 class="text-3xl font-semibold mb-6 text-center">Kapcsolat</h2>
    <div class="mt-10 text-center text-lg">
      <p>Email: <a href="mailto:info@z-poc.hu" class="text-blue-600">info@z-poc.hu</a></p>
      <p>LinkedIn: <a href="https://www.linkedin.com/in/zoran-heinczinger/" target="_blank" class="text-blue-600">zoran-heinczinger</a></p>
    </div>
  </section>


  <script>
    const navbar = document.querySelector('#navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('sticky');
        
      } else {
        navbar.classList.remove('sticky');
      }
    });
  </script>
</body>
</html>
