# WordPress Architecture – Beginner Notes

WordPress is an open-source Content Management System (CMS) written in PHP and
uses MySQL for database management.

---

## Core Components

### 1. WordPress Core
The core files handle:
- User authentication
- Content management
- Database interaction
- Plugin and theme loading

---

### 2. Themes
Themes control the **presentation layer** of a WordPress site.
They define:
- Layout
- Colors
- Fonts
- Page structure

Common theme files:
- index.php
- header.php
- footer.php
- functions.php

---

### 3. Plugins
Plugins extend WordPress functionality without modifying core files.

Examples:
- SEO plugins
- Security plugins
- Custom admin features

Plugins use:
- Actions
- Filters

---

### 4. Database
WordPress uses MySQL with tables such as:
- wp_posts
- wp_users
- wp_comments
- wp_options

---

### 5. Hooks (Actions & Filters)

- **Actions** allow execution of custom code at specific points
- **Filters** allow modification of data before output

Example:
```php
add_action('init', 'custom_function');
