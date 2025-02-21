<x-front-header/>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .header-section {
            background-color: #800000;
            color: white;
            padding: 10px 15px;
            text-align: left;
            display: flex;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

        .header-section i {
            margin-right: 8px;
            font-size: 1.3rem;
            margin-left:30px;
        }

        .header-section p {
            margin: 0;
            font-size: 1rem;
            font-weight: bold;
        }

        .newsletter-container {
            max-width: 1460px;
            width: 100%;
            margin: 15px auto;
            padding: 15px;
            box-sizing: border-box;
        }

        .newsletter-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            list-style-type: none;
            padding: 0;
        }

        .newsletter-item {
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .newsletter-item:hover {
            transform: translateY(-8px);
        }

        .newsletter-item h3 {
            color: #800000;
            font-size: 1.4rem;
            margin-bottom: 8px;
        }

        .newsletter-item p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 12px;
        }

        .pdf-download {
            margin-top: 12px;
            font-size: 1rem;
            display: flex;
            align-items: center;
        }

        .pdf-download a {
            padding: 10px 15px;
            font-size: 1rem;
            background-color: #800000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .pdf-download a:hover {
            background-color: #b30000;
        }

        .pdf-download i {
            margin-right: 8px;
            font-size: 1.2rem;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .newsletter-list {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .header-section p {
                font-size: 1rem;
            }

            .newsletter-item h3 {
                font-size: 1.2rem;
            }

            .newsletter-item p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="header-section">
        <i class="fas fa-home"></i> <!-- Home icon -->
        <p> / Newsletter Archive</p>
    </div>

    <div class="newsletter-container">
        <h1 style="font-size: 1.8rem; color: #333; margin-bottom: 15px;">Newsletter</h1>
        <p style="font-size: 1rem; color: #555; margin-bottom: 15px;">Browse through our newsletter archive to explore the latest updates, stories, and insights from various editions in English and Hindi.</p>
        <ul class="newsletter-list">
    @foreach($documents as $document)
        <li class="newsletter-item">
            <div class="pdf-download">
               
                <a href="{{ asset('' . $document->document) }}" target="_blank" class="btn">
    <i class="fas fa-download"></i> Download PDF - {{ $document->title }}
</a>

            </div>
        </li>
    @endforeach
</ul>

<script>
    function downloadPDF(pdfUrl) {
        window.location.href = pdfUrl;
    }
</script>

    </div>

</body>
<x-front-footer/>
</html>
