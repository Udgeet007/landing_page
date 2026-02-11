<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'FlowSync - Modern Productivity Platform'; ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <a href="/" class="logo">
                    <span class="logo-icon">◈</span>
                    <span class="logo-text">FlowSync</span>
                </a>
                
                <div class="nav-links">
                    <a href="/" class="nav-link <?php echo ($currentPage ?? '') == 'home' ? 'active' : ''; ?>">Home</a>
                    <a href="/features" class="nav-link <?php echo ($currentPage ?? '') == 'features' ? 'active' : ''; ?>">Features</a>
                    <a href="/pricing" class="nav-link <?php echo ($currentPage ?? '') == 'pricing' ? 'active' : ''; ?>">Pricing</a>
                    <a href="/dashboard" class="nav-link <?php echo ($currentPage ?? '') == 'dashboard' ? 'active' : ''; ?>">Dashboard</a>
                    <a href="/contact" class="nav-link <?php echo ($currentPage ?? '') == 'contact' ? 'active' : ''; ?>">Contact</a>
                </div>

                <div class="nav-actions">
                    <a href="#" class="btn-secondary">Sign In</a>
                    <a href="/contact" class="btn-primary">Get Started</a>
                </div>

                <button class="mobile-menu-toggle" aria-label="Toggle menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <div class="mobile-menu">
        <div class="mobile-menu-links">
            <a href="/" class="mobile-link">Home</a>
            <a href="/features" class="mobile-link">Features</a>
            <a href="/pricing" class="mobile-link">Pricing</a>
            <a href="/dashboard" class="mobile-link">Dashboard</a>
            <a href="/contact" class="mobile-link">Contact</a>
            <a href="#" class="mobile-link">Sign In</a>
        </div>
    </div>