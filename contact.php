<?php 
$pageTitle = "Contact Us - FlowSync";
$currentPage = "contact";
include 'includes/header.php'; 
?>

<main>
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="page-hero-content">
                <span class="section-tag">Get in Touch</span>
                <h1 class="page-title">Let's start something great together</h1>
                <p class="page-description">
                    Have questions? Want to see a demo? Our team is here to help you get started.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-container">
                    <h2>Send us a message</h2>
                    <p class="form-subtitle">Fill out the form below and we'll get back to you within 24 hours.</p>
                    
                    <form class="contact-form" id="contactForm" method="POST" action="process-contact.php">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required placeholder="John">
                            </div>

                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required placeholder="Doe">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="john@company.com">
                        </div>

                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company" placeholder="Your Company">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000">
                        </div>

                        <div class="form-group">
                            <label for="interest">I'm interested in *</label>
                            <select id="interest" name="interest" required>
                                <option value="">Select an option</option>
                                <option value="trial">Starting a free trial</option>
                                <option value="demo">Scheduling a demo</option>
                                <option value="enterprise">Enterprise plan</option>
                                <option value="support">Technical support</option>
                                <option value="partnership">Partnership opportunities</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="teamSize">Team Size</label>
                            <select id="teamSize" name="teamSize">
                                <option value="">Select team size</option>
                                <option value="1-5">1-5 people</option>
                                <option value="6-20">6-20 people</option>
                                <option value="21-50">21-50 people</option>
                                <option value="51-200">51-200 people</option>
                                <option value="200+">200+ people</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required rows="5" placeholder="Tell us about your project or how we can help..."></textarea>
                        </div>

                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="newsletter" id="newsletter">
                                <span class="checkbox-custom"></span>
                                <span class="checkbox-text">Send me updates about FlowSync features and news</span>
                            </label>
                        </div>

                        <button type="submit" class="btn-primary btn-large submit-btn">
                            Send Message
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.5 2.5L8.75 11.25M17.5 2.5L11.875 17.5L8.75 11.25M17.5 2.5L2.5 8.125L8.75 11.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>

                        <p class="form-note">* Required fields</p>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info">
                    <div class="info-card">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M3 8L10.89 13.26C11.2187 13.4793 11.6049 13.5963 12 13.5963C12.3951 13.5963 12.7813 13.4793 13.11 13.26L21 8M5 19H19C19.5304 19 20.0391 18.7893 20.4142 18.4142C20.7893 18.0391 21 17.5304 21 17V7C21 6.46957 20.7893 5.96086 20.4142 5.58579C20.0391 5.21071 19.5304 5 19 5H5C4.46957 5 3.96086 5.21071 3.58579 5.58579C3.21071 5.96086 3 6.46957 3 7V17C3 17.5304 3.21071 18.0391 3.58579 18.4142C3.96086 18.7893 4.46957 19 5 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Email Us</h3>
                        <p>Our team is here to help</p>
                        <a href="mailto:hello@flowsync.com" class="info-link">hello@flowsync.com</a>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M3 5C3 3.89543 3.89543 3 5 3H8.27924C8.70967 3 9.09181 3.27543 9.22792 3.68377L10.7257 8.17721C10.8831 8.64932 10.6694 9.16531 10.2243 9.38787L7.96701 10.5165C9.06925 12.9612 11.0388 14.9308 13.4835 16.033L14.6121 13.7757C14.8347 13.3306 15.3507 13.1169 15.8228 13.2743L20.3162 14.7721C20.7246 14.9082 21 15.2903 21 15.7208V19C21 20.1046 20.1046 21 19 21H18C9.71573 21 3 14.2843 3 6V5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Call Us</h3>
                        <p>Mon-Fri from 9am to 6pm PST</p>
                        <a href="tel:+1555000000" class="info-link">+1 (555) 000-0000</a>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M17.6569 16.6569C16.7202 17.5935 14.7616 19.5521 13.4138 20.8999C12.6327 21.681 11.3677 21.6814 10.5866 20.9003C9.26234 19.576 7.34159 17.6553 6.34315 16.6569C3.21895 13.5327 3.21895 8.46734 6.34315 5.34315C9.46734 2.21895 14.5327 2.21895 17.6569 5.34315C20.781 8.46734 20.781 13.5327 17.6569 16.6569Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 11C15 12.6569 13.6569 14 12 14C10.3431 14 9 12.6569 9 11C9 9.34315 10.3431 8 12 8C13.6569 8 15 9.34315 15 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Visit Us</h3>
                        <p>Come say hello at our office</p>
                        <address class="info-address">
                            123 Innovation Drive<br>
                            San Francisco, CA 94105<br>
                            United States
                        </address>
                    </div>

                    <div class="info-card">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M8 12H8.01M12 12H12.01M16 12H16.01M21 12C21 16.4183 16.9706 20 12 20C10.4607 20 9.01172 19.6565 7.74467 19.0511L3 20L4.39499 16.28C3.51156 15.0423 3 13.5743 3 12C3 7.58172 7.02944 4 12 4C16.9706 4 21 7.58172 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Live Chat</h3>
                        <p>Chat with our support team</p>
                        <button class="info-link btn-link">Start a conversation</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-preview">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Quick Answers</h2>
                <p class="section-subtitle">Find answers to common questions</p>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <h3>How quickly will I hear back?</h3>
                    <p>We respond to all inquiries within 24 hours during business days. For urgent matters, please call us directly.</p>
                </div>

                <div class="faq-item">
                    <h3>Do you offer product demos?</h3>
                    <p>Yes! We'd love to show you FlowSync in action. Select "Schedule a demo" in the form above, and we'll set up a personalized walkthrough.</p>
                </div>

                <div class="faq-item">
                    <h3>Can I start a free trial?</h3>
                    <p>Absolutely! You can start a 14-day free trial of our Professional plan right away. No credit card required.</p>
                </div>

                <div class="faq-item">
                    <h3>What support options are available?</h3>
                    <p>We offer email support for all plans, priority support for Professional users, and dedicated 24/7 phone support for Enterprise customers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                <div class="cta-content">
                    <h2>Prefer to get started on your own?</h2>
                    <p>Start your free trial today and see FlowSync in action.</p>
                    <div class="cta-actions">
                        <a href="pricing.php" class="btn-primary btn-large">Start Free Trial</a>
                        <a href="features.php" class="btn-outline btn-large">Explore Features</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>