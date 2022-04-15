<template>
  <div class="row text-center">
    <div class="col-lg-4" v-for="(item,index) in items" :key="index">
      <img class="rounded-circle" :src="item.img" alt="Generic placeholder image" width="140" height="140">
      <h2>{{ item.title }}</h2>
      <p>{{ item.caption }}</p>
      <p><a class="btn btn-secondary" :href="item.button.url" role="button">{{item.button.caption}}</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

</template>

<script>
export default {
  name: "Topstory",
  props: ["items"],
};
</script>


<style lang="scss" scoped>
</style>