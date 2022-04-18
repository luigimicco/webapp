<template>

	<div class="loader-overlay">
		<div class="loader-wrapper">
			<div class="loader">
				<div class="loader loader-inner">

				</div>
			</div>
		</div>
	</div>

</template>

<script>
export default {
	name: "Loader",
};
</script>

<style lang="scss" scoped>

.loader-wrapper {
	width: 80px;
	height: 80px;


}

.loader {
	box-sizing: border-box;
	width: 100%;
	height: 100%;
	border: 8px solid yellow;
	border-top-color: #4bc3eb;
	border-bottom-color: #f13a3f;
	border-radius: 50%;
	animation: rotate 5s linear infinite;
}

.loader-inner {
	border-top-color: #36f372;
	border-bottom-color: #fff;
	animation-duration: 2.5s;

}

@keyframes rotate {
	0% {
		transform: scale(1) rotate(360deg);
	}	

	50% {
		transform: scale(.8) rotate(-360deg);
	}	

	100% {
		transform: scale(1) rotate(360deg);
	}	
}

.loader-overlay {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: rgba(0, 0, 0, 0.5);
	display: flex;
	justify-content: center;
	align-items: center;
	z-index: 1;

	.spinner-border {
		width: 100px;
		height: 100px;
	}
}
</style>
