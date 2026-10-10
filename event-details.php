
<?php
$events = [
    1 => [
        'title' => 'Coding Competition',
        'category' => 'Technical',
        'college' => 'SITRC',
        'date' => '2026-11-15',
        'startTime' => '10:00 AM',
        'endTime' => '01:00 PM',
        'venue' => 'Building A, SITRC',
        'image' => 'coding competition.jpeg',
        'importance' => 'Develops programming, logical thinking and problem-solving skills.',
        'description' => 'Test your programming and problem-solving skills.',
        'organizer' => 'Computer Engineering Department',
        'eligibility' => 'College students',
        'registration' => 'Contact the event coordinator for registration.'
    ],

    2 => [
        'title' => 'Technical Workshop',
        'category' => 'Workshop',
        'college' => 'SITRC',
        'date' => '2026-11-20',
        'startTime' => '11:00 AM',
        'endTime' => '02:00 PM',
        'venue' => 'Building B, SITRC',
        'image' => 'workshop.jpeg',
        'importance' => 'Provides practical knowledge and introduces students to new technologies.',
        'description' => 'Learn new technologies and practical skills.',
        'organizer' => 'Technical Department',
        'eligibility' => 'Interested college students',
        'registration' => 'Contact the event coordinator for registration.'
    ],

    3 => [
        'title' => 'Cultural Festival',
        'category' => 'Fest',
        'college' => 'SUN',
        'date' => '2026-11-25',
        'startTime' => '04:00 PM',
        'endTime' => '08:00 PM',
        'venue' => 'Amphitheatre',
        'image' => 'cultural-fest.jpeg',
        'importance' => 'Encourages creativity, teamwork and appreciation of different cultures.',
        'description' => 'Enjoy music, dance and cultural performances.',
        'organizer' => 'Cultural Committee',
        'eligibility' => 'College students',
        'registration' => 'Contact the cultural committee for registration.'
    ],

    4 => [
        'title' => 'Annual Sports Day',
        'category' => 'Sports',
        'college' => 'SIEM',
        'date' => '2026-03-10',
        'startTime' => '09:00 AM',
        'endTime' => '04:00 PM',
        'venue' => 'Sports Ground',
        'image' => 'ground.jpeg',
        'importance' => 'Promotes fitness, discipline, teamwork and sportsmanship.',
        'description' => 'Participate in exciting college sports activities.',
        'organizer' => 'Sports Committee',
        'eligibility' => 'College students',
        'registration' => 'Contact the sports committee for registration.'
    ],

    5 => [
        'title' => 'Traditional Day',
        'category' => 'Non-Technical',
        'college' => 'SITRC',
        'date' => '2026-03-20',
        'startTime' => '10:00 AM',
        'endTime' => '03:00 PM',
        'venue' => 'Building E, SITRC',
        'image' => 'cultural-fest.jpeg',
        'importance' => 'Celebrates cultural heritage and encourages students to express their traditions.',
        'description' => 'Celebrate traditions, culture and creativity.',
        'organizer' => 'Student Cultural Committee',
        'eligibility' => 'College students',
        'registration' => 'Contact the event coordinator for registration.'
    ]
];

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$category = $_GET['category'] ?? '';
$status = $_GET['type'] ?? '';

$backUrl = 'events.php?' . http_build_query([
    'category' => $category,
    'type' => $status
]);
$event = $events[$id] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event Details</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        header {
            background: #172554;
            color: white;
            text-align: center;
            padding: 25px 15px;
        }

        .container {
            max-width: 850px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .details-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.10);
        }

        .event-image {
            width: 100%;
            height: 320px;
            object-fit: cover;
        }

        .content {
            padding: 25px;
        }

        h2 {
            color: #172554;
            margin-top: 0;
        }

        .category {
            display: inline-block;
            background: #dbeafe;
            color: #1d4ed8;
            padding: 7px 12px;
            border-radius: 5px;
        }

        .detail {
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
            line-height: 1.6;
        }

        .detail strong {
            color: #172554;
        }

        .back-button {
            display: inline-block;
            margin: 22px 0;
            padding: 12px 18px;
            background: #172554;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .back-button:hover {
            background: #1d4ed8;
        }

        .not-found {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }

        footer {
            background: #172554;
            color: white;
            text-align: center;
            padding: 16px;
            margin-top: 35px;
        }
    </style>
</head>

<body>

<header>
    <h1>College Event Information System</h1>
    <p>Complete Event Information</p>
</header>

<main class="container">

    <?php if ($event !== null): ?>

        <div class="details-card">

            <img
                class="event-image"
                src="images/<?php echo htmlspecialchars($event['image']); ?>"
                alt="<?php echo htmlspecialchars($event['title']); ?>"
            >

            <div class="content">

                <h2>
                    <?php echo htmlspecialchars($event['title']); ?>
                </h2>

                <span class="category">
                    <?php echo htmlspecialchars($event['category']); ?>
                </span>

                <p class="detail">
                    <strong>College:</strong>
                    <?php echo htmlspecialchars($event['college']); ?>
                </p>

                <p class="detail">
                    <strong>Date:</strong>
                    <?php echo date('d M Y', strtotime($event['date'])); ?>
                </p>

                <p class="detail">
                    <strong>Time:</strong>
                    <?php
                    echo htmlspecialchars($event['startTime']);
                    echo ' - ';
                    echo htmlspecialchars($event['endTime']);
                    ?>
                </p>

                <p class="detail">
                    <strong>Venue:</strong>
                    <?php echo htmlspecialchars($event['venue']); ?>
                </p>

                <p class="detail">
                    <strong>Description:</strong>
                    <?php echo htmlspecialchars($event['description']); ?>
                </p>

                <p class="detail">
                    <strong>Importance:</strong>
                    <?php echo htmlspecialchars($event['importance']); ?>
                </p>

                <p class="detail">
                    <strong>Organizer:</strong>
                    <?php echo htmlspecialchars($event['organizer']); ?>
                </p>

                <p class="detail">
                    <strong>Eligibility:</strong>
                    <?php echo htmlspecialchars($event['eligibility']); ?>
                </p>

                <p class="detail">
                    <strong>Registration:</strong>
                    <?php echo htmlspecialchars($event['registration']); ?>
                </p>

            </div>
        </div>

    <?php else: ?>

        <div class="not-found">
            <h2>Event Not Found</h2>
            <p>Please select a valid event from the events page.</p>
        </div>

       <?php endif; ?>

    <a class="back-button" href="<?php echo htmlspecialchars($backUrl); ?>">
        ← Back to Events
    </a>

</main>

<footer>
    <p>&copy; 2026 College Event Information System</p>
</footer>

</body>
</html>
