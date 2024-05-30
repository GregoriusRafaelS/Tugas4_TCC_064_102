const express = require('express');
const dotenv = require('dotenv');

dotenv.config();

const requiredEnvVars = ['DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DB_HOST', 'PORT', 'JWT_SECRET'];
requiredEnvVars.forEach((varName) => {
  if (!process.env[varName]) {
    console.error(`Error: Missing required environment variable ${varName}`);
    process.exit(1); // Exit if any required environment variable is missing
  }
});

const app = express();
app.use(express.json());
 
app.use('/api/auth', require('./routes/auth'));
// app.get('/', (req, res) => {
//   res.send('Hello this is App 1, Enjoy ur day');
// });

// const port = process.env.PORT || 8080;

// sequelize.authenticate()
//   .then(() => {
//     console.log('Database connection has been established successfully.');
//     return sequelize.sync(); // Ensure models are synchronized
//   })
//   .then(() => {
//     app.listen(port, () => {
//       console.log(`Server running on port ${port}`);
//     });
//   })
//   .catch((err) => {
//     console.error('Unable to connect to the database:', err);
//   });

const port = process.env.PORT || 8080;
app.listen(port, () => {
  console.log(`App1 listening on port ${port}`);
});

//revisi 1

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

//revisi2
// const express = require('express');
// const sequelize = require('./db');
// const dotenv = require('dotenv');

// dotenv.config();

// const requiredEnvVars = ['DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DB_HOST', 'PORT', 'JWT_SECRET'];
// requiredEnvVars.forEach((varName) => {
//   if (!process.env[varName]) {
//     console.error(`Error: Missing required environment variable ${varName}`);
//     process.exit(1); // Exit if any required environment variable is missing
//   }
// });

// const app = express();
// app.use(express.json());

// app.use('/api/auth', require('./routes/auth')); // Ensure this path is correct and the auth route is defined

// const PORT = process.env.PORT || 8080;

// sequelize.authenticate()
//   .then(() => {
//     console.log('Database connection has been established successfully.');
//     return sequelize.sync(); // Ensure models are synchronized
//   })
//   .then(() => {
//     app.listen(PORT, () => {
//       console.log(`Server running on port ${PORT}`);
//     });
//   })
//   .catch((err) => {
//     console.error('Unable to connect to the database:', err);
//   });
// app.listen(PORT, () => {
//       console.log(`Server running on port ${PORT}`);
//     });
