<div
	x-data="noticesHandler()"
    x-init="$nextTick(() => {$dispatch('notice', {type: 'success', text: '<?php echo e(get_session('message')); ?><?php echo e(unflash_message('message')); ?>'})})"
	class="fixed inset-0 flex flex-row-reverse items-end justify-start h-screen w-screen"
	@notice.window="add($event.detail)"
	style="pointer-events:none">
	<template x-for="notice of notices" :key="notice.id">
		<div
			x-show="visible.includes(notice)"
			x-transition:enter="transition ease-in duration-200"
			x-transition:enter-start="transform opacity-0 translate-y-2"
			x-transition:enter-end="transform opacity-100"
			x-transition:leave="transition ease-out duration-500"
			x-transition:leave-start="transform translate-x-0 opacity-100"
			x-transition:leave-end="transform translate-x-full opacity-0"
			@click="remove(notice.id)"
			class="rounded mb-4 mr-6 w-56  h-16 flex items-center justify-center text-white shadow-lg font-bold text-lg cursor-pointer"
			:class="{
				'bg-green-500': notice.type === 'success',
			 }"
			style="pointer-events:all"
			x-text="notice.text">
		</div>
	</template>
</div>


<script>
function noticesHandler() {
	return {
		notices: [],
		visible: [],
		add(notice) {
			notice.id = Date.now()
			this.notices.push(notice)
			this.fire(notice.id)
		},
		fire(id) {
			this.visible.push(this.notices.find(notice => notice.id == id))
			const timeShown = 2000 * this.visible.length
			setTimeout(() => {
				this.remove(id)
			}, timeShown)
		},
		remove(id) {
			const notice = this.visible.find(notice => notice.id == id)
			const index = this.visible.indexOf(notice)
			this.visible.splice(index, 1)
		},
	}
}
</script><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/components/success.blade.php ENDPATH**/ ?>