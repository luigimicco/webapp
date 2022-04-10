<template>
	<nav class="d-flex justify-content-center mt-4">
		<ul class="pagination">
			<li
				class="page-item page-link"
				role="button"
				@click="$emit('on-page-change', pagination.currentPage + -1)"
				v-if="pagination.currentPage > 1"
			>
				Prev
			</li>
			<li
				v-for="page in pagination.lastPage"
				:key="page"
				role="button"
				@click="$emit('on-page-change', page)"
				class="page-item"
				:class="{ active: page === pagination.currentPage }"
			>
				<span class="page-link">{{ page }}</span>
			</li>
			<li
				class="page-item page-link"
				role="button"
				@click="$emit('on-page-change', pagination.currentPage + 1)"
				v-if="pagination.lastPage > pagination.currentPage"
			>
				Next
			</li>
		</ul>
	</nav>
</template>

<script>
export default {
	name: "Pagination",
	props: ["pagination"],
	methods: {},
};
</script>

<style>
</style>