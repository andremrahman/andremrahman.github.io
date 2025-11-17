<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <section class="bg-[#1e293b] h-screen"></section>

  <div id="timeline-container">
    <div id="timeline" class="min-h-screen">
      <section id="slide1" class="z-3 bg-blue-500 rounded-t-2xl">BLUE</section>
      <section id="slide2" class="z-2 bg-[aqua] rounded-t-2xl">AQUA</section>
      <section id="slide3" class="z-1 bg-green-500 rounded-t-2xl">GREEN</section>
    </div>
  </div>

  <div class="spacer">
    <h1>Scroll Down</h1>
  </div>
  <div class="scrolling-text overflow-hidden min-h-1/5 w-full bg-gray-500 text-white flex items-center">
    <div class="rail flex text-[10vh] md:text-[15vh] font-bold">
      <p class="rail-text whitespace-nowrap px-2 py-4">
        construct design foundation</p>
      <p class="rail-text whitespace-nowrap px-2 py-4">
        work build scaffolding blueprint</p>
      <p class="rail-text whitespace-nowrap px-2 py-4">
        plan site structure layout</p>
      <p class="rail-text whitespace-nowrap px-2 py-4">
        project develop architecture</p>

    </div>
  </div>
  <div class="spacer bg-zinc-700 text-3xl flex justify-center items-center h-screen">
    <h1>The End</h1>
  </div>
  <div class="bg-zinc-200 text-3xl flex justify-center items-center h-screen">
    <h1>The End</h1>
  </div>

</x-layout>
