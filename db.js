const mysql = require('mysql2');

// const connection = mysql.createConnection({
//   host: process.env.DB_HOST,
//   user: process.env.DB_USER,
//   password: process.env.DB_PASSWORD,
//   database: process.env.DB_NAME
// });
const connection = mysql.createConnection({
  host: '34.170.235.0',
  user: 'tcc',
  password: 'tccprojectmantap',
  database: 'tcc'
});

connection.connect((err) => {
  if (err) {
    console.error('Error connecting to MySQL:', err.stack);
    return;
  }
  console.log('Connected to MySQL as ID', connection.threadId);
});

module.exports = connection;