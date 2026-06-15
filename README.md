# [MediCure]

A concise, production-quality web application that solves [Insert problem the project solves — e.g., friction-filled person-to-person payments and manual invoicing] by providing a secure, auditable, and developer-friendly platform for user workflows, payments sandboxing, and invoice management.

---

## 1. Project Title & Catchy Description

**[MediCure]** — engineered to address [Insert core problem]. The system offers role-aware access control, reliable financial ledger semantics for transfers, queued background processing for heavy tasks (PDF generation, emails), and a developer-first API surface for integrations.

## 2. Key Features
- Role-Based Access Control (Admin, Provider, User) with policy-driven authorization and middleware enforcement.
- Secure, atomic balance transfers with idempotency keys and ledger-backed audit trails.
- Invoice generation with server-side tax computations, PDF export, and queued processing.
- Real-time CRUD and notifications for critical resources (users, posts, doctors, appointments) using events/queues and WebSocket updates.
- Sandbox payment gateway integration and webhook simulation for safe E2E testing.

## 3. Tech Stack Architecture
| Layer | Technologies |
|---|---|
| Frontend | Laravel Blade, Tailwind CSS, Alpine.js, Vite |
| Backend | Laravel 11, PHP 8.x, Eloquent ORM, Laravel Sanctum/Passport, Queues (Redis) |
| Database | MySQL (InnoDB), Migrations & Seeders, Foreign Keys, Indexes |
| Tools & Dev | Composer, NPM, PHPUnit, PHPStan/PSalm, Git, Docker (optional), Laragon |

## 4. Database Design (ERD — concise)
Primary entities and relationships (textual ERD):

- `users` (id) —< `transactions` (id, from_user_id, to_user_id, amount, currency, status, idempotency_key)
- `transactions` —< `ledger_entries` (id, transaction_id, user_id, amount, type: debit|credit)
- `users` —< `invoices` (id, user_id) —< `invoice_items` (id, invoice_id, description, qty, unit_price, tax)
- `posts` (user_id) —< `comments` (post_id, user_id)
- Polymorphic `media` (photos/videos) via `mediaable_type`/`mediaable_id`

Design notes:
- Use row-level locks (`SELECT ... FOR UPDATE`) for balance updates and create paired ledger entries for each transfer to guarantee a complete audit trail.
- Add indexes on `user_id`, `status`, and `created_at` for high-traffic queries. Use `ON DELETE CASCADE` for dependent records where appropriate.

## 5. Installation & Setup Guide
Prerequisites: PHP 8.x, Composer, Node.js (>=16), MySQL, redis (optional), and optionally Laragon or Docker.

1. Clone the repository

```bash
git clone <repo-url>
cd <repo-folder>
```

2. Install PHP dependencies

```bash
composer install --no-interaction --prefer-dist
```

3. Install JS dependencies and build assets

```bash
npm install
npm run dev
```

4. Environment configuration

```bash
cp .env.example .env
# Edit .env: APP_NAME, APP_URL, DB_*, MAIL_*, QUEUE_CONNECTION, REDIS_* as required
```

5. Application key, database migrations and seeders

```bash
php artisan key:generate
# create the database or import DB/medicure.sql for sample data
php artisan migrate --seed
```

Optional: import provided SQL sample data

```bash
mysql -u [user] -p [database_name] < DB/medicure.sql
```

6. Run local server

```bash
php artisan serve --host=127.0.0.1 --port=8000
# or use Laragon / Docker compose if preferred
```

7. Run tests

```bash
./vendor/bin/phpunit
# or
php artisan test
```

## 6. API Endpoints or Core Logic
Below are two critical endpoints and the production-grade logic behind them.

1) POST /api/v1/transfer
- Purpose: securely transfer funds between users with exactly-once semantics.
- Request example:

```json
{
  "from_user_id": 123,
  "to_user_id": 456,
  "amount": 2500.00,
  "currency": "USD",
  "idempotency_key": "uuid-or-client-key"
}
```

- Implementation highlights:
  - Start a DB transaction and lock the relevant user balance rows with `lockForUpdate()`.
  - Validate balance, apply debit/credit, and create a `transactions` record (pending→success).
  - Create two `ledger_entries` (debit and credit) for full auditability.
  - Persist `idempotency_key` to prevent duplicates.
  - Dispatch notification jobs and emit real-time events after commit.

2) POST /api/v1/invoices
- Purpose: create an invoice and generate a PDF asynchronously.
- Implementation highlights:
  - Validate invoice lines and compute totals/taxes on the server.
  - Persist invoice and items in a transaction.
  - Push `GenerateInvoicePdf` to a queue; worker generates PDF, stores it (local S3/minio or filesystem) and updates invoice with file reference.

## 7. Challenges Faced & Key Learnings
- Concurrency and race conditions during concurrent transfers: resolved by using database transactions with row-level locks and idempotency keys, plus integration tests that simulate concurrent requests.
- Long-running tasks (PDFs, emails): offloaded to queues with retry policies, idempotent job handlers, and visibility timeouts to avoid duplicate processing.
- API security and validation: enforced via Form Requests, centralized exception handling, and token-based auth (Sanctum/Passport) for robust client integrations.

---

## Technical Highlights (Job Preparation)

এই প্রকল্পে আমি নিম্নলিখিত টেকনিক্যাল বিষয়গুলোতে কাজ করেছি — যা চাকরির ইন্টারভিউ এবং প্রকল্প-পোর্টফোলিওতে প্রদর্শনের জন্য উপযোগী:

- Laravel অ্যাপ্লিকেশন আর্কিটেকচার: Controllers, Service/Repository patterns, Service Providers এবং middleware ব্যবহারে অভিজ্ঞতা.
- RESTful API ডিজাইন ও Authentication (Sanctum / Passport) সহ token-based সিকিউরিটি ও API versioning ধারণা।
- Role-Based Access Control (RBAC), Policies ও Gates দিয়ে সূক্ষ্ম অনুমোদন কনট্রোল।
- ডাটাবেস ডিজাইন ও অপটিমাইজেশন: migrations, Eloquent relationships, indexing, এবং Referential integrity (foreign keys)।
- কনকারেন্সি কন্ট্রোল ও ট্রানজ্যাকশনাল লজিক: `lockForUpdate()` ব্যবহার করে ব্যালেন্স-আপডেট, idempotency keys এবং ledger-backed audit trail তৈরির অভিজ্ঞতা।
- Queues ও ব্যাকগ্রাউন্ড জব (Redis / Laravel Queues): PDF জেনারেশন, ইমেইল ও নোটিফিকেশন, retry এবং failure handling।
- টেস্টিং: PHPUnit ফিচার ও ইউনিট টেস্ট, কনকারেন্ট রিকোয়েস্ট সিমুলেশন করে ইন্টেগ্রেশন টেস্টিং।
- Frontend কাজ: Blade টেমপ্লেট, Tailwind CSS, Alpine.js ও Vite দিয়ে দ্রুত UI প্রোটোটাইপিং ও ছোট reactive কম্পোনেন্ট।
- Dev tooling ও গুণগততা: Composer, NPM, Docker (optional), CI/CD বেসিক, এবং স্ট্যাটিক বিশ্লেষণ (PHPStan / Psalm)।
- সিকিউরিটি ও পারফরম্যান্স: ফর্ম ভ্যালিডেশন, রেট লিমিটিং, ক্যাশিং, কোয়েরি অপ্টিমাইজেশন ও নিরাপদ কনফিগ হ্যান্ডলিং।
- Observability ও অপারেশনাল টুলিং: structured logging, centralized exception handling, queue monitoring ও retry metrics।

---

If you want, I can now:
- Replace placeholders (`[MediCure]`, tech stack, and core goal) with your exact project details and commit the file.
- Add a short, recruiter-friendly summary and a set of badges (build, license, php version) to the top of the README.

File updated: [README.md](README.md)

