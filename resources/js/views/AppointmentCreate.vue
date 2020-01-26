<template>
  <div class="fixed top-0 bottom-0 left-0 right-0 z-10 py-2 bg-gray-200 opacity-100">
    <div class="h-full">
      <div class="border-b bg-white border-gray-400 px-1">
        <div class="flex justify-start align-middle">
          <BackComponent class="w-12 h-12"></BackComponent>
          <div>
            <p class="font-light text-xs">Dokter di sekitar</p>
            <div
              class="flex items-center justify-center flex align-middle font-bold text-purple-800"
            >
              Jakarta Selatan
              <svg width="12" height="12" class="pl-2 w-12 f-12">
                <g id="surface1">
                  <path
                    style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                    d="M 15.898438 3.683594 C 15.761719 3.554688 15.542969 3.554688 15.40625 3.683594 L 8 10.625 L 0.59375 3.683594 C 0.457031 3.554688 0.238281 3.554688 0.101562 3.683594 C -0.0351562 3.808594 -0.0351562 4.015625 0.101562 4.144531 L 7.753906 11.316406 C 7.824219 11.382812 7.910156 11.414062 8 11.414062 C 8.089844 11.414062 8.179688 11.382812 8.246094 11.316406 L 15.898438 4.144531 C 16.035156 4.015625 16.035156 3.808594 15.898438 3.683594 Z M 15.898438 3.683594 "
                  />
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div v-if="selectedSpecialist == null" class="flex justify-start align-middle">
          <div class="h-12 w-12 flex items-center justify-center">
            <svg width="16" height="16">
              <g id="surface1">
                <path
                  style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                  d="M 16 15.292969 L 10.578125 9.871094 C 11.464844 8.824219 12 7.476562 12 6 C 12 2.691406 9.308594 0 6 0 C 2.691406 0 0 2.691406 0 6 C 0 9.308594 2.691406 12 6 12 C 7.476562 12 8.824219 11.464844 9.871094 10.578125 L 15.292969 16 C 15.292969 16 16 15.292969 16 15.292969 Z M 6 11 C 3.242188 11 1 8.757812 1 6 C 1 3.242188 3.242188 1 6 1 C 8.757812 1 11 3.242188 11 6 C 11 8.757812 8.757812 11 6 11 Z M 6 11 "
                />
              </g>
            </svg>
          </div>
          <input
            class="w-full"
            type="text"
            name="searchDocter"
            id="searchDocter"
            placeholder="Cari nama dokter..."
          />
        </div>
        <div v-if="selectedSpecialist" class="flex flex-wrap text-gray-800 px-2 text-sm h-full overflow-y-auto">
          <div
            class="flex-none rounded-full py-2 px-4 border-2 m-2 hover:bg-blue-200 cursor-pointer"
            id="filter-none"
            v-bind:class="filterMain == 'filter-none' ? 'bg-red-200' : ''"
            v-on:click="selectfilterMain"
          >Semua</div>
          <div
            class="flex-none rounded-full py-2 px-4 border-2 m-2 hover:bg-blue-200 cursor-pointer"
            id="filter-today"
            v-bind:class="filterMain == 'filter-today' ? 'bg-red-200' : ''"
            v-on:click="selectfilterMain"
          >Praktik hari ini</div>
          <div
            class="flex-none rounded-full py-2 px-4 border-2 m-2 hover:bg-blue-200 cursor-pointer"
            id="filter-online"
            v-bind:class="filterMain == 'filter-online' ? 'bg-red-200' : ''"
            v-on:click="selectfilterMain"
          >Booking online</div>
        </div>
      </div>

      <div v-if="loading" class="flex justify-center content-center w-full h-full items-center">
        <div class="items-center font-mono">Loading...</div>
      </div>
      <div v-else-if="selectedSpecialist == null" class="pt-4 h-full overflow-y-auto">
        <p class="text-gray-800 font-light text-xs p-2">Spesialisasi Dokter</p>
        <div
          v-for="specialist in specialists"
          v-bind:key="specialist.id"
          v-bind:id="specialist.id"
          v-on:click="selectSpecialist"
          class="py-2 px-2 my-2 items-center border-b bg-white border-gray-400 flex justify-between hover:bg-blue-100 cursor-pointer"
        >
          <div>
            <p class="text-xl font-bold text-purple-800">{{specialist.name}}</p>
            <p class="text-sm font-light text-gray-800">{{specialist.subname}}</p>
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
        <div class="bg-gray-200 text-gray-200 h-32">Spacer</div>
      </div>
      <div v-else-if="schedules != null" class="h-full overflow-y-auto  pb-20">
        <div
          v-for="schedule in schedules"
          v-bind:key="schedule.id"
          v-bind:id="schedule.id"
          class="mt-2 border-b bg-white border-gray-400 p-2"
        >
          <div class="align-middle items-center content-center flex flex justify-between">
            <div>
              <p class="text-purple-800 font-bold">{{schedule.doctor.name}}</p>
              <div class="flex align-middle pt-2">
                <div class="h-6 w-6 flex items-center justify-center mx-2">
                  <svg width="22" height="28">
                    <title>hospital-o</title>
                    <path
                      d="M 6 20.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 6 16.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 10 16.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 6 12.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 18 20.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 14 16.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 10 12.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 18 16.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 14 12.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 18 12.5 v 1 c 0 0.266 -0.234 0.5 -0.5 0.5 h -1 c -0.266 0 -0.5 -0.234 -0.5 -0.5 v -1 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 1 c 0.266 0 0.5 0.234 0.5 0.5 Z M 14 26 h 6 v -18 h -4 v 0.5 c 0 0.828 -0.672 1.5 -1.5 1.5 h -7 c -0.828 0 -1.5 -0.672 -1.5 -1.5 v -0.5 h -4 v 18 h 6 v -3.5 c 0 -0.266 0.234 -0.5 0.5 -0.5 h 5 c 0.266 0 0.5 0.234 0.5 0.5 v 3.5 Z M 14 7.5 v -5 c 0 -0.266 -0.234 -0.5 -0.5 -0.5 h -1 c -0.266 0 -0.5 0.234 -0.5 0.5 v 1.5 h -2 v -1.5 c 0 -0.266 -0.234 -0.5 -0.5 -0.5 h -1 c -0.266 0 -0.5 0.234 -0.5 0.5 v 5 c 0 0.266 0.234 0.5 0.5 0.5 h 1 c 0.266 0 0.5 -0.234 0.5 -0.5 v -1.5 h 2 v 1.5 c 0 0.266 0.234 0.5 0.5 0.5 h 1 c 0.266 0 0.5 -0.234 0.5 -0.5 Z M 22 7 v 20 c 0 0.547 -0.453 1 -1 1 h -20 c -0.547 0 -1 -0.453 -1 -1 v -20 c 0 -0.547 0.453 -1 1 -1 h 5 v -4.5 c 0 -0.828 0.672 -1.5 1.5 -1.5 h 7 c 0.828 0 1.5 0.672 1.5 1.5 v 4.5 h 5 c 0.547 0 1 0.453 1 1 Z"
                    />
                  </svg>
                </div>
                <p class="font-semibold">{{schedule.place.name}}</p>
              </div>
              <div class="flex align-middle pt-2 font-semibold">
                <div class="h-6 w-6 flex items-center justify-center mx-2">
                  <svg width="24" height="24">
                    <g xmlns="http://www.w3.org/2000/svg" id="surface1">
                      <path
                        style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                        d="M 12.019531 0 C 5.390625 0 0 5.390625 0 12.019531 C 0 18.648438 5.390625 24.039062 12.019531 24.039062 C 18.648438 24.039062 24.039062 18.648438 24.039062 12.019531 C 24.039062 5.390625 18.648438 0 12.019531 0 Z M 12.019531 21.480469 C 6.800781 21.480469 2.558594 17.238281 2.558594 12.019531 C 2.558594 6.800781 6.800781 2.558594 12.019531 2.558594 C 17.238281 2.558594 21.480469 6.800781 21.480469 12.019531 C 21.480469 17.238281 17.238281 21.480469 12.019531 21.480469 Z M 12.019531 21.480469 "
                      />
                      <path
                        style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                        d="M 18.285156 11.648438 L 12.882812 11.648438 L 12.882812 5.152344 C 12.882812 4.605469 12.4375 4.164062 11.894531 4.164062 C 11.347656 4.164062 10.902344 4.605469 10.902344 5.152344 L 10.902344 12.636719 C 10.902344 13.183594 11.347656 13.628906 11.894531 13.628906 L 18.285156 13.628906 C 18.832031 13.628906 19.273438 13.183594 19.273438 12.636719 C 19.273438 12.089844 18.832031 11.648438 18.285156 11.648438 Z M 18.285156 11.648438 "
                      />
                    </g>
                  </svg>
                </div>
                <p
                  v-if="schedule.isToday"
                  class="text-green-800"
                >Praktik hari ini ({{schedule.start}} - {{schedule.end}})</p>
                <p
                  v-else
                  class="text-gray-600"
                >Praktik {{schedule.day}} ({{schedule.start}} - {{schedule.end}})</p>
              </div>
            </div>
            <div
              class="rounded-full h-16 w-16 mx-4 flex items-center justify-center border border-red-400 bg-red-400"
            ></div>
          </div>
          <div v-if="schedule.canOnlineBook" class="flex w-full text-pink-600 text-center h-8 align-middle justify-center items-center bg-gray-200 py-2 mt-2 cursor-pointer hover:bg-blue-200 focus:bg-red-400">Bisa buat janji online</div>
        </div>
        <div class="bg-gray-200 text-gray-200 h-32">Spacer</div>
      </div>
      <FilterNavigation v-if="selectedSpecialist"></FilterNavigation>
    </div>
  </div>
</template>

<script>
import BackComponent from "../components/BackComponent";
import FilterNavigation from "./appointment/FilterNavigationComponent";
export default {
  name: "AppointmentCreate",
  components: {
    BackComponent,
    FilterNavigation
  },

  data: function() {
    return {
      loading: true,
      specialists: null,
      selectedSpecialist: null,
      schedules: null,
      filterMain: "filter-none"
    };
  },

  methods: {
    fetchSpecialits: function() {
      this.loading = true;
      axios
        .get("/api/specialists")
        .then(response => {
          this.specialists = response.data;
          this.loading = false;
        })
        .catch(error => {
          this.loading = false;

          window.alert(error);
        });
    },
    selectSpecialist: function(event) {
      var targetId = event.target.id;
      var specialist =
        this.specialists !== null
          ? this.specialists.filter(v => v.id == targetId)[0]
          : null;
      this.selectedSpecialist = specialist.id;
      console.log(this.selectedSpecialist)

      this.fetchScedule();
    },
    selectfilterMain: function(event) {
      this.filterMain = event.target.id;

      this.fetchScedule();
    },
    fetchScedule: function() {
      this.loading = true;
      axios
        .get("/api/schedules?filter=" + this.filterMain+"&specialistId="+this.selectedSpecialist)
        .then(results => {
          this.loading = false;
          console.log(results.data.data);
          if (results.status === 200) {
            this.schedules = results.data.data;
          }
        })
        .catch(error => {
          this.loading = false;
          window.alert(error);
        });
    },
    fetchDoctor: function(name) {}
  },

  mounted: function() {
    console.log("selected", this.selectedSpecialist);
    this.fetchSpecialits();
  }
};
</script>

<style scoped>
</style>