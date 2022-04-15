<template>
	<div class="container-fluid pt-5">
    <main role="main">

      <Slider :items="sliderData" class="mb-5"/>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <Topstory :items="topstoryData" class="mb-5"/>

        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://picsum.photos/500/250?grayscale&random=4" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="https://picsum.photos/500/250?grayscale&random=5" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://picsum.photos/500/250?grayscale&random=6" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


 
    </main>


	</div>
</template>

<script>
import Slider from "../components/Slider.vue";
import Topstory from "../components/Topstory.vue";

export default {
	name: "Homepage",
	components: { Slider, Topstory},
  data() {
		return {
      sliderData : [
        {
          title: "Headline 1",
          caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam illum adipisci? Minima laudantium velit repellat quia, iure voluptatem nemo. Quod debitis eaque beatae repellendus veritatis placeat praesentium voluptate consequuntur!",
          img : "https://picsum.photos/seed/dolet/1519/512?grayscale",
          button : {
            url: "#",
            caption: "Sign up today",
          }  
        },
        {
          title: "Headline 2",
          caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam illum adipisci? Minima laudantium velit repellat quia, iure voluptatem nemo. Quod debitis eaque beatae repellendus veritatis placeat praesentium voluptate consequuntur!",
          img : "https://picsum.photos/seed/lorem/1519/512?grayscale",
          button : {
            url: "#",
            caption: "Try now",
          } 
        },
        {
          title: "Headline 3",
          caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam illum adipisci? Minima laudantium velit repellat quia, iure voluptatem nemo. Quod debitis eaque beatae repellendus veritatis placeat praesentium voluptate consequuntur!",
          img : "https://picsum.photos/seed/ipsum/1519/512?grayscale",
          button : {
            url: "#",
            caption: "Only today",
          } 
        },
      ],
      topstoryData : [
        {
          title: "Heading 1",
          caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam illum adipisci? Minima laudantium velit repellat quia, iure voluptatem nemo. Quod debitis eaque beatae repellendus veritatis placeat praesentium voluptate consequuntur!",
          img : "https://picsum.photos/140/140?grayscale&random=1",
          button : {
            url: "#",
            caption: "View details »",
          } 
        },
        {
          title: "Heading 2",
          caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam illum adipisci? Minima laudantium velit repellat quia, iure voluptatem nemo. Quod debitis eaque beatae repellendus veritatis placeat praesentium voluptate consequuntur!",
          img : "https://picsum.photos/140/140?grayscale&random=2",
          button : {
            url: "#",
            caption: "View details »",
          } 
        },
        {
          title: "Heading 3",
          caption: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere laboriosam illum adipisci? Minima laudantium velit repellat quia, iure voluptatem nemo. Quod debitis eaque beatae repellendus veritatis placeat praesentium voluptate consequuntur!",
          img : "https://picsum.photos/140/140?grayscale&random=3",
          button : {
            url: "#",
            caption: "View details »",
          } 
        },

      ]
    };
	},

};
</script>

<style lang="scss" scoped>
</style>
