# Code Cohort

A learning hub for IT and programming students: language guides, tutorials, curated videos and podcasts, flashcards, and an in-browser code playground.

Built as the final project for **Plat Tech** at Bicol University.

## Features

- **Tutorials hub** with search and filters, a card grid for each language or database (Java, Python, C, C#, C++, PHP, MySQL), featured videos, and a suggested learning path
- **Language pages** with a short background, basics with code samples, and a materials section (videos, links, articles)
- **Home page** with a YouTube video that changes on every refresh
- **Playground** page with an embedded online compiler
- **Contact page** with a message board backed by MySQL
- **Light and dark theme toggle** using CSS variables
- **Animated Gradient ASCII background** (from [React Bits](https://reactbits.dev)) in a purple palette
- **Shared layout** through PHP includes (head, header, sidebar, footer)

## Tech Stack

| Layer | Tools |
| --- | --- |
| Frontend | HTML, CSS, Bootstrap |
| Backend | PHP |
| Database | MySQL |
| Local server | XAMPP (Apache + MySQL) |
| Background effect | React + Vite (built output used in the site) |

## Project Structure

```
Final_Project/
├── index.php
├── browse.php
├── tutorials.php
├── materials.php
├── playground.php
├── contact.php
├── learn-helpers.php
├── style.css
├── includes/
│   ├── head.php
│   ├── header.php
│   ├── aside.php
│   └── footer.php
└── database/
    └── <your_file>.sql
```

Individual language pages (Java, Python, C, C#, C++, PHP, MySQL) are built with the helpers in `learn-helpers.php`.

## Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (Apache and MySQL)
- A modern browser (Chrome, Edge, or Firefox)
- An internet connection (videos, podcasts, flashcards, and the compiler are embeds)

### Installation

1. Clone the repo into XAMPP's web root:
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/gabphilshea/<repo-name>.git Final_Project
   ```
2. Open the XAMPP Control Panel and start **Apache** and **MySQL**.
3. Go to `http://localhost/phpmyadmin`, create a database named `<db_name>`, then use **Import** to load `database/<your_file>.sql`.
4. Check that the database settings in `<connection_file>` match your setup. XAMPP's defaults are user `root` with an empty password.
5. Open `http://localhost/Final_Project/` in your browser.

## Configuration Notes

- Do not commit real credentials. Keep any private keys or passwords out of the repo.
- If your Apache runs on a different port, use `http://localhost:<port>/Final_Project/`.
- The animated background is built from a separate React + Vite project. Only the built output is included here.

## Author

**Gabriel Philip M. Shea** ([@gabphilshea](https://github.com/gabphilshea))
BS Information Technology, Bicol University

## Acknowledgements

- [React Bits](https://reactbits.dev) for the Gradient ASCII background
- [Bootstrap](https://getbootstrap.com)
- YouTube, Spotify, Quizlet, and JDoodle for embedded content
