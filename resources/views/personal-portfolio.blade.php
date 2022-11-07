<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="bg-body text-white font-poppins pb-12">
    
      <header class="py-6">
          <div class="container flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
              <div class="text-lg font-bold">Anton.Graham</div>
              <div class="hidden md:flex space-x-12 items-center">
                  <a href="{{ route('portfolio') }}" class="text-selected-text">Home</a>
                  <a href="#work">My work</a>
                  <a href="#clients">Clients</a>
                  <a href="#hire"><button class="px-6 py-2 bg-theme font-bold">Hire me</button></a>
              </div>
              <div class="md:hidden">
                  <svg width="26" height="18" viewBox="0 0 26 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 17.5H0.25V14.6667H13V17.5ZM25.75 10.4167H0.25V7.58333H25.75V10.4167ZM25.75 3.33333H13V0.5H25.75V3.33333Z" fill="white"/></svg>
              </div>
          </div>
      </header>
  
  
      <div class="container mt-16 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
          <div class="flex flex-wrap md:flex-nowrap">
  
              <nav class="inline-block lg:mr-24 lg:w-4 fixed left-percentage hidden xl:block">
                  <div class="absolute left-50 transform -translate-x-1/2 space-y-6 mt-36">
                      <a href="#"  class="nav-dot selected-circle block w-7 h-7 rounded-full border-4 border-nav bg-body">
                          <span class="bg-black px-2 py-1 rounded-md ml-10 opacity-0">Home</span>
                      </a>
                      <a href="#work" class="nav-dot block w-7 h-7 rounded-full border-4 border-nav bg-body">
                          <span class="bg-black px-2 py-1 rounded-md ml-10 opacity-0">Work</span>
                      </a>
                      <a href="#clients" class="nav-dot block w-7 h-7 rounded-full border-4 border-nav bg-body">
                          <span class="bg-black px-2 py-1 rounded-md ml-10 opacity-0">Clients</span>
                      </a>
                      <a href="#hire" class="nav-dot block w-7 h-7 rounded-full border-4 border-nav bg-body">
                          <span class="bg-black px-2 py-1 rounded-md ml-10 opacity-0">Hire</span>
                      </a>
                  </div>
              </nav>
  
              <div class="flex flex-wrap lg:ml-20 justify-center md:justify-start max-w-xl mt-0 md:my-36">
                  <h1 class="font-bold text-5xl md:text-6xl lg:text-7xl text-center md:text-left">Building<br> beautiful web experiences that solve problems.</h1>
                  <div class="w-full flex justify-center md:justify-start">
                      <button class="px-8 py-4 bg-theme text-white font-bold mt-12 flex items-center space-x-3">
                          <div>
                              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M14.4375 11C14.4375 11.9117 14.0753 12.786 13.4307 13.4307C12.786 14.0753 11.9117 14.4375 11 14.4375C10.0883 14.4375 9.21398 14.0753 8.56932 13.4307C7.92466 12.786 7.5625 11.9117 7.5625 11C7.5625 10.0883 7.92466 9.21398 8.56932 8.56932C9.21398 7.92466 10.0883 7.5625 11 7.5625C11.9117 7.5625 12.786 7.92466 13.4307 8.56932C14.0753 9.21398 14.4375 10.0883 14.4375 11Z" fill="white"/>
                                  <path d="M0 11C0 11 4.125 3.4375 11 3.4375C17.875 3.4375 22 11 22 11C22 11 17.875 18.5625 11 18.5625C4.125 18.5625 0 11 0 11ZM11 15.8125C12.2764 15.8125 13.5004 15.3055 14.403 14.403C15.3055 13.5004 15.8125 12.2764 15.8125 11C15.8125 9.72365 15.3055 8.49957 14.403 7.59705C13.5004 6.69453 12.2764 6.1875 11 6.1875C9.72365 6.1875 8.49957 6.69453 7.59705 7.59705C6.69453 8.49957 6.1875 9.72365 6.1875 11C6.1875 12.2764 6.69453 13.5004 7.59705 14.403C8.49957 15.3055 9.72365 15.8125 11 15.8125Z" fill="white"/>
                              </svg>								
                          </div>
                          <span>View my work.</span>
                      </button>
                  </div>
              </div>
              <img src={{asset('man.png') }} alt="Man" class="w-3/4 mt-12 md:absolute -mt-6 md:mt-0 right-0 -z-1">
          </div>
      </div>
  
      <!-- My work -->
      <div class="container mt-64 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
          <h2 id="work" class="secondary-title">My work</h2>
          <p class="section-paragraph">I am a TALL - <span class="font-bold"> Tailwind CSS, Alipne JS, Livewire and Laravel</span> full stack web-developer. Here are some of my most recent work</p>
  
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            <img src="https://images.unsplash.com/photo-1576153192396-180ecef2a715?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" class="w-full bg-nav h-36 lg:h-72 object-cover">
            <img src="https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" class="w-full bg-nav h-36 lg:h-72 object-cover">
            <img src="https://images.unsplash.com/photo-1586717791821-3f44a563fa4c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="w-full hidden md:block bg-nav h-36 lg:h-72 object-cover">
            <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=764&q=80" class="w-full hidden md:block bg-nav h-36 lg:h-72 object-cover">
            <img src="https://images.unsplash.com/photo-1547119957-637f8679db1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" class="w-full hidden md:block bg-nav h-36 lg:h-72 object-cover">
            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1336&q=80" class="w-full hidden md:block bg-nav h-36 lg:h-72 object-cover">
            <img src="https://images.unsplash.com/photo-1603969072881-b0fc7f3d77d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80s" class="w-full hidden md:block bg-nav h-36 lg:h-72 object-cover">
            <img src="https://images.unsplash.com/photo-1618761714954-0b8cd0026356?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="w-full hidden md:block bg-nav h-36 lg:h-72 object-cover">
            <img src="https://images.unsplash.com/photo-1545235617-7a424c1a60cc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=880&q=80" class="w-full hidden md:block md:col-span-2 lg:col-span-1 bg-nav h-36 lg:h-72 object-cover">
          </div>
        </section>
      </div>
  
  
  
  
      <!-- Clients -->
      <div class="container mt-64 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
          <h2 id="clients" class="secondary-title">Clients</h2>
          <p class="section-paragraph">I’ve had the pleasure of working with  Trinidad and Tobago Ministry of National Security in designing and implementing both frontend and backend technologies.</p>
  
          <!-- Clients -->
          <div class="space-y-12 my-16">
            <div class="w-full border border-nav p-16 lg:px-32 lg:py-20 lg:space-x-32 flex justify-center lg:justify-start flex-wrap lg:flex-nowrap">
              
              <!-- Client logo -->
              <div class="mb-6 lg:mb-0">
                <svg width="80" height="96" viewBox="0 0 80 96" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M66.6983 92.1599C61.5487 97.2095 55.867 96.4223 50.4513 94.0415C44.6936 91.6127 39.4299 91.4591 33.3492 94.0415C25.7767 97.3439 21.7577 96.3839 17.1972 92.1599C-8.55106 65.3759 -4.75058 24.5759 24.5131 23.0399C31.6105 23.4239 36.5796 27.0047 40.7601 27.3023C46.9739 26.0255 52.9216 22.3679 59.5724 22.8479C67.5629 23.5007 73.5392 26.6879 77.5297 32.4191C61.0926 42.4031 64.9881 64.2911 80.0855 70.4351C77.0641 78.4511 73.1876 86.3711 66.6888 92.2271L66.6983 92.1599ZM40.19 22.7519C39.4204 10.8479 48.9691 1.05595 59.9525 0.0959473C61.4632 13.8239 47.6009 24.0959 40.19 22.7519Z" fill="white"/></svg>
              </div>
  
              <!-- Client info -->
              <div class="flex flex-wrap justify-center text-center lg:text-left lg:block">
                <h3 class="text-white text-3xl font-semibold">Trinidad and Tobago Regiment</h3>
  
                <div class="w-full lg:w-auto flex flex-wrap justify-center lg:justify-start gap-3 mt-6 mb-8">
                  <div class="badge">Laravel</div>
                  <div class="badge">Alpine.js</div>
                  <div class="badge">Tailwind CSS</div>
                  <div class="badge">Livewire</div>
                  <div class="badge">Full-stack Web Development</div>
                </div>
  
                <p class="text-secondary">Popluar cases.</p>
              </div>
  
            </div>
            <div class="w-full border border-nav p-16 lg:px-32 lg:py-20 lg:space-x-32 flex justify-center lg:justify-start flex-wrap lg:flex-nowrap">
              
              <!-- Client logo -->
              <div class="mb-6 lg:mb-0">
                <svg width="80" height="96" viewBox="0 0 80 96" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M66.6983 92.1599C61.5487 97.2095 55.867 96.4223 50.4513 94.0415C44.6936 91.6127 39.4299 91.4591 33.3492 94.0415C25.7767 97.3439 21.7577 96.3839 17.1972 92.1599C-8.55106 65.3759 -4.75058 24.5759 24.5131 23.0399C31.6105 23.4239 36.5796 27.0047 40.7601 27.3023C46.9739 26.0255 52.9216 22.3679 59.5724 22.8479C67.5629 23.5007 73.5392 26.6879 77.5297 32.4191C61.0926 42.4031 64.9881 64.2911 80.0855 70.4351C77.0641 78.4511 73.1876 86.3711 66.6888 92.2271L66.6983 92.1599ZM40.19 22.7519C39.4204 10.8479 48.9691 1.05595 59.9525 0.0959473C61.4632 13.8239 47.6009 24.0959 40.19 22.7519Z" fill="white"/></svg>
              </div>
  
              <!-- Client info -->
              <div class="flex flex-wrap justify-center text-center lg:text-left lg:block">
                <h3 class="text-white text-3xl font-semibold">Rush, inc.</h3>
  
                <div class="w-full lg:w-auto flex flex-wrap justify-center lg:justify-start gap-3 mt-6 mb-8">
                  <div class="badge">HTML 5</div>
                  <div class="badge">CSS</div>
                  <div class="badge">JavaScript</div>
                </div>
  
                <p class="text-secondary">Coming Soon!</p>
              </div>
  
            </div>
            <div class="w-full border border-nav p-16 lg:px-32 lg:py-20 lg:space-x-32 flex justify-center lg:justify-start flex-wrap lg:flex-nowrap">
              
              <!-- Client logo -->
              <div class="mb-6 lg:mb-0">
                <svg width="80" height="96" viewBox="0 0 80 96" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M66.6983 92.1599C61.5487 97.2095 55.867 96.4223 50.4513 94.0415C44.6936 91.6127 39.4299 91.4591 33.3492 94.0415C25.7767 97.3439 21.7577 96.3839 17.1972 92.1599C-8.55106 65.3759 -4.75058 24.5759 24.5131 23.0399C31.6105 23.4239 36.5796 27.0047 40.7601 27.3023C46.9739 26.0255 52.9216 22.3679 59.5724 22.8479C67.5629 23.5007 73.5392 26.6879 77.5297 32.4191C61.0926 42.4031 64.9881 64.2911 80.0855 70.4351C77.0641 78.4511 73.1876 86.3711 66.6888 92.2271L66.6983 92.1599ZM40.19 22.7519C39.4204 10.8479 48.9691 1.05595 59.9525 0.0959473C61.4632 13.8239 47.6009 24.0959 40.19 22.7519Z" fill="white"/></svg>
              </div>
  
              <!-- Client info -->
              <div class="flex flex-wrap justify-center text-center lg:text-left lg:block">
                <h3 class="text-white text-3xl font-semibold">Apple, inc.</h3>
  
                <div class="w-full lg:w-auto flex flex-wrap justify-center lg:justify-start gap-3 mt-6 mb-8">
                  <div class="badge">Laravel</div>
                  <div class="badge">Alpine.js</div>
                  <div class="badge">Tailwind CSS</div>
                  <div class="badge">Livewire</div>
                  <div class="badge">Full-stack Web Development</div>
                </div>
  
                <p class="text-secondary">Coming Soon!</p>
              </div>
  
            </div>
          </div>
  
        </section>
      </div>
  
  
      <!-- Hire me -->
      <div class="container mt-64 flex justify-between items-center mx-auto px-8 md:px-14 lg:px-24 w-full">
        <section class="w-full">
          <h2 id="hire" class="secondary-title">Hire me</h2>
          <p class="section-paragraph">Feel free to to contact me any time, through any method below.</p>
  
          <div class="w-full grid lg:grid-cols-2 gap-8 lg:gap-32 mt-24">
            <div class="space-y-12">
              <div>
                <label class="text-white block mb-6 text-xl font-bold">Name</label>
                <input type="text" class="w-full border border-input-border bg-input px-4 py-4">
              </div>
              <div>
                <label class="text-white block mb-6 text-xl font-bold">Email</label>
                <input type="email" class="w-full border border-input-border bg-input px-4 py-4">
              </div>
              <div>
                <label class="text-white block mb-6 text-xl font-bold">Message</label>
                <textarea type="email" class="w-full border border-input-border bg-input px-4 py-4 h-56 resize-none"></textarea>
              </div>
              <button class="px-6 py-2 bg-theme text-white font-bold">Send it!</button>
            </div>
  
            <div class="mt-12">
              <!-- Contact info -->
              <p class="text-secondary">1868-299-6232</p>
              <a href="mailto:antongraham-2022@gmail.com" class="text-secondary underline mt-3 block">antongraham-2022@gmail.com</a>
  
              <!-- Socials -->
              <div class="flex mt-20 space-x-6">
                <!-- github -->
                <a href="https://github.com/868-Anton" target='_blank'>
                  <svg class="w-8 h-8 lg:w-12 lg:h-12 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" fill="currentColor"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/AntonKFGraham" target='_blank'>
                  <svg class="w-8 h-8 lg:w-12 lg:h-12" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 0C9.40313 0 0 9.40313 0 21C0 32.5969 9.40313 42 21 42C32.5969 42 42 32.5969 42 21C42 9.40313 32.5969 0 21 0ZM31.0922 15.8297C31.1062 16.05 31.1062 16.2797 31.1062 16.5047C31.1062 23.3859 25.8656 31.3125 16.2891 31.3125C13.3359 31.3125 10.5984 30.4547 8.29219 28.9781C8.71406 29.025 9.11719 29.0437 9.54844 29.0437C11.9859 29.0437 14.2266 28.2188 16.0125 26.8219C13.725 26.775 11.8031 25.275 11.1469 23.2125C11.9484 23.3297 12.6703 23.3297 13.4953 23.1188C12.3175 22.8795 11.2588 22.2398 10.4991 21.3084C9.73949 20.377 9.32572 19.2113 9.32812 18.0094V17.9437C10.0172 18.3328 10.8281 18.5719 11.6766 18.6047C10.9633 18.1293 10.3784 17.4854 9.97365 16.7298C9.5689 15.9743 9.35683 15.1306 9.35625 14.2734C9.35625 13.3031 9.60938 12.4172 10.0641 11.6484C11.3714 13.2578 13.0028 14.5741 14.8522 15.5117C16.7016 16.4493 18.7275 16.9873 20.7984 17.0906C20.0625 13.5516 22.7063 10.6875 25.8844 10.6875C27.3844 10.6875 28.7344 11.3156 29.6859 12.3281C30.8625 12.1078 31.9875 11.6672 32.9906 11.0766C32.6016 12.2812 31.7859 13.2984 30.7031 13.9406C31.7531 13.8281 32.7656 13.5375 33.7031 13.1297C32.9953 14.1703 32.1094 15.0938 31.0922 15.8297Z" fill="white"/></svg>		
                </a>
                <!-- linkedin -->
                <a href="https://www.linkedin.com/in/anton-graham-77558a62/" target='_blank'>
                  <svg class="w-8 h-8 lg:w-12 lg:h-12" width="42" height="42" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" fill="white"/></svg>
                </a>
                
              </div>
            </div>
            
          </div>
  
        </section>
      </div>
  
  
  </html>