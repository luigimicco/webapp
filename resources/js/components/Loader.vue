<template>
	<div id="loader" class="d-flex justify-content-center align-items-center">
		<div class="spinner-grow text-primary" role="status"></div>
		<div class="spinner-grow text-primary mx-2" role="status"></div>
		<div class="spinner-grow text-primary" role="status"></div>
	</div>
</template>

<script>
export default {
	name: "Loader",
};
</script>

<style lang="scss" scoped>
#loader {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: rgba(0, 0, 0, 0.5);
	z-index: 1;

	.spinner-grow {
		width: 1.2rem;
		height: 1.2rem;
	}
}
</style>