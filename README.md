# 🔑 Animated Login & Registration Form (Modern UI)

## ✨ Project Overview

This repository contains a sleek, modern, and fully animated **Login and Registration Form** designed for a web application. The project focuses heavily on creating a visually appealing and engaging user experience using advanced CSS animations and transitions.

The structure includes separate views for both logging in and signing up, managed within a single HTML file using class toggling (likely handled by the external `scriot.js` file).

***

## 💡 Key Features

* **Dual Authentication:** Includes dedicated forms for user **Login** and **Sign Up**.
* **Dynamic UI Animations:** Utilizes custom CSS variables (`--i`, `--j` in the HTML) to control complex entry and switch animations for form elements and background spans, creating a professional, staggered effect.
* **Interactive Title:** Features a small JavaScript function to change the browser tab title to **"Come back :("** when the window loses focus, re-engaging the user.
* **Input Validation:** Forms include the `required` attribute for ensuring data integrity before submission.
* **Responsive Design:** Includes the necessary viewport meta tag (`width=devuce-width, initial-scale=1.0`) for responsiveness across devices.

***

## ⚙️ Technology Stack

The project is built using standard web technologies with a focus on modern front-end design:

| Component | Role | Details |
| :--- | :--- | :--- |
| **HTML5** | Structure | Semantic markup for forms and containers. |
| **CSS3** | Styling & Animation | Utilizes the linked `style23.css` for all visual design and complex keyframe animations. |
| **JavaScript** | Interactivity | Manages the dynamic window title feature and likely handles the switching logic between the Login and Sign Up forms (via `scriot.js`). |
| **Boxicons** | Iconography | Used for professional input field icons (`<i class='bx bxs-user'></i>`). |
| **Backend Interface**| Data Handling | Forms are configured to submit data to backend scripts (`actionlogin.php` and `actionregister.php`). |

***

## 🛠️ Installation and Setup

To run this project locally, you only need a modern web browser.

### Prerequisites

* A modern web browser (Chrome, Firefox, Edge, Safari)
* The required CSS file (`style23.css`) and JavaScript file (`scriot.js`) must be present in the same directory as `index23.html`.

### Running Locally

1.  **Clone the Repository:**
    ```bash
    git clone [Your-Repository-URL]
    ```

2.  **Open the File:**
    * Navigate to the project folder.
    * Simply double-click **`index23.html`** to open the form in your default web browser.

***

## 🌐 Backend Integration

This front-end interface is designed to work with a server-side language. Note the form configurations:

* **Login Form:** Sends data to `actionlogin.php` using the `POST` method.
* **Sign Up Form:** Sends data to `actionregister.php` using the `POST` method.

To make the forms fully functional, you must implement the respective PHP scripts (or equivalent backend logic) to handle user data validation, hashing, and database interaction.

***

## 🤝 Contribution

Feel free to suggest improvements, add new features (like form validation in JS), or fix bugs!

1.  Fork the repository.
2.  Create your feature branch (`git checkout -b feature/new-validation`).
3.  Commit your changes.
4.  Open a Pull Request.

***

## ⚖️ License

This project is licensed under the **MIT License**.
