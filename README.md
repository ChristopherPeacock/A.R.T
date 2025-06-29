# A.R.T.

**All-in-one Resource Toolkit**

*The art of building startups fast and in once place.*

---

## What is A.R.T.?

A.R.T. is a Laravel-based tech stack designed to centralize all your startup resources — users, CRM, Communication, Collaboration — into one modular, flexible platform. Open Source so only cloud costs are your out goings

Forget juggling multiple tools like notion, wordpress and getting locked into one vendor’s ecosystem. With A.R.T., you get full control, scalability, and the freedom to grow your startup your way with the best possible tools buit by a enterpreneur for enterpreneurs . 

---

## Why Choose A.R.T.?

- **All-in-One:** Manage your CRM, Collaboration, and more — from a single platform.  
- **Modular:** Build and extend only what you need, when you need it.
- **Vendor Lock-in Free:** Open and flexible architecture keeps you in control.  
- **Modern UI:** Tailwind CSS and Vue.js power a smooth, responsive interface.  
- **Dark Mode:** Easy on the eyes for those long startup nights.  


---

## Features

- User and team management with flexible relationships  
- Responsive UI with dark mode  
- Secure authentication and permissions  
- Designed for rapid startup scaling and pivots

---

## Up Coming Features,

- Automated AI CRM system that builds custom emails for your next email campain
- no Code web page builder


## Getting Started

1. Clone the repo:  
   ```bash
   git clone https://github.com/christopherpeacock/A.R.T.git
   cd A.R.T

2. Install composer: 
    ```bash
    php composer install

3. Npm Install:
    ```bash
    npm install

4. Setup: 
    Copy and past from .env.example into your own .env file.

    php artisan key:generate

    Then uncomment and fill in these parts of the .env file
    You must give 2 Admin credetials at the very moment. 
    Team name is your start up project / company name

    ```text
    #TEAM_NAME=

    #ADMIN1USERNAME=
    #ADMIN1USEREMAIL=
    #ADMIN1PASSWORD=

    #ADMIN2USERNAME=
    #ADMIN2USEREMAIL=
    #ADMIN2PASSWORD=

    php artisan migrate --seed

    npm run dev

    php artisan serve

8. Open up the application on http:://127.0.0.1:8000




    

