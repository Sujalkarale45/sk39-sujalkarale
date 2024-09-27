<?php

return [
    'sitename' => 'Sujal Karale',
    'navlinks' => [
        [
            'id' => 'college',
            'name' => 'College',
            'url' => '/projects/college',
            'image' => 'images/college.jpeg',
        ],
        [
            'id' => 'technology',
            'name' => 'Technology',
            'url' => '/projects/technology',
            'image' => 'images/technology.jpeg',
        ],
        [
            'id' => 'events',
            'name' => 'Events',
            'url' => '/projects/events',
            'image' => 'images/events.jpeg',
        ],
    ],
    'pagelinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Projects',
            'url' => '/projects',
        ],
        [
            'name' => 'Blog',
            'url' => '/blog',
        ],
    ],
    'footerlinks' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About',
            'url' => '/about',
        ],
        [
            'name' => 'Contact',
            'url' => '/contact',
        ],
    ],
    'sociallinks' => [
        [
            'title' => 'Twitter',
            'name' => 'icons.twitter',
            'url' => 'https://x.com/sujal_karale_13',
        ],
        [
            'title' => 'Facebook',
            'name' => 'icons.facebook',
            'url' => 'https://www.facebook.com/sujal.karale.1',
        ],
        [
            'title' => 'Instagram',
            'name' => 'icons.instagram',
            'url' => 'https://www.instagram.com/sujal_karale_13/',
        ],
        [
            'title' => 'Linkedin',
            'name' => 'icons.linkedin',
            'url' => 'https://www.linkedin.com/in/sujal-karale/',
        ],
    ],
    'taglist' => [
        [
            'id' => 'trends',
            'name' => 'Trends',
        ],
        [
            'id' => 'tips',
            'name' => 'Tips',
        ],
        [
            'id' => 'ideas',
            'name' => 'Ideas',
        ],
        [
            'id' => 'security',
            'name' => 'Security',
        ],
        [
            'id' => 'gaming',
            'name' => 'Gaming',
        ],
        [
            'id' => 'climate',
            'name' => 'Climate',
        ],
        [
            'id' => 'gear',
            'name' => 'Gear',
        ],
        [
            'id' => 'reviews',
            'name' => 'Reviews',
        ],
    ],
    'routes' => [
        [
            'name' => 'welcome',
            'path' => '/',
            'view' => 'welcome',
        ],
        [
            'name' => 'about',
            'path' => '/about',
            'view' => 'about',
        ],
        [
            'name' => 'blog',
            'path' => '/blog/{articleId?}',
            'view' => 'blog',
        ],
        [
            'name' => 'projects',
            'path' => '/projects/{category?}',
            'view' => 'projects',
        ],
        [
            'name' => 'contact',
            'path' => '/contact/{category?}',
            'view' => 'contact',
        ],
        [
            'name' => 'tag',
            'path' => '/tag',
            'view' => 'tag',
        ],
        [
            'name' => 'Sujal',
            'path' => '/Sujal',
            'view' => 'Sujal',
        ],
    ],
    'articles' => [
        [
            'id' => '1',
            'title' => 'Artificial Intelligence (AI) and Machine Learning (ML) Advancements',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'AI and ML continue to revolutionize industries with smarter algorithms, improved natural language processing (NLP), and computer vision. AI is becoming more autonomous and capable of decision-making, impacting healthcare, finance, and automation with increased efficiency.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Sep 26, 2024',
        ],
        [
            'id' => '2',
            'title' => 'Quantum Computing Breakthroughs',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Quantum computing is moving closer to practical applications, promising exponential processing power by leveraging quantum bits (qubits). This technology has the potential to solve complex problems in cryptography, drug discovery, and logistics far beyond the capabilities of classical computers.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Sep 26, 2024',
        ],
        [
            'id' => '3',
            'title' => '5G and Beyond',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'The global rollout of 5G is transforming telecommunications, offering ultra-fast data speeds, low latency, and increased connectivity. This enables innovations like IoT devices, smart cities, and enhanced mobile experiences. Research is already pushing toward 6G, which will provide even faster and more secure communications.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Sep 26, 2024',
        ],
        [
            'id' => '4',
            'title' => 'Edge Computing',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Edge computing moves data processing closer to where it is generated (at the "edge" of networks), reducing latency and improving response times. This technology is essential for IoT devices, real-time analytics, and applications that require immediate data processing, like autonomous vehicles and smart cities.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Sep 26, 2024',
        ],
        [
            'id' => '5',
            'title' => 'Blockchain Evolution and Web3',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'Blockchain technology continues to evolve, expanding beyond cryptocurrencies into areas like decentralized finance (DeFi), supply chain management, and NFTs. Web3 is emerging as a decentralized internet model that gives users more control over their data and digital assets.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Sep 26, 2024',
        ],
        [
            'id' => '6',
            'title' => 'Augmented Reality (AR) and Virtual Reality (VR)',
            'image' => 'images/featured-article-01.jpeg',
            'description' => 'AR and VR technologies are growing in sectors like gaming, education, and remote work. Companies are building immersive experiences, from virtual workspaces to AR-driven retail environments, paving the way for the eventual development of the metaverse.',
            'category' => 'Technology',
            'duration' => '6 mins',
            'date' => 'Sep 26, 2024',
        ],
    ],
];
