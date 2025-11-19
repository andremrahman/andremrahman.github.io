<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <svg id="demo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1500 1000" width="3000" height="2000">
    <title>May the morph be with you</title>
    <defs>
      <mask id="titleMask">
        <rect x="0" y="0" width="1500" height="1000" fill="#fff" stroke-miterlimit="10" />

        <rect class="topCut" x="0" y="-278" width="1500" height="360" fill="#000" stroke-miterlimit="10" />
        <rect class="bottomCut" x="0" y="840" width="1500" height="320" fill="#000" stroke-miterlimit="10" />
      </mask>

      {{-- <button id="playIt">Pause</button> --}}
    </defs>

    <g id="name" mask="url(#titleMask)">

      <path id="svg"
        d="M625.64,244.56a3,3,0,0,0-2.85-2l-73.12.34q-52.86-1.64-15.63,29.21,66.64,58.42,65.4,113.53T534,451.44H250V363H438.61q58.2,1.65,14.81-32.5-71.57-65.81-60.88-120.94T460,154.45H706.4l67.46,228.09,68.28-228.09H961.23l-105.92,297H697.56ZM1157,363V302.94h93v148.5H1118.37q-48.33,0-87.41-17.17t-61.6-51.52q-22.52-34.35-22.52-84.12,0-35,13.47-62.42a126.81,126.81,0,0,1,37.33-45.66,164.83,164.83,0,0,1,54.81-27.15,236.33,236.33,0,0,1,65.92-8.95H1250v88.44h-93q-31.26,0-46.28,1.85a119.82,119.82,0,0,0-26.74,6.17,49.6,49.6,0,0,0-20.77,15q-9.05,10.7-10.49,37.84,1,26.33,10.49,37.64a44.91,44.91,0,0,0,23,15,170.39,170.39,0,0,0,28,5.14Q1128.65,363,1157,363Z"
        stroke="#ecce26" stroke-miterlimit="10" stroke-width="10" />
      <path id="wars"
        d="M416.47,668l-23.83,87.89H333L250,548.55h73.67l31,89.62,27-89.62h67.72l31.51,89.62,21-89.62h73.67L504.91,755.93H445.16Zm127.94,87.89,68.22-207.38h103L785,755.93H706.55l-13.07-37.34H631.87L618.8,755.93ZM664.33,594.5,634.6,676.65h57.16Zm361.8,99.67h45.76q40.64,1.15,10.34-22.69-50-46-42.51-84.45t47.11-38.49H1250V610.3H1149.45q-36.91-1.15-10.91,20.39,46.53,40.79,45.67,79.28t-45.67,46H958.07a27.45,27.45,0,0,1-19.8-8.44L880.6,687.42v68.51h-75V548.55h135q25,2.3,41.07,13.21a63.46,63.46,0,0,1,23.55,29.3q5.74,27.57.57,42.51a53.16,53.16,0,0,1-18.1,25Q975.6,668,953.59,673.64a2,2,0,0,0-1,3.1l13.65,17.44h59.94M880.6,600.25v38.2h52.28a17.19,17.19,0,0,0,9-3.09q4.88-3.09,5.17-15.58-.72-11.92-5.82-15.73t-8.55-3.81Z"
        stroke="#ecce26" stroke-miterlimit="10" stroke-width="10" />

      <text transform="translate(750 520)" text-anchor="middle" font-size="60" fill="#fff" letter-spacing="0.1em">MAY
        THE MORPH BE WITH YOU</text>

    </g>

    <g class="theLines" stroke="#1eaae1" stroke-miterlimit="10" stroke-width="2" fill="none">
      <line class="topCut smallLine topLine" x1="-1000" y1="82" x2="-1000" y2="82" />
      <line class="bottomCut smallLine bottomLine" x1="2500" y1="840" x2="2500" y2="840" />
    </g>
    <use xlink:href="#fighter" x="0" y="0" class="topFighter" />
    <use xlink:href="#fighter" x="0" y="0" class="bottomFighter" />

  </svg>

</x-layout>
