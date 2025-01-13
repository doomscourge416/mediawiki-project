# Documentation System  

A documentation system built on MediaWiki with role-based access control and cloud deployment using Heroku.  

## Features  
- **Role-Based Access Control**  
  - **Administrator**: Can manage users, edit/create materials, and create sections/subsections.  
  - **Editor**: Can add and edit materials within existing sections.  
  - **Reader**: Can view materials but has no access to admin features.  
- **User Authentication**  
  - Default role for new users: Editor.  
- **Content Management**  
  - Main page displays sections and materials.  
  - Includes buttons for authentication and registration.  
- **Cloud Deployment**  
  - Hosted on Heroku for easy access and scalability.  

## Tech Stack  
- **Platform**: MediaWiki  
- **Database**: MySQL / PostgreSQL  
- **Deployment**: Heroku  
- **Dependencies**: Composer  

## Setup  

### Prerequisites  
- PHP (>=7.4 recommended)  
- Composer  
- MySQL or PostgreSQL  
- Heroku CLI  

### Installation  
1. Clone the repository:  
   ```bash
   git clone https://github.com/your-username/documentation-system.git
   cd documentation-system
   
2. Install dependencies via Composer:

    ```bash
    composer install

3. Configure the database connection:
    Update the .env file with your database credentials.

4. Set up MediaWiki:

    Follow the MediaWiki installation guide.

5. Deploy to Heroku:
    ```bash
    heroku create
    git push heroku main

### Running Locally

Start a local server:
    ```bash
    php -S localhost:8000
    
Open http://localhost:8000 in your browser.

### Contribution

Contributions are welcome! Feel free to open an issue or submit a pull request.

### License

This project is licensed under the MIT License. See the LICENSE file for details.

### Contact

For any questions or suggestions, feel free to reach out via GitHub issues.
