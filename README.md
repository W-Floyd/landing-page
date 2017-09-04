# Landing Page
## A simple landing page for a private VPS

![Screenshot](https://user-images.githubusercontent.com/11786132/30013828-2376249a-918c-11e7-8b33-2a1ab3b2acf4.png)

Copy `template_config.php` to `config.php` and modify existing values. Or be lazy and link across.

***

Requires SQLite for the link database. Create `landingpage.db` in the root of this repo, with a table named `sites`, with fields:
* `extension`
* `description`
* `image`
* `fullname`
* `hidden`

***

Having gotten my first VPS, I wanted a simple way to navigate to the various services I set up on it (Gogs, Netdata, Flood, FreshRSS, etc.)

While not difficult to manually go to each place, I did get a bit tired of it, and wanted to have a go writing in PHP for the first time.

Thus, this repo was formed, from which I use a git hook to automatically update my landing page.

Icon themeing is custom, and probably not that easy for others to work with, so open an issue if you want something.
