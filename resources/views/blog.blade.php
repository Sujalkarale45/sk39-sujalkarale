@php
    $articleId = Route::current()->parameter('articleId');
    $articleList = config('info.articles');
    if (!$articleId) {
        $articleId = 0;
    }
    $article = $articleList[$articleId];
@endphp
<x-layout>
    <x-slot:title>Blog</x-slot>
    <!-- Post -->
    <article class="bg-gray-50 dark:bg-gray-900 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header>
          <!-- Image -->
          <div class="aspect-h-2 aspect-w-3 w-full sm:aspect-h-1">
            <img
              src="{{ asset($article['image']) }}"
              class="object-cover object-center"
            />
          </div>

          <!-- Post Header Content -->
          <div class="px-5 lg:px-0">
            <!-- Article Information -->
            <div
              class="mx-auto mb-8 max-w-prose border-b border-gray-300/70 pb-8 pt-10 text-lg sm:pt-16"
            >
              <a
                href="{{ url('/projects/technology')}}"
                class="transition-color relative text-sm font-medium uppercase tracking-widest text-red-700 dark:text-red-300 duration-300 ease-in-out hover:text-red-600 dark:hover:text-red-200"
                >{{ __($article['category']) }}</a
              >

              <h2
                class="mt-3.5 text-4xl font-medium tracking-normal text-gray-900 dark:text-gray-100 decoration-red-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl"
              >
                {{ $article['title'] }}
              </h2>

              <div>
                <p class="mt-4 text-base leading-loose text-gray-600 dark:text-gray-300">
                    {{ $article['description'] }}
                </p>
              </div>

              <!-- Author meta -->
              <div class="mt-6 flex items-center sm:mt-8">
                <a href="{{ url('/about') }}" class="mr-3 flex-shrink-0">
                  <div class="relative">
                    <img
                      class="h-8 w-8 rounded-xl object-cover object-center sm:h-9 sm:w-9"
                      src="{{ asset('images/author.jpeg') }}"
                      alt=""
                    />
                    <span
                      class="absolute inset-0 rounded-xl shadow-inner"
                      aria-hidden="true"
                    ></span>
                  </div>
                </a>

                <div class="flex items-center text-sm lg:text-[15px]">
                  <span class="hidden text-gray-500 dark:text-gray-400 sm:inline-block"
                    >By&nbsp;</span
                  >
                  <a
                    class="font-medium text-gray-700 dark:text-gray-300 hover:underline"
                    href="{{ url('/about') }}"
                    >{{ __(config('info.sitename'))}}</a
                  >

                  <x-icons.calendar />
                  <span class="ml-1 text-gray-500 dark:text-gray-400">Nov 2, 2020</span>

                  <span class="hidden items-center sm:flex">
                    <x-icons.clock />
                    <span class="ml-1 text-gray-500 dark:text-gray-400">15 min read</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="px-5 lg:px-0">
          <!-- Post Content -->
          <!-- Uses the official Tailwind CSS Typography plugin -->
          <div
            class="prose dark:prose-invert mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 prose-img:rounded-xl"
          >
            <p> <h2><b>Exploring the Latest in Technology</b></h2>
            As a technology enthusiast and developer, I’m constantly on the lookout for new innovations and trends that shape the world of tech. Whether it’s advancements in Artificial Intelligence (AI), breakthroughs in Quantum Computing, or the rise of the Metaverse, I believe staying informed is key to personal and professional growth. Here’s why I make it a priority to keep myself updated with the latest changes in technology:
            </p>
            <p> <h2><b>Why I Stay Updated with Technology</b></h2>
            The tech industry is evolving faster than ever before, with groundbreaking innovations emerging every day. As someone passionate about Android and web development, I find it crucial to stay ahead of these changes. Every new tool, programming language, or development in AI/ML opens up opportunities to improve my skills and create more efficient, innovative solutions. Whether it’s learning about new frameworks, understanding the future of 5G, or exploring the capabilities of edge computing, these advancements inspire me to push the boundaries of what’s possible in my projects.
            <p><h2><b>Technologies I’m Currently Exploring
            </b></h2>
              <ul>
                <li>Artificial Intelligence (AI) and Machine Learning (ML): AI is transforming everything from app development to user experiences. I’m particularly interested in how AI can be integrated into mobile applications to offer smarter, more intuitive solutions.</li>
                <li>Quantum Computing: Though still in its early stages, quantum computing is on my radar. The ability to solve complex problems at speeds unimaginable by today’s standards is something that fascinates me.</li>
                <li>Augmented Reality (AR) and Virtual Reality (VR): The rise of AR and VR is opening new possibilities in app design, particularly in creating immersive user experiences. I believe AR will play a huge role in shaping the future of mobile apps.</li>
                <li>Blockchain and Web3: Decentralization through blockchain and the promise of Web3 is something I’m keeping a close eye on. The potential to create decentralized applications (dApps) and smart contracts could redefine how we build and interact with software in the near future.</li>
            </ul>
            </p>
            <p><h2><b>My Vision for the Future</b></h2>
            Technology isn’t just about staying updated—it’s about using that knowledge to build meaningful solutions. I’m committed to leveraging these advancements in my own projects, whether it’s developing an Android app or building dynamic web solutions. My ultimate goal is to work in a product-based company, where I can apply my skills and collaborate on innovative projects that truly make a difference.
            </p>

            <figure>
                <img src="{{ asset('images/dept-cseet.jpeg') }}" />
                <figcaption>
                  Department of Computer Science and Engineering (Artificial Intelligence & Machine Learning).
                </figcaption>
              </figure>

            <p> The purpose of Artificial Intelligence and Machine Learning (AI/ML) engineering is to develop systems that can learn from data, make predictions, and automate tasks to enhance efficiency and decision-making. AI/ML engineering focuses on creating algorithms and models that enable machines to interpret complex data, recognize patterns, and improve performance over time. By integrating AI/ML into various applications—such as healthcare, finance, and robotics—engineers aim to solve real-world problems, drive innovation, and enhance user experiences across multiple industries. </p>

          </div>

          <!-- Post Footer -->
          <footer
            class="divide-y-gray-300/70 mx-auto mt-12 max-w-prose divide-y text-lg sm:mt-14"
          >
            <!-- Tags -->
            <ul class="-m-1 flex flex-wrap justify-start pb-8 sm:pb-10">
              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Trends
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Tips
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lists
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lessons
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:hover:text-red-300 sm:px-6 sm:py-2"
                  >
                    Learnings
                  </span>
                </a>
              </li>
            </ul>

            <!-- Social Share Buttons -->
            <div class="py-8 sm:py-10">
                <div class="flex items-center justify-between">
                  <span class="text-lg font-medium text-gray-900 dark:text-gray-100"> Share </span>

                  <!-- Social Links -->
                  <ul class="flex items-center space-x-3">
                    @foreach (config('info.sociallinks') as $link)
                    <li>
                        <a
                            href="{{ url($link['url'])}}" target="_blank"
                            class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                        >
                            <x-dynamic-component :component="$link['name']" />
                        </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>

            <!-- Author Details -->
            <div class="py-8 sm:py-10">
              <div class="flex w-full items-center justify-between">
                <div class="flex flex-col sm:flex-row">
                  <!-- Image -->
                  <div class="flex-shrink-0">
                    <div class="relative w-fit">
                      <img
                        class="h-20 w-20 rounded-2xl object-cover object-center sm:h-24 sm:w-24"
                        src="{{ asset('images/author.jpeg') }}"
                        alt=""
                      />
                      <span
                        class="absolute inset-0 rounded-2xl shadow-inner"
                        aria-hidden="true"
                      ></span>
                    </div>
                  </div>

                  <!-- Content -->
                  <div class="mt-5 text-left sm:ml-6 sm:mt-0">
                    <div class="flex items-center justify-between">
                      <div class="'flex flex-col">
                        <p class="text-xs uppercase tracking-widest text-red-600 dark:text-red-200">
                            {{ __('About Author') }}
                        </p>
                        <h1
                          class="mt-1 text-xl font-medium tracking-normal text-gray-900 dark:text-gray-100 md:tracking-tight lg:leading-tight"
                        >
                        {{ __(config('info.sitename'))}}
                        </h1>
                      </div>
                    </div>

                    <p class="mt-2.5 text-base leading-loose text-gray-500 dark:text-gray-400">
                    Sujal Karale - Web and App Developer<br>
                    I am Sujal Karale, a dedicated and passionate developer with a strong interest in both web and app development. I have a solid command over essential web technologies such as HTML, CSS, and JavaScript, which allows me to create dynamic and responsive websites. Additionally, my proficiency in Kotlin enables me to develop robust and efficient Android applications. I am committed to continuous learning and staying updated with the latest industry trends to deliver high-quality digital solutions.
                    </p>

                    <!-- Author Social Links -->
                    <ul class="mt-3.5 flex items-center space-x-3">
                        @foreach (config('info.sociallinks') as $link)
                            <li>
                                <a href="{{ url($link['url'])}}" @if (!($loop->last)) class="group" @endif>
                                <x-dynamic-component :component="$link['name']" />
                                </a>
                            </li>
                        @endforeach
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </article>
</x-layout>
