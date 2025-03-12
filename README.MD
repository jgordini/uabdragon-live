# UAB Dragon - A Tailwind CSS Block Theme for WordPress

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Status: Under Construction](https://img.shields.io/badge/Status-Under%20Construction-red)](https://github.com/uab/uabdragon)

**UAB Dragon** is a modern, accessible, and customizable WordPress block theme built with the power of Tailwind CSS v4. It leverages the best of both [TailPress](https://github.com/jeffreyvr/tailpress) and [Frost](https://github.com/wpe-bp/frost-wp), incorporating UAB's (University of Alabama at Birmingham) branding guidelines for a unique and cohesive look. This theme provides a solid foundation for building beautiful, responsive websites using the WordPress block editor (Gutenberg).

## Key Features

* **Tailwind CSS v4 Integration:** UAB Dragon uses the latest Tailwind CSS (v4) for rapid, utility-first styling. This means you can easily customize the theme's appearance using Tailwind's extensive class system directly within the WordPress editor.
* **Full Block Editor Support:** Designed from the ground up for the WordPress block editor, ensuring seamless compatibility and a smooth editing experience. Take full advantage of core blocks and extend the editor with your own custom blocks.
* **UAB Branding:** Incorporates UAB's official color palette (UAB Green, Campus Green, Loyal Yellow, Blaze Gold), fonts (Aktiv Grotesk and Kulturista), and spacing guidelines, providing a consistent brand identity.
* **Accessibility-First Design:** Built with accessibility in mind, adhering to WCAG guidelines to ensure your website is usable by everyone. Includes proper semantic HTML, ARIA attributes, and keyboard navigation support.
* **Performance Optimized:** Focuses on performance with minimal CSS and JavaScript, resulting in fast loading times and an excellent user experience. Uses Vite for asset bundling and optimization.
* **Starter Patterns:** Comes with a collection of pre-designed block patterns, inspired by Frost, to help you quickly build common page sections like headers, footers, call-to-actions, pricing tables, team sections, and more. These patterns are all adapted to UAB's branding.
* **Customizable `theme.json`:** Easily control global styles, color palettes, font sizes, and layout settings through the `theme.json` file. This allows for consistent styling across your entire site.
* **Developer-Friendly:** Provides a clean and well-organized codebase, making it easy to extend and customize the theme to your specific needs.
* **Responsive Design:** Fully responsive out of the box, ensuring your website looks great on all devices, from mobile phones to large desktops.
* **SEO Optimized:** Uses semantic HTML and best practices for search engine optimization.

## Prerequisites

* **WordPress:** Requires WordPress 5.9 or later (6.0+ recommended). Fully compatible with the block editor.
* **Node.js and npm:** Required for development and building assets. (Node.js 16+ and npm 8+ recommended).
* **PHP:** Requires PHP 7.4 or later (8.0+ recommended).

## Installation

1. **Download:** Download the latest release of the UAB Dragon theme as a `.zip` file from the [GitHub repository](https://github.com/jgordini/uabdragon-live). *Do not clone the repository directly into your `themes` folder unless you are actively developing the theme.*
2. **Upload:** In your WordPress admin dashboard, go to **Appearance > Themes > Add New**. Click "Upload Theme" and select the downloaded `.zip` file.
3. **Activate:** Once uploaded, click "Activate" to enable the UAB Dragon theme.

## Development

To customize and extend the theme, you'll need to set up a local development environment:

1. **Clone the Repository:** Clone the repository to your local machine:

   ```bash
   git clone https://github.com/jgordini/uabdragon-live.git
   ```
   Move the cloned directory into your `wp-content/themes` directory.

2. **Install Dependencies:** Navigate to the theme directory in your terminal and run:

   ```bash
   npm install
   ```

3. **Start Development Server:** Run the development server with:

   ```bash
   npm run dev
   ```

   This will watch for changes in your CSS and JavaScript files and automatically rebuild them. It also provides hot reloading in your browser.

4. **Build for Production:** When you are ready to deploy your changes, build the optimized assets for production:

   ```bash
   npm run build
   ```

## File Structure

- `/assets/` - Contains fonts, images, and other static files
- `/css/` - Contains compiled CSS files
- `/js/` - Contains compiled JavaScript files
- `/parts/` - Template parts for headers, footers, etc.
- `/patterns/` - Block patterns for pre-designed content sections
- `/resources/` - Source files for CSS and JavaScript
- `/templates/` - Page templates for different content types

## Customization

### `theme.json`

The `theme.json` file is the central hub for configuring many aspects of your theme. You can modify:

* **Colors:** Define your color palette (UAB branding is already included).
* **Fonts:** Specify font families and sizes.
* **Layout:** Control content width and wide-width settings.
* **Block Styles:** Customize the default appearance of various blocks.
* **Spacing:** Set spacing presets.
* **Custom CSS Variables:** Create your own CSS custom properties for use in your styles.

### Tailwind CSS

* **Utility Classes:** Use Tailwind's utility classes directly in the block editor to style elements. For example, add `text-uab-green`, `bg-campus-green`, `py-4`, `font-bold`, etc. to your blocks.
* **`app.css`:** For more complex styles or custom components, edit the `resources/css/app.css` file. Use `@layer components` and `@layer utilities` to organize your custom styles.
* **`editor-style.css`:** Customize the styles within the WordPress editor by modifying `resources/css/editor-style.css`. This ensures that the editor preview closely matches the front-end appearance.
* **`postcss.config.js`:** Configure PostCSS plugins. The theme includes `postcss-import`, `postcss-nested`, and `postcss-nested-ancestors`.

### PHP Files

* **`functions.php`:** Add custom functions, enqueue scripts and styles, and register theme support features.
* **Template Files (`index.php`, `single.php`, `page.php`, `404.php`, `header.php`, `footer.php`, `comments.php`):** Modify the structure and layout of your theme's templates.
* **`template-parts` directory:** Contains reusable template parts like `content.php` (for displaying post content) and potentially others.

### Patterns

* **`/patterns` Directory:** Add, remove, or modify block patterns. Each pattern is a PHP file that defines a reusable block layout. The `update-pat.php` file is a *utility script* (see below) and is *not* a pattern file.

### Utility Script: `update-pat.php`

The `update-pat.php` file is a *one-time use* script designed to help you migrate existing Frost patterns to UAB Dragon's branding and naming conventions. It's *not* part of the theme itself and should be used *carefully* and *only once* during the initial setup/migration:

1. **Place the Script:** Put `update-pat.php` in the *root* of your theme directory (where `functions.php` is).
2. **Run the Script:** Execute it from the command line: `php update-pat.php`.
3. **Verify:** *Carefully* check the `/patterns` directory to make sure the changes are correct. The script creates backup files (`.bak`), so you can revert if needed.
4. **Remove:** Once you're satisfied, *delete* `update-pat.php` from your theme. It's not needed after the initial conversion.

*Important:* This script is designed for a specific migration task. Do not run it repeatedly, and always back up your files before running it.

### Adding Google Fonts

The theme is already configured to load UAB's brand fonts (Aktiv Grotesk and Kulturista) from Google Fonts. If you need to add or change fonts, modify the `uabdragon_google_fonts_url()` function in `functions.php`.

## Block Patterns

UAB Dragon includes numerous block patterns for:

- Headers
- Footers
- Call-to-action sections
- Team displays
- Pricing tables
- Testimonials
- Hero sections
- And more!

These patterns are specifically styled to match UAB's branding and can be accessed from the pattern inserter in the block editor.

## Theme Colors

UAB Dragon comes with UAB's brand colors predefined in the theme.json file:

- UAB Green (`--wp--preset--color--uab-green`) - #1A5632
- Campus Green (`--wp--preset--color--campus-green`) - #90D408
- Loyal Yellow (`--wp--preset--color--loyal-yellow`) - #FFD400
- Blaze Gold (`--wp--preset--color--blaze-gold`) - #FDB913
- White (`--wp--preset--color--white`) - #FFF
- Black (`--wp--preset--color--black`) - #000
- Grey (`--wp--preset--color--grey`) - #575757

## Performance Considerations

UAB Dragon is built with performance in mind:

- Minimal CSS output through Tailwind's JIT compiler
- Optimized JavaScript with Vite
- Proper asset loading with WordPress enqueue functions
- Responsive images support

## Contributing

We welcome contributions to the UAB Dragon theme! If you find a bug, have a feature request, or want to contribute code, please open an issue or submit a pull request on the [GitHub repository](https://github.com/uab/uabdragon).

## License

UAB Dragon is licensed under the MIT License. See the `LICENSE` file for details.

## Credits

UAB Dragon is built upon:

- [TailPress](https://github.com/jeffreyvr/tailpress) - WordPress theme framework with Tailwind CSS
- [Frost](https://github.com/wpe-bp/frost-wp) - WordPress block theme
- [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework
- [Vite](https://vitejs.dev/) - Frontend build tool
