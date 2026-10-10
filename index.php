
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>College Event Information System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            overflow: hidden;
        }

        /* Full-screen campus background */
        .home {
            width: 100%;
            height: 100vh;
            min-height: 100vh;

            background:
                linear-gradient(
                    rgba(15, 23, 42, 0.45),
                    rgba(15, 23, 42, 0.45)
                ),
                url("images/campus-aerial.jpeg");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;
            padding: 25px;
        }

        /* Welcome text */
        .overlay {
            width: 100%;
            max-width: 900px;
            color: white;
        }

        .overlay h1 {
            font-size: 44px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
        }

        .overlay p {
            font-size: 19px;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        /* Dropdowns */
        .dropdown-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .dropdown-container select {
            width: 280px;
            padding: 16px;

            border: none;
            border-radius: 8px;

            background-color: white;
            color: #172554;

            font-size: 15px;
            cursor: pointer;
            outline: none;
        }

        .dropdown-container select:focus {
            box-shadow: 0 0 0 3px #93c5fd;
        }

        /* Mobile screen */
        @media (max-width: 600px) {
            .overlay h1 {
                font-size: 30px;
            }

            .overlay p {
                font-size: 16px;
            }

            .dropdown-container {
                flex-direction: column;
                gap: 15px;
            }

            .dropdown-container select {
                width: 100%;
                max-width: 320px;
            }
        }
    </style>
</head>

<body>

    <main class="home">

        <div class="overlay">

            <h1>Welcome to College Events</h1>

            <p>
                Discover technical events, cultural fests,
                sports activities, workshops and more.
                Everything you need to know about college events,
                all in one place.
            </p>

            <div class="dropdown-container">

                <!-- Category Dropdown -->
                <select
                    id="category"
                    onchange="openCategory(this.value)"
                >
                    <option value="">Select Event Category</option>
                    <option value="technical">Technical Events</option>
                    <option value="non-technical">Non-Technical Events</option>
                    <option value="fest">College Fests</option>
                    <option value="sports">Sports Events</option>
                    <option value="workshop">Workshops</option>
                </select>

                <!-- Event Status Dropdown -->
                <select
                    id="status"
                    onchange="openStatus(this.value)"
                >
                    <option value="">Select Event Status</option>
                    <option value="upcoming">Upcoming Events</option>
                    <option value="past">Past Events</option>
                </select>

            </div>

        </div>

    </main>

    <script>
        function openCategory(category) {
            if (category !== "") {
                window.location.href =
                    "events.php?category=" +
                    encodeURIComponent(category);
            }
        }

        function openStatus(status) {
            if (status !== "") {
                window.location.href =
                    "events.php?type=" +
                    encodeURIComponent(status);
            }
        }
    </script>

</body>
</html>
