<template>
  <div class="fixed top-0 bottom-0 left-0 right-0 z-10 py-2 bg-gray-200 opacity-100">
    <div class="border-b bg-white border-gray-400 px-1">
      <div class="flex justify-start align-middle">
        <BackComponent class="w-12 h-12"></BackComponent>
        <div>
          <p class="font-light text-xs">Dokter di sekitar</p>
          <div class="flex items-center justify-center flex align-middle font-bold text-purple-800">
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
      <div v-if="selectedSpecialist" class="flex flex-wrap text-gray-800 px-2 text-sm">
        <div class="flex-none rounded-full py-2 px-4 border-2 m-2 hover:bg-blue-200 cursor-pointer" id="time-filter-all" v-bind:class="filterTime == 'time-filter-all' ? 'bg-red-200' : ''" v-on:click="selectFilterTime" >Semua</div>
        <div class="flex-none rounded-full py-2 px-4 border-2 m-2 hover:bg-blue-200 cursor-pointer" id="time-filter-today" v-bind:class="filterTime == 'time-filter-today' ? 'bg-red-200' : ''" v-on:click="selectFilterTime">Praktik hari ini</div>
        <div class="flex-none rounded-full py-2 px-4 border-2 m-2 hover:bg-blue-200 cursor-pointer" id="time-filter-online" v-bind:class="filterTime == 'time-filter-online' ? 'bg-red-200' : ''" v-on:click="selectFilterTime">Booking online</div>
      </div>
    </div>

    <div v-if="loading" class="flex justify-center content-center w-full h-full items-center">
      <div class="items-center font-mono">Loading...</div>
    </div>
    <div v-else-if="selectedSpecialist == null" class="pt-4">
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
    </div>
  </div>
</template>

<script>
import BackComponent from "../components/BackComponent";
export default {
  name: "AppointmentCreate",
  components: {
    BackComponent
  },

  data: function() {
    return {
      loading: true,
      specialists: null,
      selectedSpecialist: null,
      schedules: null,
      filterTime: 'time-filter-all'
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
      var specialist = this.specialists !== null
        ? this.specialists.filter(v => v.id == targetId)[0]
        : null;
      this.selectedSpecialist = specialist;

      this.fetchScedule();
    },
    selectFilterTime: function(event) {
      this.filterTime = event.target.id;
    },
    fetchScedule: function() {
      this.loading = true;
      axios.get('/api/schedules')
      .then(results => {
        this.loading = false;
        console.log(results.data);
        if(results.status === 200) {
          this.schedules = results.data.data;
        }
      })
      .catch(error => {
        this.loading = false;
        window.alert(error);
      });
    },
    fetchDoctor: function(name) {
      
    }
  },

  // updated: function () {
  //   console.log('updated');
  // },

  mounted: function() {
    console.log('selected', this.selectedSpecialist);
    // axios
    //   .get("/api/specialists")
    //   .then(response => {
    //     this.specialists = response.data;
    //     this.loading = false;
    //   })
    //   .catch(error => {
    //     this.loading = false;

    //     window.alert(error);
    //   });
    this.fetchSpecialits();
  }
};
</script>

<style scoped>
</style>