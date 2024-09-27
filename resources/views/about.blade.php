
<x-layout>
    <x-slot:title>About</x-slot>
    <!-- Post -->
    <article class="bg-gray-50 dark:bg-gray-900 pb-12 sm:pb-16 lg:pb-24">
        <!-- Post Header -->
        <header>
          <!-- Image -->
          <div class="aspect-h-2 aspect-w-3 w-full sm:aspect-h-1">
            <img
              src="images/post-header-image.jpeg"
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
                >{{ __('Technology') }}</a
              >

              <h2
                class="mt-3.5 text-4xl font-medium tracking-normal text-gray-900 decoration-red-300 decoration-3 transition duration-300 ease-in-out group-hover:underline sm:mt-5 sm:text-5xl sm:leading-tight md:tracking-tight lg:text-6xl dark:text-red-300"
              >
                Android 15 is released to AOSP
              </h2>

              <div>
                <p class="mt-4 text-base leading-loose text-gray-600">
                Today we're releasing Android 15 and making the source code available at the Android Open Source Project (AOSP). Android 15 will be available on supported Pixel devices in the coming weeks, as well as on select devices from Samsung, Honor, iQOO, Lenovo, Motorola, Nothing, OnePlus, Oppo, realme, Sharp, Sony, Tecno, vivo, and Xiaomi in the coming months.
                </p>
              </div>

              <!-- Author meta -->
              <div class="mt-6 flex items-center sm:mt-8">
                <a href="{{ url('/about') }}" class="mr-3 flex-shrink-0">
                  <div class="relative">
                    <img
                      class="h-8 w-8 rounded-xl object-cover object-center sm:h-9 sm:w-9"
                      src="images/author.jpeg"
                      alt=""
                    />
                    <span
                      class="absolute inset-0 rounded-xl shadow-inner"
                      aria-hidden="true"
                    ></span>
                  </div>
                </a>

                <div class="flex items-center text-sm lg:text-[15px]">
                  <span class="hidden text-gray-500 sm:inline-block"
                    >By&nbsp;</span
                  >
                  <a
                    class="font-medium text-gray-700 hover:underline"
                    href="{{ url('/about') }}"
                    >{{ __(config('info.sitename')) }}</a
                  >

                  <x-icons.calendar />
                  <span class="ml-1 text-gray-500">Nov 2, 2020</span>

                  <span class="hidden items-center sm:flex">
                    <x-icons.clock />
                    <span class="ml-1 text-gray-500">15 min read</span>
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
            class="prose mx-auto sm:prose-lg first-letter:text-4xl first-letter:font-bold first-letter:tracking-[.15em] prose-a:transition prose-a:duration-300 prose-a:ease-in-out hover:prose-a:text-red-700 dark:text-red-300 prose-img:rounded-xl"
          >
            <p>
            Hello! I’m Sujal Karale, a second-year B.Tech student specializing in Computer Science and Engineering with a focus on Artificial Intelligence and Machine Learning at Ramdeobaba College of Engineering and Management, Nagpur. With a strong passion for technology, I have been actively learning and building my skills in both Android and web development. Over time, I’ve gained hands-on experience with programming languages and tools such as HTML, CSS, JavaScript, Kotlin, Java, C, and Python, allowing me to create a variety of digital solutions. </p>
            <h2 class="dark:text-red-300">My Moto</h2>
            <p>
            In web development, I enjoy crafting responsive, visually appealing websites that deliver a seamless user experience. My journey in Android development has enabled me to design mobile applications that balance intuitive user interfaces with powerful functionality.
            </p>
            <p>
            I am committed to continuous learning, always exploring new technologies and trends in the industry. My focus on AI/ML gives me a unique perspective on integrating smart, innovative features into the projects I develop.
            </p>
            <figure>
              <img src="images/post-content-image.jpeg" />
              <figcaption>
              Beyond coding, I also enjoy video editing, where I use InShot to create engaging and polished video content.
              </figcaption>
            </figure>
            <p>
            I’m constantly learning and adapting to new technologies and trends in software development, driven by the desire to build innovative products that solve real-world problems. My academic background in AI/ML complements my development skills, giving me the ability to incorporate intelligent features into the solutions I build.
            </p>
            <h2 class="dark:text-red-300">My Motivation Source</h2>
            <h3 class="dark:text-red-300">TED Talks</h3>
            <p>
            TED Talks are short, powerful presentations (typically 18 minutes or less) delivered by experts, thought leaders, and innovators on a wide range of topics, including science, technology, education, design, business, and global issues. The term TED stands for Technology, Entertainment, and Design, which were the original areas of focus when TED was founded in 1984. However, TED Talks now cover a much broader spectrum of ideas.
            </p>
            <blockquote>
              <p class="dark:text-red-300">
              The goal of TED Talks is to spread ideas that can inspire and motivate people, challenge conventional thinking, and encourage learning and curiosity. These talks are often insightful and engaging, designed to reach a global audience through both live events and online platforms.
              </p>
            </blockquote>
            <p>
            <h3>"The Power of Vulnerability" – Brené Brown </h3>
            Description: Brené Brown explores how embracing vulnerability can lead to deeper connections, courage, and authenticity. She emphasizes that vulnerability is at the core of meaningful human experiences, such as love, creativity, and empathy.
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
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Trends
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Tips
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lists
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Lessons
                  </span>
                </a>
              </li>

              <!-- Tag item -->
              <li>
                <a href="{{ url('/tag') }}">
                  <span
                    class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 dark:text-gray-400 transition duration-300 ease-in-out hover:text-red-700 dark:text-red-300 sm:px-6 sm:py-2"
                  >
                    Learnings
                  </span>
                </a>
              </li>
            </ul>

            <!-- Social Share Buttons -->
            <div class="py-8 sm:py-10">
              <div class="flex items-center justify-between">
                <span class="text-lg font-medium text-gray-900 dark:text-red-300"> Share </span>

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
                        src="images/author.jpeg"
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
                        <p class="text-xs uppercase tracking-widest text-red-600">
                            {{ __('About Author') }}
                        </p>
                        <h1
                          class="mt-1 text-xl font-medium tracking-normal text-gray-900 md:tracking-tight lg:leading-tight"
                        >
                          {{ __(config('info.sitename'))}}
                        </h1>
                      </div>
                    </div>

                    <p class="mt-2.5 text-base leading-loose text-gray-500">
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
