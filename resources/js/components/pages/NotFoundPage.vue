<template>
	<div class="full-height-minus-navbar flex-center text-muted flex-column">
		<h3>404 | Not Found</h3>
		<button class="btn btn-info" @click="$router.back()">Indietro</button>
	</div>
</template>

<script>
export default {
	name: "NotFoundPage",
};
</script>

<style lang="scss" scoped>
</style>