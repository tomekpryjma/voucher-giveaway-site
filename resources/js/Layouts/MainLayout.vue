<template>
    <header class="bg-slate-200 p-4">
        <nav class="flex">
            <ul class="flex space-x-4">
                <li>
                    <Link href="/voucher">Vouchers</Link>
                </li>
                <li>

                    <Link href="/dashboard">Dashboard</Link>
                </li>
            </ul>
            <ul class="relative group">
                <li id="profile-item">
                    <Link href="/profile">Profile</Link>
                    <ul class="w-64 rounded bg-slate-100 shadow-md absolute transition-all opacity-0 group-hover:opacity-100"
                        id="profile-dropdown">
                        <li>
                            <Link class="block p-3 hover:bg-blue-500 hover:text-white rounded" href="/voucher/create">
                            Post a
                            voucher
                            </Link>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <slot />
    </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Toastify from 'toastify-js';

export default {
    components: {
        Link
    },

    mounted() {
        let flashMessage = this.$page.props.flash.message;

        if (flashMessage) {
            Toastify({
                text: flashMessage
            }).showToast()
        }
    },
}
</script>