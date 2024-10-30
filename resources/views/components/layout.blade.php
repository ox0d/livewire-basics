<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Permission</title>

    @vite('resources/js/app.js')
</head>

<body>
    {{ $slot }}

    <!-- Notification Container -->
    @if (session()->has('success'))
        <div id="notification"
            class="fixed bottom-4 left-4 px-4 py-3 bg-green-600 text-white rounded-lg shadow-lg transform translate-y-full opacity-0 transition-all duration-500">
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <p>{{ session('success') }}</p>
            </div>
        </div>

        <script>
            // Show notification
            document.addEventListener('DOMContentLoaded', function () {
                const notification = document.getElementById('notification');

                // Show the notification
                setTimeout(() => {
                    notification.classList.remove('translate-y-full', 'opacity-0');
                }, 100);

                // Hide the notification after 3 seconds
                setTimeout(() => {
                    notification.classList.add('translate-y-full', 'opacity-0');
                }, 3000);
            });
        </script>
    @endif

    @if (session()->has('error'))
        <div id="error-notification"
            class="fixed bottom-4 left-4 px-4 py-3 bg-red-600 text-white rounded-lg shadow-lg transform translate-y-full opacity-0 transition-all duration-500">
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <p>{{ session('error') }}</p>
            </div>
        </div>

        <script>
            // Show error notification
            document.addEventListener('DOMContentLoaded', function () {
                const notification = document.getElementById('error-notification');

                // Show the notification
                setTimeout(() => {
                    notification.classList.remove('translate-y-full', 'opacity-0');
                }, 100);

                // Hide the notification after 3 seconds
                setTimeout(() => {
                    notification.classList.add('translate-y-full', 'opacity-0');
                }, 3000);
            });
        </script>
    @endif
</body>

</html>