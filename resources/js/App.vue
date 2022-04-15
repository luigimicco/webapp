<template>
	<div class="container-fluid px-0">
		<Topbar />
		<main class="col-12 my-4 content">
			<router-view></router-view>
		</main>
	</div>
</template>

<script>
import Topbar from "./components/Topbar.vue";

export default {
	name: "App",
	components: { Topbar },
	data() {
		return {};
	},
    mounted() {
        console.log('Component mounted.')
    }
};

</script>
