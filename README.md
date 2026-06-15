# YourDoctors - Healthcare Management CMS

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

A comprehensive healthcare management content management system built with Laravel 12, featuring a modern admin dashboard, multi-page frontend, and complete CRUD operations for managing doctors, services, departments, and more.

## 📋 Table of Contents

- [Features](#features)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database & Models](#database--models)
- [Project Structure](#project-structure)
- [Core Features](#core-features)
- [Admin Panel Features](#admin-panel-features)
- [Frontend Features](#frontend-features)
- [API Routes](#api-routes)

## ✨ Features

### Core Functionality
- **Multi-user Admin System** - Secure admin authentication with password recovery
- **Doctor Management** - Add, edit, and manage healthcare providers
- **Service Management** - Organize and display healthcare services
- **Department Management** - Manage hospital/clinic departments
- **Package Management** - Create pricing packages with features
- **Photo & Video Galleries** - Showcase media content
- **Blog System** - Write and manage posts with categories and comments
- **FAQ Management** - Create and manage frequently asked questions
- **Settings Management** - Customize site-wide configurations
- **Captcha Integration** - Google reCAPTCHA support for forms
- **Subscriber System** - Newsletter subscription with email verification
- **Contact Management** - Handle contact form submissions
- **Appointment System** - Appointment booking via email
- **Advanced Search** - Search across posts, doctors, and services
- **Comments & Replies** - Blog post interaction system
- **Multi-language Support** - Translation management system

### Technical Features
- Built with **Laravel 12** framework
- **MySQL/SQLite** database support
- **Tailwind CSS 4** for styling
- **Vite** for asset bundling
- RESTful API routes
- Database migrations and seeders
- Admin middleware protection
- Email notifications (Websitemail)
- File upload handling

## 🔧 System Requirements

- **PHP:** 8.2 or higher
- **Composer:** Latest version
- **Node.js:** 16.x or higher (for Vite)
- **npm:** 9.x or higher
- **Database:** MySQL 8.0+ or SQLite
- **Web Server:** Apache/Nginx

## 📦 Installation

### 1. Clone the Repository
```bash
git clone <repository-url>
cd yourdoctors
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install JavaScript Dependencies
```bash
npm install
```

### 4. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Database Configuration
Edit `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yourdoctor
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Run Migrations
```bash
php artisan migrate
```

### 7. Seed Admin User (Optional)
```bash
php artisan db:seed --class=AdminSeeder
```

### 8. Build Assets
```bash
npm run build
# or for development
npm run dev
```

### 9. Start Development Server
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## ⚙️ Configuration

### Mail Configuration
Edit `.env` for email settings:
```env
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=your-smtp-port
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_FROM_ADDRESS=your-email
```

### Captcha Configuration
Set in `config/captcha.php`:
```env
CAPTCHA_SECRET=your-secret-key
CAPTCHA_SITEKEY=your-site-key
```

### Application Settings
- **Admin Login:** `/admin/login`
- **Admin Dashboard:** `/admin/dashboard`
- **Home Page:** `/`

## 📊 Database & Models

### Core Models
| Model | Purpose |
|-------|---------|
| `Admin` | Admin user accounts |
| `Doctor` | Healthcare providers |
| `Department` | Hospital/Clinic departments |
| `Service` | Healthcare services |
| `Package` | Pricing packages |
| `PackageFeature` | Features associated with packages |
| `Post` | Blog posts |
| `PostCategory` | Blog post categories |
| `Comment` | Blog post comments |
| `Reply` | Comment replies |
| `Photo` | Photo gallery items |
| `Video` | Video gallery items |
| `Slider` | Homepage slider images |
| `Faq` | Frequently asked questions |
| `Feature` | Features (home page) |
| `Subscriber` | Newsletter subscribers |
| `CounterItem` | Homepage counter statistics |
| `PageItem` | Page configuration settings |
| `Setting` | Global site settings |
| `Menu` | Navigation menu management |

## 📁 Project Structure

```
yourdoctors/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/              # Admin controllers
│   │   │   ├── Front/              # Frontend controllers
│   │   │   ├── Controller.php       # Base controller
│   │   │   └── FrontAndBackEndBladeExtractController.php
│   │   └── Middleware/
│   ├── Mail/
│   │   └── Websitemail.php          # Email notifications
│   ├── Models/                      # Eloquent models
│   └── Providers/
├── config/                          # Configuration files
├── database/
│   ├── migrations/                  # Database migrations
│   ├── seeders/                     # Database seeders
│   └── factories/                   # Model factories
├── public/
│   ├── index.php
│   ├── dist-admin/                  # Admin panel assets
│   ├── dist-front/                  # Frontend assets
│   └── uploads/                     # User uploads
├── resources/
│   ├── css/                         # Stylesheets
│   ├── js/                          # JavaScript
│   └── views/
│       ├── admin/                   # Admin templates
│       ├── front/                   # Frontend templates
│       ├── errors/                  # Error pages
│       └── email.blade.php          # Email template
├── routes/
│   ├── web.php                      # Web routes
│   └── console.php                  # Console commands
├── storage/                         # Application storage
├── tests/                           # Unit & feature tests
├── vendor/                          # Composer packages
├── vite.config.js                   # Vite configuration
├── composer.json                    # PHP dependencies
└── package.json                     # Node dependencies
```

## 🎯 Core Features

### Admin Panel (`/admin`)

**Dashboard**
- View statistics for all content
- Quick links to management sections
- Total counts for doctors, services, photos, etc.

**Authentication**
- Secure login system
- Password recovery via email
- Reset password functionality
- Profile management

**Content Management**
- CRUD operations for all content types
- Image upload capabilities
- Rich text editing
- Slug auto-generation
- Status toggling

### Frontend

**Public Pages**
- Home Page - Hero, features, testimonials, doctors, blog
- About Page - Company information with featured doctors
- Services - List and detailed service pages
- Departments - Department listings and details
- Doctors - Doctor directory with profiles
- Blog - Blog posts with categories and search
- Photo Gallery - Image gallery
- Video Gallery - Video gallery
- Pricing - Package and pricing display
- FAQ - Frequently asked questions
- Contact - Contact form with email submission
- Appointment - Appointment booking form

**Features**
- Responsive design
- Search functionality
- Blog comments and replies
- Newsletter subscription
- Contact form submissions
- Appointment requests
- Tag-based filtering

## 👨‍💼 Admin Panel Features

### Dashboard
```
GET /admin/dashboard
```
Displays total counts and quick statistics.

### Doctor Management
- `GET /admin/doctor/index` - List all doctors
- `GET /admin/doctor/create` - Create new doctor
- `POST /admin/doctor/store` - Store doctor
- `GET /admin/doctor/edit/{id}` - Edit doctor
- `POST /admin/doctor/update/{id}` - Update doctor
- `GET /admin/doctor/destroy/{id}` - Delete doctor

### Service Management
- `GET /admin/service/index` - List services
- `GET /admin/service/create` - Create service
- `POST /admin/service/store` - Store service
- `GET /admin/service/edit/{id}` - Edit service
- `POST /admin/service/update/{id}` - Update service
- `GET /admin/service/destroy/{id}` - Delete service

### Department Management
- `GET /admin/department/index` - List departments
- `GET /admin/department/create` - Create department
- `POST /admin/department/store` - Store department
- `GET /admin/department/edit/{id}` - Edit department
- `POST /admin/department/update/{id}` - Update department
- `GET /admin/department/destroy/{id}` - Delete department

### Package Management
- `GET /admin/package/index` - List packages
- `GET /admin/package/create` - Create package
- `POST /admin/package/store` - Store package
- `GET /admin/package/edit/{id}` - Edit package
- `POST /admin/package/update/{id}` - Update package
- `GET /admin/package/destroy/{id}` - Delete package
- `GET /admin/package/feature/index/{id}` - Manage features
- `POST /admin/package/feature/store/{id}` - Add feature
- `GET /admin/package/feature/destroy/{id}` - Remove feature

### Blog Management
- **Posts:** Create, edit, delete blog posts
- **Categories:** Manage post categories
- **Comments:** Moderate and manage comments
- **Replies:** Respond to comments

### Media Management
- **Photos:** Upload and manage photo gallery
- **Videos:** Manage video gallery
- **Sliders:** Manage homepage sliders

### Other Management
- **Testimonials:** Manage patient testimonials
- **FAQs:** Create and manage FAQs
- **Features:** Homepage feature management
- **Subscribers:** View and export subscribers
- **Settings:** Global site configuration
- **Page Items:** Per-page settings (items per page, etc.)
- **Counter Items:** Homepage statistics
- **Translations:** Multi-language support
- **Menus:** Navigation menu management

## 🌐 Frontend Features

### Public Routes

**Home & Pages**
- `GET /` - Homepage
- `GET /about` - About page
- `GET /services` - Services listing
- `GET /service/{slug}` - Service detail
- `GET /departments` - Departments listing
- `GET /department/{slug}` - Department detail
- `GET /doctors` - Doctors directory
- `GET /doctor/{slug}` - Doctor profile
- `GET /pricing` - Pricing packages
- `GET /faq` - FAQ page
- `GET /terms` - Terms & conditions
- `GET /privacy` - Privacy policy

**Media**
- `GET /photo-gallery` - Photo gallery
- `GET /video-gallery` - Video gallery

**Blog**
- `GET /blog` - Blog listing
- `GET /post/{slug}` - Post detail
- `GET /category/{slug}` - Posts by category
- `GET /tag/{name}` - Posts by tag
- `GET /search` - Search results

**Forms & Actions**
- `GET /contact` - Contact page
- `POST /contact-send-email` - Submit contact form
- `GET /appointment` - Appointment page
- `POST /appointment-send-email` - Submit appointment
- `POST /comment-submit` - Submit blog comment
- `POST /reply-submit` - Reply to comment
- `POST /subscriber/send-email` - Subscribe newsletter
- `GET /subscriber/verify/{email}/{token}` - Verify subscription

## 📝 API Routes

### Authentication (Admin)
```
POST /admin/login              - Admin login
POST /admin/login-submit       - Process login
GET  /admin/forget-password    - Forgot password form
POST /admin/forget-password    - Process password reset
GET  /admin/reset-password/{token}/{email}
POST /admin/reset-password/{token}/{email}
GET  /admin/logout             - Admin logout
```

### CRUD Operations (Protected by Admin Middleware)
All admin routes follow pattern:
```
GET  /admin/{resource}/index       - List all
GET  /admin/{resource}/create      - Create form
POST /admin/{resource}/store       - Store
GET  /admin/{resource}/edit/{id}   - Edit form
POST /admin/{resource}/update/{id} - Update
GET  /admin/{resource}/destroy/{id} - Delete
```

Resources: testimonial, faq, photo, video, slider, post-category, post, service, feature, department, package, doctor, page-item, subscriber, setting, counter-item, translation, menu

## 🔐 Security Features

- Admin middleware protection
- Password hashing with Laravel Hash
- CSRF protection
- Email verification for subscribers
- Google reCAPTCHA integration
- Secure password reset tokens

## 🚀 Development Commands

### Development Server with All Services
```bash
composer run dev
```

Runs concurrently:
- Laravel development server
- Queue listener
- Pail logs
- Vite asset bundler

### Build Assets
```bash
npm run build
```

### Dev Mode with Hot Reload
```bash
npm run dev
```

### Run Tests
```bash
composer run test
```

### Optimize (Production)
```bash
php artisan optimize
php artisan config:cache
php artisan route:cache
```

## 📧 Email Notifications

The application uses the `Websitemail` class for sending emails:
- Contact form submissions
- Appointment requests
- Newsletter subscriptions
- Password reset notifications
- Subscriber verification

## 🗄️ Database Migrations

Key migrations:
- Users and authentication tables
- Admin accounts table
- All model tables with appropriate fields
- Proper timestamps and soft deletes where needed

## 🎨 Frontend Styling

Built with:
- **Tailwind CSS 4** - Utility-first CSS framework
- **Custom CSS** - Additional styling in resources/css
- **Responsive Design** - Mobile-first approach

## 📦 Dependencies

### PHP Packages
- `laravel/framework: ^12.0` - Core framework
- `laravel/tinker: ^2.10.1` - REPL tool
- `mews/captcha: ^3.4` - reCAPTCHA integration

### Node Packages
- `tailwindcss: ^4.0.0` - CSS framework
- `@tailwindcss/vite: ^4.0.0` - Vite plugin
- `laravel-vite-plugin: ^1.2.0` - Vite integration
- `axios: ^1.8.2` - HTTP client
- `vite: ^6.2.4` - Build tool

## 🔗 Useful Links

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com)
- [Vite Documentation](https://vitejs.dev)
- [MySQL Documentation](https://dev.mysql.com/doc)

## 📄 License

MIT License - This project is open source and available under the MIT License.

## 👨‍💻 Development Tips

1. **Hot Module Replacement:** Use `npm run dev` for live reload
2. **Database Debugging:** Use `DB::enableQueryLog()` in code
3. **Admin Testing:** Default credentials in AdminSeeder
4. **Email Testing:** Configure Mailtrap for development emails
5. **Optimization:** Run `php artisan optimize:clear` if issues occur

## 🆘 Troubleshooting

### Application Not Starting
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Database Connection Issues
- Verify `.env` database credentials
- Ensure MySQL/SQLite is running
- Run migrations: `php artisan migrate`

### Asset Issues
- Clear cache: `npm cache clean --force`
- Rebuild: `npm run build`
- Restart dev server

---

**Built with ❤️ using Laravel 12**

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
