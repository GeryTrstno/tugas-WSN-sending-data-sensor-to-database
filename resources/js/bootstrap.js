import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

// Inisialisasi Pusher dan Laravel Echo
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY, // Pastikan MIX_PUSHER_APP_KEY di .env sudah benar
    cluster: process.env.MIX_PUSHER_APP_CLUSTER, // Pastikan MIX_PUSHER_APP_CLUSTER di .env sudah benar
    forceTLS: true
});
