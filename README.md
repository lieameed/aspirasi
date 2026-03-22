# projek web aspirasi ide siswa :fire: 
---

# Instalation guide (for noobs)
Clone this repository:
```bash
git clone https://github.com/lieameed/aspirasi.git
```

enter the project directory, the one that you've cloned
```bash
cd aspirasi
```

open your terminal, dont forget to connect to tailwind
```bash
npm run dev
```
---

# Installing The Database

- Go To PhpMyAdmin
- Next, Create Database named "aspi"

```bash
aspi
```

- then, grab the sql that is in this file(aspi.sql), and import the sql file
- Now you're ready to use the website
---
# Project Structure

Our Project Structure
```bash
ProjectRoot/
├── app/                        # Main application backend logic (MVC)
│   ├── config/                 # Global configuration settings
│   ├── controllers/            # Logic that handles requests (Connects Models & Views)
│   ├── core/                   # Core classes (Router, App, Controller base)
│   ├── db-connection/          # Database connection logic
│   │   └── db-connection.php   # Database PDO/MySQLi instance
│   ├── models/                 # Database interaction and data logic
│   ├── resources/              # Source assets
│   │   └── css/                # Tailwind input source (input.css)
│   └── views/                  # Frontend templates (HTML/PHP pages)
│
├── public/                     # Web Root (Publicly accessible files)
│   ├── assets/                 # Static assets
│   │   ├── fonts/              # Custom fonts (e.g., Italiana-Regular.ttf)
│   │   └── images/             # Image assets (e.g., karbit gerfa.png)
│   ├── css/                    # Compiled Stylesheets
│   │   └── output.css          # Final Tailwind CSS (Used in views)
│   ├── js/                     # Client-side scripts
│   ├── php/                    # Public entry scripts (Actual pages)
│   │   ├── homepage.php        # Main Landing Page
│   │   ├── ide.php             # Ideas Page
│   │   ├── detailide.php       # Detailed Ideas Page
│   │   ├── login.php           # Login Page
│   │   └── signup.php          # Registration Page
│   ├── sql/                    # Database migrations and exports
│   └── index.php               # Application entry point
│
├── node_modules/               # NPM dependencies (Tailwind, etc.)
├── .gitignore                  # Files to exclude from Git
├── package.json                # NPM project metadata and scripts
└── README.md                   # Project documentation
```

---

# coding languages that will be used :globe_with_meridians: :fire: :cold_face:
<p align="left">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript" />
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
  <img src="https://img.shields.io/badge/React-20232a?style=for-the-badge&logo=react&logoColor=61DAFB" alt="React" />
</p>

---

# Contributing
we absolutely welcome people that want to help and contribute to making this website a better place, wether its about fixing bugs, enhancing the UI/UX, or expanding the comunity functionability.

How You Can Contribute To The Web :grin: :point_down: :
- Fork This Repositories
  
- Create a New Branch For Your New Features/Bug Fixes
  
- Commit The Changes With a Descriptive Message
  
- Push To Your Branch And Open a Pull Request.
  
- Wait For Review and Feedback Before You're Going to Merge The Branch

Contribution Guidelines

- Write Clean and Maintainable Code.

- Document Your Features and Changes Clearly.

- Be Respectful and Collaborative in Discussions.

---

# License

This project is licensed under the MIT License.
You are free to use, modify, and redistribute it with proper credit.

---

# Group Members
- Lionel Cristian / XI TKJ 2
- Felixius Kevin Candra / XI TKJ 2
- Marvin Alfredo / XI TKJ 2
- Venan Sebastian Budianto / XI TKJ 2
