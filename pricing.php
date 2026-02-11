<?php 
$pageTitle = "Pricing - FlowSync";
$currentPage = "pricing";
include 'includes/header.php'; 
?>

<main>
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-tag">Pricing</span>
                <h1 class="page-title">Simple, transparent pricing</h1>
                <p class="page-description">
                    Choose the plan that's right for your team. Start free, upgrade as you grow.
                </p>
            </div>
        </div>
    </section>

    <!-- Pricing Toggle -->
    <section class="pricing-section">
        <div class="container">
            <div class="billing-toggle">
                <span class="toggle-label">Monthly</span>
                <label class="switch">
                    <input type="checkbox" id="billingToggle">
                    <span class="slider"></span>
                </label>
                <span class="toggle-label">
                    Yearly 
                    <span class="discount-badge">Save 20%</span>
                </span>
            </div>

            <!-- Pricing Cards -->
            <div class="pricing-grid">
                <!-- Free Plan -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="plan-name">Starter</h3>
                        <p class="plan-description">Perfect for trying out FlowSync</p>
                        <div class="price-container">
                            <span class="currency">$</span>
                            <span class="price monthly-price">0</span>
                            <span class="price yearly-price" style="display: none;">0</span>
                            <span class="period">/month</span>
                        </div>
                        <p class="price-note">Forever free</p>
                    </div>

                    <div class="pricing-features">
                        <h4>What's included:</h4>
                        <ul>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Up to 5 team members
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                10 projects
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Basic task management
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                1 GB storage
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Community support
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php" class="btn-outline btn-large">Get Started</a>
                </div>

                <!-- Pro Plan -->
                <div class="pricing-card featured">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3 class="plan-name">Professional</h3>
                        <p class="plan-description">For growing teams</p>
                        <div class="price-container">
                            <span class="currency">$</span>
                            <span class="price monthly-price">12</span>
                            <span class="price yearly-price" style="display: none;">10</span>
                            <span class="period">/user/month</span>
                        </div>
                        <p class="price-note yearly-note" style="display: none;">Billed annually at $120/user</p>
                        <p class="price-note monthly-note">Billed monthly</p>
                    </div>

                    <div class="pricing-features">
                        <h4>Everything in Starter, plus:</h4>
                        <ul>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Unlimited team members
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Unlimited projects
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Advanced automation
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                100 GB storage
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Priority support
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Custom fields & views
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php" class="btn-primary btn-large">Start Free Trial</a>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3 class="plan-name">Enterprise</h3>
                        <p class="plan-description">For large organizations</p>
                        <div class="price-container">
                            <span class="price custom-price">Custom</span>
                        </div>
                        <p class="price-note">Contact us for pricing</p>
                    </div>

                    <div class="pricing-features">
                        <h4>Everything in Pro, plus:</h4>
                        <ul>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Unlimited storage
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Advanced security (SSO, 2FA)
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Dedicated account manager
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Custom integrations
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                24/7 phone support
                            </li>
                            <li>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M16.666 5L7.49935 14.1667L3.33268 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                SLA guarantee
                            </li>
                        </ul>
                    </div>

                    <a href="contact.php" class="btn-outline btn-large">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="comparison-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Compare plans</h2>
                <p class="section-subtitle">See all features side by side</p>
            </div>

            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Starter</th>
                            <th>Professional</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Team Members</strong></td>
                            <td>Up to 5</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td><strong>Projects</strong></td>
                            <td>10</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td><strong>Storage</strong></td>
                            <td>1 GB</td>
                            <td>100 GB</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td><strong>Task Management</strong></td>
                            <td>✓</td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td><strong>Automation</strong></td>
                            <td>—</td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td><strong>Custom Fields</strong></td>
                            <td>—</td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td><strong>Advanced Analytics</strong></td>
                            <td>—</td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td><strong>API Access</strong></td>
                            <td>—</td>
                            <td>✓</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td><strong>SSO & 2FA</strong></td>
                            <td>—</td>
                            <td>—</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td><strong>Dedicated Support</strong></td>
                            <td>—</td>
                            <td>—</td>
                            <td>✓</td>
                        </tr>
                        <tr>
                            <td><strong>SLA</strong></td>
                            <td>—</td>
                            <td>—</td>
                            <td>99.9%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently asked questions</h2>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <h3>Can I change plans later?</h3>
                    <p>Yes! You can upgrade or downgrade your plan at any time. Changes take effect immediately and we'll prorate your billing.</p>
                </div>

                <div class="faq-item">
                    <h3>Is there a free trial?</h3>
                    <p>Yes, Professional and Enterprise plans come with a 14-day free trial. No credit card required to start.</p>
                </div>

                <div class="faq-item">
                    <h3>What payment methods do you accept?</h3>
                    <p>We accept all major credit cards, PayPal, and bank transfers for Enterprise customers.</p>
                </div>

                <div class="faq-item">
                    <h3>Can I cancel anytime?</h3>
                    <p>Absolutely. You can cancel your subscription at any time. You'll retain access until the end of your billing period.</p>
                </div>

                <div class="faq-item">
                    <h3>Do you offer discounts for nonprofits?</h3>
                    <p>Yes! We offer special pricing for nonprofits and educational institutions. Contact our sales team for details.</p>
                </div>

                <div class="faq-item">
                    <h3>What's included in support?</h3>
                    <p>All plans include email support. Professional gets priority support, and Enterprise gets 24/7 phone support with a dedicated account manager.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <div class="cta-content">
                    <h2>Still have questions?</h2>
                    <p>Our team is here to help you find the perfect plan for your needs.</p>
                    <div class="cta-actions">
                        <a href="contact.php" class="btn-primary btn-large">Contact Sales</a>
                        <a href="features.php" class="btn-outline btn-large">Explore Features</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>