# Webreath
<p>a web application to display the measurements detected by the iot modules in real time </p>
<ul>
    <li> Clone the repository with git clone </li>
    <h1> For the server-side :  </h1>
    <li> change the current working directory to server-side floder </li>
    <li> Create your database and edit database credentials in the file .env (DB_DATABASE , DB_USERNAME & DB_PASSWORD) </li>
    <li> Run composer install</li>
    <li> Run php artisan migrate --seed (this will seed your database with some random modules will be created) </li>
    <li> Run php artisan serve </li>
    <hr>
    <h1> For the client-side :  </h1>
    <li> change the current working directory to Front-end floder </li>
    <li> Run npm install </li>
    <li> Run npm run dev (Now your front-server will be running on port 3000 ) </li>
    <li>you can access your application using : http://localhost:3000/</li>
    <hr>
   <h1> For generating data :  </h1>
    <li> open the folder generateData and open GenerateData.html </li>
    <li> leave GenerateData.html open in your browser, it will insert data every 30sec </li>

</ul>


