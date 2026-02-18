# Matthew Koeberg — Business Analyst Portfolio

Professional portfolio website showcasing Business Analysis and consulting work delivered through NOVATEK LLC.

## Overview

A custom WordPress site featuring 8 detailed case studies from a comprehensive BRIMIS Engineering engagement, covering data analytics, digital transformation, quality management, contract management, HR strategy, and training development.

## Tech Stack

- **CMS**: WordPress (classic PHP theme)
- **Styling**: Custom SCSS architecture (7-1 pattern)
- **Build**: Vite
- **Deployment**: Docker (WordPress + Nginx + MariaDB)
- **Infrastructure**: Traefik reverse proxy with SSL

## Project Structure

```
wp-content/themes/koeberg-portfolio/
├── front-page.php          # Homepage template
├── page-about.php          # About page
├── single-case_study.php   # Case study detail
├── functions.php            # Theme setup & CPT registration
├── template-parts/          # Reusable components
├── assets/scss/             # SCSS source (7-1 pattern)
└── acf-json/                # ACF field configurations
```

## Local Development

```bash
docker-compose up -d
```

Site available at `http://localhost` after container startup.

## Contact

- **Email**: matthew@novatekllc.co.za
- **LinkedIn**: [matthew-koeberg-a76760296](https://linkedin.com/in/matthew-koeberg-a76760296)
- **GitHub**: [MattSlayed](https://github.com/MattSlayed)

---

**Built by Matthew Koeberg — NOVATEK LLC**
