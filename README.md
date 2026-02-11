# landing_page
# FlowSync - Modern Landing Page Project

A complete, responsive landing page website built with PHP, HTML, CSS, and JavaScript featuring a modern design with distinctive aesthetics.

## 📁 Project Structure

```
php-landing-project/
├── index.php              # Landing page
├── features.php           # Product features page
├── pricing.php            # Pricing plans page
├── dashboard.php          # User dashboard UI (static)
├── contact.php            # Contact/lead capture page
├── process-contact.php    # Form processing (to be implemented)
├── css/
│   └── style.css         # Main stylesheet
├── js/
│   └── script.js         # Interactive features
├── images/               # Image assets folder (empty)
└── includes/
    ├── header.php        # Reusable header component
    └── footer.php        # Reusable footer component
```

## 🚀 Quick Start

### Method 1: PHP Built-in Server (Recommended for Development)

1. **Navigate to project folder:**
   ```bash
   cd php-landing-project
   ```

2. **Start PHP server:**
   ```bash
   php -S localhost:8000
   ```

3. **Open browser:**
   Visit `http://localhost:8000`

### Method 2: XAMPP/WAMP/MAMP

1. **Copy project to htdocs:**
   - XAMPP: `C:/xampp/htdocs/php-landing-project`
   - WAMP: `C:/wamp64/www/php-landing-project`
   - MAMP: `/Applications/MAMP/htdocs/php-landing-project`

2. **Start Apache** from XAMPP/WAMP/MAMP control panel

3. **Open browser:**
   Visit `http://localhost/php-landing-project`

## 📄 Pages Overview

### 1. **Landing Page** (`index.php`)
- Hero section with animated gradient orbs
- Feature preview cards
- Social proof section
- Statistics display
- Call-to-action sections

### 2. **Features Page** (`features.php`)
- Detailed feature showcases with visuals
- Feature list with icons
- Additional features grid
- Multiple CTA sections

### 3. **Pricing Page** (`pricing.php`)
- Three pricing tiers (Starter/Professional/Enterprise)
- Monthly/Yearly billing toggle
- Feature comparison table
- FAQ section

### 4. **Dashboard UI** (`dashboard.php`)
- Static frontend-only dashboard
- Sidebar with workspaces and projects
- Task board with kanban columns
- Drag-and-drop task cards
- Statistics cards
- Activity feed

### 5. **Contact Page** (`contact.php`)
- Comprehensive contact form
- Contact information cards
- Quick answers FAQ
- Form validation

## 🎨 Design Features

- **Modern Typography:** Syne (headings) + DM Sans (body)
- **Color Palette:** Bold gradient-based with purple primary (#6366f1)
- **Animations:** Smooth fade-ins, hover effects, floating orbs
- **Responsive:** Mobile-first design, works on all screen sizes
- **Interactive:** Drag-drop dashboard, mobile menu, form validation

## 🛠 Customization

### Changing Colors

Edit CSS variables in `css/style.css`:

```css
:root {
    --color-primary: #6366f1;
    --color-secondary: #ec4899;
    --color-accent: #14b8a6;
    /* ... more variables */
}
```

### Adding Images

1. Add images to the `images/` folder
2. Reference in HTML: `<img src="images/your-image.jpg" alt="Description">`
3. Replace placeholder visuals in features page

### Customizing Content

- **Company name:** Search for "FlowSync" and replace
- **Navigation:** Edit `includes/header.php`
- **Footer links:** Edit `includes/footer.php`
- **Page titles:** Modify `$pageTitle` variable in each page

## 📧 Contact Form Setup

To make the contact form functional, implement `process-contact.php`:

```php
<?php
// Example implementation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    
    // Send email or save to database
    // mail($to, $subject, $message, $headers);
    
    // Redirect back with success message
    header('Location: contact.php?success=1');
    exit;
}
?>
```

## 🔧 Adding Database Integration

For production use, you'll want to:

1. **Create database:**
   ```sql
   CREATE DATABASE flowsync;
   CREATE TABLE contacts (
       id INT AUTO_INCREMENT PRIMARY KEY,
       first_name VARCHAR(100),
       last_name VARCHAR(100),
       email VARCHAR(255),
       company VARCHAR(255),
       phone VARCHAR(50),
       interest VARCHAR(100),
       team_size VARCHAR(50),
       message TEXT,
       newsletter BOOLEAN,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

2. **Add database connection:**
   Create `includes/db.php`:
   ```php
   <?php
   $host = 'localhost';
   $dbname = 'flowsync';
   $username = 'root';
   $password = '';
   
   try {
       $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch(PDOException $e) {
       die("Connection failed: " . $e->getMessage());
   }
   ?>
   ```

## 🌐 Deployment

### For Production:

1. **Update links:**
   - Change all `href` and `src` paths to absolute or root-relative
   - Update form action URLs

2. **Enable HTTPS:**
   - Get SSL certificate
   - Update all URLs to use `https://`

3. **Optimize assets:**
   - Minify CSS and JavaScript
   - Compress images
   - Enable caching

4. **Security:**
   - Add CSRF protection to forms
   - Implement rate limiting
   - Sanitize all user inputs
   - Use prepared statements for database

## 📱 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🎯 Features Checklist

- [x] Responsive navigation with mobile menu
- [x] Landing page with hero section
- [x] Features showcase page
- [x] Pricing page with billing toggle
- [x] Dashboard UI (static)
- [x] Contact form with validation
- [x] Smooth animations
- [x] Modern design aesthetics
- [ ] Form email/database integration (to be implemented)
- [ ] User authentication (future enhancement)
- [ ] API integration (future enhancement)

## 📞 Support

For questions or issues:
- Email: hello@flowsync.com
- Documentation: See inline comments in code

## 📝 License

This is a demonstration project. Customize freely for your needs.

---

**Built with:** PHP 8.x, HTML5, CSS3, Vanilla JavaScript
**Fonts:** Google Fonts (Syne, DM Sans)
**Design Philosophy:** Modern, bold, distinctive aesthetics avoiding generic AI patterns