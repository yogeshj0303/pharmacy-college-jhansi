<x-front-header/>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: left;
        }

        .header-section {
            background-color: #800000;
            color: white;
            padding: 10px 20px;
            text-align: left;
            display: flex;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

        .header-section i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .header-section p {
            margin: 0;
            font-size: 1rem;
        }

        .gallery-container {
            max-width: 1460px;
            width: 100%;
            margin: 20px auto;
            padding: 20px;
            box-sizing: border-box;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .gallery iframe {
            width: 100%;
            height: 250px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .gallery iframe:hover {
            transform: scale(1.05);
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.5rem;
            }

            .gallery {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        @media (max-width: 480px) {
            .header-section p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<div class="header-section">
    <a href="/" style="color: white; text-decoration: none;">
        <i class="fas fa-home"></i> <!-- Home icon -->
    </a>
    <p><a href="/" style="color: white; text-decoration: none;" onmouseover="this.style.textDecoration='none'" onmouseout="this.style.textDecoration='none'">/ Video-Gallery</a></p>
</div>

<div class="gallery-container">
    <h1>Video Gallery</h1>

    <div class="gallery">
    @foreach($videos as $video)
        @php
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([^"&?\/\s]+)/', $video->link, $matches)) {
                $youtubeID = $matches[1];
            } else {
                $youtubeID = $video->link;
            }
        @endphp

        <iframe width="560" height="315"
                src="https://www.youtube.com/embed/{{ $youtubeID }}"
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
    @endforeach
</div>

</div>

</body>
<x-front-footer/>
</html>
