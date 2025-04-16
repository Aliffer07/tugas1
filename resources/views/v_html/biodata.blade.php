<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Biography</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

        :root {
            --primary: #2e86de;
            --secondary: #f1f1f1;
            --text: #333;
            --background: #fff;
            --border: #ddd;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--secondary);
            color: var(--text);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: var(--background);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .profile-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .profile-header img {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--primary);
            margin-bottom: 20px;
        }

        .profile-header h1 {
            margin: 10px 0;
            font-size: 2rem;
            color: var(--primary);
        }

        .section {
            margin-top: 40px;
        }

        .section h2 {
            color: var(--primary);
            border-left: 4px solid var(--primary);
            padding-left: 10px;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .info-list {
            list-style: none;
            padding: 0;
        }

        .info-list li {
            margin-bottom: 10px;
        }

        .info-list strong {
            display: inline-block;
            width: 150px;
        }

        .edu-timeline {
            border-left: 3px solid var(--primary);
            padding-left: 20px;
        }

        .edu-item {
            margin-bottom: 25px;
        }

        .edu-item h3 {
            margin: 0;
            color: var(--primary);
        }

        .contact-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .contact-card {
            flex: 1;
            min-width: 250px;
            background-color: var(--secondary);
            padding: 15px;
            border-radius: 10px;
            border: 1px solid var(--border);
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .contact-card h3 {
            margin-bottom: 8px;
            color: var(--primary);
        }

        footer {
            text-align: center;
            margin-top: 60px;
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="profile-header">
            <img src="foto.jpg" alt="Student Photo">
            <h1>Alif Fadhlurrohman</h1>
            <p>University Bina Sarana Informatika</p>
        </div>

        <div class="section">
            <h2>Personal Information</h2>
            <ul class="info-list">
                <li><strong>Full Name:</strong> Alif Fadhlurrohman</li>
                <li><strong>Date of Birth:</strong> 23 Juli 2001</li>
                <li><strong>Gender:</strong> Male</li>
                <li><strong>About Me:</strong> I am a student who has the intention to learn knowledge to become a person with more experience.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Academic Background</h2>
            <div class="edu-timeline">
                <div class="edu-item">
                    <h3>Education </h3>
                    <p>Senior Hgh School SMA-I Al-Munir</p>
                </div>
                <div class="edu-item">
                    <h3>Faculty</h3>
                    <p>Informatics Engineering</p>
                </div>
                <div class="edu-item">
                    <h3>Study Program</h3>
                    <p>Information Technology</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Contact Information</h2>
            <div class="contact-grid">
                <div class="contact-card">
                    <h3>Email</h3>
                    <p>aliffadhlurrohman20@gmail.com</p>
                </div>
                <div class="contact-card">
                    <h3>Phone</h3>
                    <p>089697362482</p>
                </div>
                <div class="contact-card">
                    <h3>Instagram</h3>
                    <p>@aliffadhlurrohman</p>
                </div>
            </div>
        </div>

        <footer>
            &copy; <span id="year"></span> Student Biography - All Rights Reserved
        </footer>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>
