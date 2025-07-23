<script setup>

const props = defineProps({
  icon: {
    type: String,
    required: true,
  },
  color: {
    type: String,
    required: true,
  },
  href: {
    type: String,
    default: '/',
  }
})

</script>

<template>
	<a
        :href="href"
        class="group inline-block items-stretch h-12 p-1 pr-2 border-transparent border-2 rounded-sm shadow-[4px_4px_0_0] shadow-[#0008] cursor-pointer rotate-2 hover:rotate-4 hover:bg-white hover:border-jnn-logo-zw active:translate-0.5 active:shadow-[2px_2px_0_0] active:rotate-2 active:brightness-75 transition-all"
		:class="`bg-${color}`"
        >
        <component :is="icon" class="h-[90%] inline-block text-white" :class="`group-hover:text-${color}`"/>
		<span
			class="ml-2 inline-block font-hand font-bold text-2xl group-hover:underline transition"
            :class="`group-hover:text-${color}`">
			<slot>Klik op mij</slot>
		</span>
	</a>
</template>
