# Matthew Koeberg Business Analyst Portfolio

## What This Is

A WordPress custom theme portfolio website for Matthew Koeberg (NOVATEK LLC) showcasing business/data analyst capabilities. Targets top-tier consulting firms in South Africa (PwC, McKinsey, Deloitte, IQbusiness, Accenture) while also serving as a client acquisition channel for NOVATEK consulting services. Built on existing static HTML template, deployed via Coolify on Hetzner VPS.

## Core Value

Present Matthew Koeberg's work at the professional standard expected by Big 4 / MBB consulting firms in Gauteng — clean, quantified, outcome-focused case studies that demonstrate both technical depth and business impact.

## Requirements

### Validated

(None yet — ship to validate)

### Active

- [ ] Convert existing HTML template to WordPress custom theme
- [ ] Implement case study custom post type with CMS management
- [ ] Hero section with aggregate impact metrics (R835K+ risk identified, 75-90% time savings)
- [ ] 4 flagship case studies (NEC Contract Analysis, Executive Intelligence, Workshop Automation, MANCO)
- [ ] Two-tier case study structure (Problem/Solution/Architecture with secondary categories)
- [ ] Supporting projects section (Tier 2: CyberFrame, 7S HR, Skills Matrix, etc.)
- [ ] Skills/capabilities grid (Technical: SQL, Excel/Power BI, Python, Process Mapping; Business: Analytical Thinking, Communication, Domain Knowledge)
- [ ] Responsive design matching existing template (dark theme, Newsreader/IBM Plex fonts, amber/teal accents)
- [ ] Code samples display with syntax highlighting
- [ ] PDF export capability for job applications
- [ ] South African market positioning (Rand figures, local firm references, Gauteng focus)

### Out of Scope

- Blog/articles functionality — not needed for v1, can add later
- Contact form — defer to v2, use mailto link initially
- Multi-language support — English only
- E-commerce/payments — not a client portal
- User accounts/login — public portfolio only

## Context

**Existing assets:**
- `matthew-portfolio-two-tier.html` — Complete static HTML template with design system
- `case-studies-two-tier-structure.md` — Full content for 4 flagship case studies
- `PORTFOLIO_PROJECT_ANALYSIS.md` — Project selection and skills mapping
- `PORTFOLIO_BUILD_PROMPT.xml` — Detailed build specification with artifact paths

**Design system (from existing template):**
- Primary BG: #0A1828 (dark blue)
- Accent: #F59E0B (amber)
- Secondary: #14B8A6 (teal)
- Fonts: Newsreader (display), IBM Plex Sans (body), IBM Plex Mono (code)
- Category colors: Data (#f59e0b), Systems (#0ea5e9), Execution (#10b981), People (#ec4899), Value (#8b5cf6)

**Case study content ready:**
1. NEC Contract Analysis Assembly Line — 75-80% time reduction, 100+ modules
2. Executive Intelligence System — R555K risk flagged, 10+ sites tracked
3. Workshop Automation System — R280K at risk surfaced, 69% overdue rate discovered
4. Meeting Intelligence & MANCO — 90% documentation time reduction

**Target audience:**
- Primary: HR/recruiters at PwC, Deloitte, McKinsey, IQbusiness, Accenture (Gauteng)
- Secondary: Potential NOVATEK consulting clients (power generation, engineering)

**Infrastructure:**
- Coolify already running on Hetzner VPS
- WordPress to be deployed as container
- Domain TBD

## Constraints

- **Tech stack**: WordPress custom theme (no page builders like Elementor/Divi)
- **Design**: Must match existing HTML template aesthetic — professional, consulting-firm quality
- **Content accuracy**: Only use metrics verified in source documents (no fabrication)
- **Confidentiality**: Client work shown must not expose sensitive business data beyond what's in existing templates
- **Market**: South African Rand formatting, Gauteng positioning, Big 4/MBB standards

## Key Decisions

| Decision | Rationale | Outcome |
|----------|-----------|---------|
| Custom WordPress theme over page builder | Cleaner code, better performance, more control over design fidelity | — Pending |
| Case study CPT with ACF/meta boxes | Allows non-technical CMS updates while maintaining template consistency | — Pending |
| Dark theme retained | Differentiates from typical corporate portfolios, matches existing brand | — Pending |
| Two-tier case study structure | Demonstrates structured thinking (Problem/Solution/Architecture + category depth) | — Pending |
| Dual-purpose positioning | Single site serves both job hunting and client acquisition | — Pending |

---
*Last updated: 2026-02-03 after initialization*
