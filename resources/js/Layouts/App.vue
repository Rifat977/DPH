<template>
    <div>
      <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="assets/vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<Topbar></Topbar>

	<Sidebar></Sidebar>

	<div class="mobile-menu-overlay"></div>

	<slot />

    </div>
</template>

<script>
import Sidebar from '@/Layouts/Sidebar.vue'
import Topbar from '@/Layouts/Topbar.vue'

export default{
  components: {
	  Sidebar,
	  Topbar,
  }
}
</script>
