<h1>PHP CRUD Application</h1>

<h2>Description</h2>
<p>This PHP-based CRUD project serves as a foundational web application, allowing users to Create, Read, Update, and Delete records within a database. Designed for simplicity and functionality, it provides an essential introduction to database-driven web development, offering users a seamless interface to manage data efficiently.</p>
<br />

<h2>Languages and Utilities Used</h2>
<ul>
  <li><b>PHP</b></li>
  <li><b>SQL</b></li>
  <li><b>HTML</b></li>
</ul>

<h2>Environments Used</h2>
<ul>
  <li><b>XAAMP</b></li>
  <li><b>Visual Studio Code</b></li>
</ul>

<h2>Program Walk-through:</h2>

<h3>1. Database Connection:</h3>
<p>Establish a connection to a MySQL database using the <code>mysqli</code> extension in PHP. Provide server details (hostname, username, password) and select a database for the connection.</p>

<h3>2. Create (Insert) Operation:</h3>
<p>Create an HTML form to collect user input for creating new records (e.g., name and email). On form submission, retrieve the input data using <code>$_POST</code>. Construct an SQL query to insert the data into the database. Execute the query and handle success or failure messages.</p>

<h3>3. Read Operation:</h3>
<p>Query the database to retrieve existing records (e.g., all users). Use a loop to iterate through the result set and display the records. Provide a mechanism to view the data, such as displaying it on a webpage.</p>

<h3>4. Update Operation:</h3>
<p>Create an HTML form to collect updated data for a specific record (e.g., new name and email). On form submission, retrieve the updated data using <code>$_POST</code>. Construct an SQL query to update the corresponding record in the database. Execute the query and handle success or failure messages.</p>

<h3>5. Delete Operation:</h3>
<p>Create a mechanism (e.g., a button or link) to initiate record deletion. On deletion request, retrieve the record ID using <code>$_POST</code> or <code>$_GET</code>. Construct an SQL query to delete the specified record from the database. Execute the query and handle success or failure messages.</p>
