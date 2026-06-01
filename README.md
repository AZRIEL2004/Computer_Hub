# Computer Hub - E-Commerce Platform

A comprehensive e-commerce platform for buying and selling computer hardware and accessories.

## Features

- **User Panel**: Browse products, place orders, manage profile, and track complaints
- **Admin Panel**: Manage products, categories, orders, payments, users, and feedback
- **Reporting Module**: Generate detailed sales and user reports
- **Shopping Cart**: Add to cart and checkout functionality
- **Order Management**: Track orders and payment status
- **User Authentication**: Secure login and registration system
- **Feedback System**: Customer feedback and complaint management

## Tech Stack

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript, jQuery
- **Server**: Apache (XAMPP)
- **Framework**: Bootstrap 4
- **Email**: PHPMailer

## Project Structure

```
sdp2/
├── userpan/          # Customer/User Portal
├── adminpan/         # Admin Dashboard
├── sdp2reports/      # Reporting Module
└── demo.html         # Demo page
```

## Installation

### Requirements
- XAMPP (Apache, PHP, MySQL)
- Composer (for dependencies)

### Setup

1. **Clone the Repository**
   ```bash
   git clone https://github.com/AZRIEL2004/Computer_Hub.git
   cd Computer_Hub
   ```

2. **Start XAMPP**
   - Open XAMPP Control Panel
   - Start Apache and MySQL servers

3. **Install Dependencies**
   ```bash
   composer install
   ```

4. **Configure Database**
   - Update database credentials in configuration files
   - Import database schema if provided

5. **Access the Application**
   - User Panel: `http://localhost/sdp2/userpan/`
   - Admin Panel: `http://localhost/sdp2/adminpan/`
   - Reports: `http://localhost/sdp2/sdp2reports/`

## Modules

### User Panel (`/userpan/`)
- Product browsing and search
- Shopping cart and checkout
- Order management
- User profile management
- Complaint submission
- Feedback and contact forms

### Admin Panel (`/adminpan/`)
- Product management
- Category and brand management
- User management
- Order and payment tracking
- Complaint and feedback review
- Stock management

### Reports Module (`/sdp2reports/`)
- Product reports
- User activity reports
- Sales analytics
- Feedback reports

## Author
**AZRIEL2004**

## License
MIT License

## Support
For issues or questions, please open an issue in the repository.
