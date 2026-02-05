<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendataan Pelatihan</title>
    <style>
        :root {
            /* Harminous Color Palette (Blue & Emerald Theme) */
            --primary: #3b82f6;
            /* Blue-500 */
            --primary-hover: #2563eb;
            /* Blue-600 */
            --secondary: #64748b;
            /* Slate-500 */
            --bg-color: #f8fafc;
            /* Slate-50 */
            --card-bg: #ffffff;
            --text-color: #1e293b;
            /* Slate-800 */
            --text-muted: #94a3b8;
            /* Slate-400 */

            /* Status Colors */
            --danger: #ef4444;
            /* Red-500 */
            --success: #10b981;
            /* Emerald-500 */
            --warning: #f59e0b;
            /* Amber-500 */

            /* Spacing & Layout */
            --border-radius: 12px;
            --container-width: 900px;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .container {
            max-width: var(--container-width);
            margin: 40px auto;
            padding: 0 24px;
        }

        /* Remove Spin Box / Steppers */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
            appearance: textfield;
        }

        /* Navbar Polish */
        .navbar {
            background: #ffffff;
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
            /* Align with container */
            margin-bottom: 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-links {
            display: flex;
            gap: 24px;
        }

        .nav-links a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.2s;
            padding: 8px 0;
            border-bottom: 2px solid transparent;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Improved Card */
        .card {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            padding: 2.5rem;
            margin-bottom: 2rem;
            border: 1px solid #e2e8f0;
        }

        h1,
        h2,
        h3 {
            color: var(--text-color);
            margin-top: 0;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        /* Consistent Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background: var(--primary);
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.2s;
            font-size: 0.95rem;
            gap: 8px;
            /* For icons if added */
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .btn:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            background: var(--success);
        }

        .btn-success:hover {
            background: #059669;
        }

        .btn-danger {
            background: var(--danger);
        }

        .btn-secondary {
            background: white;
            color: var(--secondary);
            border: 1px solid #e2e8f0;
        }

        .btn-secondary:hover {
            background: #f8fafc;
            color: var(--text-color);
        }

        /* Forms */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-color);
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.2s;
            font-family: inherit;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: var(--primary);
        }

        /* Tables */
        .table-responsive {
            overflow-x: auto;
            border-radius: var(--border-radius);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th,
        td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background-color: #f8fafc;
            font-weight: 600;
            color: var(--secondary);
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.05em;
        }

        tr:hover {
            background-color: #f8fafc;
        }

        /* Alerts */
        .alert {
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .alert-danger {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="{{ url('/') }}" class="navbar-brand">
                <span style="font-size: 1.8rem;">📦</span> Sispel
            </a>
            <div class="nav-links">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('trainings.index') }}" class="{{ request()->routeIs('trainings.*') ? 'active' : '' }}">Data Pelatihan</a>
                <a href="{{ route('citizens.index') }}" class="{{ request()->routeIs('citizens.*') ? 'active' : '' }}">Data Warga</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
        <div class="alert" style="background: #d1fae5; color: #065f46; border: 1px solid #a7f3d0;">
            {{ session('success') }}
        </div>
        @endif

        <div class="card">
            @yield('content')
        </div>
    </div>
</body>

</html>