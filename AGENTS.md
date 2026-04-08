# AGENTS.md - PHP MVC Pattern Project

## Architecture Overview
This is a basic PHP MVC (Model-View-Controller) application with a simple file-based structure. The project lacks a proper routing system, so pages are accessed directly via PHP files in the root (e.g., `index.php`, `about.php`).

- **Views** (`views/`): Primary content files that render HTML. They include partials like `header.php` and `footer.php` for shared UI components.
- **Controllers** (`controllers/`): Currently empty placeholders for handling business logic.
- **Models** (`models/`): Empty placeholders for data handling (no database integration yet).
- **Partials** (`views/partials/`): Reusable HTML snippets (header, navbar, footer).

Data flow is minimal: views directly include partials and render static content. No dynamic routing or controller mediation exists yet.

## Key Patterns
- **View Inclusion**: Use `include_once __DIR__ . '/path/to/file.php';` for including views and partials. Example: `include_once __DIR__ . '/partials/header.php';` in `views/index.view.php`.
- **Styling**: Tailwind CSS loaded via CDN (`<script src="https://cdn.tailwindcss.com"></script>`). Use utility classes like `bg-blue-200`, `text-xl`, `container mx-auto`.
- **Title Setting**: Set `$title` variable before including header to customize page title. Example: `$title = 'Home Page';` in `views/index.view.php`.
- **Navbar Links**: Hardcoded links in `views/partials/navbar.php` point to root-level PHP files (e.g., `/about.php`). Some links reference non-existent files like `/products.php`, `/register.php`, `/login.php`.

## Development Workflow
- **Running the App**: Served via XAMPP on `localhost/php-mvc-pattern/`. Edit PHP files directly; changes reflect immediately on refresh.
- **No Build Process**: Pure PHP with no compilation, minification, or asset bundling.
- **No Testing Framework**: No automated tests; manual browser testing only.
- **Debugging**: Use `var_dump()` or `echo` for debugging, as no logging system exists.

## Conventions
- File extensions: `.php` for all files, even views.
- Directory structure: Strict separation into `controllers/`, `models/`, `views/`, with `views/partials/` for shared components.
- Path resolution: Always use `__DIR__` for relative includes to ensure portability.
- HTML structure: Views start with `<?php` and mix PHP variables with HTML (e.g., `<?= isset($title) ? $title : 'My PHP App'; ?>`).

## Integration Points
- **External Dependencies**: Tailwind CSS via CDN (`<script src="https://cdn.tailwindcss.com"></script>`), Font Awesome icons via CDN (`<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">`).
- **No Database**: Models are empty; no ORM or connection setup.
- **No APIs**: Pure server-side rendering with no AJAX or external service calls.

Reference files: `views/index.view.php` (complete view example), `views/partials/header.php` (partial inclusion), `views/partials/navbar.php` (styling and links).
