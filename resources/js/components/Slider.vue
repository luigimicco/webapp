<template>
  <div class="carousel slide" @mouseenter="stopAutoPlay" @mouseleave="startAutoPlay">
    <ol class="carousel-indicators">
      <li v-for="(item, index) in items" :key="index" :class="{active : isCurrent(index) }" @click="setCurrent(index)"></li>
    </ol>
    <div class="carousel-inner text-center">
      <div
        v-for="(item, index) in items"
        :key="index"
        class="carousel-item" :class="{active : currentSlide == index }"
      >
        <img class="d-block w-100" :src="item.img" />
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>{{ item.title }}</h1>
            <p class="d-none d-md-block">{{ item.caption }}</p>
            <a class="btn btn-lg btn-primary d-none d-md-inline" :href="item.button.url" role="button">{{item.button.caption}}</a>
          </div>
        </div>
      </div>
    </div>
    <span class="carousel-control-prev" role="button" @click="prevSlide">
      <i class="fa fa-solid fa-chevron-left fa-3x"></i>
      <span class="sr-only">Previous</span>
    </span>
    <span class="carousel-control-next" role="button" @click="nextSlide">
      <i class="fa fa-solid fa-chevron-right fa-3x"></i>
      <span class="sr-only">Next</span>
    </span>
  </div>
</template>

<script>
export default {
  name: "Slider",
  props: ["items"],
  data() {
		return {
      currentSlide : 0,
      timerId: null,
    };
  },  
  methods: {
    isCurrent(value) {
      return (this.currentSlide == value);
    },
    setCurrent(value) {
      this.currentSlide = value;
    },
    nextSlide() {
      this.currentSlide = this.currentSlide < (this.items.length - 1) ? (this.currentSlide + 1) : 0;
    },
    prevSlide() {
      this.currentSlide = this.currentSlide > 0 ? (this.currentSlide -1) : (this.items.length - 1);
    },
    startAutoPlay() {
      this.timerId = setInterval(this.nextSlide, 2000);
    },
    stopAutoPlay() {
      clearInterval(this.timerId);
    }
  },
  mounted() {
    this.startAutoPlay();
  },
};
</script>


<style lang="scss" scoped>
.carousel-control-prev i, .carousel-control-next i {
  color:black;

}
</style>