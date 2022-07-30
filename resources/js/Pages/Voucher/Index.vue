<template>
    <div class="container mx-auto">
        <h1 class="text-4xl text-center">Available codes</h1>

        <div class="container mx-auto max-w-3xl space-y-3">
            <Link
                v-for="(voucher, index) in this.data.vouchers"
                :key="index"
                :href="this.routes['voucher.view'] + '/' + voucher.id"
                class="block p-5 rounded w-full border-2"
            >
                <p v-if="voucherPostedByMe(voucher)">This one is yours!</p>

                {{ voucher.code }}
            </Link>
        </div>
    </div>
</template>
<script>
import MainLayoutVue from '../../Layouts/MainLayout.vue';

export default {
    layout: MainLayoutVue,

    props: ['data', 'routes'],
}
</script>