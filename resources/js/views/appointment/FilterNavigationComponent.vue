<template>
    <section id="bottom-navigation" class="block fixed inset-x-0 bottom-0 z-5 bg-white shadow">
      <div id="tabs" class="flex justify-between">
        <router-link
          to="#"
          class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1"
        >
          <svg width="25" height="25" viewBox="0 0 42 42" class="inline-block mb-1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path
                d="M21.0847458,3.38674884 C17.8305085,7.08474576 17.8305085,10.7827427 21.0847458,14.4807396 C24.3389831,18.1787365 24.3389831,22.5701079 21.0847458,27.6548536 L21.0847458,42 L8.06779661,41.3066256 L6,38.5331279 L6,26.2681048 L6,17.2542373 L8.88135593,12.4006163 L21.0847458,2 L21.0847458,3.38674884 Z"
                fill="currentColor"
                fill-opacity="0.1"
              />
              <path
                d="M11,8 L33,8 L11,8 Z M39,17 L39,36 C39,39.3137085 36.3137085,42 33,42 L11,42 C7.6862915,42 5,39.3137085 5,36 L5,17 L7,17 L7,36 C7,38.209139 8.790861,40 11,40 L33,40 C35.209139,40 37,38.209139 37,36 L37,17 L39,17 Z"
                fill="currentColor"
              />
              <path
                d="M22,27 C25.3137085,27 28,29.6862915 28,33 L28,41 L16,41 L16,33 C16,29.6862915 18.6862915,27 22,27 Z"
                stroke="currentColor"
                stroke-width="2"
                fill="currentColor"
                fill-opacity="0.1"
              />
              <rect
                fill="currentColor"
                transform="translate(32.000000, 11.313708) scale(-1, 1) rotate(-45.000000) translate(-32.000000, -11.313708) "
                x="17"
                y="10.3137085"
                width="30"
                height="2"
                rx="1"
              />
              <rect
                fill="currentColor"
                transform="translate(12.000000, 11.313708) rotate(-45.000000) translate(-12.000000, -11.313708) "
                x="-3"
                y="10.3137085"
                width="30"
                height="2"
                rx="1"
              />
            </g>
          </svg>
          <span class="tab tab-home block text-xs">Filter</span>
        </router-link>
        <router-link
          to="#"
          class="w-full focus:text-teal-500 hover:text-teal-500 justify-center inline-block text-center pt-2 pb-1"
        >
          <svg width="25" height="25" class="inline-block mb-1">
            <g id="surface1">
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 22.070312 1.953125 L 20.898438 1.953125 L 20.898438 0 L 18.945312 0 L 18.945312 1.953125 L 6.054688 1.953125 L 6.054688 0 L 4.101562 0 L 4.101562 1.953125 L 2.929688 1.953125 C 1.3125 1.953125 0 3.265625 0 4.882812 L 0 22.070312 C 0 23.6875 1.3125 25 2.929688 25 L 22.070312 25 C 23.6875 25 25 23.6875 25 22.070312 L 25 4.882812 C 25 3.265625 23.6875 1.953125 22.070312 1.953125 Z M 23.046875 22.070312 C 23.046875 22.609375 22.609375 23.046875 22.070312 23.046875 L 2.929688 23.046875 C 2.390625 23.046875 1.953125 22.609375 1.953125 22.070312 L 1.953125 9.179688 L 23.046875 9.179688 Z M 23.046875 7.226562 L 1.953125 7.226562 L 1.953125 4.882812 C 1.953125 4.34375 2.390625 3.90625 2.929688 3.90625 L 4.101562 3.90625 L 4.101562 5.859375 L 6.054688 5.859375 L 6.054688 3.90625 L 18.945312 3.90625 L 18.945312 5.859375 L 20.898438 5.859375 L 20.898438 3.90625 L 22.070312 3.90625 C 22.609375 3.90625 23.046875 4.34375 23.046875 4.882812 Z M 23.046875 7.226562 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 3.710938 11.230469 L 5.664062 11.230469 L 5.664062 13.183594 L 3.710938 13.183594 Z M 3.710938 11.230469 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 7.617188 11.230469 L 9.570312 11.230469 L 9.570312 13.183594 L 7.617188 13.183594 Z M 7.617188 11.230469 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 11.523438 11.230469 L 13.476562 11.230469 L 13.476562 13.183594 L 11.523438 13.183594 Z M 11.523438 11.230469 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 15.429688 11.230469 L 17.382812 11.230469 L 17.382812 13.183594 L 15.429688 13.183594 Z M 15.429688 11.230469 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 19.335938 11.230469 L 21.289062 11.230469 L 21.289062 13.183594 L 19.335938 13.183594 Z M 19.335938 11.230469 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 3.710938 15.136719 L 5.664062 15.136719 L 5.664062 17.089844 L 3.710938 17.089844 Z M 3.710938 15.136719 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 7.617188 15.136719 L 9.570312 15.136719 L 9.570312 17.089844 L 7.617188 17.089844 Z M 7.617188 15.136719 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 11.523438 15.136719 L 13.476562 15.136719 L 13.476562 17.089844 L 11.523438 17.089844 Z M 11.523438 15.136719 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 15.429688 15.136719 L 17.382812 15.136719 L 17.382812 17.089844 L 15.429688 17.089844 Z M 15.429688 15.136719 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 3.710938 19.042969 L 5.664062 19.042969 L 5.664062 20.996094 L 3.710938 20.996094 Z M 3.710938 19.042969 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 7.617188 19.042969 L 9.570312 19.042969 L 9.570312 20.996094 L 7.617188 20.996094 Z M 7.617188 19.042969 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 11.523438 19.042969 L 13.476562 19.042969 L 13.476562 20.996094 L 11.523438 20.996094 Z M 11.523438 19.042969 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 15.429688 19.042969 L 17.382812 19.042969 L 17.382812 20.996094 L 15.429688 20.996094 Z M 15.429688 19.042969 "
              />
              <path
                style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                d="M 19.335938 15.136719 L 21.289062 15.136719 L 21.289062 17.089844 L 19.335938 17.089844 Z M 19.335938 15.136719 "
              />
            </g>
          </svg>
          <span class="tab tab-kategori block text-xs">Urutkan</span>
        </router-link>
      </div>
    </section>
</template>

<script>
    export default {
      name: "UserNavigation"
    }
</script>
