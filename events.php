
<?php
$category = $_GET['category'] ?? '';
$status = $_GET['type'] ?? '';

$events = [
    [
        'id' => 1,
        'title' => 'Coding Competition',
        'category' => 'technical',
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
    [
        'id' => 2,
        'title' => 'Technical Workshop',
        'category' => 'workshop',
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
    [
        'id' => 3,
        'title' => 'Cultural Festival',
        'category' => 'fest',
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
    [
        'id' => 4,
        'title' => 'Annual Sports Day',
        'category' => 'sports',
        'college' => 'SIEM',
        'date' => '2026-03-10',
        'startTime' => '09:00 AM',
        'endTime' => '04:00 PM',
        'venue' => 'SIEM College Sports Ground',
        'image' => 'ground.jpeg',
        'importance' => 'Promotes fitness, discipline, teamwork and sportsmanship.',
        'description' => 'Participate in exciting college sports activities.',
        'organizer' => 'Sports Committee',
        'eligibility' => 'College students',
        'registration' => 'Contact the sports committee for registration.'
    ],
    [
        'id' => 5,
        'title' => 'Traditional Day',
        'category' => 'non-technical',
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

$today = date('Y-m-d');

$filteredEvents = [];

foreach ($events as $event) {
    $matchesCategory = (
        $category === '' ||
        $event['category'] === $category
    );

    $matchesStatus = (
        $status === '' ||
        ($status === 'upcoming' && $event['date'] >= $today) ||
        ($status === 'past' && $event['date'] < $today)
    );

    if ($matchesCategory && $matchesStatus) {
        $filteredEvents[] = $event;
    }
}

function formatCategory(string $category): string {
    return ucwords(str_replace('-', ' ', $category));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>College Events</title>

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
            padding: 22px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px;
        }

        .back {
            display: inline-block;
            margin-top: 12px;
            color: white;
            text-decoration: none;
        }

        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .event-grid {
            display: grid;
            grid-template-columns: repeat(
                auto-fit,
                minmax(260px, 1fr)
            );
            gap: 25px;
        }

        .event-card {
            display: block;
            background: white;
            color: inherit;
            text-decoration: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
        }

        .event-card img {
            width: 100%;
            height: 190px;
            object-fit: cover;
        }

        .event-info {
            padding: 20px;
        }

        .event-info h3 {
            margin-top: 0;
            color: #172554;
        }

        .category {
            display: inline-block;
            background: #dbeafe;
            color: #1d4ed8;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 13px;
        }

        .date {
            font-weight: bold;
            margin-top: 15px;
        }

        .venue {
            color: #475569;
            font-weight: bold;
        }

        .click-note {
            color: #2563eb;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 0;
        }

        .empty {
            text-align: center;
            padding: 35px;
            background: white;
            border-radius: 8px;
        }

        footer {
            margin-top: 40px;
            background: #172554;
            color: white;
            text-align: center;
            padding: 16px;
        }
    </style>
</head>

<body>

<header>
    <h1>College Event Information System</h1>
    <p>Explore events happening at your college</p>
    <a class="back" href="index.php">← Back to Home</a>
</header>

<main class="container">

    <h2>
        <?php
        if ($category !== '') {
            echo htmlspecialchars(formatCategory($category));
            echo ' Events';
        } elseif ($status !== '') {
            echo htmlspecialchars(formatCategory($status));
            echo ' Events';
        } else {
            echo 'All College Events';
        }
        ?>
    </h2>

    <?php if (count($filteredEvents) > 0): ?>

        <div class="event-grid">

            <?php foreach ($filteredEvents as $event): ?>

                <a
                    class="event-card"
                    href="event-details.php?id=<?php echo $event['id']; ?>&category=<?php echo urlencode($category); ?>&type=<?php echo urlencode($status); ?>"<?php echo $event['id']; ?>&category=<?php echo urlencode($category); ?>&type=<?php echo urlencode($status); ?>"
                >

                    <img
                        src="images/<?php echo htmlspecialchars($event['image']); ?>"
                        alt="<?php echo htmlspecialchars($event['title']); ?>"
                    >

                    <div class="event-info">

                        <h3>
                            <?php echo htmlspecialchars($event['title']); ?>
                        </h3>

                        <span class="category">
                            <?php echo htmlspecialchars(formatCategory($event['category'])); ?>
                        </span>

                        <p>
                            <?php echo htmlspecialchars($event['description']); ?>
                        </p>

                        <p class="date">
                            Date:
                            <?php echo date('d M Y', strtotime($event['date'])); ?>
                        </p>

                        <p class="venue">
                            Venue: <?php echo htmlspecialchars($event['venue']); ?>
                        </p>

                        <p class="click-note">
                            Click to view full event details →
                        </p>

                    </div>

                </a>

            <?php endforeach; ?>

        </div>

    <?php else: ?>

        <div class="empty">
            <h3>No events found</h3>
            <p>Try selecting another category or event status.</p>
        </div>

    <?php endif; ?>

</main>

<footer>
    <p>&copy; 2026 College Event Information System</p>
</footer>

</body>
</html>
