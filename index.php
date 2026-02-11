<?php 
$pageTitle = "FlowSync - Streamline Your Workflow";
$currentPage = "home";
include 'includes/header.php'; 
?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
            <div class="gradient-orb orb-3"></div>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="badge-dot"></span>
                    Now in Public Beta
                </div>
                
                <h1 class="hero-title">
                    Workflow That
                    <span class="gradient-text">Flows</span>
                </h1>
                
                <p class="hero-description">
                    Stop juggling tools. FlowSync unifies your team's work in one intelligent platform. 
                    Plan, collaborate, and ship faster than ever before.
                </p>
                
                <div class="hero-actions">
                    <a href="contact.php" class="btn-primary btn-large">
                        Start Free Trial
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                    <a href="features.php" class="btn-secondary btn-large">
                        Explore Features
                    </a>
                </div>
                
                <div class="hero-stats">
                    <div class="stat">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Active Teams</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">4.9/5</div>
                        <div class="stat-label">User Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Preview -->
    <section class="features-preview">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Why FlowSync</span>
                <h2 class="section-title">Everything you need, nothing you don't</h2>
            </div>
            
            <div class="features-grid">
                <div class="feature-card card-1">
                    <div class="feature-icon">⚡</div>
                    <h3>Lightning Fast</h3>
                    <p>Built for speed. Navigate, search, and execute tasks in milliseconds.</p>
                </div>
                
                <div class="feature-card card-2">
                    <div class="feature-icon">🎯</div>
                    <h3>Smart Automation</h3>
                    <p>AI-powered workflows that learn and adapt to your team's patterns.</p>
                </div>
                
                <div class="feature-card card-3">
                    <div class="feature-icon">🔒</div>
                    <h3>Enterprise Security</h3>
                    <p>Bank-level encryption with SOC 2 Type II and GDPR compliance.</p>
                </div>
                
                <div class="feature-card card-4">
                    <div class="feature-icon">📊</div>
                    <h3>Real-time Analytics</h3>
                    <p>Track progress, measure impact, and make data-driven decisions.</p>
                </div>
            </div>
            
            <div class="cta-center">
                <a href="features.php" class="btn-link">
                    See All Features
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="social-proof">
        <div class="container">
            <p class="proof-text">Trusted by teams at</p>
            <div class="company-logos">
                <div class="company-logo">TechCorp</div>
                <div class="company-logo">InnovateLabs</div>
                <div class="company-logo">DesignStudio</div>
                <div class="company-logo">StartupHub</div>
                <div class="company-logo">CloudSystems</div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <div class="cta-content">
                    <h2>Ready to transform your workflow?</h2>
                    <p>Join thousands of teams already working smarter with FlowSync.</p>
                    <div class="cta-actions">
                        <a href="contact.php" class="btn-primary btn-large">Start Free Trial</a>
                        <a href="pricing.php" class="btn-outline btn-large">View Pricing</a>
                    </div>
                </div>
                <div class="cta-decoration">
                    <div class="decoration-circle"></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>