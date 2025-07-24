<script setup>
import { ref, onMounted } from "vue";

const props = defineProps({
	home: {
		type: Boolean,
		default: false,
	},
	logo: {
		type: String,
		required: true,
	},
});
const navbar = ref(null);
const drawerOpen = ref(false);
const navbarHeight = ref(0);

onMounted(() => {
	navbarHeight.value = navbar.value.offsetHeight;
});
</script>

<template>
	<div
		ref="navbar"
		class="px-4 py-2 border-b-4 fixed overflow-x-hidden top-0 left-0 right-0 z-50 border-jnn-logo-zw shadow-[0_10px_16px_0] shadow-[#0000004d]"
		:class="home ? 'bg-white' : 'bg-jnn-hoody'">
		<!-- Top bar -->
		<div class="flex justify-between items-center">
			<a href="/">
				<span v-if="home" class="flex items-end gap-4">
					<span
						class="text-jnn-logo-zw font-bubblegum text-3xl font-bold"
						>Jong Nederland</span
					>
					<span class="font-hand text-lg font-bold text-jnn-logo-bl"
						>Neeritter</span
					>
				</span>
				<img
					v-else
					:src="logo"
					alt="Jong Nederland Logo"
					class="h-13 hover:scale-105 transition" />
			</a>
			<!-- Hamburger icon (mobile only) -->
			<button class="lg:hidden" @click="drawerOpen = !drawerOpen">
				<i-menuclose
					v-if="drawerOpen"
					class="text-jnn-logo-rz w-8 h-8" />
				<i-menu v-else class="text-jnn-logo-bl w-8 h-8" />
			</button>

			<!-- Horizontal links (desktop only) -->
			<ul class="hidden lg:flex gap-2">
				<li>
					<Navlink icon="i-krant" color="jnn-blok-gr" href="/"
						>nieuws</Navlink
					>
				</li>
				<li>
					<Navlink icon="i-agenda" color="jnn-blok-or" href="/"
						>groepsavond</Navlink
					>
				</li>
				<li>
					<Navlink icon="i-contactboek" color="jnn-blok-rz" href="/"
						>contact</Navlink
					>
				</li>
				<li>
					<Navlink icon="i-sleutel" color="jnn-blok-ge" href="/"
						>voor leiding</Navlink
					>
				</li>
			</ul>
		</div>

		<!-- Mobile drawer -->

		<transition
			enter-active-class="transition-all duration-500 ease-in-out"
			leave-active-class="transition-all duration-300 ease-in-out"
			enter-from-class="max-h-0 opacity-0"
			enter-to-class="max-h-[500px] opacity-100"
			leave-from-class="max-h-[500px] opacity-100"
			leave-to-class="max-h-0 opacity-0">
			<div v-show="drawerOpen" class="overflow-hidden -mr-6 lg:hidden">
				<ul class="mt-2 flex flex-col gap-2 items-end">
					<li class="w-full pl-16">
						<Navlink icon="i-krant" color="jnn-blok-gr" href="/"
							>nieuws</Navlink
						>
					</li>
					<li class="w-full pl-12">
						<Navlink icon="i-agenda" color="jnn-blok-or" href="/"
							>groepsavond</Navlink
						>
					</li>
					<li class="w-full pl-8">
						<Navlink
							icon="i-contactboek"
							color="jnn-blok-rz"
							href="/"
							>contact</Navlink
						>
					</li>
					<li class="w-full pl-4">
						<Navlink icon="i-sleutel" color="jnn-blok-ge" href="/"
							>voor leiding</Navlink
						>
					</li>
				</ul>
			</div>
		</transition>
	</div>
	<transition
		enter-active-class="transition-all duration-300 ease-out"
		leave-active-class="transition-all duration-200 ease-in"
		enter-from-class="opacity-0"
		enter-to-class="opacity-100"
		leave-from-class="opacity-100"
		leave-to-class="opacity-0">
		<div
			v-if="drawerOpen"
			@click="drawerOpen = false"
			class="fixed inset-0 bg-black/50 backdrop-blur-xs"></div>
	</transition>
	<div :style="`height:${navbarHeight}px`"></div>
</template>
