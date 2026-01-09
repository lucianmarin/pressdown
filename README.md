# Pressdown

A lightweight, flat-file blog engine written in PHP. Pressdown is designed to be simple, fast, and compatible with Jekyll-style Markdown posts.

## Features

- **Flat-file based**: No database required. All posts are stored as Markdown files.
- **Jekyll compatibility**: Supports Jekyll-style YAML front matter for post metadata (title, date, etc.).
- **Markdown support**: Uses [Parsedown](https://parsedown.org/) for fast and reliable Markdown parsing.
- **Dynamic Routing**: Automatically lists and serves posts based on the directory structure.
- **Minimalistic Layout**: Clean and simple HTML5 templates located in the `include/` directory.
- **Static Assets**: Includes SASS source files, compiled CSS, and custom web fonts (Clear Sans, Share Tech Mono).
- **RSS Ready**: Templates include links for RSS feeds (though implementation may vary).

## Project Structure

- `_posts/`: Contains your blog posts in Markdown format, organized by year or in the root.
- `include/`: PHP template fragments (`header.php`, `footer.php`, `menu.php`, `config.php`).
- `libs/`: Core logic, including `Pressdown.php` (the engine) and `Parsedown.php`.
- `static/`: CSS, SASS, fonts, and images.
- `index.php`: The homepage that lists all available posts.
- `post.php`: The page responsible for rendering individual posts.

## Getting Started

### Prerequisites

- PHP 5.4 or higher (supports the built-in web server).

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/lucianmarin/pressdown.git
   cd pressdown
   ```

2. Start the development server:
   ```bash
   php -S localhost:8000
   ```

3. Open your browser and navigate to `http://localhost:8000`.

## Configuration

Site-wide settings can be found in `include/config.php`:

```php
$site_title = "Lucian Marin";
$img_root = "https://yourdomain.com/";
```

## Creating Posts

Add a new Markdown file to the `_posts/` directory. Each file should start with YAML front matter:

```markdown
---
title: "My New Post"
date: "2026-01-09"
---

Your content goes here...
```
