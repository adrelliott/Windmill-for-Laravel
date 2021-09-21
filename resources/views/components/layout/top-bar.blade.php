@props([
    'search',   //pass something like search="hide" when calling component to hide this
    'notifications',
    'profile',
])
<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
        <x-nav.mobile-hamburger />
        @empty($search)
            <x-ui.search-input />
        @else
            <div class="flex justify-center flex-1 lg:mr-32"></div>
        @endempty

        <ul class="flex items-center flex-shrink-0 space-x-6">
            @empty($notifications)
                <x-nav.notifications-menu />
            @endempty
            @empty($profile)
                <x-nav.profile-menu />
            @endempty
        </ul>
    </div>
</header>
