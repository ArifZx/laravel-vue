<template>
  <div class="flex items-center justify-center flex cursor-pointer" @click="$router.go(-1)">
    <svg
      class="object-center"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      width="24"
      height="24"
      viewBox="0 0 16 16"
      version="1.1"
    >
      <g id="surface1">
        <path
          style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
          d="M 11.75 5.75 L 0.855469 5.75 L 4.175781 2.425781 C 4.273438 2.328125 4.273438 2.171875 4.175781 2.074219 C 4.078125 1.976562 3.921875 1.976562 3.824219 2.074219 L 0.0742188 5.824219 C -0.0234375 5.921875 -0.0234375 6.078125 0.0742188 6.175781 L 3.824219 9.925781 C 3.871094 9.976562 3.9375 10 4 10 C 4.0625 10 4.128906 9.976562 4.175781 9.925781 C 4.273438 9.828125 4.273438 9.671875 4.175781 9.574219 L 0.855469 6.25 L 11.75 6.25 C 11.886719 6.25 12 6.136719 12 6 C 12 5.863281 11.886719 5.75 11.75 5.75 Z M 11.75 5.75 "
        />
      </g>
    </svg>
  </div>
</template>

<script>
export default {
  name: "Back"
};
</script>
