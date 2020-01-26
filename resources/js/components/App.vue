<template>
  <div class="bg-red-200 h-screen w-full p-4">
    <div class="w-full">
      <img class="h-12" :src="'/images/Logo.png'" alt="Logo" />
    </div>
    <p class="pt-8 text-purple-800 font-bold text-xl">Selamat datang di IHC Mobile</p>
    <p
      class="pt-2 text-grey-800"
    >Kami memberikan payalanan komprehensif dan terpadu dengan standar pelayanan terakreditasi.</p>
    <div class="pt-4">
      <div class="bg-gray-200 h-24 flex focus:text-teal-500 hover:text-teal-500 hover:bg-gray-100">
        <div class="align-middle items-center content-center flex">
          <div
            class="rounded-full h-16 w-16 mx-4 flex items-center justify-center border border-red-400"
          >
            <svg width="32" height="32">
              <title>book</title>
              <path
                d="M 28 4 v 26 h -21 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 19 v -24 h -20 c -2.2 0 -4 1.8 -4 4 v 24 c 0 2.2 1.8 4 4 4 h 24 v -28 h -2 Z"
              />
              <path
                d="M 7.002 26 v 0 c -0.001 0 -0.001 0 -0.002 0 c -0.552 0 -1 0.448 -1 1 s 0.448 1 1 1 c 0.001 0 0.001 0 0.002 0 v 0 h 18.997 v -2 h -18.997 Z"
              />
            </svg>
          </div>
        </div>
        <div class="float-left relative h-24 mx-4 w-full">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full">
              <p class="text-purple-800 font-bold">Booking Cepat</p>
              <p class>Pesan dokter langganan</p>
            </div>
            <svg width="16" height="16">
              <g id="surface1">
                <path
                  style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                  d="M 11.90625 7.769531 L 4.574219 0.101562 C 4.445312 -0.03125 4.234375 -0.0351562 4.101562 0.09375 C 3.96875 0.21875 3.964844 0.429688 4.09375 0.5625 L 11.207031 8 L 4.09375 15.4375 C 3.964844 15.570312 3.96875 15.78125 4.101562 15.90625 C 4.167969 15.96875 4.25 16 4.332031 16 C 4.421875 16 4.507812 15.964844 4.574219 15.898438 L 11.90625 8.230469 C 12.03125 8.101562 12.03125 7.898438 11.90625 7.769531 Z M 11.90625 7.769531 "
                />
              </g>
            </svg>
          </div>
        </div>
      </div>
      <div
        class="bg-gray-200 h-24 mt-4 flex focus:text-teal-500 hover:text-teal-500 hover:bg-gray-100"
      >
        <div class="align-middle items-center content-center flex">
          <div
            class="rounded-full h-16 w-16 mx-4 flex items-center justify-center border border-red-400"
          >
            <svg width="22" height="28">
              <title>hospital-o</title>
              <path
                d="M 6 20.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 6 16.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 10 16.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 6 12.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 18 20.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 14 16.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 10 12.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 18 16.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 14 12.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 18 12.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 14 26 h 6 v -18 h -4 v 0.5 c 0 0.828 -0.672 1.5 -1.5 1.5 h -7 c -0.828 0 -1.5 -0.672 -1.5 -1.5 v -0.5 h -4 v 18 h 6 v -3.5 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 5 c 0.266 0 0.5 0.234 0.5 0.5 v 3.5 Z M 14 7.5 v -5 c 0 -0.266 -0.234 -0.5 -0.5 -0.5 h -1 c -0.266 0 -0.5 0.234 -0.5 0.5 v 1.5 h -2 v -1.5 c 0 -0.266 -0.234 -0.5 -0.5 -0.5 h -1 c -0.266 0 -0.5 0.234 -0.5 0.5 v 5 c 0 0.266 0.234 0.5 0.5 0.5 h 1 c 0.266 0 0.5 -0.234 0.5 -0.5 v -1.5 h 2 v 1.5 c 0 0.266 0.234 0.5 0.5 0.5 h 1 c 0.266 0 0.5 -0.234 0.5 -0.5 Z M 22 7 v 20 c 0 0.547 -0.453 1 -1 1 h -20 c -0.547 0 -1 -0.453 -1 -1 v -20 c 0 -0.547 0.453 -1 1 -1 h 5 v -4.5 c 0 -0.828 0.672 -1.5 1.5 -1.5 h 7 c 0.828 0 1.5 0.672 1.5 1.5 v 4.5 h 5 c 0.547 0 1 0.453 1 1 Z"
              />
            </svg>
          </div>
        </div>
        <div class="float-left relative h-24 mx-4 w-full">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full">
              <p class="text-purple-800 font-bold">Cari Faskes</p>
              <p class>Rumah sakit dan klinik</p>
            </div>
            <svg width="16" height="16">
              <g id="surface1">
                <path
                  style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                  d="M 11.90625 7.769531 L 4.574219 0.101562 C 4.445312 -0.03125 4.234375 -0.0351562 4.101562 0.09375 C 3.96875 0.21875 3.964844 0.429688 4.09375 0.5625 L 11.207031 8 L 4.09375 15.4375 C 3.964844 15.570312 3.96875 15.78125 4.101562 15.90625 C 4.167969 15.96875 4.25 16 4.332031 16 C 4.421875 16 4.507812 15.964844 4.574219 15.898438 L 11.90625 8.230469 C 12.03125 8.101562 12.03125 7.898438 11.90625 7.769531 Z M 11.90625 7.769531 "
                />
              </g>
            </svg>
          </div>
        </div>
      </div>
      <router-link
        to="/appointments/create"
        class="bg-gray-200 h-24 mt-4 flex focus:text-teal-500 hover:text-teal-500 hover:bg-gray-100"
      >
        <div class="align-middle items-center content-center flex">
          <div
            class="rounded-full h-16 w-16 mx-4 flex items-center justify-center border border-red-400"
          >
            <svg width="22" height="28">
              <title>stethoscope</title>
              <path
                d="M 20 11 c 0 -0.547 -0.453 -1 -1 -1 s -1 0.453 -1 1 s 0.453 1 1 1 s 1 -0.453 1 -1 Z M 22 11 c 0 1.313 -0.828 2.406 -2 2.828 v 6.172 c 0 3.313 -3.141 6 -7 6 s -7 -2.688 -7 -6 v -2.063 c -3.391 -0.422 -6 -2.922 -6 -5.938 v -8 c 0 -0.547 0.453 -1 1 -1 c 0.094 0 0.172 0.016 0.25 0.031 c 0.344 -0.609 1 -1.031 1.75 -1.031 c 1.109 0 2 0.891 2 2 s -0.891 2 -2 2 c -0.359 0 -0.703 -0.109 -1 -0.281 v 6.281 c 0 2.203 2.25 4 5 4 s 5 -1.797 5 -4 v -6.281 c -0.297 0.172 -0.641 0.281 -1 0.281 c -1.109 0 -2 -0.891 -2 -2 s 0.891 -2 2 -2 c 0.75 0 1.406 0.422 1.75 1.031 c 0.078 -0.016 0.156 -0.031 0.25 -0.031 c 0.547 0 1 0.453 1 1 v 8 c 0 3.016 -2.609 5.516 -6 5.938 v 2.063 c 0 2.203 2.25 4 5 4 s 5 -1.797 5 -4 v -6.172 c -1.172 -0.422 -2 -1.516 -2 -2.828 c 0 -1.656 1.344 -3 3 -3 s 3 1.344 3 3 Z"
              />
            </svg>
          </div>
        </div>
        <div class="float-left relative h-24 mx-4 w-full">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full">
              <p class="text-purple-800 font-bold">Cari Dokter</p>
              <p class>Umum dan spesialis</p>
            </div>
            <svg width="16" height="16">
              <g id="surface1">
                <path
                  style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                  d="M 11.90625 7.769531 L 4.574219 0.101562 C 4.445312 -0.03125 4.234375 -0.0351562 4.101562 0.09375 C 3.96875 0.21875 3.964844 0.429688 4.09375 0.5625 L 11.207031 8 L 4.09375 15.4375 C 3.964844 15.570312 3.96875 15.78125 4.101562 15.90625 C 4.167969 15.96875 4.25 16 4.332031 16 C 4.421875 16 4.507812 15.964844 4.574219 15.898438 L 11.90625 8.230469 C 12.03125 8.101562 12.03125 7.898438 11.90625 7.769531 Z M 11.90625 7.769531 "
                />
              </g>
            </svg>
          </div>
        </div>
      </router-link>
    </div>
    <UserNavigationComponent></UserNavigationComponent>
    <router-view class="opacity-0"></router-view>
  </div>
</template>

<script>

import UserNavigationComponent from './UserNavigationComponent';


export default {
  name: "App",

  components: {
    UserNavigationComponent
  }
};
</script>
