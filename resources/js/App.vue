<template>
	<div class="container-fluid px-0">
		<Topbar />
		<main class="col-12 my-4 content">
			<router-view></router-view>
		</main>
		<!-- FOOTER -->
    <Footer />
	</div>
</template>

<script>
import Topbar from "./components/Topbar.vue";
import Footer from "./components/Footer.vue";

export default {
	name: "App",
	components: { Topbar, Footer },
	data() {
		return {};
	},
    mounted() {
        console.log('Component mounted.')
    }
};

</script>
