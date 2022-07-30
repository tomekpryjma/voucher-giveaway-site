<template>
    <div class="container mx-auto">
        <h1>{{ this.data.voucher.code }}</h1>
        <p v-if="voucherPostedByMe(this.data.voucher)">You posted this voucher! :)</p>
        <p v-else>This voucher was kindly posted by {{ this.data.voucher.posted_by.name }}</p>
    </div>
</template>
<script>
import MainLayoutVue from '../../Layouts/MainLayout.vue';

export default {
    layout: MainLayoutVue,
    props: ['data']
}
</script>