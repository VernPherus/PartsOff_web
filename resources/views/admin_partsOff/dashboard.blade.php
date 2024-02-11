@extends("layouts.app")
@section('content')
    <style>
        body {
            margin: 0;
            font-family: "Arial", sans-serif;
        }

        #sidebar {
            height: 100vh;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
            position: fixed;
            overflow-x: hidden;
        }

        #logo {
            text-align: center;
        }

        #logo img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        #sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            background-color: #555; /* Bootstrap darker background color on hover */
        }

        #logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
        }

        #content {
            margin-left: 250px; /* Set the same width as the sidebar */
            padding: 15px;
        }
    </style>
</head>
<body>

@include("layouts.admin_sidebar")

<div id="content">
    <!-- Search Bar -->
    <input type="text" id="search-bar" placeholder="Search for a user...">
    
    <!-- Your main content goes here -->
    <h2>Main Content</h2>
    <p>This is where you can put any content you want.</p>
</div>

</body>

