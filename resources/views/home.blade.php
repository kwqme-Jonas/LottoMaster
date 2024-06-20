<x-app-layout title="Home Page">
   @section('hero')
        <section class="bg-white">
            <div class="grid max-w-screen-xl px-4 pt-10 pb-4 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-15">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1
                        class="max-w-2xl mb-4 text-4xl font-extrabold leading-none  tracking-tight md:text-5xl xl:text-6xl">
                        Welcome to <br><span class="text-yellow-500">Lotto Masters</span>
                    </h1>

                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                        Lotto Masters is an exciting new lottery gaming provider in Ghana, poised to revolutionize the industry with its cutting-edge offerings. We are thrilled to introduce our digital lottery suite, featuring the captivating number games.
                    </p>
                </div>

                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rounded-lg w-50 h-50">
                    
                    <img src="{{ asset('img/hero2.png') }}" alt="Hero">
                </div>

            </div>
        </section>
   @endsection
    

    <div class="mb-5 w-full">
        <div class="mb-10">
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Featured Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($featuredPosts as $post)
                <div class="md:col-span-1 col-span-3">
                    <x-posts.post-card  :post="$post"/>
                </div>
                @endforeach  
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                href="http://lotomasters.test/blog">More
                Posts</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Latest Posts</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card  :post="$post"/>
                    </div>
                @endforeach  
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
            href="http://lotomasters.test/blog">More
            Posts</a>
    </div>

</x-app-layout>
