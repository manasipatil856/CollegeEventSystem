# College Event Information System

## About the Project
The College Event Information System is a web-based project developed to display college events and provide students with important event information. It helps users explore events based on their category and status and view complete details about each event.

## Features
- Simple and user-friendly homepage
- Browse college events
- Filter events by category and status
- View event images and descriptions
- View complete event details, including date, time, venue, organizer, eligibility, and registration information
- Navigation between the homepage, event listing, and event details pages

## Technologies Used
- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Data Format:** XML (sample event data)
- **Local Server:** XAMPP with Apache

## Project Structure

```text
CollegeEventSystem/
├── index.php
├── events.php
├── event-details.php
├── css/
├── data/
│   └── events.xml
└── images/
    ├── campus-aerial.jpeg
    ├── classroom.jpg
    ├── coding competition.jpeg
    ├── cultural-fest.jpeg
    ├── ground.jpeg
    └── workshop.jpeg
```

*Note: The image filenames above should match the files actually present in your images folder.*

## How to Run the Project

1. Install and open XAMPP.
2. Start the Apache server.
3. Place the project folder inside the `htdocs` directory.
4. Open a web browser.
5. Visit the following URL:

   `http://localhost/CollegeEventSystem/`

## How It Works
1. Users open the homepage.
2. They select an event category or status.
3. The system displays matching event cards.
4. Users click an event to view its complete details.

## Future Improvements
- Connect the PHP pages to the XML event data.
- Add an event registration form.
- Add search functionality.
- Add an administrator page to manage events.
- Improve mobile responsiveness.

## Project Status
**In Progress** — The basic homepage, event listing, filtering, and event details pages are implemented.

## Disclaimer
The event information currently included is sample data for educational and demonstration purposes. It should not be treated as an official college event schedule.
