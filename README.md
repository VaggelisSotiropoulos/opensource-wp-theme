# opensource-wp-theme
Word Press Theme for OpenSource UoM website

## Installation

1. Upload the `opensource-uom` folder to `/wp-content/themes/` on your WordPress server.
2. Log in to your WordPress dashboard and go to **Appearance → Themes**, then activate **OpenSource UoM**.

## Setting up the Blog page

To get a separate Blog page working:

1. Go to **Pages → Add New** and create a blank page titled **"Blog"**. Publish it.
2. Go to **Settings → Reading**.
3. Under "Your homepage displays", choose **"A static page"**.
4. Set **Homepage** to any page (or create a blank "Home" page).
5. Set **Posts page** to the **"Blog"** page you just created.
6. Save. WordPress will now use `home.php` for the blog listing and `index.php` for the front page.

The homepage blog section will automatically pull your latest 4 WordPress posts. The "View all posts" link will point to your Blog page.

## Theme files

| File | Purpose |
|---|---|
| `index.php` | Landing page (hero, about, projects, blog, resources, join) |
| `header.php` | Shared navbar (included via `get_header()`) |
| `footer.php` | Shared footer (included via `get_footer()`) |
| `home.php` | Blog listing page (all posts, paginated) |
| `single.php` | Single post view |
| `functions.php` | Theme setup & asset loading |
| `style.css` | Theme metadata |
| `assets/css/main.css` | All styles |
| `assets/js/main.js` | Dark mode, language toggle, scroll animations |
| `assets/images/logo.png` | Navbar & footer logo |
| `assets/images/myuomlogo.png` | MyUoM project card image |

## What was fixed

- **MyUoM logo**: replaced the broken `<span img="...">` with a proper `<img>` tag
- **Resource cards**: fixed unclosed `<a>` tags — each card is now a proper full link
- **Blog section**: now pulls live WordPress posts via `WP_Query` with static fallback
- **Blog page**: new `home.php` template with post grid, thumbnails, categories, and pagination
- **Single post**: new `single.php` template with featured image, tags, prev/next navigation
- **Nav links**: styled correctly on both the front page (scroll buttons) and inner pages (`<a>` links)
- **Dark mode**: fixed so it doesn't crash on pages without theme/lang buttons
- **Animations**: `reveal-left` elements now also get the scroll observer; added `rootMargin` so items near the bottom trigger correctly

## Customisation

- **Colours**: edit the CSS variables in `assets/css/main.css` (`:root` block)
- **Logo**: replace `assets/images/logo.png` (keep the same filename)
- **MyUoM image**: replace `assets/images/myuomlogo.png`
- **Text / translations**: edit the `translations` object in `assets/js/main.js`

## Requirements

- WordPress 6.0 or later
- PHP 7.4 or later
