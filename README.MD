# UAB Dragon - A Tailwind CSS Block Theme for WordPress

> **🚧 UNDER CONSTRUCTION 🚧**  
> This theme is currently in active development and not yet ready for production use.
> Expected release: Q2 2025

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

**UAB Dragon** is a modern, accessible, and customizable WordPress block theme built with **Tailwind CSS v4**. It integrates the best features of [TailPress](https://github.com/jeffreyvr/tailpress) and [Frost](https://github.com/wpe-bp/frost-wp), tailored to the University of Alabama at Birmingham (UAB) branding guidelines. This theme empowers users to create responsive, branded websites effortlessly using the WordPress block editor (Gutenberg).

---

## Key Features

- **Tailwind CSS v4 Integration**: Leverage Tailwind's utility-first framework for rapid styling directly in the block editor.
- **Full Block Editor Support**: Optimized for Gutenberg with seamless core block compatibility and extensibility.
- **UAB Branding**: Incorporates UAB's official colors, fonts (Aktiv Grotesk and Kulturista), and spacing for a consistent identity.
- **Accessibility-First Design**: Adheres to **WCAG 2.1 AA** guidelines, ensuring usability with semantic HTML, ARIA attributes, and keyboard navigation.
- **Performance Optimized**: Minimal CSS/JS footprint, powered by Vite for fast load times.
- **Starter Patterns**: Pre-designed block patterns (e.g., headers, footers, pricing tables) styled for UAB branding.
- **Customizable `theme.json`**: Control global styles, colors, fonts, and layouts effortlessly.
- **Developer-Friendly**: Clean, organized codebase for easy customization.
- **Responsive Design**: Looks great on all devices, from mobile to desktop.
- **SEO Optimized**: Built with semantic HTML and best practices for search engines.

---

## Prerequisites

- **WordPress**: Minimum version **5.9**, recommended **6.0+** for full block editor features.
- **Node.js and npm**: Required for development (Node.js 16+, npm 8+ recommended).
- **PHP**: Minimum version **7.4**, recommended **8.0+**.

---

## Installation

1. **Download**: Grab the latest release `.zip` from the [GitHub Releases page](https://github.com/uab/uabdragon/releases).
2. **Upload**: In WordPress, navigate to **Appearance > Themes > Add New > Upload Theme**, then select the `.zip` file.
3. **Activate**: Click **Activate** to enable UAB Dragon.

> **Note**: Do not clone the repository directly into `themes` unless developing; use the release `.zip` for production.

---

## Development

Set up a local environment to customize the theme:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/uab/uabdragon.git /path/to/wp-content/themes/uabdragon
   ```
   Move it to your WordPress `themes` directory.

2. **Install Dependencies**:
   ```bash
   cd /path/to/wp-content/themes/uabdragon
   npm install
   ```

3. **Start Development Server**:
   ```bash
   npm run dev
   ```
   Watches CSS/JS changes with hot reloading.

4. **Build for Production**:
   ```bash
   npm run build
   ```
   Generates optimized assets in `/css` and `/js`.

---

## File Structure

```
uabdragon/
├── /assets/             # Static files (fonts, images)
├── /css/                # Compiled CSS (app.css, editor-style.css)
├── /js/                 # Compiled JavaScript (app.js)
├── /parts/              # Template parts (e.g., header, footer)
├── /patterns/           # Block patterns (e.g., pricing tables)
├── /resources/          # Source CSS/JS files
├── /templates/          # Page templates (e.g., index.php)
├── theme.json           # Global style configuration
├── functions.php        # Theme setup and functions
└── style.css            # Theme metadata
```

- **`/assets/`**: Fonts (e.g., Outfit) and static resources.
- **`/css/`**: Compiled styles for front-end and editor.
- **`/patterns/`**: Reusable block layouts with UAB branding.

---

## Customization

### `theme.json`

Configure global settings in `theme.json`:

- **Colors**: Add or modify the palette:
  ```json
  "color": {
    "palette": [
      { "name": "New Color", "slug": "new-color", "color": "#123456" }
    ]
  }
  ```
- **Fonts**: Adjust font families or sizes:
  ```json
  "typography": {
    "fontFamilies": [
      { "fontFamily": "New Font, sans-serif", "name": "New Font", "slug": "new-font" }
    ]
  }
  ```
- **Layout**: Set content widths (default: 890px content, 1340px wide).

### Tailwind CSS

- **Utility Classes**: Apply directly in the editor, e.g., `<p class="text-uab-green font-bold">Text</p>`.
- **`resources/css/app.css`**: Add custom styles:
  ```css
  @layer components {
    .custom-button {
      @apply bg-campus-green text-white py-2 px-4 rounded;
    }
  }
  ```
- **`resources/css/editor-style.css`**: Match editor and front-end styles.

### PHP Templates

- **`functions.php`**: Add features or enqueue assets.
- **`header.php`/`footer.php`**: Customize site structure.

### Creating a Block Pattern

Add a new pattern in `/patterns/my-pattern.php`:
```php
<?php
/**
 * Title: My Custom Pattern
 * Slug: uabdragon/my-pattern
 * Categories: uabdragon-custom
 */
?>
<!-- wp:paragraph {"className":"text-campus-green"} -->
<p class="text-campus-green">Hello, UAB!</p>
<!-- /wp:paragraph -->
```

---

## Utility Script: `update-pat.php`

A one-time script to migrate Frost patterns to UAB Dragon:

1. Place in the theme root.
2. Run: `php update-pat.php`.
3. Verify changes in `/patterns/` (backups saved as `.bak`).
4. Delete the script after use.

> **Caution**: Use only once during setup; back up files first.

---

## Block Patterns

Access patterns via the block editor's **Pattern Inserter** (click the "+" icon, then "Patterns" tab). Categories include:

- `uabdragon-header`
- `uabdragon-footer`
- `uabdragon-pricing` (e.g., three-column pricing tables)
- `uabdragon-hero`

Insert by selecting a pattern name (e.g., "Pricing table with heading, list, buttons").

---

## Theme Colors

Defined in `theme.json` and usable as classes (e.g., `text-uab-green`):

| Name          | Slug           | Hex      |
|---------------|----------------|----------|
| UAB Green     | `uab-green`    | #1A5632  |
| Campus Green  | `campus-green` | #90D408  |
| Loyal Yellow  | `loyal-yellow` | #FFD400  |
| Blaze Gold    | `blaze-gold`   | #FDB913  |
| White         | `white`        | #FFF     |
| Black         | `black`        | #000     |
| Grey          | `grey`         | #575757  |

**Example**: Apply in the editor:
```html
<p class="has-campus-green-color">Green text</p>
<div class="has-loyal-yellow-background-color">Yellow background</div>
```

---

## Performance Considerations

- **Minimal Assets**: Tailwind JIT reduces CSS size.
- **Benchmarks**: Typical Lighthouse scores: ~95 Performance (desktop, minified assets).
- **Optimization**: Vite bundles JS/CSS efficiently.

---

## Contributing

Contributions are welcome! To contribute:

1. Fork the repository.
2. Create a branch (`git checkout -b feature-name`).
3. Commit changes (`git commit -m "Add feature"`).
4. Push (`git push origin feature-name`).
5. Open a pull request on [GitHub](https://github.com/uab/uabdragon).

See [CONTRIBUTING.md](https://github.com/uab/uabdragon/blob/main/CONTRIBUTING.md) for details.

---

## Credits

- **UAB Web Team**: Theme development and UAB branding integration.
- **[TailPress](https://github.com/jeffreyvr/tailpress)**: Core Tailwind framework.
- **[Frost](https://github.com/wpe-bp/frost-wp)**: Block pattern inspiration.
- **[Tailwind CSS](https://tailwindcss.com/)**: Styling framework.
- **[Vite](https://vitejs.dev/)**: Build tool.

---

## Support

For issues or questions, [open an issue](https://github.com/uab/uabdragon/issues) on GitHub.

---

## License

Licensed under the [MIT License](https://opensource.org/licenses/MIT). See `LICENSE` for details.
