# 📘 Laravel Modular Application Framework my Name App is DEVANTARY

> A comprehensive guide for building scalable SaaS & On-Premise solutions

## 🚀 Overview

This document outlines the architecture, workflow, and core features of our modular Laravel application designed to function as both a SaaS (Software as a Service) platform and an on-premise installation. By leveraging a modular approach, each feature can be independently developed, marketed, and implemented—either as standalone components or as part of an integrated system.

---

## 🏗️ Project Architecture

```
project-root/
├── app/                  # Core application code
├── bootstrap/            # Framework bootstrap files
├── config/               # Configuration files
├── database/             # Database migrations and seeds
├── modules/              # All modular components
│   ├── StockOpname/      # Stock verification module
│   ├── Gudang/           # Warehouse management module
│   ├── AssetTracking/    # Asset tracking module
│   └── .../              # Additional modules
├── public/               # Publicly accessible files
├── resources/            # Views and frontend assets
├── routes/               # Application routes
│   └── web.php           # Main web routes
├── storage/              # Application storage
├── tests/                # Test suite
├── composer.json         # PHP dependencies
└── .env                  # Environment configuration
```

---

## ⚙️ Core Dependencies

* **Laravel 11** — Latest stable framework version
* **[nwidart/laravel-modules](https://github.com/nWidart/laravel-modules)** — Modular architecture support
* **[laravel/breeze](https://laravel.com/docs/11.x/starter-kits#breeze-and-inertia)** — Lightweight authentication

### Installation Commands

```bash
# Install the modular package
composer require nwidart/laravel-modules

# Install authentication scaffolding
composer require laravel/breeze --dev
php artisan breeze:install

# Build frontend assets
npm install && npm run dev
```

---

## 📦 Module Structure

Each module follows a standardized, self-contained structure:

```
modules/ModuleName/
├── Config/               # Module-specific configuration
├── Console/              # Console commands
├── Database/             # Migrations and seeders
├── Http/                 # HTTP layer
│   ├── Controllers/      # Request handlers
│   ├── Middleware/       # HTTP middleware
├── Models/               # Database models
├── Providers/            # Service providers
├── Resources/            # Views and assets
│   └── views/            # Module-specific views
├── Routes/               # Module routes
│   └── web.php           # Web routes
└── module.json           # Module metadata
```

### Module Routing Example

```php
// modules/StockOpname/Routes/web.php
use Illuminate\Support\Facades\Route;
use Modules\StockOpname\Http\Controllers\StockOpnameController;

Route::middleware(['web', 'auth'])->prefix('stock-opname')->group(function () {
    Route::get('/', [StockOpnameController::class, 'index']);
    Route::post('/create', [StockOpnameController::class, 'store']);
    Route::get('/{id}', [StockOpnameController::class, 'show']);
    // Additional routes...
});
```

### Module Controller Example

```php
// modules/StockOpname/Http/Controllers/StockOpnameController.php
namespace Modules\StockOpname\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\StockOpname\Models\StockOpname;

class StockOpnameController extends Controller
{
    public function index()
    {
        $records = StockOpname::latest()->paginate(15);
        return view('stockopname::index', compact('records'));
    }
    
    public function store(Request $request)
    {
        // Validation and storage logic
    }
    
    public function show($id)
    {
        $record = StockOpname::findOrFail($id);
        return view('stockopname::show', compact('record'));
    }
}
```

---

## 🔐 Authentication System

* **Framework**: Laravel Breeze
* **Default Features**: Login, registration, password reset, email verification
* **Extensibility**: Supports multi-role architecture (Owner, Staff, Admin)
* **Integration**: Seamlessly connects with module-level permissions

---

## 🧩 Core Modules

| Module | Description | Key Features |
|--------|-------------|-------------|
| **Stock Opname** | Physical inventory verification and reconciliation | Barcode scanning, variance reporting, approval workflows |
| **Gudang** (Warehouse) | Comprehensive warehouse management | Inventory tracking, goods receipt/issue, multi-location support |
| **Asset Tracking** | Fixed asset lifecycle management | QR/barcode integration, location history, maintenance scheduling |

### Additional Module Opportunities

* **Inventory Management** — Advanced stock control with forecasting
* **Inter-Warehouse Transfer** — Streamlined stock movement between locations
* **QR Asset Management** — Enhanced asset tracking with QR technology
* **Reporting & Analytics** — Business intelligence dashboards
* **User Management** — Role-based access control

---

## 🔄 Modular Workflow

1. **Authentication** — User logs in via Laravel Breeze
2. **Module Access** — System determines available modules based on subscription/permissions
3. **Module Loading** — Active modules are loaded from `/modules` with their respective routes
4. **Independent Operation** — Each module functions autonomously within the unified application
5. **Cross-Module Integration** — Optional data sharing between modules via service interfaces

---

## 💡 Modular Architecture Benefits

* **SaaS-Ready**: Subscription-based access to individual modules
* **On-Premise Flexibility**: Modules can be extracted for standalone deployment
* **Development Efficiency**: Focused feature development without affecting other components
* **Scalability**: Easy addition of new modules as business requirements evolve
* **Maintenance Simplicity**: Isolated updates and bug fixes

---

## 🛠️ Development Best Practices

* **Module Isolation** — Store all module-specific code within `/modules/{ModuleName}/`
* **Service Providers** — Register each module via its dedicated service provider
* **Database Management** — Use module-specific migrations and seeders
* **Permission Structure** — Implement granular permissions per module
* **Testing** — Create dedicated test suites for each module
* **Documentation** — Maintain comprehensive documentation for each module

---

## 📊 Deployment Strategies

### SaaS Deployment

* Host on cloud infrastructure with multi-tenancy support
* Implement subscription management for module access
* Utilize database isolation for enterprise clients

### On-Premise Deployment

* Package selected modules for client-specific installation
* Provide deployment scripts for easy setup
* Implement license management for module activation

---

## 📊 Database Schema

### Core Database Tables

```sql
-- Core Authentication & User Management
CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE roles (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    description TEXT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE role_user (
    role_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    PRIMARY KEY (role_id, user_id),
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE permissions (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    description TEXT NULL,
    module VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE permission_role (
    permission_id BIGINT UNSIGNED NOT NULL,
    role_id BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    PRIMARY KEY (permission_id, role_id),
    FOREIGN KEY (permission_id) REFERENCES permissions(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
);

-- Multi-tenancy Support
CREATE TABLE tenants (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    domain VARCHAR(255) NULL UNIQUE,
    database VARCHAR(255) NULL,
    status ENUM('active', 'inactive', 'suspended') DEFAULT 'active',
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE tenant_user (
    tenant_id BIGINT UNSIGNED NOT NULL,
    user_id BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    PRIMARY KEY (tenant_id, user_id),
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Module Management
CREATE TABLE modules (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    description TEXT NULL,
    version VARCHAR(50) NULL,
    is_core BOOLEAN DEFAULT FALSE,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE tenant_module (
    tenant_id BIGINT UNSIGNED NOT NULL,
    module_id BIGINT UNSIGNED NOT NULL,
    expires_at TIMESTAMP NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    PRIMARY KEY (tenant_id, module_id),
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (module_id) REFERENCES modules(id) ON DELETE CASCADE
);
```

### Module-Specific Tables

#### Stock Opname Module

```sql
CREATE TABLE warehouses (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    code VARCHAR(50) NOT NULL,
    address TEXT NULL,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE
);

CREATE TABLE items (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    sku VARCHAR(100) NOT NULL,
    barcode VARCHAR(100) NULL,
    category_id BIGINT UNSIGNED NULL,
    unit VARCHAR(50) NOT NULL,
    description TEXT NULL,
    min_stock DECIMAL(15, 2) DEFAULT 0,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    UNIQUE (tenant_id, sku)
);

CREATE TABLE item_categories (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    parent_id BIGINT UNSIGNED NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (parent_id) REFERENCES item_categories(id) ON DELETE SET NULL
);

CREATE TABLE stock_opnames (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    warehouse_id BIGINT UNSIGNED NOT NULL,
    code VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    status ENUM('draft', 'in_progress', 'completed', 'cancelled') DEFAULT 'draft',
    notes TEXT NULL,
    created_by BIGINT UNSIGNED NOT NULL,
    approved_by BIGINT UNSIGNED NULL,
    approved_at TIMESTAMP NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (warehouse_id) REFERENCES warehouses(id) ON DELETE CASCADE,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (approved_by) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE stock_opname_items (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    stock_opname_id BIGINT UNSIGNED NOT NULL,
    item_id BIGINT UNSIGNED NOT NULL,
    system_qty DECIMAL(15, 2) NOT NULL DEFAULT 0,
    actual_qty DECIMAL(15, 2) NULL,
    difference DECIMAL(15, 2) NULL,
    notes TEXT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (stock_opname_id) REFERENCES stock_opnames(id) ON DELETE CASCADE,
    FOREIGN KEY (item_id) REFERENCES items(id) ON DELETE CASCADE
);
```

#### Warehouse (Gudang) Module

```sql
CREATE TABLE inventory_transactions (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    warehouse_id BIGINT UNSIGNED NOT NULL,
    transaction_type ENUM('in', 'out', 'transfer', 'adjustment') NOT NULL,
    reference_number VARCHAR(100) NOT NULL,
    reference_type VARCHAR(100) NULL,
    reference_id BIGINT UNSIGNED NULL,
    date DATETIME NOT NULL,
    notes TEXT NULL,
    created_by BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (warehouse_id) REFERENCES warehouses(id) ON DELETE CASCADE,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE inventory_transaction_items (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    inventory_transaction_id BIGINT UNSIGNED NOT NULL,
    item_id BIGINT UNSIGNED NOT NULL,
    quantity DECIMAL(15, 2) NOT NULL,
    unit_cost DECIMAL(15, 2) NULL,
    notes TEXT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (inventory_transaction_id) REFERENCES inventory_transactions(id) ON DELETE CASCADE,
    FOREIGN KEY (item_id) REFERENCES items(id) ON DELETE CASCADE
);

CREATE TABLE warehouse_transfers (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    source_warehouse_id BIGINT UNSIGNED NOT NULL,
    destination_warehouse_id BIGINT UNSIGNED NOT NULL,
    reference_number VARCHAR(100) NOT NULL,
    date DATETIME NOT NULL,
    status ENUM('draft', 'in_transit', 'completed', 'cancelled') DEFAULT 'draft',
    notes TEXT NULL,
    created_by BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (source_warehouse_id) REFERENCES warehouses(id) ON DELETE CASCADE,
    FOREIGN KEY (destination_warehouse_id) REFERENCES warehouses(id) ON DELETE CASCADE,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE warehouse_transfer_items (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    warehouse_transfer_id BIGINT UNSIGNED NOT NULL,
    item_id BIGINT UNSIGNED NOT NULL,
    quantity DECIMAL(15, 2) NOT NULL,
    notes TEXT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (warehouse_transfer_id) REFERENCES warehouse_transfers(id) ON DELETE CASCADE,
    FOREIGN KEY (item_id) REFERENCES items(id) ON DELETE CASCADE
);

CREATE TABLE inventory_levels (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    warehouse_id BIGINT UNSIGNED NOT NULL,
    item_id BIGINT UNSIGNED NOT NULL,
    quantity DECIMAL(15, 2) NOT NULL DEFAULT 0,
    last_updated TIMESTAMP NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (warehouse_id) REFERENCES warehouses(id) ON DELETE CASCADE,
    FOREIGN KEY (item_id) REFERENCES items(id) ON DELETE CASCADE,
    UNIQUE (warehouse_id, item_id)
);
```

#### Asset Tracking Module

```sql
CREATE TABLE assets (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    asset_code VARCHAR(100) NOT NULL,
    qr_code VARCHAR(255) NULL,
    category_id BIGINT UNSIGNED NULL,
    purchase_date DATE NULL,
    purchase_cost DECIMAL(15, 2) NULL,
    warranty_expiry DATE NULL,
    location_id BIGINT UNSIGNED NULL,
    status ENUM('available', 'in_use', 'in_repair', 'disposed') DEFAULT 'available',
    assigned_to BIGINT UNSIGNED NULL,
    notes TEXT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (assigned_to) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE asset_categories (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    parent_id BIGINT UNSIGNED NULL,
    depreciation_rate DECIMAL(5, 2) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (parent_id) REFERENCES asset_categories(id) ON DELETE SET NULL
);

CREATE TABLE locations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    address TEXT NULL,
    parent_id BIGINT UNSIGNED NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (parent_id) REFERENCES locations(id) ON DELETE SET NULL
);

CREATE TABLE asset_movements (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    asset_id BIGINT UNSIGNED NOT NULL,
    from_location_id BIGINT UNSIGNED NULL,
    to_location_id BIGINT UNSIGNED NULL,
    from_user_id BIGINT UNSIGNED NULL,
    to_user_id BIGINT UNSIGNED NULL,
    movement_date DATETIME NOT NULL,
    reason TEXT NULL,
    created_by BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (asset_id) REFERENCES assets(id) ON DELETE CASCADE,
    FOREIGN KEY (from_location_id) REFERENCES locations(id) ON DELETE SET NULL,
    FOREIGN KEY (to_location_id) REFERENCES locations(id) ON DELETE SET NULL,
    FOREIGN KEY (from_user_id) REFERENCES users(id) ON DELETE SET NULL,
    FOREIGN KEY (to_user_id) REFERENCES users(id) ON DELETE SET NULL,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE asset_maintenances (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenant_id BIGINT UNSIGNED NOT NULL,
    asset_id BIGINT UNSIGNED NOT NULL,
    maintenance_type ENUM('preventive', 'corrective', 'predictive') NOT NULL,
    title VARCHAR(255) NOT NULL,
    start_date DATETIME NOT NULL,
    end_date DATETIME NULL,
    cost DECIMAL(15, 2) NULL,
    status ENUM('scheduled', 'in_progress', 'completed', 'cancelled') DEFAULT 'scheduled',
    notes TEXT NULL,
    created_by BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (tenant_id) REFERENCES tenants(id) ON DELETE CASCADE,
    FOREIGN KEY (asset_id) REFERENCES assets(id) ON DELETE CASCADE,
    FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE CASCADE
);
```

---

## 📁 Optimal Folder Structure

```
devantary/
├── app/                                # Core application code
│   ├── Console/                        # Console commands
│   ├── Exceptions/                     # Exception handlers
│   ├── Http/                           # HTTP layer
│   │   ├── Controllers/                # Core controllers
│   │   │   ├── Auth/                   # Authentication controllers
│   │   │   └── Admin/                  # Admin controllers
│   │   ├── Middleware/                 # HTTP middleware
│   │   └── Requests/                   # Form requests
│   ├── Models/                         # Core models
│   │   ├── Tenant.php                  # Tenant model
│   │   ├── User.php                    # User model
│   │   ├── Role.php                    # Role model
│   │   └── Permission.php             # Permission model
│   ├── Providers/                      # Service providers
│   │   ├── AppServiceProvider.php      # Main service provider
│   │   ├── ModuleServiceProvider.php   # Module service provider
│   │   └── TenantServiceProvider.php   # Tenant service provider
│   ├── Services/                       # Business logic services
│   │   ├── ModuleManager.php           # Module management
│   │   └── TenantManager.php           # Tenant management
│   └── Traits/                         # Reusable traits
│       ├── HasPermissions.php          # Permission handling
│       └── HasTenants.php              # Tenant handling
├── bootstrap/                          # Framework bootstrap
├── config/                             # Configuration files
│   ├── modules.php                     # Module configuration
│   └── tenancy.php                     # Tenancy configuration
├── database/                           # Database migrations and seeds
│   ├── migrations/                     # Core migrations
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2023_01_01_000001_create_roles_table.php
│   │   ├── 2023_01_01_000002_create_permissions_table.php
│   │   ├── 2023_01_01_000003_create_tenants_table.php
│   │   └── 2023_01_01_000004_create_modules_table.php
│   └── seeders/                        # Database seeders
├── modules/                            # All modular components
│   ├── StockOpname/                    # Stock verification module
│   │   ├── Config/                     # Module configuration
│   │   ├── Console/                    # Module commands
│   │   ├── Database/                   # Module migrations/seeds
│   │   │   ├── Migrations/            # Module-specific migrations
│   │   │   └── Seeders/               # Module-specific seeders
│   │   ├── Http/                       # HTTP layer
│   │   │   ├── Controllers/           # Module controllers
│   │   │   ├── Middleware/            # Module middleware
│   │   │   └── Requests/              # Module form requests
│   │   ├── Models/                     # Module models
│   │   │   ├── StockOpname.php        # Stock opname model
│   │   │   └── StockOpnameItem.php    # Stock opname item model
│   │   ├── Providers/                  # Module service providers
│   │   │   └── StockOpnameServiceProvider.php
│   │   ├── Resources/                  # Module resources
│   │   │   ├── assets/                # Module JS/CSS
│   │   │   └── views/                 # Module views
│   │   ├── Routes/                     # Module routes
│   │   │   ├── api.php                # Module API routes
│   │   │   └── web.php                # Module web routes
│   │   ├── Services/                   # Module services
│   │   │   └── StockOpnameService.php # Business logic
│   │   └── module.json                 # Module metadata
│   ├── Gudang/                         # Warehouse management module
│   │   ├── [Similar structure as StockOpname]
│   └── AssetTracking/                  # Asset tracking module
│       ├── [Similar structure as StockOpname]
├── public/                             # Publicly accessible files
│   ├── modules/                        # Module-specific public assets
│   │   ├── stockopname/               # Stock opname public assets
│   │   ├── gudang/                    # Warehouse public assets
│   │   └── assettracking/             # Asset tracking public assets
├── resources/                          # Views and frontend assets
│   ├── js/                             # JavaScript files
│   │   ├── app.js                     # Main JS entry point
│   │   └── components/                # Shared components
│   ├── css/                            # CSS files
│   └── views/                          # Core views
│       ├── layouts/                    # Layout templates
│       ├── auth/                       # Authentication views
│       ├── admin/                      # Admin panel views
│       └── dashboard/                  # Dashboard views
├── routes/                             # Application routes
│   ├── api.php                         # Core API routes
│   ├── web.php                         # Core web routes
│   └── tenant.php                      # Tenant-specific routes
├── storage/                            # Application storage
├── tests/                              # Test suite
│   ├── Feature/                        # Feature tests
│   │   └── Modules/                    # Module-specific tests
│   └── Unit/                           # Unit tests
│       └── Modules/                    # Module-specific tests
├── vendor/                             # Composer dependencies
├── .env                                # Environment configuration
├── .env.example                        # Environment example
├── artisan                             # Artisan CLI
├── composer.json                       # PHP dependencies
├── package.json                        # Node.js dependencies
├── phpunit.xml                         # PHPUnit configuration
├── README.md                           # Project documentation
├── tailwind.config.js                  # Tailwind CSS configuration
└── vite.config.js                      # Vite configuration
```

---

## 🔍 Conclusion

This modular approach offers exceptional flexibility for both SaaS business models and clients requiring local installations. The architecture enables developers to efficiently create, maintain, and monetize features while providing clients with tailored solutions that precisely meet their needs.

With the comprehensive database schema and optimal folder structure outlined above, DEVANTARY provides a solid foundation for building a scalable, maintainable, and feature-rich application that can adapt to various business requirements.

---

> This document serves as a foundational guide for development teams building and managing modular Laravel applications. It should be regularly updated as the architecture evolves.