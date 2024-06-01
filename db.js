// const { Sequelize } = require('sequelize');

// console.log(process.env.DB_NAME);

// const sequelize = new Sequelize(process.env.DB_NAME, process.env.DB_USER, process.env.DB_PASSWORD, {
//   host: process.env.DB_HOST,
//   dialect: 'mysql',
//   logging: console.log,
// });

// module.exports = sequelize;

const mysql = require('mysql');

// Konfigurasi koneksi
const connection = mysql.createConnection({
  host: process.env.DB_HOST,
  user: process.env.DB_USER,
  password: process.env.DB_PASSWORD,
  database: process.env.DB_NAME
});

connection.connect((err) => {
  if (err) {
    console.error('Error connecting to MySQL:', err.stack);
    return;
  }
  console.log('Connected to MySQL as ID', connection.threadId);
});

module.exports = connection;

// Membuat koneksi
// function connect() {
//   connection.connect();
// }

// // Menutup koneksi setelah selesai
// function disconnect() {
//   connection.end();
// }

// module.exports = {
//   connection,
//   connect,
//   disconnect
// };
