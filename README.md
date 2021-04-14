<h1>Installation</h1>
<p>1. Rename or copy .env.example file to .env </p>
<p>2. Set your Mailtrap credentials in your .env file. Specifically MAIL_USERNAME and MAIL_PASSWORD <a href = "https://mailtrap.io/">Mailtrap</a></p>
<p>3. if you use MySQL in .env file : set DB_CONNECTION, set DB_DATABASE, set DB_USERNAME, set DB_PASSWORD </p>
<p>4. composer update </p>
<p>5. Generating a New Application Key</p><p>php artisan key:generate</p>
<p>6. php artisan serve </p>
<p>7. Visit localhost:8000 in your browser </p>
