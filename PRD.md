# **PRODUCT REQUIREMENT DOCUMENT (PRD)**

## **SnD Tour Travel Website**

**Version:** 1.0  
**Date:** 16 Februari 2026  
**Status:** Final  
**Prepared by:** AI Product Assistant  

---

## **1. EXECUTIVE SUMMARY**

### **1.1 Overview**
SnD Tour Travel adalah website travel agency yang berdiri sejak 2017 di Surabaya, menyediakan layanan paket wisata domestik dan Asia (Singapura, Malaysia), outbond, serta catering. Website ini menggabungkan keunggulan visual dari Ashanty Tour, fitur fungsional dari Bayu Buana Travel, dan struktur informatif dari Angkasa Tour & Travel.

### **1.2 Tagline**
**"Liburan Pasti Berangkat"**

### **1.3 Target Audience**
- Keluarga yang mencari paket wisata terencana
- Perusahaan/institusi untuk MICE dan outbond
- Pasangan honeymoon
- Grup religi dan edukasi
- Individual traveler dengan budget fleksibel

---

## **2. BRAND IDENTITY & DESIGN SYSTEM**

### **2.1 Color Palette**

| Color Name | Hex Code | Usage |
|------------|----------|-------|
| **Turquoise / Teal Muda** | `#40E0D0` | Primary Color, CTA buttons, highlights |
| **Teal Gelap / Blue-Teal** | `#008080` | Secondary 1, headers, footer background |
| **Cyan Soft / Light Aqua** | `#E0FFFF` | Secondary 2, subtle backgrounds, hover states |
| **Light Gray / Off-White** | `#F5F5F5` | Neutral background, card backgrounds |
| **Pure White** | `#FFFFFF` | Background, text on dark teal |
| **Dark Gray / Near Black** | `#333333` | Body text color |
| **White (Text)** | `#FFFFFF` | Text on teal gelap backgrounds |

### **2.2 Typography**

| Element | Font | Weight | Size |
|---------|------|--------|------|
| **Heading H1** | Poppins Bold | 700 | 48px / 3rem |
| **Heading H2** | Poppins Bold | 700 | 36px / 2.25rem |
| **Heading H3** | Poppins Bold | 700 | 24px / 1.5rem |
| **Body Text** | Montserrat | 400 | 16px / 1rem |
| **Body Bold** | Montserrat | 600 | 16px / 1rem |
| **Caption/Small** | Montserrat | 400 | 14px / 0.875rem |
| **Button Text** | Poppins Bold | 700 | 16px / 1rem |

### **2.3 Design Principles**
- **Modern & Clean:** Layout yang rapi dengan whitespace yang cukup
- **Trustworthy:** Warna teal yang menenangkan dan profesional
- **Action-Oriented:** CTA yang jelas dan mudah ditemukan
- **Responsive:** Optimal di desktop, tablet, dan mobile
- **Animated:** Efek transisi dan hover untuk pengalaman interaktif

---

## **3. INFORMATION ARCHITECTURE**

### **3.1 Site Map**

```
Homepage
├── Profil
│   ├── Tentang Kami
│   ├── Visi & Misi
│   └── Nilai-Nilai Perusahaan
├── Layanan Utama
│   ├── Paket Wisata
│   │   ├── Domestik (Indonesia)
│   │   └── Asia (Singapura, Malaysia)
│   ├── Outbond
│   └── Catering
├── Blog/Artikel
│   ├── Tips Traveling
│   ├── Fun Facts Destinasi
│   └── Panduan Wisata
├── Galeri
└── Kontak
    └── Lokasi Kantor
```

### **3.2 Navigation Structure (Sticky Header)**

| Menu Item | Submenu | Description |
|-----------|---------|-------------|
| **HOME** | - | Kembali ke homepage |
| **PROFIL** | Tentang Kami, Visi & Misi | Informasi perusahaan |
| **PAKET WISATA** | Domestik, Asia | Kategori paket tour |
| **OUTBOND** | - | Layanan outbond |
| **CATERING** | - | Layanan catering & EO |
| **BLOG** | - | Artikel & tips |
| **GALERI** | - | Foto-foto tour |
| **KONTAK** | - | Informasi kontak & peta |

---

## **4. PAGE SPECIFICATIONS**

### **4.1 HOMEPAGE**

#### **4.1.1 Hero Section**
- **Type:** Image Carousel/Slider (Auto-play, manual navigation)
- **Content:** 3-5 slides dengan gambar destinasi unggulan
- **Overlay:** Gradient teal gelap transparan (60% opacity)
- **Headline:** "Liburan Pasti Berangkat" (Poppins Bold, White, 48px)
- **Subheadline:** Deskripsi singkat layanan (Montserrat, White, 18px)
- **CTA Buttons:**
  - Primary: "TENTANG KAMI" (link ke Profil) - Teal Muda bg, Dark text
  - Secondary: "CARI TOUR" (scroll ke search section) - Transparent border white

#### **4.1.2 Search Tour Section**
- **Position:** Di bawah hero atau sticky di header
- **Fields:**
  - Dropdown: Pilih Kategori (Semua, Domestik, Asia, Outbond, Catering)
  - Input: Destinasi/Kata Kunci
  - Button: "CARI" (Teal Gelap bg, White text)
- **Functionality:** Filter paket berdasarkan input

#### **4.1.3 Value Proposition Section**
- **Layout:** 3 columns grid
- **Background:** White atau Light Gray
- **Content:**

| No | Icon | Title | Description |
|----|------|-------|-------------|
| 1 | Calendar/Check icon | **Efisien & Terencana** | Perjalanan sudah dijadwalkan rapi sehingga waktu lebih optimal dan tidak membingungkan. |
| 2 | Wallet/Adjust icon | **Fleksibel Sesuai Budget** | Paket bisa disesuaikan dengan anggaran tanpa mengorbankan kenyamanan dan kebahagiaan. |
| 3 | Handshake/Settings icon | **Custom & Transparan** | Destinasi, penginapan, dan transportasi disepakati bersama sesuai kebutuhan klien. |

- **Style:** Icon dalam circle teal muda, title Poppins Bold, deskripsi Montserrat

#### **4.1.4 Paket Terbaru/Unggulan Section**
- **Heading:** "Paket Terbaru" (Poppins Bold, Teal Gelap)
- **Subheading:** "Temukan pengalaman wisata terbaik bersama kami"
- **Layout:** Grid 3-4 kolom (responsive)
- **Card Content:**
  - Gambar destinasi (aspect ratio 16:9)
  - Label Promo (optional, badge merah/oranye jika ada)
  - Nama Paket (Poppins Bold, 18px)
  - Destinasi (Montserrat, 14px, gray)
  - Durasi (Montserrat, 14px, teal) - contoh: "5D4N"
  - Harga: "START FROM" (small text) + Rp X.XXX.XXX (Poppins Bold, Teal Gelap)
  - Maskapai logo (small, bottom right)
  - Hover: Shadow effect, slight scale up
- **CTA:** "LIHAT DETAIL" button (outline teal)
- **Navigation:** "VIEW MORE" link ke halaman Paket Wisata

#### **4.1.5 Tour Spesial Liburan Section**
- **Heading:** "Tour Spesial Liburan"
- **Subheading:** "Paket khusus untuk momen berharga Anda"
- **Categories:** Tahun Baru, Natal, Idul Fitri, Libur Sekolah, Imlek
- **Layout:** Horizontal scroll atau grid
- **Card Style:** Sama dengan Paket Terbaru

#### **4.1.6 Kategori Wisata Section**
- **Heading:** "Jelajahi Kategori Wisata"
- **Categories (Grid 2x3 atau 3x2):**
  1. Wisata Religi
  2. Wisata Edukasi
  3. Bulan Madu
  4. Wisata Keluarga
  5. Wisata Perusahaan
  6. Wisata Adventure
- **Style:** Card dengan background image, overlay teal gelap, text white center

#### **4.1.7 Blog/Artikel Section**
- **Heading:** "Tips & Inspirasi Perjalanan"
- **Layout:** 3 artikel terbaru dalam grid
- **Card Content:**
  - Thumbnail image
  - Kategori (small badge)
  - Judul Artikel (Poppins Bold, 18px)
  - Excerpt (2 baris, Montserrat)
  - Tanggal publikasi
  - "BACA SELENGKAPNYA" link
- **CTA:** "LIHAT SEMUA ARTIKEL"

#### **4.1.8 Testimoni Section**
- **Heading:** "Apa Kata Mereka?"
- **Layout:** Carousel/Slider
- **Card Content:**
  - Foto profil (circle, placeholder jika tidak ada)
  - Nama
  - Paket yang diambil
  - Rating (bintang 1-5)
  - Isi testimoni
- **Navigation:** Dot indicators + arrow prev/next
- **Auto-play:** Yes, 5 detik

#### **4.1.9 Partner & Klien Section**
- **Heading:** "Partner Maskapai"
- **Layout:** Grid statis (4-6 logo per row)
- **Content:** Logo-maskapai (Garuda, Lion Air, Citilink, AirAsia, Singapore Airlines, Malaysia Airlines)
- **Style:** Grayscale default, color on hover
- **Opacity:** 70% default, 100% on hover

- **Heading:** "Klien Kami"
- **Layout:** Grid statis
- **Content:** Logo perusahaan yang pernah menggunakan jasa

#### **4.1.10 Cara Pesan Section**
- **Heading:** "Cara Memesan"
- **Layout:** 3-4 steps horizontal dengan connector line
- **Steps:**
  1. **Pilih Paket** — Jelajahi dan pilih paket wisata yang diinginkan
  2. **Hubungi Kami** — Chat WhatsApp atau email untuk konsultasi
  3. **Sesuaikan** — Diskusikan detail dan penyesuaian kebutuhan
  4. **Berangkat** — Konfirmasi pembayaran dan liburan pasti berangkat!
- **Style:** Number in circle teal, title bold, description regular

#### **4.1.11 CTA Banner Section**
- **Background:** Teal Gelap dengan pattern subtle
- **Content:**
  - "Siap Berlibur?" (Poppins Bold, White, 32px)
  - "Hubungi kami sekarang untuk mendapatkan penawaran terbaik" (Montserrat, Light Aqua)
  - Button: "HUBUNGI KAMI SEKARANG" (Teal Muda bg, Dark text) → link ke WhatsApp

---

### **4.2 HALAMAN PAKET WISATA (Domestik & Asia)**

#### **4.2.1 Header Section**
- **Background:** Gambar destinasi dengan overlay
- **Heading:** "Paket Wisata [Kategori]"
- **Breadcrumb:** Home > Paket Wisata > [Kategori]

#### **4.2.2 Filter/Search Section**
- **Layout:** Sidebar atau top bar
- **Filters:**
  - Kategori: Semua, Religi, Edukasi, Bulan Madu, Keluarga, Perusahaan, Adventure
  - Durasi: 1-3 hari, 4-7 hari, 7+ hari
  - Harga: Range slider
- **Sort:** Terbaru, Harga Terendah, Harga Tertinggi

#### **4.2.3 Grid Paket**
- **Layout:** Grid 3 kolom (desktop), 2 (tablet), 1 (mobile)
- **Card:** Sama dengan homepage
- **Pagination:** Load more atau numbered pagination

---

### **4.3 HALAMAN DETAIL PAKET**

#### **4.3.1 Breadcrumb**
Home > Paket Wisata > [Kategori] > [Nama Paket]

#### **4.3.2 Header Info**
- **Nama Paket** (H1, Poppins Bold, 32px)
- **Kategori badge** (Religi/Edukasi/etc)
- **Label Promo** (jika ada)
- **Durasi** + **Maskapai**

#### **4.3.3 Gallery Section**
- **Layout:** Main image large + thumbnail grid (4-6 foto)
- **Interaction:** Click to enlarge/lightbox
- **Style:** Rounded corners, shadow

#### **4.3.4 Price & CTA Box (Sticky sidebar atau top section)**
- **Harga:** "START FROM" + Rp X.XXX.XXX (Large, Teal Gelap, Poppins Bold)
- **Note:** "Harga dapat berubah sesuai musim dan ketersediaan"
- **Button:** "HUBUNGI KAMI" (Teal Muda bg, full width) → WhatsApp link dengan pesan template: "Halo SnD Tour, saya tertarik dengan paket [Nama Paket]"

#### **4.3.5 Deskripsi Paket**
- **Tabs atau Section:**
  - **Overview:** Deskripsi umum pengalaman
  - **Destinasi:** Tempat yang dikunjungi (list)
  - **Fasilitas:** Include/exclude (checklist style)
  - **Syarat & Ketentuan:** Pembatalan, reschedule, dll

#### **4.3.6 Related Packages**
- **Heading:** "Paket Lainnya"
- **Layout:** 3 cards horizontal scroll

---

### **4.4 HALAMAN OUTBOND**

#### **4.4.1 Content**
- **Hero:** Gambar aktivitas outbond
- **Deskripsi Layanan:** Penjelasan program outbond yang ditawari
- **Jenis Program:** Team Building, Leadership, Fun Games, Adventure
- **Galeri Foto:** Dokumentasi kegiatan outbond sebelumnya
- **CTA:** "KONSULTASI OUTBOND" → WhatsApp

---

### **4.5 HALAMAN CATERING**

#### **4.5.1 Content**
- **Hero:** Gambar setup catering/event
- **Layanan:**
  - Nasi Box
  - Paket Buffet
  - Coffee Break
  - Event Organizer
  - Event Skala Besar
  - Seminar/Meeting
- **Galeri:** Foto-foto event yang telah ditangani
- **CTA:** "PESAN CATERING" → WhatsApp

---

### **4.6 HALAMAN BLOG/ARTIKEL**

#### **4.6.1 Blog List Page**
- **Layout:** Grid 2-3 kolom atau masonry
- **Filter by Category:** Tips Traveling, Fun Facts, Panduan Destinasi
- **Search:** Input field untuk mencari artikel
- **Card:** Thumbnail, kategori, judul, excerpt, tanggal, read time

#### **4.6.2 Blog Detail Page**
- **Breadcrumb:** Home > Blog > [Kategori] > [Judul]
- **Header:** Judul, author (optional), tanggal, kategori
- **Featured Image:** Full width
- **Content:** Rich text dengan formatting
- **Share:** Tombol share ke social media (Instagram story/link)
- **Related Articles:** 3 artikel terkait

---

### **4.7 HALAMAN GALERI**

#### **4.7.1 Layout**
- **Masonry grid** atau **uniform grid**
- **Filter:** By kategori (Tour Domestik, Tour Asia, Outbond, Event)
- **Lightbox:** Klik gambar untuk view larger
- **Caption:** Deskripsi singkat per foto

---

### **4.8 HALAMAN KONTAK**

#### **4.8.1 Informasi Kontak**
- **Alamat:** [Placeholder - Kantor Surabaya]
- **WhatsApp:** [Placeholder]
- **Email:** [Placeholder]
- **Jam Operasional:** Senin-Sabtu, 09.00-17.00 WIB

#### **4.8.2 Peta Lokasi**
- **Google Maps Embed:** Lokasi kantor Surabaya
- **Style:** Grayscale atau custom color scheme match brand

#### **4.8.3 CTA**
- **Button WhatsApp:** "CHAT WHATSAPP" (floating style, Teal Muda)
- **Button Email:** "KIRIM EMAIL"

---

## **5. FOOTER SPECIFICATIONS**

### **5.1 Layout:** 4 Columns

| Column 1 | Column 2 | Column 3 | Column 4 |
|----------|----------|----------|----------|
| **Brand** | **Layanan** | **Kategori Tour** | **Kontak** |
| Logo SnD | Paket Wisata | Tour Domestik | Alamat |
| Tagline | Outbond | Tour Asia | WhatsApp |
| Brief desc | Catering | Outbond | Email |
| | Blog | Catering | Instagram icon |
| | Galeri | Wisata Religi | |
| | | Wisata Edukasi | |
| | | Bulan Madu | |
| | | Wisata Keluarga | |

### **5.2 Bottom Bar**
- **Copyright:** © 2024 SnD Tour Travel. All Rights Reserved.
- **Credit:** Design & Development by [Vendor Name]
- **Statistik Pengunjung:**
  - Users Online: [X]
  - Visitors Today: [X]
  - Total Visitors: [X]

---

## **6. GLOBAL COMPONENTS**

### **6.1 Sticky Navigation (Header)**
- **Behavior:** Fixed top, background solid on scroll (from transparent)
- **Logo:** Left aligned
- **Menu:** Center or right aligned
- **CTA:** "HUBUNGI KAMI" button (Teal Muda) - visible on scroll
- **Mobile:** Hamburger menu with slide-in drawer

### **6.2 WhatsApp Floating Button**
- **Position:** Bottom right, fixed
- **Style:** Circle, Teal Muda background, WhatsApp icon white
- **Animation:** Pulse effect
- **Tooltip:** "Chat dengan kami" on hover
- **Link:** Direct to WhatsApp API dengan greeting message

### **6.3 Buttons**

| Type | Background | Text | Border | Hover Effect |
|------|------------|------|--------|--------------|
| **Primary** | Teal Muda (#40E0D0) | Dark Gray | None | Darken 10%, shadow |
| **Secondary** | Transparent | Teal Gelap | 2px Teal Gelap | Fill Teal Gelap, white text |
| **Outline Light** | Transparent | White | 2px White | Fill White, dark text |

### **6.4 Cards**
- **Border Radius:** 12px
- **Shadow:** 0 4px 6px rgba(0,0,0,0.1)
- **Hover Shadow:** 0 10px 20px rgba(0,0,0,0.15)
- **Hover Transform:** translateY(-5px)

---

## **7. FUNCTIONAL REQUIREMENTS**

### **7.1 Search Functionality**
- **Type:** Client-side filtering atau server-side
- **Fields:** Kategori, Destinasi, Keywords
- **Result:** Real-time filter atau submit button
- **Empty State:** "Tidak ada paket yang sesuai" dengan ilustrasi

### **7.2 Image Optimization**
- **Format:** WebP dengan fallback JPG/PNG
- **Lazy Loading:** Yes, untuk performa
- **Responsive Images:** Srcset untuk berbagai ukuran layar

### **7.3 Animation & Interactions**
- **Scroll Animations:** Fade up, fade in on scroll (Intersection Observer)
- **Hover Effects:** Scale, shadow, color transition (0.3s ease)
- **Page Transitions:** Smooth fade between pages (optional)
- **Loading States:** Skeleton screens untuk cards

### **7.4 Responsive Breakpoints**
- **Desktop:** > 1024px
- **Tablet:** 768px - 1024px
- **Mobile:** < 768px
- **Small Mobile:** < 480px

---

## **8. TECHNICAL REQUIREMENTS**

### **8.1 Platform/CMS**
- **Recommended:** WordPress dengan custom theme, atau Headless CMS (Strapi/Contentful) dengan Next.js/React
- **Alternative:** Laravel untuk custom development

### **8.2 Performance**
- **Target Load Time:** < 3 detik (First Contentful Paint)
- **Lighthouse Score:** > 90 untuk Performance, Accessibility, SEO
- **Image Optimization:** WebP, lazy loading, CDN
- **Caching:** Browser caching, server-side caching

### **8.3 SEO Requirements**
- **Meta Tags:** Dynamic meta title, description untuk setiap halaman
- **Schema Markup:** LocalBusiness, TravelAgency, Article (for blog)
- **Sitemap:** XML sitemap otomatis
- **Robots.txt:** Konfigurasi crawl
- **URL Structure:** Clean URL, hyphen-separated, lowercase
  - Contoh: `/paket-wisata/domestik/bali-4d3n`

### **8.4 Security**
- **SSL:** HTTPS wajib
- **Form Protection:** CSRF token jika ada form
- **XSS Protection:** Sanitasi output

---

## **9. CONTENT REQUIREMENTS**

### **9.1 Images Needed**
- **Hero Carousel:** 5 high-quality gambar destinasi (Indonesia, Singapura, Malaysia)
- **Paket Wisata:** Foto per paket (minimum 3-5 foto)
- **Outbond:** Dokumentasi kegiatan team building
- **Catering:** Setup event, makanan, venue
- **Galeri:** 20-30 foto berkualitas baik dari berbagai kegiatan
- **Icons:** Custom atau icon set (FontAwesome/Phosphor Icons)

### **9.2 Copywriting**
- **Tagline:** "Liburan Pasti Berangkat"
- **Headlines:** Benefit-driven, action-oriented
- **Descriptions:** Jelas, informatif, persuasive
- **CTA:** "Hubungi Kami", "Lihat Detail", "Cari Tour"

---

## **10. NON-FUNCTIONAL REQUIREMENTS**

### **10.1 Browser Support**
- Chrome (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Edge (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Mobile)

### **10.2 Accessibility**
- **WCAG 2.1 Level AA** compliance
- **Alt Text:** Semua gambar memiliki alt text deskriptif
- **Keyboard Navigation:** Semua interactive elements accessible via keyboard
- **Color Contrast:** Minimum 4.5:1 untuk text
- **ARIA Labels:** Untuk icon dan interactive elements tanpa text

---

## **11. POST-LAUNCH REQUIREMENTS**

### **11.1 Analytics**
- **Google Analytics 4:** Setup tracking page views, events
- **Google Search Console:** Submit sitemap, monitor indexing
- **Heatmap:** Hotjar atau Microsoft Clarity untuk analisis user behavior

### **11.2 Maintenance**
- **Backup:** Weekly automated backup
- **Updates:** Security patches, plugin/CMS updates
- **Content Update:** Blog post minimal 2x per bulan

---

## **12. APPENDIX**

### **12.1 Reference Websites**
- Ashanty Tour: Visual design, struktur menu, tampilan paket
- Bayu Buana Travel: Search functionality, blog section, carousel, animations
- Angkasa Tour: Footer structure, statistik pengunjung, galeri, maskapai info