# Dhool-Erp

DHOOL ERP is a modern Enterprise Resource Planning (ERP) system built for businesses in Somalia and beyond. It provides an integrated platform for managing sales, inventory, accounting, human resources, customer relationships, and business reporting.

Features

- Secure Authentication
- Role & Permission Management
- Multi-Company Support
- Multi-Branch Support
- Dashboard & Analytics
- Inventory Management
- Point of Sale (POS)
- Sales & Purchases
- Customer & Supplier Management
- Double Entry Accounting
- Expense Management
- Human Resources & Payroll
- Reports & Analytics
- PDF Invoice Printing
- Excel Export
- Audit Logs
- Notifications
- REST API
- Somali & English Languages
- Mobile Responsive Design

Technology Stack

Backend

- Laravel 12
- PHP 8.3+
- MySQL
- Laravel Sanctum
- Spatie Permission

Frontend

- React
- Tailwind CSS
- Vite
- React Router
- Axios
- TanStack Query

Project Structure

Dhool-Erp/
├── backend/
├── frontend/
├── docs/
├── .github/
├── README.md
└── LICENSE

Installation

Backend

cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

Frontend

cd frontend
npm install
npm run dev

Roadmap

Phase 1

- Authentication
- Dashboard
- Roles & Permissions

Phase 2

- Inventory
- Products
- Warehouses

Phase 3

- POS
- Sales
- Purchases

Phase 4

- Accounting

Phase 5

- Human Resources

Phase 6

- Reports
- Deployment
- Documentation

License

This project is licensed under the MIT License.

Author

Omarion Media

Project Status

🚧 Under Active Development
