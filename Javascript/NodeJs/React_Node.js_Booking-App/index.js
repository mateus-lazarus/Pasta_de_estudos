/* eslint-disable linebreak-style */
/* eslint-disable no-useless-catch */
/* eslint-disable import/extensions */
import express from 'express';
import dotenv from 'dotenv';
import mongoose from 'mongoose';
import cookieParser from 'cookie-parser';
import authRoute from './routes/auth.js';
import hotelsRoute from './routes/hotels.js';
import roomsRoute from './routes/rooms.js';
import usersRoute from './routes/users.js';

// initial imports and libs above

// initial configuration equivalent for the Program.cs below

const app = express();
dotenv.config();

const connectDatabase = async () => {
  // starting connection with mongo database

  try {
    await mongoose.connect(process.env.MONGO_CONNECTIONSTRING);
    console.log('Connected database');
  } catch (error) {
    throw error;
  }
};

// keep updating about mongo database situation

mongoose.connection.on('disconnected', () => {
  console.log('MongoDB disconnected');
});

mongoose.connection.on('connected', () => {
  console.log('MongoDB connected');
});

// middlewares

// for cookie persistencie
app.use(cookieParser);
// permit json body
app.use(express.json());

app.use('/api/v1/auth', authRoute);
app.use('/api/v1/rooms', roomsRoute);
app.use('/api/v1/hotels', hotelsRoute);
app.use('/api/v1/users', usersRoute);

app.use((error, req, res) => {
  const errorStatus = error.status || 500;
  const errorMessage = error.message || 'Something went wrong';

  return res.status(errorStatus).json({
    success: false,
    status: errorStatus,
    message: errorMessage,
    stack: error.stack,
  });
});

// starting the server

app.listen(3000, () => {
  connectDatabase();
  console.log('Connected to backend');
});
