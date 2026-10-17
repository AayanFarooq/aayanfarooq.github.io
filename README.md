# Aayan Hub — Personal Portfolio Website

A modern, fully responsive one-page portfolio website for a **Graphic Designer**, built with HTML, CSS, JavaScript, Bootstrap and jQuery. It showcases services, portfolio work, skills and a working contact section — with smooth animations, sliders and a clean light design.

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap_5-7952B3?style=flat&logo=bootstrap&logoColor=white)
![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=flat&logo=jquery&logoColor=white)

## 🔗 Live Demo

**Live Site:** https://aayanfarooq.github.io/

## ✨ Features

- Fully responsive design — mobile, tablet and desktop
- Animated hero section with typed text effect
- Preloader, sticky header and smooth one-page scrolling navigation
- Scroll-triggered animations (GSAP, ScrollTrigger and WOW)
- Services and portfolio cards with hover effects
- Skills section with animated progress and tool showcase
- Swiper sliders and lightbox / popup video support
- Back-to-top button and mobile menu
- Contact form with AJAX submit (see the contact form note below)

## 📄 Sections

1. **Home** — intro, title and banner
2. **Services** — what I offer
3. **Portfolio** — selected design work
4. **Resume / Skills** — experience and tools
5. **Contact** — contact details and message form

## 🎨 Services

- Graphic Design
- Social Media Design
- Thumbnail Design
- Branding & Visual Identity
- Marketing & Promotional Design
- AI-Assisted Creative Design

## 🛠 Tools

Adobe Photoshop · Figma · Adobe XD · and more design tools shown on the site.

## 💻 Tech Stack

| Part | Technology |
| --- | --- |
| Structure | HTML5 |
| Styling | CSS3, Bootstrap 5, custom `style.css` |
| Scripting | JavaScript, jQuery 3.7 |
| Animation | GSAP, ScrollTrigger, WOW.js, Typed.js |
| Sliders / Popups | Swiper, Lightbox, Magnific Popup |
| Icons | Font Awesome 6 |
| Contact (PHP hosting only) | PHP `mailer.php` |

## 📁 Project Structure

```
├── index.html                  # The one-page website (only page)
├── mailer.php                  # Contact form mailer (PHP hosting only)
└── assets/
    ├── css/
    │   ├── style.css           # Main custom styles
    │   ├── vendor/             # Bootstrap, animation, spacing
    │   └── plugins/            # Font Awesome, Swiper, lightbox, etc.
    ├── js/
    │   ├── main.js             # Main custom script
    │   ├── vendor/             # jQuery, Bootstrap bundle
    │   └── plugins/            # GSAP, Swiper, typed, lightbox, etc.
    ├── fonts/                  # Font Awesome font files
    └── images/                 # Logo, banner, portfolio and shape images
```

## 🚀 Getting Started

No build step and no installation is needed — it is a static website.

**Option 1 — just open it**
Download or clone this repository and open `index.html` in your browser.

**Option 2 — local server (recommended)**
With VS Code, install the *Live Server* extension, then right-click
`index.html` → **Open with Live Server**.

**Clone:**
```bash
git clone https://github.com/aayanfarooq/aayanfarooq.github.io.git
```

## 🌐 Deploy on GitHub Pages

1. Push this code to a GitHub repository.
2. Open the repository → **Settings** → **Pages**.
3. In **Build and deployment**, choose **Deploy from a branch**,
   select the `main` branch and the `/ (root)` folder, then **Save**.
4. Wait a minute — the site is live at
   `https://aayanfarooq.github.io/`

## ✉️ Contact Form — Important Note

GitHub Pages is **static hosting**: it runs HTML, CSS and JavaScript only,
so the included `mailer.php` can **not** send email from GitHub.

- To receive messages while the site is on GitHub, connect the form to a
  free form service such as **Web3Forms** or **Formspree** (put their
  endpoint in the form `action` and add your access key).
- If you host the site on PHP hosting (for example Hostinger or
  InfinityFree), upload `mailer.php` in the same folder as `index.html`
  and the form works as-is. Messages are sent to the email set at the
  top of `mailer.php`.

## 📬 Contact

- **Email:** aayanfarooq48@gmail.com
- **Facebook / Instagram / LinkedIn / Twitter:** links are in the website footer

## 🙏 Credits

Website design based on the Aayan Farooq personal portfolio,
customised with original content, services and portfolio work.

---

⭐ If you like this portfolio, give the repository a star!
