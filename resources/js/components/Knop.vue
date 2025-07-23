<script setup>

const props = defineProps({
  variant: {
    type: String,
    default: 'primary',
  }
})

const emit = defineEmits(['click'])

function onClick(e) {
  emit('click', e)
}
</script>

<template>
	<button
        @click="onClick"
        class="group py-1 px-4 rounded-sm shadow-[4px_4px_0_0] shadow-jnn-hoody cursor-pointer border-jnn-logo-zw border-2 hover:rotate-1 hover:brightness-125 active:translate-[2px] active:shadow-[2px_2px_0_0] active:rotate-0"
        :class="variant === 'primary' ? 'bg-jnn-logo-bl': 'bg-white'"
		>
		<span
			class="inline-block font-hand font-bold text-2xl text-center drop-shadow-[1px_2px_0px_black]"
            :class="variant === 'primary' ? 'text-white': 'text-jnn-logo-bl'">
			<slot>Klik op mij</slot>
		</span>
	</button>
</template>

