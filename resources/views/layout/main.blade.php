<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body style="background-color: #2C3E70">
    {{-- svg awal --}}

    <body>
        <div class="cursor-tracker">
            <svg
                version="1.1"
                id="Layer_1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px"
                y="0px"
                viewBox="0 0 512 512"
                style="enable-background: new 0 0 512 512"
                xml:space="preserve"
            >
                <path
                    style="fill: #ff5023"
                    d="M68.929,323.786C93.366,403.921,167.869,462.222,256,462.222s162.634-58.301,187.071-138.436H68.929z
    "
                />
                <path
                    style="fill: #bf3c1a"
                    d="M256,320c0,0,0,42.667,0,142.222c88.131,0,162.634-58.301,187.071-138.436L256,320z"
                />
                <rect
                    x="184.889"
                    y="248.889"
                    style="fill: #1e2e3b"
                    width="142.222"
                    height="56.889"
                />
                <path
                    style="fill: #ff5023"
                    d="M298.667,92.444c0-23.565-19.102-42.667-42.667-42.667c-23.565,0-42.667,19.102-42.667,42.667
    c0,15.791,8.585,29.567,21.333,36.945v34.166h42.667V129.39C290.082,122.011,298.667,108.235,298.667,92.444z"
                />
                <path
                    style="fill: #bf3c1a"
                    d="M256,49.778v113.778h21.333V129.39c12.749-7.378,21.333-21.154,21.333-36.945
    C298.667,68.88,279.565,49.778,256,49.778z"
                />
                <path
                    style="fill: #bfe4f8"
                    d="M426.667,312.889H384c0-70.579-57.421-128-128-128s-128,57.421-128,128H85.333
    c0-94.107,76.56-170.667,170.667-170.667S426.667,218.782,426.667,312.889z"
                />
                <path
                    style="fill: #93c7ef"
                    d="M256,142.222v42.667c70.579,0,128,57.421,128,128h42.667
    C426.667,218.782,350.107,142.222,256,142.222z"
                />
                <rect
                    x="85.333"
                    y="376.889"
                    style="fill: #1e2e3b"
                    width="341.333"
                    height="42.667"
                />
                <path
                    style="fill: #93c7ef"
                    d="M512,334.222c0,23.563,0,56.889,0,56.889H0c0,0,0-33.326,0-56.889l0,0
    c0-23.563,19.102-42.667,42.667-42.667h426.667C492.898,291.556,512,310.659,512,334.222L512,334.222z"
                />
                <g>
                    <circle style="fill: #ffda44" cx="64" cy="341.333" r="21.333" />
                    <circle style="fill: #ffda44" cx="160" cy="341.333" r="21.333" />
                </g>
                <path
                    style="fill: #5a8bb0"
                    d="M469.333,291.556H256v99.556h256c0,0,0-33.326,0-56.889C512,310.659,492.898,291.556,469.333,291.556
    z"
                />
                <circle style="fill: #ffda44" cx="256" cy="341.333" r="21.333" />
                <g>
                    <path
                        style="fill: #ff9811"
                        d="M256,320c11.782,0,21.333,9.552,21.333,21.333s-9.552,21.333-21.333,21.333"
                    />
                    <circle style="fill: #ff9811" cx="352" cy="341.333" r="21.333" />
                    <circle style="fill: #ff9811" cx="448" cy="341.333" r="21.333" />
                </g>
            </svg>
        </div>
    {{-- akhir --}}
    
<nav class="bg-[#373C7C] fixed top-0 w-full z-[999999]">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://adirasakhi.github.io/" class="flex items-center">
        <img src="/image/rikka-clear.png" class="h-20 mr-3 w-20 shadow-xl" alt="My Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">chuunibyou</span>
    </a>
    <div class="flex md:order-2">
      <div class="relative hidden md:block">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        </div>

      </div>
      <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
        <div class="relative mt-3 md:hidden">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          </div>
        </div>
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-[#373C7C] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="/" class="block py-2 pl-3 pr-4 text-white bg-[#0463ca] rounded md:bg-transparent md:text-[#ffff] md:p-0 md:dark:text-[#ffff] md:hover:text-[#0463ca] mb-[10px]" aria-current="page">Home</a>
          </li>
          <li>
            <a href="/about" class="block py-2 pl-3 pr-4 text-white bg-[#0463ca] rounded md:bg-transparent md:text-[#ffff] md:p-0 md:dark:text-[#ffff] md:hover:text-[#0463ca] mb-[10px]">About</a>
          </li>
          <li>
            <a href="/todolist" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#0463ca] md:p-0 dark:text-white md:dark:hover:text-[block py-2 pl-3 pr-4 text-white bg-[#0463ca] rounded md:bg-transparent md:text-[#ffff] md:p-0 md:dark:text-[#ffff]-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 mb[-10px]">ToDoList</a>
          </li>
          <li class="items-end text-right">
            <button class="js-change-theme focus:outline-none">🌙</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    {{-- content --}}
    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-25 lg:my-0 ">
        @yield('container')
      {{-- <img src="/image/isi/2.png" alt="" class="pt-[100px] right-0 absolute bottom-0 h-auto max-w-full">
      </div>
      <div class="absolute left-[100px] mt-[100px] w-[1400px] text-white">
        <h1 class="">Hallo ini web latihan</h1>
        <h3 class="overscroll-contain">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis repudiandae officiis aliquid! Autem alias magni, quis asperiores perferendis incidunt, dolore quo obcaecati quos ad blanditiis, sunt est? Mollitia inventore, sed ad maxime veniam officiis quae, quidem aperiam blanditiis exercitationem necessitatibus atque alias ipsam pariatur odit illo! Qui natus sapiente minima, ipsum error consequuntur quidem itaque consequatur fuga aut odit aliquid optio quas eos debitis iste, minus assumenda hic vel sequi ducimus rem corporis dolore similique. Perspiciatis excepturi nemo voluptate sequi, ipsum, recusandae, similique natus soluta asperiores totam error animi eligendi inventore tempora provident nesciunt itaque saepe possimus optio tenetur fuga?
        </h3> --}}
      </div>
        {{-- footer --}}


  <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
  <script src="/js/test.js"></script>

</body>
</html>