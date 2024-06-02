<header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="header-left" class="flex items-center">
        <a href="{{ route('home')}}">
            <x-application-logo />
        </a>
        <div class="top-menu ml-10">
            <ul class="flex space-x-4">
                <li>
                    <a class="flex space-x-2 items-center hover:text-yellow-900 text-sm text-yellow-500"
                        href="http://lotomasters.test">
                        Home
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                        href="http://lotomasters.test/blog">
                        Blog
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                        href="http://lotomasters.test/blog">
                        About Us
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                        href="http://lotomasters.test/blog">
                        Contact Us
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                        href="http://lotomasters.test/blog">
                        Terms
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div id="header-right" class="flex items-center md:space-x-6">
        @guest
         @include('layouts.partials.header-right-guest')
        @endguest
        


        @auth
           @include('layouts.partials.header-right-auth')  
        @endauth
        
    </div>
</header>
