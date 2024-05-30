const express = require('express');
const app = express();

app.get('/', (req, res) => {
  res.send('Hello this is App 1, Enjoy ur day');
});

const port = process.env.PORT || 8080;
app.listen(port, () => {
  console.log(`App1 listening on port ${port}`);
});

// const express = require('express');
// const sequelize = require('./db');
// const dotenv = require('dotenv');

// dotenv.config();
// console.log(process.env.DB_NAME);

// const app = express();
// app.use(express.json());

// app.use('/api/auth', require('./routes/auth'));

// const PORT = process.env.PORT || 8080;

// sequelize.sync().then(() => {
//   console.log(process.env.DB_PASSWORD);
//   app.listen(PORT, () => {
//     console.log(`Server running on port ${PORT}`);
//   });
// }).catch(err => {
//   console.error('Unable to connect to the database:', err);
// });